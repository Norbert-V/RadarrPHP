<?php

namespace RadarrPHP\Responses;

interface ResponseInterface
{
	public function getRawResponse(): string;

	public function getResponseAsArray(): ?array;
}