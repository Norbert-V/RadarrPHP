<?php

namespace RadarrPHP\Responses;

use GuzzleHttp\Psr7\Response;

class GetProfilesResponse implements ResponseInterface
{
	private $rawContents;

	public function __construct(Response $response)
	{
		$this->rawContents = $response->getBody()->getContents();
	}

	public function getRawResponse(): string
	{
		return $this->rawContents;
	}

	public function getResponseAsArray(): array
	{
		return json_decode($this->rawContents, true);
	}
}