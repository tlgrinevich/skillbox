<?php

	class Cat {
		public $name;

		public function __construct($name) {
			$this->setName($name);
		}

		public function setName($name) {
			$this->name = $name;
		}
	}

	class Dog {
		public $name;

		public function __construct($name) {
			$this->setName($name);
		}

		public function setName($name) {
			$this->name = $name;
		}
	}

	class Fish {
		public $name;

		public function __construct($name) {
			$this->setName($name);
		}

		public function setName($name) {
			$this->name = $name;
		}
	}

	$cat1 = new Cat("Васька");
	$cat2 = new Cat("Матроскин");
	$cat3 = new Cat("Арчи");

	$dog1 = new Dog("Шарик");
	$dog2 = new Dog("Рекс");
	$dog3 = new Dog("Женя");
	$dog4 = new Dog("Арчебальт");
	$dog5 = new Dog("Мухтар");

	$fish = new Fish("Малек");