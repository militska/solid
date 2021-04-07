<?php

class Complaint implements IRender
{

    /**
     * @return string
     */
    public function render($id)
    {
        $complaint = (new StdClass())->findComplaint($id);
        $data = $complaint->id . ' ' . $complaint->text;
        return sprintf('<p> %s <p>', $data);
    }

}
