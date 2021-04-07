<?php


class Ticket implements IRender
{
    private $id;

    public function create()
    {
        $this->id = uniqid();
    }

    public function render()
    {
        $newData = '';
        $ticket = (new StdClass())->findTicket($this->id);
        $data = $ticket->id . ' ' . $ticket->title . ' ' . $ticket->state;

        $newData = sprintf('<p> %s <p>', $data);

        return $newData . "<span style='color: red'>" . $ticket->priority . "</span>";

    }
}