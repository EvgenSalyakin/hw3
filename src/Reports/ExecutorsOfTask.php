<?php

namespace Reports {

    class ExecutorsOfTask extends AbstractReport
    {
        protected $task;

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

    }
}
