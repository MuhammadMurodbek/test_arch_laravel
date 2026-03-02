<?php

namespace App\DTO;

abstract class BaseDataObject
{
    /**
     * Initialize DTO with array data
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Convert DTO (including nested DTOs) to array
     */
    public function toArray(): array
    {
        $result = [];
        foreach (get_object_vars($this) as $key => $value) {
            if ($value instanceof BaseDataObject) {
                $result[$key] = $value->toArray();
            } elseif (is_array($value)) {
                $result[$key] = $this->parseArray($value);
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    /**
     * Recursively parse arrays for nested DTOs
     */
    protected function parseArray(array $array): array
    {
        foreach ($array as $key => $value) {
            if ($value instanceof BaseDataObject) {
                $array[$key] = $value->toArray();
            } elseif (is_array($value)) {
                $array[$key] = $this->parseArray($value);
            }
        }
        return $array;
    }
}
