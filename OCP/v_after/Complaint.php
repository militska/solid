<?php

class Complaint implements IRender
{

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $complaint = (new StdClass())->findComplaint($this->id);
        $data = $complaint->id . ' ' . $complaint->text;
        return sprintf('<p> %s <p>', $data);

    }

}
