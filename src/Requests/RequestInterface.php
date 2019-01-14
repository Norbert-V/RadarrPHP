<?php

namespace RadarrPHP\Requests;

use GuzzleHttp\Psr7\Response;
use RadarrPHP\Responses\ResponseInterface;

interface RequestInterface
{
	public function getHTTPMethod(): string;

	public function getRequestUri(): string;

	public function getOptions(): array;

	public function formatResponse(Response $response): ResponseInterface;
}