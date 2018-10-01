<?php

namespace OnlineShop;

class Basket
{
    private $basket = array();

    public function addProduct(Product $product, $quantity)
    {
        array_push($this->basket, array(
            'product' => $product,
            'quantity' => $quantity
        ));
    }

    public function getPrice()
    {
        $totalPrice = 0;
        foreach ($this->basket as $key => $value) {
            $totalPrice += $value['product']->getPrice() * $value['quantity'];
        }

        return $totalPrice;
    }

    public function describe()
    {
        echo "ИНФОРМАЦИЯ О КОРЗИНЕ: </br>";
        foreach ($this->basket as $key => $value) {
            echo $value['product']->getName() . " - " . $value['product']->getPrice() . ". Кол-во: " . $value['quantity'] . "</br>";
        }
        echo "Общая цена: " . $this->getPrice() . "</br>";
    }
}