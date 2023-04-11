<?php

namespace DhlApi\DhlApi\Guzzle;

use DhlApi\DhlApi\Global\Header;

class GuzzleRequest
{
    public string $queryurl;
    public Header $headers;
    public array $body;
    public string $requesttype;

    public function __construct(
        string $queryurl,
        Header $headers,
        array $body,
        string $requesttype
    ) {
        $this->queryurl = $queryurl;
        $this->headers = $headers;
        $this->body = $body;
        $this->requesttype = $requesttype;
    }

    public function execute()
    {
    }
}
