<?php

class User {

	private $fullName;
	private $email;

	private $gender;
	private $age;
	private $phone;

	public function __construct($fullName, $email, $gender = null, $age = null, $phone = null) {
		$this->fullName = $fullName;
		$this->email = $email;

		$this->gender = $gender;
		$this->age = $age;
		$this->phone = $phone;
	}

	private function send($message, $name, $chanel = null) {
		echo "Уведомление клиенту: " . $name . "на " . $chanel . ": " . $message . "</br>";
	}

	public function notifyOnEMail($message) {
		$this->send($message, $this->fullName, 'email');
	}

	public function notifyOnPhone($message) {
		$this->send($message, $this->fullName, 'телефон');
	}

	public function notify($message) {
		if($this->age !== null && $this->age < 18) {
			$this->notifyOnEMail($this->censor($message));

			if($this->phone !== null)
				$this->notifyOnPhone($this->censor($message));
		} else {
			$this->notifyOnEMail($message);

			if($this->phone !== null)
				$this->notifyOnPhone($message);
		}
	}

	private function censor($message) {
		return str_replace("плохое слово", "хорошее слово", $message);
	}

}

$user1 = new User("Гриневич В. И.", "grinevich@transloyd.com");
$user1->notify("Привет");

$user1 = new User("Петров С. К.", "petrovich@gmail.com", "мужик", 40, "+380952221100");
$user1->notify("Привет, плохое слово");