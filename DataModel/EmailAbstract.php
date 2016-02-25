<?php

namespace Bindeo\DataModel;

abstract class EmailAbstract extends LocatableAbstract
{
    protected $idEmail;
    protected $idUser;
    protected $content;
    protected $subject;
    protected $toList;
    protected $attachedList;
    protected $hash;
    protected $size;
    protected $date;
    protected $status;

    // Optionals
    protected $transaction;

    /**
     * @return mixed
     */
    public function getIdEmail()
    {
        return $this->idEmail;
    }

    /**
     * @param mixed $idEmail
     *
     * @return $this
     */
    public function setIdEmail($idEmail)
    {
        $this->idEmail = $idEmail;

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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return array
     */
    public function getToList()
    {
        return $this->toList;
    }

    /**
     * @param array $toList
     *
     * @return $this
     */
    public function setToList(array $toList)
    {
        $this->toList = $toList;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachedList()
    {
        return $this->attachedList;
    }

    /**
     * @param mixed $attachedList
     *
     * @return $this
     */
    public function setAttachedList($attachedList)
    {
        $this->attachedList = $attachedList;

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
}