<?php

namespace Bindeo\DataModel;

abstract class OAuthTokenAbstract extends DataModelAbstract
{
    protected $token;
    protected $type;
    /**
     * @var \DateTime
     */
    protected $expiration;
    protected $idClient;
    protected $idUser;
    protected $accessToken;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param string $mask
     *
     * @return string
     */
    public function getFormattedExpiration($mask = self::DATETIME_MASK)
    {
        if ($this->expiration) {
            return $this->expiration->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $ctrlDate
     * @param string $mask
     *
     * @return $this
     */
    public function setExpiration($ctrlDate, $mask = self::DATETIME_MASK)
    {
        if ($ctrlDate instanceof \DateTime) {
            $this->expiration = $ctrlDate;
        } else {
            $this->expiration = \DateTime::createFromFormat($mask, $ctrlDate);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     *
     * @return $this
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     *
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }
}