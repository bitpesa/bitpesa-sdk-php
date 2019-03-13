# BitPesa\AccountDebitsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountsDebit**](AccountDebitsApi.md#getAccountsDebit) | **GET** /accounts/debits/{Account Debit ID} | Fetching an account debit
[**getAccountsDebits**](AccountDebitsApi.md#getAccountsDebits) | **GET** /accounts/debits | Listing Accounts debits
[**postAccountsDebits**](AccountDebitsApi.md#postAccountsDebits) | **POST** /accounts/debits | Creating an account debit


# **getAccountsDebit**
> \BitPesa\Model\DebitResponse getAccountsDebit($account_debit_id)

Fetching an account debit

Returns a single account debit by the account debit ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

Set the API Key and Secret on the Configuration object for authentication:
```php
BitPesa\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.bitpesa.co/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");

$apiInstance = new BitPesa\Api\AccountDebitsApi();
$account_debit_id = 'account_debit_id_example'; // string | ID of the account debit to get.  Example: `/v1/accounts/debits/9170c890-1a45-46bd-9b79-3deeb8b4ff3d`

try {
    $result = $apiInstance->getAccountsDebit($account_debit_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountDebitsApi#getAccountsDebit";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_debit_id** | [**string**](../Model/.md)| ID of the account debit to get.  Example: &#x60;/v1/accounts/debits/9170c890-1a45-46bd-9b79-3deeb8b4ff3d&#x60; |

### Return type

[**\BitPesa\Model\DebitResponse**](../Model/DebitResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountsDebits**
> \BitPesa\Model\DebitListResponse getAccountsDebits($page, $per)

Listing Accounts debits

Get a list of accounts debits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

Set the API Key and Secret on the Configuration object for authentication:
```php
BitPesa\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.bitpesa.co/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");

$apiInstance = new BitPesa\Api\AccountDebitsApi();
$page = 1; // int | The page number to request (defaults to 1)
$per = 10; // int | The number of results to load per page (defaults to 10)

try {
    $result = $apiInstance->getAccountsDebits($page, $per);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountDebitsApi#getAccountsDebits";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]

### Return type

[**\BitPesa\Model\DebitListResponse**](../Model/DebitListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAccountsDebits**
> \BitPesa\Model\DebitListResponse postAccountsDebits($debit_request_wrapper)

Creating an account debit

Creates a new account debit finding transaction through the internal balance  To successfully fund a transaction - - The currency needs to be the same as the input_currency on the transaction - The amount has to be the same as the input_amount on the transaction - The to_id is the id of the transaction - You need to have enough balance of the appropriate currency inside your wallet  Once the transaction is funded, we will immediately start trying to pay out the recipient(s).  It is also possible to create multiple account debits by supplying an array of debit objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

Set the API Key and Secret on the Configuration object for authentication:
```php
BitPesa\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.bitpesa.co/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");

$apiInstance = new BitPesa\Api\AccountDebitsApi();
$debit_request_wrapper = new \BitPesa\Model\DebitRequestWrapper(); // \BitPesa\Model\DebitRequestWrapper | 

try {
    $result = $apiInstance->postAccountsDebits($debit_request_wrapper);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountDebitsApi#postAccountsDebits";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_request_wrapper** | [**\BitPesa\Model\DebitRequestWrapper**](../Model/DebitRequestWrapper.md)|  |

### Return type

[**\BitPesa\Model\DebitListResponse**](../Model/DebitListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

