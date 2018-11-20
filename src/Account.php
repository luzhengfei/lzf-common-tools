<?php

namespace lzfcommontool;

use GuzzleHttp\Client;

class Account
{
    public static function send()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://www.baidu.com');

        echo $res->getStatusCode();
    }
}