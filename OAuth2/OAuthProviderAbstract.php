<?php

namespace Bindeo\OAuth2;

abstract class OAuthProviderAbstract
{
    const NO_AUTH_HEADER    = 'NO_AUTH_HEADER';
    const OAUTH_EXPIRED     = 'OAUTH_EXPIRED';
    const INVALID_NONCE     = 'INVALID_NONCE';
    const INVALID_SIGNATURE = 'INVALID_SIGNATURE';
    const INVALID_AUTH_DATA = 'INVALID_AUTH_DATA';

    protected $_oauthStorage;

    /**
     * OAuthProviderAbstract constructor.
     *
     * @param OAuthStorageInterface $oauthStorage
     */
    public function __construct(OAuthStorageInterface $oauthStorage)
    {
        $this->_oauthStorage = $oauthStorage;
    }

    /**
     * Verify an OAuth2 request
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return array
     * @throws \Exception
     */
    public abstract function verify(\Psr\Http\Message\ServerRequestInterface $request);
}