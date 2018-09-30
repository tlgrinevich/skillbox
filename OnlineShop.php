<?php

namespace App;

require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Order.php";
require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Basket.php";
require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/Product.php";
require $_SERVER['DOCUMENT_ROOT'] . "/OnlineShop/User.php";

use \OnlineShop\Order as Order;
use \OnlineShop\Basket as Basket;
use \OnlineShop\Product as Product;
use \OnlineShop\User as User;

$macbook = new Product("Apple MacBook", 3000);
$iphone = new Product("Iphone 10", 899);

$basket = new Basket();
$basket->addProduct($macbook, 5);
$basket->addProduct($iphone, 2);

$order = new Order($basket);

$user = new User("Виталий");
echo $user->notify($order);