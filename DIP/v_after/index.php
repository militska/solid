<?php

require_once 'Complaint.php';
require_once 'Order.php';
require_once 'Ticket.php';
require_once 'IRender.php';

class NotFoundClassException extends Exception
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
     * @param $type
     * @return Complaint|Order|Ticket
     * @throws Exception
     */
    public static function create($type)
    {
        if ($type === 'order') {
            return new Order();
        }
        if ($type === 'complaint') {
            return new Complaint();
        }

        if ($type === 'ticket') {
            return new Ticket();
        }

        throw new NotFoundClassException();
    }

}

class Executor
{
    public function execute()
    {
        $object = vFor::create('order');
        $renderClass = new vFor();
        echo $object->render();
    }
}