<?php

namespace RadarrPHP\Core;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use RadarrPHP\Lib\Config;
use RadarrPHP\Requests\RequestInterface;
use RadarrPHP\Responses\ResponseInterface;

class RadarrClient
{
	/* @var \RadarrPHP\Lib\Config */
	private $config;

	/* @var Client */
	private $httpClient;

	public function __construct(Config $config)
	{
		$this->config = $config;

		$this->httpClient = new Client([
			'base_uri' => $this->getBaseUri(),
			'headers' => [
				'x-api-key' => $config->getApiKey()
			]
		]);
	}

	public function sendRequest(RequestInterface $request): ResponseInterface
	{
		$requestResult = $this->httpRequest($request);

		return $request->formatResponse($requestResult);
	}

	private function httpRequest(RequestInterface $request): ?Response
	{
		try {
			return $this->httpClient->request($request->getHTTPMethod(), $request->getRequestUri());
		} catch (GuzzleException $e) {
			// TODO Handle GuzzleException
			echo $e->getMessage();
		}

		return null;
	}

	private function getBaseUri(): string
	{
		return $this->config->getHost() . ':' . (string)$this->config->getPort();
	}
}