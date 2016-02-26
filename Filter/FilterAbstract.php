<?php

namespace Bindeo\Filter;

abstract class FilterAbstract
{
    protected $page;
    protected $numRows;

    public function __construct($request)
    {
        if (isset($request['page'])) {
            $this->page = $request['page'];
        }
        if (isset($request['numRows'])) {
            $this->numRows = $request['numRows'];
        } else {
            $this->numRows = 20;
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