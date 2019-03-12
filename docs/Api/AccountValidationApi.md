# BitPesa\AccountValidationApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAccountValidations**](AccountValidationApi.md#postAccountValidations) | **POST** /account_validations | Validates the existence of a bank account


# **postAccountValidations**
> \BitPesa\Model\AccountValidationResponse postAccountValidations($account_validation_request)

Validates the existence of a bank account

Validates the existence of a bank account and returns the associated customer name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AuthorizationKey
$config = BitPesa\Configuration::getDefaultConfiguration()->setApiKey('Authorization-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BitPesa\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization-Key', 'Bearer');

// Configure API key authorization: AuthorizationNonce
$config = BitPesa\Configuration::getDefaultConfiguration()->setApiKey('Authorization-Nonce', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BitPesa\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization-Nonce', 'Bearer');

// Configure API key authorization: AuthorizationSecret
$config = BitPesa\Configuration::getDefaultConfiguration()->setApiKey('Authorization-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BitPesa\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization-Secret', 'Bearer');

// Configure API key authorization: AuthorizationSignature
$config = BitPesa\Configuration::getDefaultConfiguration()->setApiKey('Authorization-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BitPesa\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization-Signature', 'Bearer');


$apiInstance = new BitPesa\Api\AccountValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_validation_request = new \BitPesa\Model\AccountValidationRequest(); // \BitPesa\Model\AccountValidationRequest | 

try {
    $result = $apiInstance->postAccountValidations($account_validation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountValidationApi->postAccountValidations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_validation_request** | [**\BitPesa\Model\AccountValidationRequest**](../Model/AccountValidationRequest.md)|  |

### Return type

[**\BitPesa\Model\AccountValidationResponse**](../Model/AccountValidationResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

