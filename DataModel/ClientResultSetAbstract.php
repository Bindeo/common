<?php

namespace Bindeo\DataModel;

abstract class ClientResultSetAbstract extends ResultSetAbstract
{
    protected $entity;

    /**
     * Construct a ResultSet class from data provided in private API response
     *
     * @param \stdClass|null $data
     */
    public function __construct(\stdClass $data = null)
    {
        // Convert the answer into objects
        if ($data === null) {
            $this->numRows = 0;
            $this->numPages = 0;
        } elseif (isset($data->data)) {
            $this->rows = [];
            if (isset($data->total_pages)) {
                // List of data
                $this->numPages = $data->total_pages;
                $this->curPage = isset($data->current_page) ? $data->current_page : 1;
                $this->numRows = count($data->data);

                foreach ($data->data as $row) {
                    list($key, $row) = $this->getObject($row);
                    $this->rows[$key] = $row;
                }
            } else {
                // Single registry
                // Check if we have content
                if (count((array)$data->data->attributes) > 0) {
                    list($key, $row) = $this->getObject($data->data);
                    $this->rows[0] = $row;
                    $this->numRows = 1;
                } else {
                    $this->numRows = 0;
                    $this->numPages = 0;
                }
            }
        } elseif (isset($data->array)) {
            $this->numRows = 1;
            $this->rows[0] = (array)$data->array;
        } elseif (isset($data->error)) {
            $this->error = (array)$data->error;
        }
    }

    /**
     * Get an object entity
     *
     * @param \stdClass $data
     *
     * @return mixed
     */
    abstract protected function getObject(\stdClass $data);

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }
}