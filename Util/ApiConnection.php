<?php

namespace Bindeo\Util;

use Bindeo\DataModel\ClientResultSetAbstract;
use \Curl\Curl;

/**
 * Manage the connection with the api
 * @package AppBundle\Model
 */
class ApiConnection
{
    private $app;
    private $curl;
    private $baseUrl;
    private $routes;

    /**
     * Check if the api response has results
     *
     * @param $res
     *
     * @return ClientResultSetAbstract
     */
    private function processResult($res)
    {
        if ($this->curl->httpStatusCode == 204) {
            return $this->app == 'front' ? new \AppBundle\Entity\ResultSet() : new \PublicApi\Entity\ResultSet();
        } else {
            return $this->app == 'front' ? new \AppBundle\Entity\ResultSet($res)
                : new \PublicApi\Entity\ResultSet($res);
        }
    }

    public function __construct($baseUrl, $token, $app)
    {
        $this->app = $app;
        $this->baseUrl = 'https://' . $baseUrl;
        $this->curl = new Curl();
        $this->curl->setHeader('Authorization', 'Bearer ' . $token);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST, 0);
        
        // Private api routes
        $this->routes = [
            'oauth_clients'            => '/oauth/clients',
            'oauth_token'              => '/oauth/token',
            'general_account_types'    => '/general/account-types',
            'general_media_types'      => '/general/media-types',
            'general_geolocalize'      => '/general/geolocalize',
            'users'                    => '/users',
            'account'                  => '/account',
            'account_password'         => '/account/password',
            'account_type'             => '/account/type',
            'account_token'            => '/account/token',
            'account_identities'       => '/account/identities',
            'file'                     => '/data/file',
            'files'                    => '/data/files',
            'blockchain'               => '/data/blockchain',
            'blockchain_coins'         => '/data/blockchain/coins',
            'blockchain_info'          => '/data/blockchain/info',
            'blockchain_test'          => '/data/blockchain/test',
            'advanced_blockchain'      => '/advanced/blockchain',
            'bulk_transaction'         => '/bulk',
            'bulk_item'                => '/bulk/item',
            'bulk_verify'              => '/bulk/verify',
            'bulk_type'                => '/bulk/type',
            'bulk_types'               => '/bulk/types',
            'signature'                => '/signature',
            'signature_code'           => '/signature/code',
            'signature_signer'         => '/signature/signer',
            'signature_certificate'    => '/signature/certificate',
            'validate_phone'           => '/general/validate/phone',
            'processes_status'         => '/data/processes-status',
            'processes'                => '/data/processes',
            'notarization_certificate' => '/data/certificate',
        ];
    }

    /**
     * GET request against the API
     *
     * @param string $url
     * @param array  $params [optional]
     *
     * @return ClientResultSetAbstract
     */
    public function getJson($url, $params = [])
    {
        return $this->processResult($this->curl->get($this->baseUrl . $this->getRoute($url), $params));
    }

    /**
     * POST request against the API
     *
     * @param string $url
     * @param array  $params [optional]
     *
     * @return ClientResultSetAbstract
     */
    public function postJson($url, $params = [])
    {
        return $this->processResult($this->curl->post($this->baseUrl . $this->getRoute($url), $params));
    }

    /**
     * POST request against the API
     *
     * @param string $url
     * @param array  $params [optional]
     *
     * @return ClientResultSetAbstract
     */
    public function putJson($url, $params = [])
    {
        return $this->processResult($this->curl->put($this->baseUrl . $this->getRoute($url), $params));
    }

    /**
     * POST request against the API
     *
     * @param string $url
     * @param array  $params [optional]
     *
     * @return ClientResultSetAbstract
     */
    public function patchJson($url, $params = [])
    {
        return $this->processResult($this->curl->patch($this->baseUrl . $this->getRoute($url), $params));
    }

    /**
     * POST request against the API
     *
     * @param string $url
     * @param array  $params [optional]
     *
     * @return ClientResultSetAbstract
     */
    public function deleteJson($url, $params = [])
    {
        return $this->processResult($this->curl->delete($this->baseUrl . $this->getRoute($url), $params));
    }

    /**
     * Return an API route
     *
     * @param $route
     *
     * @return string
     */
    public function getRoute($route)
    {
        return isset($this->routes[$route]) ? $this->routes[$route] : '';
    }
}