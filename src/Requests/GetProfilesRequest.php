<?php

namespace RadarrPHP\Requests;

use GuzzleHttp\Psr7\Response;
use RadarrPHP\Responses\GetProfilesResponse;
use RadarrPHP\Responses\ResponseInterface;

class GetProfilesRequest implements RequestInterface
{
	private $HTTPMethod = 'GET';

	private $requestUri = '/api/profile';

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
		$profileResponse = new GetProfilesResponse($response);

		return $profileResponse;
	}
}