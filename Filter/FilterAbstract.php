<?php

namespace Bindeo\Filter;

abstract class FilterAbstract
{
    protected $page;
    protected $numRows;

    public function __construct($request)
    {
        $this->page = isset($request['page']) ? (int)$request['page'] : 1;
        $this->numRows = isset($request['numRows']) ? (int)$request['numRows'] : 20;
    }

    /**
     * Clean dangerous attributes
     */
    public function clean()
    {
        foreach (get_object_vars($this) as $prop => $value) {
            if (is_string($value)) {
                $this->$prop = trim(strip_tags($value));
            }
        }
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * @param int $numRows
     *
     * @return $this
     */
    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;

        return $this;
    }

    /**
     * Returns an array with the object attributes
     * @return array
     */
    public function toArray()
    {
        $array = get_object_vars($this);
        $props = [];
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if ($value) {
                    $props[$key] = $value;
                }
            }
        }

        return $props;
    }
}