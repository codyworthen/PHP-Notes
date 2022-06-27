<?php

class Task {
	private $description;
	private $completed = false;

//	default constructor required by constructor PDO::FETCH_CLASS
	public function __construct() {}
	
	public function getDescription(): string {
		return $this->description;
	}
	
	public function setDescription($description): void {
		$this->description = $description;
	}
	
	public function isCompleted(): bool {
		return $this->completed;
	}
	
	public function complete(): void {
		$this->completed = true;
	}
}