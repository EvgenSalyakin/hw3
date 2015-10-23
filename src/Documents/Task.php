<?php

namespace Documents;

class Task extends AbstractDocument implements DocumentInterface
{

    protected $description;

    protected $status;

    protected $processing;

    protected $completion;

    public function __construct($documentNumber, $documentDate, $contractor, $description)
    {
        $this->action = false;
        $this->removed = false;
        $this->documentNumber = $documentNumber;
        $this->documentDate = $documentDate;
        $this->description = $description;
        $this->status = 'new';
        $this->description = null;
        $this->completion = null;
        $this->contractor = $contractor;
    }

    /**
     * @return mixed
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @param mixed $documentNumber
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * @return mixed
     */
    public function getProcessing()
    {
        return $this->processing;
    }

}