<?php
/**
 * TokensApi
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Auth\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Auth\OAuth\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Auth\OAuth\ApiException;
use HubSpot\Client\Auth\OAuth\Configuration;
use HubSpot\Client\Auth\OAuth\HeaderSelector;
use HubSpot\Client\Auth\OAuth\ObjectSerializer;

/**
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Auth\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokensApi
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
     * Operation createToken
     *
     * @param  string $grant_type grant_type (optional)
     * @param  string $code code (optional)
     * @param  string $redirect_uri redirect_uri (optional)
     * @param  string $client_id client_id (optional)
     * @param  string $client_secret client_secret (optional)
     * @param  string $refresh_token refresh_token (optional)
     *
     * @throws \HubSpot\Client\Auth\OAuth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Auth\OAuth\Model\TokenResponseIF|\HubSpot\Client\Auth\OAuth\Model\Error
     */
    public function createToken($grant_type = null, $code = null, $redirect_uri = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {
        list($response) = $this->createTokenWithHttpInfo($grant_type, $code, $redirect_uri, $client_id, $client_secret, $refresh_token);
        return $response;
    }

    /**
     * Operation createTokenWithHttpInfo
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \HubSpot\Client\Auth\OAuth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Auth\OAuth\Model\TokenResponseIF|\HubSpot\Client\Auth\OAuth\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTokenWithHttpInfo($grant_type = null, $code = null, $redirect_uri = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {
        $request = $this->createTokenRequest($grant_type, $code, $redirect_uri, $client_id, $client_secret, $refresh_token);

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

            switch($statusCode) {
                case 200:
                    if ('\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Auth\OAuth\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\HubSpot\Client\Auth\OAuth\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Auth\OAuth\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Auth\OAuth\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTokenAsync
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenAsync($grant_type = null, $code = null, $redirect_uri = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {
        return $this->createTokenAsyncWithHttpInfo($grant_type, $code, $redirect_uri, $client_id, $client_secret, $refresh_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTokenAsyncWithHttpInfo
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenAsyncWithHttpInfo($grant_type = null, $code = null, $redirect_uri = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {
        $returnType = '\HubSpot\Client\Auth\OAuth\Model\TokenResponseIF';
        $request = $this->createTokenRequest($grant_type, $code, $redirect_uri, $client_id, $client_secret, $refresh_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createToken'
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createTokenRequest($grant_type = null, $code = null, $redirect_uri = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {

        $resourcePath = '/oauth/v1/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = ObjectSerializer::toFormValue($code);
        }
        // form params
        if ($redirect_uri !== null) {
            $formParams['redirect_uri'] = ObjectSerializer::toFormValue($redirect_uri);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = ObjectSerializer::toFormValue($refresh_token);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*/*'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
