# BitPesa\PaymentMethodsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentMethodsIn**](PaymentMethodsApi.md#paymentMethodsIn) | **GET** /info/payment_methods/in | This method returns possible payin methods.
[**paymentMethodsOut**](PaymentMethodsApi.md#paymentMethodsOut) | **GET** /info/payment_methods/out | This method returns possible payout methods.


# **paymentMethodsIn**
> \BitPesa\Model\PaymentMethodListResponse paymentMethodsIn()

This method returns possible payin methods.

Fetching possible payin methods.

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


$apiInstance = new BitPesa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentMethodsIn();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->paymentMethodsIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentMethodsOut**
> \BitPesa\Model\PaymentMethodListResponse paymentMethodsOut()

This method returns possible payout methods.

Fetching possible payout methods.

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


$apiInstance = new BitPesa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentMethodsOut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->paymentMethodsOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BitPesa\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

