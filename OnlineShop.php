<?php

namespace App;

require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Order.php";
require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Basket.php";
require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Product.php";
require $_SERVER['DOCUMENT_ROOT'] . "/User.php";

use \OnlineShop\Order as Order;
use \OnlineShop\Basket as Basket;
use \OnlineShop\Product as Product;

$macbook = new Product("Apple MacBook", 3000);
$iphone = new Product("Iphone 10", 899);

$basket = new Basket();
$basket->addProduct($macbook, 5);
$basket->addProduct($iphone, 2);

$order = new Order($basket);

$user = new User("Виталий Гриневич", "grinevich@transloyd.com", "мужик", 20, "+380952274428");
$user->notify("Дорогой " . $user->getName() . "! Для вас создан заказ на сумму " . $order->getPrice() . "$ </br>" . $basket->describe());