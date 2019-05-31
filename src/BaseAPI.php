<?php

namespace Gowebpro\Infoflot;

class BaseAPI
{
    const API_URL_BASE = 'http://api.infoflot.com/JSON';

    public static function sendRequest($url, $access_token=null)
    {
        $full_url = self::API_URL_BASE . '/' . $access_token . '/' . $url;
        return json_decode(file_get_contents($full_url));
    }

}
