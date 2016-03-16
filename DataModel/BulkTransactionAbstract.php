<?php

namespace Bindeo\DataModel;

abstract class BulkTransactionAbstract extends LocatableAbstract
{
    protected $idBulkTransaction;
    protected $idUser;
    protected $numFiles;
    protected $structure;
    protected $hash;
    protected $status;

    // Optionals
    protected $transaction;
    protected $confirmed;
    protected $files;

    /**
     * @return mixed
     */
    public function getIdBulkTransaction()
    {
        return $this->idBulkTransaction;
    }

    /**
     * @param mixed $idBulkTransaction
     *
     * @return $this
     */
    public function setIdBulkTransaction($idBulkTransaction)
    {
        $this->idBulkTransaction = $idBulkTransaction;

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
    public function getNumFiles()
    {
        return $this->numFiles;
    }

    /**
     * @param mixed $numFiles
     *
     * @return $this
     */
    public function setNumFiles($numFiles)
    {
        $this->numFiles = $numFiles;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param mixed $structure
     *
     * @return $this
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

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
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param array $files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }
}