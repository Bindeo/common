<?php

namespace Bindeo\OAuth2;

interface OAuthStorageInterface
{
    /**
     * @param string $type
     * @param string $oauthToken
     * @param int    $clientId
     * @param string $clientSecret
     *
     * @return Object
     */
    public function getOAuth($type, $oauthToken = null, $clientId = null, $clientSecret = null);

    /**
     * @param $nonce
     * @param $timestamp
     *
     * @return boolean
     */
    public function checkNonce($nonce, $timestamp);
}