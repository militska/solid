<?php

require_once 'Complaint.php';
require_once 'Order.php';
require_once 'Ticket.php';

class NotFoundClassException extends Exception
{
}


class Executor
{
    public function execute()
    {
        $id = 3;
        $order = new Order();
        echo $order->renderOrder($id);
    }
}