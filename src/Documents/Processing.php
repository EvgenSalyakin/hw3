<?php

namespace Documents;


class Processing extends AbstractDocument implements DocumentInterface
{
    protected $task;

    protected $description;

    protected $executor;

    protected $price;

    public function __construct($documentNumber, $documentDate, $task, $executor, $price, $description)
    {
        $this->action = false;
        $this->removed = false;
        $this->documentNumber = $documentNumber;
        $this->documentDate = $documentDate;
        $this->description = $description;
        $this->task = $task;
        $this->executor = $executor;
        $this->price = $price;
        $this->documentType = 'Processing';

    }

     /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task)
    {
        $this->task = $task;
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
    public function getExecutor()
    {
        return $this->executor;
    }

    /**
     * @param mixed $executor
     */
    public function setExecutor($executor)
    {
        $this->executor = $executor;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}