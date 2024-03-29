<?php

namespace Bindeo\Util;

class Tools
{
    /**
     * To encode an input string in base64 url safe mode
     *
     * @param $input
     *
     * @return string
     */
    public static function safeBase64Encode($input)
    {
        return strtr(base64_encode($input), '+/=', '-_,');
    }

    /**
     * To decode an input string in base64 url safe mode
     *
     * @param $input
     *
     * @return string
     */
    public static function safeBase64Decode($input)
    {
        return base64_decode(strtr($input, '-_,', '+/='));
    }

    /**
     * JSON encode without escape literals, it is needed to store understandable information to hash and repeat
     *
     * @param $str
     *
     * @return string
     */
    public static function jsonEncode($str)
    {
        return json_encode($str, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}