<?php

namespace Bindeo\DataModel;

use Bindeo\Util\Tools;

abstract class ProcessAbstract extends DataModelAbstract
{
    // Status codes
    const STATUS_N_NEW       = 1;
    const STATUS_N_COMPLETED = 2;
    const STATUS_S_NEW       = 1;
    const STATUS_S_SIGNED    = 2;
    const STATUS_S_COMPLETED = 3;
    const STATUS_S_CANCELED  = 4;
    const STATUS_S_EXPIRED   = 5;

    protected $type;
    protected $idElement;
    protected $clientType;
    protected $idClient;
    protected $idStatus;
    protected $name;
    /**
     * @var \DateTime
     */
    protected $ctrlDate;
    protected $additionalData;

    // Optional
    protected $status;
    protected $clients;

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
     * @return mixed
     */
    public function getIdElement()
    {
        return $this->idElement;
    }

    /**
     * @param mixed $idElement
     *
     * @return $this
     */
    public function setIdElement($idElement)
    {
        $this->idElement = $idElement;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param mixed $clientType
     *
     * @return $this
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;

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
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * @param mixed $idStatus
     *
     * @return $this
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCtrlDate()
    {
        return $this->ctrlDate;
    }

    /**
     * @param string $mask
     *
     * @return string
     */
    public function getFormattedCtrlDate($mask = self::DATETIME_MASK)
    {
        if ($this->ctrlDate) {
            return $this->ctrlDate->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $date
     * @param string $mask
     *
     * @return $this
     */
    public function setCtrlDate($date, $mask = self::DATETIME_MASK)
    {
        if ($date instanceof \DateTime) {
            $this->ctrlDate = $date;
        } else {
            $this->ctrlDate = \DateTime::createFromFormat($mask, $date);
        }

        return $this;
    }

    /**
     * @param bool $decoded
     *
     * @return mixed
     */
    public function getAdditionalData($decoded = false)
    {
        return $decoded and $this->additionalData ? json_decode($this->additionalData, true) : $this->additionalData;
    }

    /**
     * @param mixed $additionalData
     *
     * @return $this
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = is_array($additionalData) ? Tools::jsonEncode($additionalData) : $additionalData;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param mixed $clients
     *
     * @return $this
     */
    public function setClients($clients)
    {
        $this->clients = $clients;

        return $this;
    }

    // Extra tools
    /**
     * Generates additional data array depending on process type
     *
     * @param $data
     *
     * @return $this
     */
    public function generateAdditionalData($data)
    {
        // For signature type, we build additional data based on Signers
        if ($this->type == 'S' and is_array($data)) {
            $additionalData = [];
            foreach ($data as $signer) {
                if ($signer instanceof SignerAbstract) {
                    // $signer must be Signer type instance
                    $additionalData[$signer->getEmail()] = [
                        'name'   => $signer->getName(),
                        'signed' => $signer->getSigned()
                    ];
                } else {
                    $this->additionalData = null;

                    return $this;
                }
            }

            // Set data
            $this->setAdditionalData($additionalData);
        }

        return $this;
    }
}