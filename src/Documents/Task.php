<?php

namespace Documents;

//use Catalogs\Organization, Catalogs\Worker;

class Task extends AbstractDocument
{

    protected $description;

    protected $status;

    protected $processing;

    protected $completion;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * @param mixed $processing
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;
    }

    /**
     * @return mixed
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * @param mixed $completion
     */
    public function setCompletion($completion)
    {
        $this->completion = $completion;
    }

}