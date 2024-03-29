<?php

namespace Bindeo\DataModel;

abstract class FileAbstract extends LocatableAbstract implements StorableFileInterface, SignableInterface, ProcessInterface
{
    protected $idFile;
    protected $clientType;
    protected $idClient;
    protected $mode;
    protected $idMedia;
    protected $name;
    protected $fileName;
    protected $fileOrigName;
    protected $hash;
    protected $size;
    protected $pages;
    protected $date;
    protected $status;

    // Optionals
    protected $tag;
    protected $description;
    protected $idBulk;
    protected $transaction;
    protected $confirmed;
    protected $path;
    protected $signers;
    protected $signerJson;
    protected $pagesPreviews;

    /**
     * @return mixed
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * @param mixed $idFile
     *
     * @return $this
     */
    public function setIdFile($idFile)
    {
        $this->idFile = $idFile;

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
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param mixed $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMedia()
    {
        return $this->idMedia;
    }

    /**
     * @param mixed $idMedia
     *
     * @return $this
     */
    public function setIdMedia($idMedia)
    {
        $this->idMedia = $idMedia;

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
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     *
     * @return FileAbstract
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @param int $len
     *
     * @return mixed
     */
    public function getFileOrigName($len = null)
    {
        if ($len and $len > 0 and $this->fileOrigName and $len < mb_strlen($this->fileOrigName)) {
            return mb_substr($this->fileOrigName, 0, $len) . '...';
        } else {
            return $this->fileOrigName;
        }
    }

    /**
     * @param mixed $fileOrigName
     *
     * @return FileAbstract
     */
    public function setFileOrigName($fileOrigName)
    {
        $this->fileOrigName = $fileOrigName;

        return $this;
    }

    /**
     * @param bool $bin
     *
     * @return mixed
     */
    public function getHash($bin = false)
    {
        return $bin ? hex2bin($this->hash) : $this->hash;
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
     * Get size in KB
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
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param mixed $pages
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

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
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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

    /**
     * @return SignerAbstract[]
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * @param SignerAbstract[] $signers
     *
     * @return $this
     */
    public function setSigners($signers)
    {
        $this->signers = $signers;

        return $this;
    }

    public function getStorageType()
    {
        return $this->mode == 'S' ? 'sign' : 'base';
    }

    /**
     * @return string
     */
    public function getElementType()
    {
        return 'F';
    }

    /**
     * @return int
     */
    public function getElementId()
    {
        return $this->idFile;
    }

    /**
     * @param int $len
     *
     * @return string
     */
    public function getElementName($len = null)
    {
        return $this->getFileOrigName($len);
    }

    /**
     * Store current signer in json format
     *
     * @param string $json
     *
     * @return $this
     */
    public function setSignerJson($json)
    {
        $this->signerJson = $json;

        return $this;
    }

    /**
     * Get the params array for the current signer
     * @return array
     */
    public function getSignerJson()
    {
        if ($this->signerJson and ($signer = json_decode($this->signerJson, true))) {
            return $signer;
        } else {
            return [];
        }
    }

    /**
     * @return mixed
     */
    public function getPagesPreviews()
    {
        return $this->pagesPreviews;
    }

    /**
     * @param mixed $pagesPreviews
     *
     * @return $this
     */
    public function setPagesPreviews($pagesPreviews)
    {
        $this->pagesPreviews = $pagesPreviews;

        return $this;
    }

    /**
     * Encode into JSON the pages previews array
     * @return $this
     */
    public function encodePages()
    {
        if ($this->pagesPreviews) {
            $this->pagesPreviews = json_encode($this->pagesPreviews);
        }

        return $this;
    }

    /**
     * Decode into array the pages previews in JSON
     * @return $this
     */
    public function decodePages()
    {
        if ($this->pagesPreviews) {
            $this->pagesPreviews = json_decode($this->pagesPreviews);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessType()
    {
        return 'N';
    }
}