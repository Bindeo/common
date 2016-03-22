<?php

namespace Bindeo\DataModel;

abstract class ResultSetAbstract
{
    protected $rows;
    protected $numRows;
    protected $numPages;
    protected $curPage;
    protected $error;

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @return mixed
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * @return mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    /**
     * @return mixed
     */
    public function getCurPage()
    {
        return $this->curPage;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Convert the whole ResultSet into a well formed api answer
     *
     * @param string $type
     *
     * @return array
     */
    public function toArray($type)
    {
        $array = [];
        if ($this->numRows > 0) {
            foreach ($this->rows as $row) {
                $array[] = ['type' => $type, 'attributes' => $row->toArray()];
            }
        }

        return $array;
    }
}