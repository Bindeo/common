<?php

namespace Bindeo\DataModel;

abstract class BulkFileAbstract extends DataModelAbstract
{
    protected $idBulkFile;
    protected $idBulk;
    protected $uniqueId;
    protected $idUser;
    protected $fileOrigName;
    protected $fileType;
    protected $idSign;
    protected $fullName;
    protected $fileDate;
    protected $idContent;
    protected $qualification;
    protected $hash;
    protected $size;
    protected $ctrlDate;
    protected $status;

    // Optionals
    protected $ip;
    protected $transaction;
    protected $confirmed;
    protected $path;

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
     * @return mixed
     */
    public function getFileDate()
    {
        return $this->fileDate;
    }

    /**
     * @param mixed $fileDate
     *
     * @return $this
     */
    public function setFileDate($fileDate)
    {
        $this->fileDate = $fileDate;

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
     * @param mixed $ctrlDate
     *
     * @return $this
     */
    public function setCtrlDate($ctrlDate)
    {
        $this->ctrlDate = $ctrlDate;

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
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param mixed $confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

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
}