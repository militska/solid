<?php

class LogFile extends BaseLog
{


    private function needSave()
    {
        return true;
    }


    private function internalSaveLog($message)
    {
        file_put_contents(__DIR__ . '/all.log', $message . "\n");
    }
}