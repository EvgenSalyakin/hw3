<?php

namespace Reports;

abstract class AbstractReport
{

    protected $UID;

    protected $name;

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $firstName
     */
    protected function setUID($UID)
    {
        $this->UID = $UID;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $lastName
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}