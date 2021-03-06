<?php
/**
 * ChangeApi
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
 * ChangeApi Class Doc Comment
 *
 * @category Class
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChangeApi
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
     * Operation changeProcess
     *
     * Process change
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function changeProcess($type, $change, $authorization = null)
    {
        list($response) = $this->changeProcessWithHttpInfo($type, $change, $authorization);
        return $response;
    }

    /**
     * Operation changeProcessWithHttpInfo
     *
     * Process change
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeProcessWithHttpInfo($type, $change, $authorization = null)
    {
        $request = $this->changeProcessRequest($type, $change, $authorization);

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
     * Operation changeProcessAsync
     *
     * Process change
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeProcessAsync($type, $change, $authorization = null)
    {
        return $this->changeProcessAsyncWithHttpInfo($type, $change, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation changeProcessAsyncWithHttpInfo
     *
     * Process change
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeProcessAsyncWithHttpInfo($type, $change, $authorization = null)
    {
        $returnType = 'object';
        $request = $this->changeProcessRequest($type, $change, $authorization);

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
     * Create request for operation 'changeProcess'
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function changeProcessRequest($type, $change, $authorization = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling changeProcess'
            );
        }
        // verify the required parameter 'change' is set
        if ($change === null || (is_array($change) && count($change) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $change when calling changeProcess'
            );
        }

        $resourcePath = '/api/change/Process';
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
        if (isset($change)) {
            $_tempBody = $change;
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
     * Operation changeTest
     *
     * Test a change record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function changeTest($type, $change, $authorization = null)
    {
        list($response) = $this->changeTestWithHttpInfo($type, $change, $authorization);
        return $response;
    }

    /**
     * Operation changeTestWithHttpInfo
     *
     * Test a change record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \d2r_connectors\conficio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeTestWithHttpInfo($type, $change, $authorization = null)
    {
        $request = $this->changeTestRequest($type, $change, $authorization);

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
     * Operation changeTestAsync
     *
     * Test a change record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeTestAsync($type, $change, $authorization = null)
    {
        return $this->changeTestAsyncWithHttpInfo($type, $change, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation changeTestAsyncWithHttpInfo
     *
     * Test a change record
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeTestAsyncWithHttpInfo($type, $change, $authorization = null)
    {
        $returnType = 'object';
        $request = $this->changeTestRequest($type, $change, $authorization);

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
     * Create request for operation 'changeTest'
     *
     * @param  string $type Exchange type (\&quot;account\&quot; or \&quot;simpleaccount\&quot;) (required)
     * @param  \d2r_connectors\conficio\Model\Change $change Change record (required)
     * @param  string $authorization access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function changeTestRequest($type, $change, $authorization = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling changeTest'
            );
        }
        // verify the required parameter 'change' is set
        if ($change === null || (is_array($change) && count($change) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $change when calling changeTest'
            );
        }

        $resourcePath = '/api/change/Test';
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
        if (isset($change)) {
            $_tempBody = $change;
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
