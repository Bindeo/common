<?php

namespace Bindeo\DataModel;

abstract class BulkFileAbstract extends DataModelAbstract implements StorableFileInterface, BulkItemInterface
{
    protected $idBulkFile;
    protected $idBulk;
    protected $uniqueId;
    protected $clientType;
    protected $idClient;
    protected $fileName;
    protected $fileOrigName;
    protected $fileType;
    protected $idSign;
    protected $fullName;
    /**
     * @var \DateTime
     */
    protected $fileDate;
    protected $idContent;
    protected $qualification;
    protected $hash;
    protected $size;
    /**
     * @var \DateTime
     */
    protected $ctrlDate;
    protected $status;

    // Optionals
    protected $ip;
    protected $path;
    protected $transaction;
    protected $bulkExternalId;

    public function getStorageType()
    {
        return 'bulk';
    }

    /**
     * @return mixed
     */
    public function getIdBulkFile()
    {
        return $this->idBulkFile;
    }

    /**
     * @param mixed $idBulkFile
     *
     * @return $this
     */
    public function setIdBulkFile($idBulkFile)
    {
        $this->idBulkFile = $idBulkFile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdBulk()
    {
        return $this->idBulk;
    }

    /**
     * @param mixed $idBulk
     *
     * @return $this
     */
    public function setIdBulk($idBulk)
    {
        $this->idBulk = $idBulk;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param mixed $uniqueId
     *
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

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
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileOrigName()
    {
        return $this->fileOrigName;
    }

    /**
     * @param mixed $fileOrigName
     *
     * @return $this
     */
    public function setFileOrigName($fileOrigName)
    {
        $this->fileOrigName = $fileOrigName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param mixed $fileType
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSign()
    {
        return $this->idSign;
    }

    /**
     * @param mixed $idSign
     *
     * @return $this
     */
    public function setIdSign($idSign)
    {
        $this->idSign = $idSign;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFileDate()
    {
        return $this->fileDate;
    }

    /**
     * @param string $mask
     *
     * @return mixed
     */
    public function getFormattedFileDate($mask = self::DATE_MASK)
    {
        if ($this->fileDate) {
            return $this->fileDate->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $fileDate
     * @param string $mask [optional]
     *
     * @return $this
     */
    public function setFileDate($fileDate, $mask = self::DATE_MASK)
    {
        if ($fileDate instanceof \DateTime) {
            $this->fileDate = $fileDate;
        } else {
            $this->fileDate = \DateTime::createFromFormat($mask, $fileDate);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * @param mixed $idContent
     *
     * @return $this
     */
    public function setIdContent($idContent)
    {
        $this->idContent = $idContent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param mixed $qualification
     *
     * @return $this
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCtrlDate()
    {
        return $this->ctrlDate;
    }

    /**
     * @param string $mask
     *
     * @return mixed
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
     * @param mixed  $ctrlDate
     * @param string $mask
     *
     * @return $this
     */
    public function setCtrlDate($ctrlDate, $mask = self::DATETIME_MASK)
    {
        if ($ctrlDate instanceof \DateTime) {
            $this->ctrlDate = $ctrlDate;
        } else {
            $this->ctrlDate = \DateTime::createFromFormat($mask, $ctrlDate);
        }

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
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param mixed $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBulkExternalId()
    {
        return $this->bulkExternalId;
    }

    /**
     * @param mixed $bulkExternalId
     *
     * @return $this
     */
    public function setBulkExternalId($bulkExternalId)
    {
        $this->bulkExternalId = $bulkExternalId;

        return $this;
    }

    /**
     * @return array
     */
    public function getStructure()
    {
        // TODO: Implement getStructure() method.
    }
}