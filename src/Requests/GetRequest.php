<?php

namespace RadarrPHP\Requests;

use GuzzleHttp\Psr7\Response;
use RadarrPHP\Responses\GetResponse;
use RadarrPHP\Responses\ResponseInterface;

class GetRequest implements RequestInterface
{
	protected $HTTPMethod = 'GET';

	protected $requestUri = '';

	public function __construct()
	{
	}

	public function getHTTPMethod(): string
	{
		return $this->HTTPMethod;
	}

	public function getRequestUri(): string
	{
		return $this->requestUri;
	}

	public function getOptions(): array
	{
		return [];
	}

	public function formatResponse(Response $response): ResponseInterface
	{
		$getResponse = new GetResponse($response);

		return $getResponse;
	}
}