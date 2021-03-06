<?php
/**
 * InvoiceDetailApi
 * PHP version 5
 *
 * @category Class
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PartnerExchangeApi
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace d2r_connectors\conficio\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use d2r_connectors\conficio\ApiException;
use d2r_connectors\conficio\Configuration;
use d2r_connectors\conficio\HeaderSelector;
use d2r_connectors\conficio\ObjectSerializer;

/**
 * InvoiceDetailApi Class Doc Comment
 *
 * @category Class
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceDetailApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation invoiceDetailSubmit
     *
     * Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function invoiceDetailSubmit($type, $detail, $authorization = null)
    {
        list($response) = $this->invoiceDetailSubmitWithHttpInfo($type, $detail, $authorization);
        return $response;
    }

    /**
     * Operation invoiceDetailSubmitWithHttpInfo
     *
     * Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceDetailSubmitWithHttpInfo($type, $detail, $authorization = null)
    {
        $request = $this->invoiceDetailSubmitRequest($type, $detail, $authorization);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceDetailSubmitAsync
     *
     * Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceDetailSubmitAsync($type, $detail, $authorization = null)
    {
        return $this->invoiceDetailSubmitAsyncWithHttpInfo($type, $detail, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceDetailSubmitAsyncWithHttpInfo
     *
     * Submit an invoice detail (transaction).  Send AFTER corresponding invoice record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceDetailSubmitAsyncWithHttpInfo($type, $detail, $authorization = null)
    {
        $returnType = 'object';
        $request = $this->invoiceDetailSubmitRequest($type, $detail, $authorization);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'invoiceDetailSubmit'
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function invoiceDetailSubmitRequest($type, $detail, $authorization = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling invoiceDetailSubmit'
            );
        }
        // verify the required parameter 'detail' is set
        if ($detail === null || (is_array($detail) && count($detail) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $detail when calling invoiceDetailSubmit'
            );
        }

        $resourcePath = '/api/invoicedetail/Submit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($type)) {
            $type = ObjectSerializer::serializeCollection($type, '', true);
        }
        if ($type !== null) {
            $queryParams['type'] = $type;
        }

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;
        if (isset($detail)) {
            $_tempBody = $detail;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation invoiceDetailTest
     *
     * Test an invoice detail record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function invoiceDetailTest($type, $detail, $authorization = null)
    {
        list($response) = $this->invoiceDetailTestWithHttpInfo($type, $detail, $authorization);
        return $response;
    }

    /**
     * Operation invoiceDetailTestWithHttpInfo
     *
     * Test an invoice detail record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceDetailTestWithHttpInfo($type, $detail, $authorization = null)
    {
        $request = $this->invoiceDetailTestRequest($type, $detail, $authorization);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceDetailTestAsync
     *
     * Test an invoice detail record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceDetailTestAsync($type, $detail, $authorization = null)
    {
        return $this->invoiceDetailTestAsyncWithHttpInfo($type, $detail, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceDetailTestAsyncWithHttpInfo
     *
     * Test an invoice detail record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceDetailTestAsyncWithHttpInfo($type, $detail, $authorization = null)
    {
        $returnType = 'object';
        $request = $this->invoiceDetailTestRequest($type, $detail, $authorization);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'invoiceDetailTest'
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\InvoiceDetail $detail InvoiceDetail record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function invoiceDetailTestRequest($type, $detail, $authorization = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling invoiceDetailTest'
            );
        }
        // verify the required parameter 'detail' is set
        if ($detail === null || (is_array($detail) && count($detail) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $detail when calling invoiceDetailTest'
            );
        }

        $resourcePath = '/api/invoicedetail/Test';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($type)) {
            $type = ObjectSerializer::serializeCollection($type, '', true);
        }
        if ($type !== null) {
            $queryParams['type'] = $type;
        }

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;
        if (isset($detail)) {
            $_tempBody = $detail;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
