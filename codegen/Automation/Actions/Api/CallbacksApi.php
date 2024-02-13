<?php
/**
 * CallbacksApi
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Automation Actions V4
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Automation\Actions\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Automation\Actions\ApiException;
use HubSpot\Client\Automation\Actions\Configuration;
use HubSpot\Client\Automation\Actions\HeaderSelector;
use HubSpot\Client\Automation\Actions\ObjectSerializer;

/**
 * CallbacksApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CallbacksApi
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
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation complete
     *
     * Completes a single callback
     *
     * @param  string $callback_id callback_id (required)
     * @param  \HubSpot\Client\Automation\Actions\Model\CallbackCompletionRequest $callback_completion_request callback_completion_request (required)
     *
     * @throws \HubSpot\Client\Automation\Actions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function complete($callback_id, $callback_completion_request)
    {
        $this->completeWithHttpInfo($callback_id, $callback_completion_request);
    }

    /**
     * Operation completeWithHttpInfo
     *
     * Completes a single callback
     *
     * @param  string $callback_id (required)
     * @param  \HubSpot\Client\Automation\Actions\Model\CallbackCompletionRequest $callback_completion_request (required)
     *
     * @throws \HubSpot\Client\Automation\Actions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function completeWithHttpInfo($callback_id, $callback_completion_request)
    {
        $request = $this->completeRequest($callback_id, $callback_completion_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Automation\Actions\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation completeAsync
     *
     * Completes a single callback
     *
     * @param  string $callback_id (required)
     * @param  \HubSpot\Client\Automation\Actions\Model\CallbackCompletionRequest $callback_completion_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function completeAsync($callback_id, $callback_completion_request)
    {
        return $this->completeAsyncWithHttpInfo($callback_id, $callback_completion_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation completeAsyncWithHttpInfo
     *
     * Completes a single callback
     *
     * @param  string $callback_id (required)
     * @param  \HubSpot\Client\Automation\Actions\Model\CallbackCompletionRequest $callback_completion_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function completeAsyncWithHttpInfo($callback_id, $callback_completion_request)
    {
        $returnType = '';
        $request = $this->completeRequest($callback_id, $callback_completion_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'complete'
     *
     * @param  string $callback_id (required)
     * @param  \HubSpot\Client\Automation\Actions\Model\CallbackCompletionRequest $callback_completion_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function completeRequest($callback_id, $callback_completion_request)
    {
        // verify the required parameter 'callback_id' is set
        if ($callback_id === null || (is_array($callback_id) && count($callback_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $callback_id when calling complete'
            );
        }
        // verify the required parameter 'callback_completion_request' is set
        if ($callback_completion_request === null || (is_array($callback_completion_request) && count($callback_completion_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $callback_completion_request when calling complete'
            );
        }

        $resourcePath = '/automation/v4/actions/callbacks/{callbackId}/complete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($callback_id !== null) {
            $resourcePath = str_replace(
                '{' . 'callbackId' . '}',
                ObjectSerializer::toPathValue($callback_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($callback_completion_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($callback_completion_request));
            } else {
                $httpBody = $callback_completion_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation completeBatch
     *
     * Completes a batch of callbacks
     *
     * @param  \HubSpot\Client\Automation\Actions\Model\BatchInputCallbackCompletionBatchRequest $batch_input_callback_completion_batch_request batch_input_callback_completion_batch_request (required)
     *
     * @throws \HubSpot\Client\Automation\Actions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function completeBatch($batch_input_callback_completion_batch_request)
    {
        $this->completeBatchWithHttpInfo($batch_input_callback_completion_batch_request);
    }

    /**
     * Operation completeBatchWithHttpInfo
     *
     * Completes a batch of callbacks
     *
     * @param  \HubSpot\Client\Automation\Actions\Model\BatchInputCallbackCompletionBatchRequest $batch_input_callback_completion_batch_request (required)
     *
     * @throws \HubSpot\Client\Automation\Actions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function completeBatchWithHttpInfo($batch_input_callback_completion_batch_request)
    {
        $request = $this->completeBatchRequest($batch_input_callback_completion_batch_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Automation\Actions\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation completeBatchAsync
     *
     * Completes a batch of callbacks
     *
     * @param  \HubSpot\Client\Automation\Actions\Model\BatchInputCallbackCompletionBatchRequest $batch_input_callback_completion_batch_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function completeBatchAsync($batch_input_callback_completion_batch_request)
    {
        return $this->completeBatchAsyncWithHttpInfo($batch_input_callback_completion_batch_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation completeBatchAsyncWithHttpInfo
     *
     * Completes a batch of callbacks
     *
     * @param  \HubSpot\Client\Automation\Actions\Model\BatchInputCallbackCompletionBatchRequest $batch_input_callback_completion_batch_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function completeBatchAsyncWithHttpInfo($batch_input_callback_completion_batch_request)
    {
        $returnType = '';
        $request = $this->completeBatchRequest($batch_input_callback_completion_batch_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'completeBatch'
     *
     * @param  \HubSpot\Client\Automation\Actions\Model\BatchInputCallbackCompletionBatchRequest $batch_input_callback_completion_batch_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function completeBatchRequest($batch_input_callback_completion_batch_request)
    {
        // verify the required parameter 'batch_input_callback_completion_batch_request' is set
        if ($batch_input_callback_completion_batch_request === null || (is_array($batch_input_callback_completion_batch_request) && count($batch_input_callback_completion_batch_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_input_callback_completion_batch_request when calling completeBatch'
            );
        }

        $resourcePath = '/automation/v4/actions/callbacks/complete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($batch_input_callback_completion_batch_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($batch_input_callback_completion_batch_request));
            } else {
                $httpBody = $batch_input_callback_completion_batch_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = ObjectSerializer::buildQuery($queryParams);
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
