<?php

namespace Bindeo\DataModel;

/**
 * Abstract class with common functionality for data models
 * @package Bindeo\DataModel
 */
abstract class DataModelAbstract
{
    const DATE_MASK = 'Y-m-d H:i:s';

    /**
     * Clean dangerous attributes
     * @return $this
     */
    public function clean()
    {
        foreach (get_object_vars($this) as $prop => $value) {
            if (is_string($value)) {
                $this->$prop = trim(strip_tags($value));
            }
        }

        return $this;
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
     * Optionally auto-populate object attributes with received data
     *
     * @param array $array [optional] Model attributes
     */
    public function __construct($array = null)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                // Transform the key into the attribute format
                $this->__set($key, $value);
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
        $method = 'set' . ucfirst($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        } elseif (property_exists($this, $name)) {
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
                if ($value and !is_object($value) and !is_array($value)) {
                    $props[$key] = $value;
                } elseif ($value instanceof \DateTime) {
                    $props[$key] = $value->format(self::DATE_MASK);
                }
            }
        }

        return $props;
    }
}