<?php

class HungryCat {
	public $name;
	public $color;
	public $favouriteFood;

	public function __construct($name, $color, $food) {
		$this->name = $name;
		$this->color = $color;
		$this->favouriteFood = $food;
	}

	public function eat($food) {
		$defaultExpression = "Голодный кот " . $this->getName() . ", особые приметы: цвет - " . $this->getColor() . ", съел " . $food;

		if($food === $this->getFavouriteFood())
			echo $defaultExpression . " и замурчал 'мррррр' от своей любимой еды";
		else
			echo $defaultExpression;
	}

	public function getName() {
		return $this->name;
	}

	public function getColor() {
		return $this->color;
	}

	public function getFavouriteFood() {
		return $this->favouriteFood;
	}
}

$cat1 = new Cat("Матроскин", "серый", "молоко");
$cat2 = new Cat("Васька", "белый", "рыба");

$cat1->eat("рыба");
$cat1->eat("колбаса");
$cat1->eat("молоко");
$cat1->eat("картошка");
$cat1->eat("шоколад");

$cat1->eat("сыр");
$cat1->eat("рыба");
$cat1->eat("молоко");
$cat1->eat("салат");
$cat1->eat("капуста");