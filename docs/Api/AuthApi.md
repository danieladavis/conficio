# conficio\AuthApi

All URIs are relative to *https://partnerexchange.azurewebsites.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenPost**](AuthApi.md#tokenPost) | **POST** /token | 



## tokenPost

> object tokenPost($grant_type, $username, $password)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new conficio\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'password'; // string | 
$username = 'username_example'; // string | 
$password = 'password_example'; // string | 

try {
    $result = $apiInstance->tokenPost($grant_type, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  | [default to &#39;password&#39;]
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

