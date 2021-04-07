<?php


class Ticket implements IRender
{

    public function render($id)
    {
        $newData = '';
        $ticket = (new StdClass())->findTicket($id);
        $data = $ticket->id . ' ' . $ticket->title . ' ' . $ticket->state;

        $newData = sprintf('<p> %s <p>', $data);

        return $newData . "<span style='color: red'>" . $ticket->priority . "</span>";

    }
}