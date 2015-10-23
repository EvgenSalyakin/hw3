<?php

namespace Documents;

abstract class AbstractDocument implements DocumentInterface
{

    protected $UID;

    protected $documentNumber;
    
    protected $documentDate;

    protected $removed;

    protected $action;

    public function action()
    {
        $this->action = !$this->action;

        return $this->action;
    }

    public function remove()
    {
        $this->removed = !$this->removed;
        $this->action = false;

        return $this->removed;
    }

}