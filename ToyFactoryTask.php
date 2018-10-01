<?php

class ToyFactory
{
    public function createToy($name)
    {
        return new Toy($name, rand(100, 10000));
    }
}

class Toy
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$toyFactory = new ToyFactory;
// массив для хранения всех игрушек
$toys = array();

// создаем случайное кол-во игрушек
for ($i = rand(5, 20); $i < rand(6, 20); $i++) {
    array_push($toys, $toyFactory->createToy('toy_' . $i));
}

// построчный вывод строки - Название игрушки - стоимость игрушки
$totalPrice = 0;
foreach ($toys as $key => $value) {
    $totalPrice += $value->getPrice();
    echo $value->getName() . " - " . $value->getPrice() . " грн. </br>";
}
echo "Итого: " . $totalPrice;