<?php

namespace RadarrPHP\Requests;

use GuzzleHttp\Psr7\Response;
use RadarrPHP\Responses\GetMoviesResponse;
use RadarrPHP\Responses\ResponseInterface;

class GetMoviesRequest extends GetRequest
{
	protected $requestUri = '/api/movie';

	public function formatResponse(Response $response): ResponseInterface
	{
		return new GetMoviesResponse($response);
	}
}