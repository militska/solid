<?php

class Complaint
{

    /**
     * @return string
     */
    public function getComplaint($id)
    {
        $complaint = (new StdClass())->findComplaint($id);
        $data = $complaint->id . ' ' . $complaint->text;
        return sprintf('<p> %s <p>', $data);
    }

}
