<?php

namespace Bindeo\DataModel;

abstract class SignCodeAbstract extends LocatableAbstract
{
    protected $token;
    protected $method;
    protected $code;
    /**
     * @var \DateTime
     */
    protected $codeExpiration;

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
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Generate new pin code
     * @return $this
     */
    public function generateCode()
    {
        $code = '' . rand(0, 9999);
        $this->code = str_pad($code, 4, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCodeExpiration()
    {
        return $this->codeExpiration;
    }

    /**
     * @param mixed  $codeExpiration
     * @param string $mask [optional]
     *
     * @return $this
     */
    public function setCodeExpiration($codeExpiration, $mask = self::DATE_MASK)
    {
        if ($codeExpiration instanceof \DateTime) {
            $this->codeExpiration = $codeExpiration;
        } else {
            $this->codeExpiration = \DateTime::createFromFormat($mask, $codeExpiration);
        }

        return $this;
    }
}