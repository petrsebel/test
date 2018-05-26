<?php 

Class Auto {
	private $kola;
	private $kone;
	public $barva;

	public function __construct(){
		$this->kola=4;
	}

	public function getKola(){
		return $this->kola;
	}
	public function getBarva(){
		return $this->barva;
	}
	public function setBarva($barva){
		$this->barva = $barva;
	}
}

Class Nakladak extends Auto {
	
}
?>