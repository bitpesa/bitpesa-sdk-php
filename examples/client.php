<?php

require_once(dirname(__FILE__) . '/vendor/autoload.php');

use BitPesa\Configuration;
use BitPesa\ApiException;
use BitPesa\Api\{ CurrencyInfoApi, AccountValidationApi, TransactionsApi, AccountDebitsApi, WebhooksApi, SendersApi };
use BitPesa\Model\{ AccountValidationRequest, Transaction, TransactionRequest, TransactionResponse, Recipient, Sender };
use BitPesa\Model\{ PayoutMethod, PayoutMethodDetails, PayoutMethodBankAccountTypeEnum, Debit, DebitRequestWrapper };

class Application {

    public function run() {
        Configuration::getDefaultConfiguration()
            ->setHost('https://api-sandbox.bitpesa.co/v1')
            ->setApiKey('<key>')
            ->setApiSecret('<secret>');

        $this->listCurrenciesExample();
        // $this->accountValidationExample();
        // $this->createAndFundTransactionExample();
        // $this->createSenderExample();
        // $this->updateSenderExample();
        // $this->getTransactionErrorMessageExample();
        // $this->webhookParseExample();
    }

    public function listCurrenciesExample() {
        try {
            $cia = new CurrencyInfoApi();
            $currencyInfo = $cia->infoCurrencies();

            $currencyList = $currencyInfo->getObject();
            print_r( array_map( function($currency){ return $currency['code']; }, $currencyList) );
            return $currencyList;
        } catch (Exception $e) {
            echo 'Exception when running listCurrenciesExample: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function accountValidationExample() {
        $request = new AccountValidationRequest();
        $request->setBankAccount('9040009999999');
        $request->setBankCode('190100');
        // $request->setBankCode('020100');
        $request->setCountry(AccountValidationRequest::COUNTRY_GH);
        $request->setCurrency(AccountValidationRequest::CURRENCY_GHS);
        $request->setMethod(AccountValidationRequest::METHOD_BANK);

        try {
            $avi = new AccountValidationApi();
            $accountValidation = $avi->postAccountValidations($request);

            $accountName = $accountValidation->getObject()->getAccountName();
            echo "Account Name: {$accountName}" . PHP_EOL;
            return $accountName;
        } catch (Exception $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                echo "Account Holder Name Error: {$response->getMeta()->getError()}" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function createTransactionExample() {
        $api = new TransactionsApi();
        $transaction = new Transaction();

        $sender = new Sender();
        $sender->setId('6F15F581-889F-4AE1-9591-CB283ADD661F');

        $ngnBankDetails = new PayoutMethodDetails();
        $ngnBankDetails->setBankAccount('123456789');
        $ngnBankDetails->setBankAccountType(PayoutMethodBankAccountTypeEnum::_20);
        $ngnBankDetails->setBankCode('082');
        $ngnBankDetails->setFirstName('First');
        $ngnBankDetails->setLastName('Last');

        $payoutMethod = new PayoutMethod();
        $payoutMethod->setType('NGN::Bank');
        $payoutMethod->setDetails($ngnBankDetails);

        $recipient = new Recipient();
        $recipient->setRequestedAmount(10000);
        $recipient->setRequestedCurrency('NGN');
        $recipient->setPayoutMethod($payoutMethod);

        $transaction->setInputCurrency('GBP');
        $transaction->setSender($sender);
        $transaction->setRecipients([$recipient]);

        try {
            $transactionRequest = new TransactionRequest();
            $transactionRequest->setTransaction($transaction);
            $transactionResponse = $api->postTransactions($transactionRequest);
            $createdTransaction = $transactionResponse->getObject();
            echo "Transaction created! ID: {$createdTransaction->getId()}", PHP_EOL;
            return $createdTransaction->getId();
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function createAndFundTransactionExample() {
        $transactionId = $this->createTransactionExample();

        if (!empty($transactionId)) {
            $debit = new Debit();
            $debit->setCurrency('GBP');
            $debit->setToId($transactionId);
            $debit->setToType("Transaction");

            $debitRequest = new DebitRequestWrapper();
            $debitRequest->setDebit($debit);

            $debitApi = new AccountDebitsApi();
            try {
                $debitListResponse = $debitApi->postAccountsDebits($debitRequest);
                echo "Transaction Funded Successfully" . PHP_EOL;
                print_r($debitListResponse->getObject()[0]);
            } catch (ApiException $e) {
                if ($e->isValidationError()) {
                    $response = $e->getResponseObject();
                    echo "Transaction could not be funded" . PHP_EOL;
                    $validation_errors = $response->getObject()[0]->getErrors();
                    print_r($validation_errors);
                } else {
                    throw $e;
                }
            }
        }
        return $transactionId;
    }

    public function createSenderExample() {
        $sender = new Sender();
        $sender->setCountry('UG');
        $sender->setPhoneCountry('UG');
        $sender->setPhoneNumber('752403639');
        $sender->setEmail('example@home.org');
        $sender->setFirstName('Johnny');
        $sender->setLastName('English');
        $sender->setIp('127.0.0.1');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Office Address');
        $sender->setPostalCode('798983');
        $sender->setBirthDate('1970-12-31');
        $sender->setDocuments([]);

        $sendersApi = new SendersApi();
        $senderRequest = new SenderRequest();
        $senderRequest->setSender($sender);
        try {
            $senderResponse = $sendersApi->postSenders($senderRequest);
            $createdSender = $senderResponse->getObject();
            echo "Sender created! ID: {$createdSender->getId()}", PHP_EOL;
            return $createdSender->getId();
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
                echo "Sender could not be created!" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function updateSenderExample() {
        $senderId = $this->createSenderExample();

        if (!empty($senderId)) {
            $sender = new Sender();
            $sender->setCity('Lagos');

            $sendersApi = new SendersApi();
            $senderRequest = new SenderRequest();
            $senderRequest->setSender($sender);
            try {
                $senderResponse = $sendersApi->patchSender($senderId, $senderRequest);
                $updatedSender = $senderResponse->getObject();
                echo "Sender Updated Successfully!", PHP_EOL;
                print_r($updatedSender);
            } catch (ApiException $e) {
                if ($e->isValidationError()) {
                    $response = $e->getResponseObject();
                    $validation_errors = $response->getObject()->getErrors();
                    print_r($validation_errors);
                    echo "Sender could not be updated!" . PHP_EOL;
                } else {
                    throw $e;
                }
            }
        }
        return $senderId;
    }

    public function getTransactionErrorMessageExample() {
        $transactionId = 'D110B4B3-BC4A-4BAD-9F3B-2F5564949359';
        $transactionsApi = new TransactionsApi();

        $transaction = $transactionsApi->getTransaction($transactionId);
        echo "Recipient's state error message: " . $transaction->getObject()->getRecipients()[0]->getStateReason() . PHP_EOL;
    }

    public function webhookParseExample() {
        $webhook_content = <<<'JSON'
        {
            "webhook": "85d11cf4-d4d6-46e4-ab7d-91355e80392a",
            "event": "transaction.created",
            "object": {
              "input_amount": 21.59,
              "input_currency": "GBP",
              "id": "cd390e83-a9de-404d-a660-4da0f1342c04",
              "metadata": {},
              "state": "approved",
              "payin_reference": "WIHGHZTSPOWN",
              "sender": {
                "id": "6f15f581-889f-4ae1-9591-cb283add661f",
                "type": "person",
                "state": "approved",
                "state_reason": null,
                "country": "GB",
                "street": "Brick Lane",
                "postal_code": "E1 6QL",
                "city": "London",
                "phone_country": "GB",
                "phone_number": "07123456789",
                "email": "me@bitpesa.co",
                "ip": "127.0.0.1",
                "address_description": null,
                "first_name": "Test",
                "middle_name": null,
                "last_name": "User",
                "birth_date": "1990-01-01",
                "occupation": "Tester",
                "nationality": null,
                "metadata": {
                  "bitpesa": {
                    "referer": {}
                  }
                },
                "providers": {
                  "NGN::Bank": "bitpesa_auto"
                },
                "onboarding_status": "completed_first_transaction"
              },
              "payin_methods": [
                {
                  "id": "e78632a8-51de-4b78-892c-31d6c5d0db5c",
                  "type": "GBP::Bank",
                  "out_details": {
                    "style": "info",
                    "BIC": "LHVBEE22",
                    "IBAN": "EE087700771002673049",
                    "Reference": "WIHGHZTSPOWN",
                    "Account Name": "B TRANSFER SERVICES LIMITED",
                    "Bank Address": "Tartu mnt 2, 10145 Tallinn, Estonia.",
                    "Beneficiary Address": "Tax Assist Accountants, 64 Southwark Bridge Road, London SE1 0AS"
                  },
                  "in_details": {},
                  "instructions": {},
                  "provider": "lhv"
                }
              ],
              "paid_amount": 0,
              "due_amount": 21.59,
              "recipients": [
                {
                  "created_at": "2019-03-04T07:41:49.972Z",
                  "editable": true,
                  "id": "4a401c7f-7e38-445f-bb85-7dcad8d22e91",
                  "input_usd_amount": 28.52,
                  "may_cancel": true,
                  "metadata": {},
                  "state": "initial",
                  "transaction_id": "cd390e83-a9de-404d-a660-4da0f1342c04",
                  "transaction_state": "initial",
                  "payout_method": {
                    "id": "b704e560-da50-4ff5-9bd7-b9499dba4b54",
                    "type": "NGN::Bank",
                    "details": {
                      "bank_code": "082",
                      "last_name": "Last",
                      "first_name": "First",
                      "bank_account": "123456789",
                      "bank_account_type": "20"
                    },
                    "metadata": {},
                    "provider": "bitpesa_auto",
                    "fields": {
                      "email": {
                        "type": "input",
                        "validations": {
                          "format": "\\A((\\w+([\\-+.]\\w+)*@[a-zA-Z0-9]+([\\-\\.][a-zA-Z0-9]+)*)*){3,320}\\z"
                        }
                      },
                      "first_name": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "last_name": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "bank_code": {
                        "type": "select",
                        "options": {
                          "214": "FCMB Bank",
                          "215": "Unity Bank",
                          "232": "Sterling bank",
                          "301": "Jaiz Bank",
                          "044": "Access Bank",
                          "063": "Diamond Bank",
                          "050": "EcoBank",
                          "070": "Fidelity Bank",
                          "011": "First Bank of Nigeria",
                          "058": "Guaranty Trust Bank",
                          "030": "Heritage Bank",
                          "082": "Keystone",
                          "076": "Polaris Bank",
                          "039": "Stanbic IBTC Bank",
                          "032": "Union Bank",
                          "033": "United Bank for Africa",
                          "035": "Wema Bank",
                          "057": "Zenith International"
                        },
                        "validations": {
                          "presence": true,
                          "inclusion": {
                            "in": {
                              "214": "FCMB Bank",
                              "215": "Unity Bank",
                              "232": "Sterling bank",
                              "301": "Jaiz Bank",
                              "044": "Access Bank",
                              "063": "Diamond Bank",
                              "050": "EcoBank",
                              "070": "Fidelity Bank",
                              "011": "First Bank of Nigeria",
                              "058": "Guaranty Trust Bank",
                              "030": "Heritage Bank",
                              "082": "Keystone",
                              "076": "Polaris Bank",
                              "039": "Stanbic IBTC Bank",
                              "032": "Union Bank",
                              "033": "United Bank for Africa",
                              "035": "Wema Bank",
                              "057": "Zenith International"
                            }
                          }
                        }
                      },
                      "bank_account": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "bank_account_type": {
                        "type": "select",
                        "options": {
                          "10": "Savings",
                          "20": "Current",
                          "00": "Unknown"
                        }
                      }
                    }
                  },
                  "exchange_rate": 463.177396943029,
                  "fee_fractional": 64,
                  "requested_amount": 10000,
                  "requested_currency": "NGN",
                  "input_amount": 21.59,
                  "input_currency": "GBP",
                  "output_amount": 10000,
                  "output_currency": "NGN"
                }
              ],
              "created_at": "2019-03-04T07:41:49.972Z",
              "expires_at": "2019-03-07T07:41:49.972Z",
              "traits": {}
            }
        }
JSON;
        $webhooksApi = new WebhooksApi();
        $webhook = $webhooksApi->parseResponseString($webhook_content, 'Webhook');

        if (strpos($webhook->getEvent(), 'transaction') === 0) {
            $transactionWebhook = $webhooksApi->parseResponseString($webhook_content, 'TransactionWebhook');
            print_r($transactionWebhook->getObject()->__toString());
        } elseif (strpos($webhook->getEvent(), 'recipient') === 0) {
            $recipientWebhook = $webhooksApi->parseResponseString($webhook_content, 'RecipientWebhook');
            print_r($recipientWebhook->getObject()->__toString());
        } elseif (strpos($webhook->getEvent(), 'payout_method') === 0) {
            $payoutMethodWebhook = $webhooksApi->parseResponseString($webhook_content, 'PayoutMethodWebhook');
            print_r($payoutMethodWebhook->getObject()->__toString());
        } elseif (strpos($webhook->getEvent(), 'sender') === 0) {
            $senderWebhook = $webhooksApi->parseResponseString($webhook_content, 'SenderWebhook');
            print_r($senderWebhook->getObject()->__toString());
        } elseif (strpos($webhook->getEvent(), 'document') === 0) {
            $documentWebhook = $webhooksApi->parseResponseString($webhook_content, 'DocumentWebhook');
            print_r($documentWebhook->getObject()->__toString());
        } else {
            print_r($webhook);
        }
    }

}

$application = new Application();
$application->run();
