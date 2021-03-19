<?php

require_once 'Complaint.php';
require_once 'Order.php';
require_once 'Ticket.php';
require_once 'IRender.php';

class NotFoundClassException extends Exception
{
}

class IncorrectInterfaceException extends Exception
{
}

/**
 * Таска после
 *
 * Class SrpV2
 */
class vFor
{

    /**
     * @param $obj
     * @return string
     * @throws IncorrectInterfaceException
     * @throws NotFoundClassException
     */
    public function render($obj)
    {
        if (!class_exists($obj::class)) {
            throw new NotFoundClassException();
        }

        if (!($obj::class instanceof IRender)) {
            throw new IncorrectInterfaceException();
        }

        return $obj->render();
    }

}

class Executor
{

    public function execute()
    {
        $ticket = new Ticket(1);
        $renderClass = new vFor();
        echo $renderClass->render($ticket);
    }
}