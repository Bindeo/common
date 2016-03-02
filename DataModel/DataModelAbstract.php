<?php

namespace Bindeo\DataModel;

/**
 * Abstract class with common functionality for data models
 * @package Bindeo\DataModel
 */
abstract class DataModelAbstract
{
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
     * Transform the key into the attribute format
     *
     * @param string $key
     *
     * @return string
     */
    protected function convertKey($key)
    {
        return preg_replace_callback('/_([a-z])/', function ($matches) {
            return strtoupper($matches[1]);
        }, str_replace('fk_', '', $key));
    }

    /**
     * Optionally autopopulate object attributes with received data
     *
     * @param array $array [optional] Model attributes
     */
    public function __construct($array = null)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                // Transform the key into the attribute format
                $var = $this->convertKey($key);
                if (property_exists($this, $var)) {
                    $this->$var = $value;
                }
            }
        }
    }

    /**
     * Magic setter
     *
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $name = $this->convertKey(strtolower($name));
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
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
                if ($value and !is_object($value)) {
                    $props[$key] = $value;
                }
            }
        }

        return $props;
    }
}