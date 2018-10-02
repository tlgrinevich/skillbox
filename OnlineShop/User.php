<?php

namespace OnlineShop;

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function notify(Order $order)
    {
        $order->getBasket()->describe();
        return "Дорогой " . $this->getName() . "! Для вас создан заказ на сумму " . $order->getPrice() . "$ </br>";
    }
}