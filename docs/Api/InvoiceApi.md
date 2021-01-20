# OpenAPI\Client\InvoiceApi

All URIs are relative to *https://partnerexchange.azurewebsites.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceCheck**](InvoiceApi.md#invoiceCheck) | **GET** /api/invoice/Check | Check today&#39;s invoice records against today&#39;s invoice detail records
[**invoiceSubmit**](InvoiceApi.md#invoiceSubmit) | **POST** /api/invoice/Submit | Submit an invoice (summary).  Send BEFORE invoice detail records
[**invoiceTest**](InvoiceApi.md#invoiceTest) | **POST** /api/invoice/Test | Test an invoice record



## invoiceCheck

> object invoiceCheck($authorization)

Check today's invoice records against today's invoice detail records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->invoiceCheck($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| access token | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invoiceSubmit

> object invoiceSubmit($type, $invoice, $authorization)

Submit an invoice (summary).  Send BEFORE invoice detail records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$invoice = new \OpenAPI\Client\Model\Invoice(); // \OpenAPI\Client\Model\Invoice | Invoice record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->invoiceSubmit($type, $invoice, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **invoice** | [**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)| Invoice record |
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


## invoiceTest

> object invoiceTest($type, $invoice, $authorization)

Test an invoice record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$invoice = new \OpenAPI\Client\Model\Invoice(); // \OpenAPI\Client\Model\Invoice | Invoice record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->invoiceTest($type, $invoice, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **invoice** | [**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)| Invoice record |
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

