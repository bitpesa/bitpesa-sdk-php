# BitPesa\SendersApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSender**](SendersApi.md#deleteSender) | **DELETE** /senders/{Sender ID} | Deleting a sender
[**getSender**](SendersApi.md#getSender) | **GET** /senders/{Sender ID} | Fetching a sender
[**getSenders**](SendersApi.md#getSenders) | **GET** /senders | Listing senders
[**patchSender**](SendersApi.md#patchSender) | **PATCH** /senders/{Sender ID} | Updating a sender
[**postSenders**](SendersApi.md#postSenders) | **POST** /senders | Creating a sender


# **deleteSender**
> \BitPesa\Model\SenderResponse deleteSender($sender_id)

Deleting a sender

Deletes a single sender by the Sender ID

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

$apiInstance = new BitPesa\Api\SendersApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to delete.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->deleteSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#deleteSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to delete.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\BitPesa\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSender**
> \BitPesa\Model\SenderResponse getSender($sender_id)

Fetching a sender

Returns a single sender by the Sender ID

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

$apiInstance = new BitPesa\Api\SendersApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to get.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#getSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to get.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\BitPesa\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenders**
> \BitPesa\Model\SenderListResponse getSenders($page, $per, $created_at_from, $created_at_to)

Listing senders

Get a list of available senders

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

$apiInstance = new BitPesa\Api\SendersApi();
$page = 1; // int | The page number to request (defaults to 1)
$per = 10; // int | The number of results to load per page (defaults to 10)
$created_at_from = 'created_at_from_example'; // string | Start date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$created_at_to = 'created_at_to_example'; // string | End date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`

try {
    $result = $apiInstance->getSenders($page, $per, $created_at_from, $created_at_to);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#getSenders";
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
 **created_at_from** | **string**| Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **created_at_to** | **string**| End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]

### Return type

[**\BitPesa\Model\SenderListResponse**](../Model/SenderListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSender**
> \BitPesa\Model\SenderResponse patchSender($sender_id, $sender_request)

Updating a sender

Updates the sender specified in the URL path.

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

$apiInstance = new BitPesa\Api\SendersApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to get.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`
$sender_request = new \BitPesa\Model\SenderRequest(); // \BitPesa\Model\SenderRequest | 

try {
    $result = $apiInstance->patchSender($sender_id, $sender_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#patchSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to get.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **sender_request** | [**\BitPesa\Model\SenderRequest**](../Model/SenderRequest.md)|  |

### Return type

[**\BitPesa\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSenders**
> \BitPesa\Model\SenderResponse postSenders($sender_request)

Creating a sender

Creates a new sender in our system.

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

$apiInstance = new BitPesa\Api\SendersApi();
$sender_request = {
  "sender": {
    "country": "UG",
    "phone_country": "UG",
    "phone_number": "752403639",
    "email": "example@home.org",
    "first_name": "Johnny",
    "last_name": "English",
    "city": "Kampala",
    "street": "Unknown 17-3",
    "address_description": "Description of address",
    "postal_code": "798983",
    "birth_date": "1900-12-31",
    "documents": [
      {
        "upload": "data:image/png;base64,iVBORw0KGg...lFTkSuQmCC",
        "upload_file_name": "example.png",
        "metadata": {
          "my": "data"
        }
      }
    ],
    "ip": "127.0.0.1",
    "metadata": {
      "my": "data"
    }
  }
}; // \BitPesa\Model\SenderRequest | 

try {
    $result = $apiInstance->postSenders($sender_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#postSenders";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_request** | [**\BitPesa\Model\SenderRequest**](../Model/SenderRequest.md)|  |

### Return type

[**\BitPesa\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

