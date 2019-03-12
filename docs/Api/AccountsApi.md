# BitPesa\AccountsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountsApi.md#getAccount) | **GET** /accounts/{Currency} | Fetches account balance for specified currrency
[**getAccounts**](AccountsApi.md#getAccounts) | **GET** /accounts | Fetches account balances for all currencies


# **getAccount**
> \BitPesa\Model\AccountResponse getAccount($currency)

Fetches account balance for specified currrency

Fetches account balance for specified currrency, and returns current balance and associated currency code

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


$apiInstance = new BitPesa\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string | Currency code of account balance to fetch  Example: `/v1/accounts/USD`

try {
    $result = $apiInstance->getAccount($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency code of account balance to fetch  Example: &#x60;/v1/accounts/USD&#x60; |

### Return type

[**\BitPesa\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccounts**
> \BitPesa\Model\AccountListResponse getAccounts()

Fetches account balances for all currencies

Fetches account balances for all currencies, and returns an array of the current balances and associated currency codes.

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


$apiInstance = new BitPesa\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\AccountListResponse**](../Model/AccountListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

