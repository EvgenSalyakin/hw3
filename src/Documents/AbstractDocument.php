<?php

namespace Documents;

abstract class AbstractDocument
{

    protected $UID;

    protected $number;
    
    protected $dateTime;

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     */
    protected function setUID($UID)
    {
        $this->UID = $UID;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }


}