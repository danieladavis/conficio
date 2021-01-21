# conficio\InvoiceDetailApi

All URIs are relative to *https://partnerexchange.azurewebsites.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceDetailSubmit**](InvoiceDetailApi.md#invoiceDetailSubmit) | **POST** /api/invoicedetail/Submit | Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
[**invoiceDetailTest**](InvoiceDetailApi.md#invoiceDetailTest) | **POST** /api/invoicedetail/Test | Test an invoice detail record



## invoiceDetailSubmit

> object invoiceDetailSubmit($type, $detail, $authorization)

Submit an invoice detail (transaction).  Send AFTER corresponding invoice record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new conficio\Api\InvoiceDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$detail = new \conficio\Model\InvoiceDetail(); // \conficio\Model\InvoiceDetail | InvoiceDetail record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->invoiceDetailSubmit($type, $detail, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailApi->invoiceDetailSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **detail** | [**\conficio\Model\InvoiceDetail**](../Model/InvoiceDetail.md)| InvoiceDetail record |
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


## invoiceDetailTest

> object invoiceDetailTest($type, $detail, $authorization)

Test an invoice detail record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new conficio\Api\InvoiceDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Exchange type (\"account\" or \"simpleaccount\")
$detail = new \conficio\Model\InvoiceDetail(); // \conficio\Model\InvoiceDetail | InvoiceDetail record
$authorization = 'authorization_example'; // string | access token

try {
    $result = $apiInstance->invoiceDetailTest($type, $detail, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailApi->invoiceDetailTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) |
 **detail** | [**\conficio\Model\InvoiceDetail**](../Model/InvoiceDetail.md)| InvoiceDetail record |
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

