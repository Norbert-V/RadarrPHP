<?php

namespace RadarrPHP\Requests;

use GuzzleHttp\Psr7\Response;
use RadarrPHP\Responses\GetProfilesResponse;
use RadarrPHP\Responses\ResponseInterface;

class GetProfilesRequest extends GetRequest
{
	protected $requestUri = '/api/profile';

	public function formatResponse(Response $response): ResponseInterface
	{
		return new GetProfilesResponse($response);
	}
}