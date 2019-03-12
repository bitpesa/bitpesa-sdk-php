# BitPesa\CurrencyInfoApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoCurrencies**](CurrencyInfoApi.md#infoCurrencies) | **GET** /info/currencies | Getting a list of possible requested currencies
[**infoCurrenciesIn**](CurrencyInfoApi.md#infoCurrenciesIn) | **GET** /info/currencies/in | Getting a list of possible input currencies
[**infoCurrenciesOut**](CurrencyInfoApi.md#infoCurrenciesOut) | **GET** /info/currencies/out | Getting a list of possible output currencies


# **infoCurrencies**
> \BitPesa\Model\CurrencyListResponse infoCurrencies()

Getting a list of possible requested currencies

Fetches a list of currencies available to use in other API requests. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier.

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


$apiInstance = new BitPesa\Api\CurrencyInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->infoCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyInfoApi->infoCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\CurrencyListResponse**](../Model/CurrencyListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoCurrenciesIn**
> \BitPesa\Model\CurrencyExchangeListResponse infoCurrenciesIn()

Getting a list of possible input currencies

Fetches a list of currencies available to use as the input currency in other API requests. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier. Use this endpoint to determine the current exchange rate from a specific input currency to any output currency that's available.

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


$apiInstance = new BitPesa\Api\CurrencyInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->infoCurrenciesIn();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyInfoApi->infoCurrenciesIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\CurrencyExchangeListResponse**](../Model/CurrencyExchangeListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoCurrenciesOut**
> \BitPesa\Model\CurrencyExchangeListResponse infoCurrenciesOut()

Getting a list of possible output currencies

Fetches a list of currencies available to use as the output currency and their exchange rates against the available input currencies. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier.

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


$apiInstance = new BitPesa\Api\CurrencyInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->infoCurrenciesOut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyInfoApi->infoCurrenciesOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\CurrencyExchangeListResponse**](../Model/CurrencyExchangeListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

