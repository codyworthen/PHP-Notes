<?php

class Task {
	private $description;
	private $completed = false;
	
	// constructor
	public function __construct($description) {
		$this->description = $description;
	}
	
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