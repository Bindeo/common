<?php

namespace Bindeo\OAuth2;

interface OAuthStorageInterface
{
    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param string $authCode
     *
     * @return mixed
     */
    public function authorize($clientId = null, $clientSecret = null, $authCode = null);

    /**
     * @param string $type
     * @param string $oauthToken
     *
     * @return Object
     */
    public function getOAuth($type, $oauthToken = null);

    /**
     * @param $nonce
     * @param $timestamp
     *
     * @return boolean
     */
    public function checkNonce($nonce, $timestamp);
}