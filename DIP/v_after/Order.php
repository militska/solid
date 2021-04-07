<?php


class Order implements IRender
{
    private $id;

    public function create()
    {
        $this->id = uniqid();
    }


    public function render()
    {
        $order = (new StdClass())->findOrder($this->id);
        $data = $order->id . ' ' . $order->fio;

        $newData = sprintf('<p> %s <p>', $data);

        $products = '';
        foreach ($this->listItems() as $item) {
            $products .= "<li>" . $item . "</li>";

            $newData .= $products;
        }
    }

    private function listItems($order)
    {
        return [1 => 'cup with cat', 2 => 'dress', 3 => 'mascara'];
    }
}