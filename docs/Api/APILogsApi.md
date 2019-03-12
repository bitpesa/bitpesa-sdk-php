# BitPesa\APILogsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiLog**](APILogsApi.md#getApiLog) | **GET** /api_logs/{API Log ID} | Fetch an individual API log
[**getApiLogs**](APILogsApi.md#getApiLogs) | **GET** /api_logs | Fetch a list of API logs


# **getApiLog**
> \BitPesa\Model\ApiLogResponse getApiLog($api_log_id)

Fetch an individual API log

Returns a single API log based on the API log ID.

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


$apiInstance = new BitPesa\Api\APILogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_log_id = 'api_log_id_example'; // string | ID of the API log to retrieve  Example: `/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407`

try {
    $result = $apiInstance->getApiLog($api_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APILogsApi->getApiLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_log_id** | [**string**](../Model/.md)| ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; |

### Return type

[**\BitPesa\Model\ApiLogResponse**](../Model/ApiLogResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiLogs**
> \BitPesa\Model\ApiLogListResponse getApiLogs($page, $per, $created_at_from, $created_at_to)

Fetch a list of API logs

Returns a list of API logs. Also includes information relating to the original request.

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


$apiInstance = new BitPesa\Api\APILogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to request (defaults to 1)
$per = 10; // int | The number of results to load per page (defaults to 10)
$created_at_from = 'created_at_from_example'; // string | Start date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$created_at_to = 'created_at_to_example'; // string | End date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`

try {
    $result = $apiInstance->getApiLogs($page, $per, $created_at_from, $created_at_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APILogsApi->getApiLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]
 **created_at_from** | **string**| Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **created_at_to** | **string**| End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]

### Return type

[**\BitPesa\Model\ApiLogListResponse**](../Model/ApiLogListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

