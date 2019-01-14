<?php

namespace RadarrPHP\Lib;

class Config
{
	private $host;

	private $port;

	private $apiKey;

	public function __construct(string $host, int $port, string $apiKey)
	{
		$this->host = $host;
		$this->port = $port;
		$this->apiKey = $apiKey;
	}

	public function getHost(): string
	{
		return $this->host;
	}

	public function getPort(): int
	{
		return $this->port;
	}

	public function getApiKey(): string
	{
		return $this->apiKey;
	}
}