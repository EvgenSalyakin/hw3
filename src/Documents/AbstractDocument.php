<?php

namespace Documents;

abstract class AbstractDocument
{

    protected $UID;

    protected $docementNumber;
    
    protected $documentDate;

    protected $removed;

    protected $held;

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
    public function getDocementNumber()
    {
        return $this->docementNumber;
    }

    /**
     * @param mixed $docementNumber
     */
    public function setDocementNumber($docementNumber)
    {
        $this->docementNumber = $docementNumber;
    }

    /**
     * @return mixed
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * @param mixed $documentDate
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;
    }

    /**
     * @return mixed
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * @param mixed $removed
     */
    public function setRemoved($removed)
    {
        $this->removed = $removed;
    }

    /**
     * @return mixed
     */
    public function getHeld()
    {
        return $this->held;
    }

    /**
     * @param mixed $held
     */
    public function setHeld($held)
    {
        $this->held = $held;
    }

}