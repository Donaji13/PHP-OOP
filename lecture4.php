<?php



class Fifa {
	public $Points
	public $Coins
	public $Messi
	public $Packs
	
	function __construct($Points, $Coins, $Messi, $Packs)
	{
		
	$this->Messi=$Messi;
	$this->Points=$Points;
	$this->Coins=$Coins;
	$this->Packs=$Packs;

	}
	
	function getCoins(){
		return "To get" .$this->Coins;
			   "To get" . $this->Packs;

	}
	
}
	class Ibra extends Fifa{

		

	}