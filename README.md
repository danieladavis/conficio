# conficio

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/conficio/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://partnerexchange.azurewebsites.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**tokenPost**](docs/Api/AuthApi.md#tokenpost) | **POST** /token | 
*ChangeApi* | [**changeProcess**](docs/Api/ChangeApi.md#changeprocess) | **POST** /api/change/Process | Process change
*ChangeApi* | [**changeTest**](docs/Api/ChangeApi.md#changetest) | **POST** /api/change/Test | Test a change record
*InvoiceApi* | [**invoiceCheck**](docs/Api/InvoiceApi.md#invoicecheck) | **GET** /api/invoice/Check | Check today&#39;s invoice records against today&#39;s invoice detail records
*InvoiceApi* | [**invoiceSubmit**](docs/Api/InvoiceApi.md#invoicesubmit) | **POST** /api/invoice/Submit | Submit an invoice (summary).  Send BEFORE invoice detail records
*InvoiceApi* | [**invoiceTest**](docs/Api/InvoiceApi.md#invoicetest) | **POST** /api/invoice/Test | Test an invoice record
*InvoiceDetailApi* | [**invoiceDetailSubmit**](docs/Api/InvoiceDetailApi.md#invoicedetailsubmit) | **POST** /api/invoicedetail/Submit | Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
*InvoiceDetailApi* | [**invoiceDetailTest**](docs/Api/InvoiceDetailApi.md#invoicedetailtest) | **POST** /api/invoicedetail/Test | Test an invoice detail record
*TransactionApi* | [**transactionPost**](docs/Api/TransactionApi.md#transactionpost) | **POST** /api/transaction/Post | Post a transaction (payment)
*TransactionApi* | [**transactionTest**](docs/Api/TransactionApi.md#transactiontest) | **POST** /api/transaction/Test | Test a transaction record


## Documentation For Models

 - [Change](docs/Model/Change.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceDetail](docs/Model/InvoiceDetail.md)
 - [Transaction](docs/Model/Transaction.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author



