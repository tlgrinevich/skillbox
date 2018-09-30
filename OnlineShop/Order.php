<?php

namespace OnlineShop;

class Order {

	private $basket;

	public function __construct($basket) {
		$this->basket = $basket;
	}

	public function getBasket() {
		return $this->basket;
	}

	public function getPrice() {

	}
}