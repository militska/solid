<?php


class NotFoundClassException extends Exception
{

}

/**
 * Таска до
 *
 * Class SrpV2
 */
class vFor
{


    /**
     * @param $type
     * @throws NotFoundClassException
     */
    public function render($type, $id)
    {
        $data = '';
        if ($type == 'ticket') {
            $ticket = (new StdClass())->findTicket($id);
            $data = $ticket->id . ' ' . $ticket->title . ' ' . $ticket->state;
        } else if ($type == 'order') {
            $order = (new StdClass())->findOrder($id);
            $data = $order->id . ' ' . $order->fio;
        } else if ($type == 'complaint') {
            $complaint = (new StdClass())->findComplaint($id);
            $data = $complaint->id . ' ' . $complaint->text;
        } else {
            throw new NotFoundClassException();
        }

        $newData = sprintf('<p> %s <p>', $data);

        if ($type == 'ticket') {
            $newData .= "<span style='color: red'>" . $ticket->priority . "</span>";
        }

        if ($type == 'order') {
            $products = '';
            foreach ($this->listItems() as $item) {
                $products .= "<li>" . $item . "</li>";
            }
            $newData .= $products;
        }

        return $newData;
    }

    private function listItems($order)
    {
        return [1 => 'cup with cat', 2 => 'dress', 3 => 'mascara'];
    }

}

class executor
{

    public function execute()
    {
        $renderClass = new vFor();
        echo $renderClass->render(1, 'ticket');

    }
}