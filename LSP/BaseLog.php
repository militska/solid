<?php

abstract class BaseLog
{

    /**
     * @param string $message
     * @param string $level
     * @throws Exception
     */
    public function log(string $message, string $level)
    {
        if ($this->needSave()) {
            $this->internalSaveLog($message);
        }
    }

    /**
     * @throws Exception
     */
    private function needSave() : bool
    {
        throw  new Exception("need implemented");

    }

    /**
     * @param $message
     * @throws Exception
     */
    private function internalSaveLog($message)
    {
        throw  new Exception("need implemented");
    }

}