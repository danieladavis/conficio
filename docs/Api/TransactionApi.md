# OpenAPI\Client\TransactionApi

All URIs are relative to *https://partnerexchange.azurewebsites.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionPost**](TransactionApi.md#transactionPost) | **POST** /api/transaction/Post | Post a transaction (payment)
[**transactionTest**](TransactionApi.md#transactionTest) | **POST** /api/transaction/Test | Test a transaction record



## transactionPost

> object transactionPost($type, $transaction, $authorization)

Post a transaction (payment)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$transaction = new \OpenAPI\Client\Model\Transaction(); // \OpenAPI\Client\Model\Transaction | Transaction record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->transactionPost($type, $transaction, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **transaction** | [**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)| Transaction record |
 **authorization** | **string**| access token | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transactionTest

> object transactionTest($type, $transaction, $authorization)

Test a transaction record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$transaction = new \OpenAPI\Client\Model\Transaction(); // \OpenAPI\Client\Model\Transaction | Transaction record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->transactionTest($type, $transaction, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **transaction** | [**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)| Transaction record |
 **authorization** | **string**| access token | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

