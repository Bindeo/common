<?php

namespace Bindeo\DataModel;

abstract class UserAbstract extends LocatableAbstract implements SpendingStorageInterface
{
    protected $idUser;
    protected $email;
    protected $type;
    protected $name;
    protected $confirmed;
    protected $lang;
    protected $storageLeft;
    protected $stampsLeft;
    // Optionals and temporary attributes
    protected $password;
    protected $oldPassword;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLeft()
    {
        return $this->storageLeft;
    }

    /**
     * @param mixed $storageLeft
     *
     * @return $this
     */
    public function setStorageLeft($storageLeft)
    {
        $this->storageLeft = $storageLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStampsLeft()
    {
        return $this->stampsLeft;
    }

    /**
     * @param mixed $stampsLeft
     *
     * @return $this
     */
    public function setStampsLeft($stampsLeft)
    {
        $this->stampsLeft = $stampsLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * @param mixed $oldPassword
     *
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    // AUX METHODS
    /**
     * Clean dangerous attributes
     * @return $this
     */
    public function clean()
    {
        parent::clean();

        if ($this->email) {
            mb_strtolower($this->email);
        }

        return $this;
    }
}