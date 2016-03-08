<?php

namespace Bindeo\Filter;

class FilesFilter extends FilterAbstract
{
    protected $idUser;
    protected $name;
    protected $specialFilter;
    protected $status;
    protected $fileType;
    protected $mediaType;
    protected $order;

    // Special filters
    const SPECIAL_NOTARIZED  = 1;
    const SPECIAL_NOTARIZING = 2;

    // Status
    const STATUS_ACTIVE  = 'A';
    const STATUS_TRASH   = 'T';
    const STATUS_DELETED = 'D';

    // Orders
    const ORDER_DATE_DESC = 1;
    const ORDER_DATE_ASC  = 2;
    const ORDER_NAME_ASC  = 3;
    const ORDER_NAME_DESC = 4;
    const ORDER_SIZE_ASC  = 5;
    const ORDER_SIZE_DESC = 6;

    public function __construct($request = [])
    {
        parent::__construct($request);

        if (isset($request['idUser'])) {
            $this->idUser = $request['idUser'];
        }

        if (isset($request['name'])) {
            $this->name = $request['name'];
        }

        if (isset($request['specialFilter']) and ($request['specialFilter'] >= 1 and $request['specialFilter'] <= 2)) {
            $this->specialFilter = $request['specialFilter'];
        }

        if (isset($request['status']) and in_array($request['status'], ['A', 'T', 'D'])) {
            $this->status = $request['status'];
        } else {
            $this->status = 'A';
        }

        if (isset($request['fileType'])) {
            $this->fileType = $request['fileType'];
        }

        if (isset($request['mediaType'])) {
            $this->mediaType = $request['mediaType'];
        }

        if (isset($request['order']) and ($request['order'] >= 1 and $request['order'] <= 7)) {
            $this->order = $request['order'];
        } else {
            $this->order = self::ORDER_DATE_DESC;
        }
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
    public function getSpecialFilter()
    {
        return $this->specialFilter;
    }

    /**
     * @param mixed $specialFilter
     *
     * @return $this
     */
    public function setSpecialFilter($specialFilter)
    {
        $this->specialFilter = $specialFilter;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
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
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param mixed $mediaType
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}