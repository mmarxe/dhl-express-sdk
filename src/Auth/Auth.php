<?php

namespace DhlApi\DhlApi\Authorization;

use DhlApi\DhlApi\Guzzle\GuzzleAuth;

class Auth
{

    private string $apikey;
    private string $apisecret;
    private string $userid;

    public function __construct(string $apikey, string $apisecret, string $userid)
    {
        $this->apikey = $apikey;
        $this->apisecret = $apisecret;
        $this->userid = $userid;
    }
}
