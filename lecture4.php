<?php



class Fifa
 {
	public $Points;
	public $Coins;
	public $Messi;
	public $Packs;
	
	function __construct($Points, $Coins, $Messi, $Packs)
	{
			
	$this->Points=$Points;
	$this->Coins=$Coins;
	$this->Messi=$Messi;
	$this->Packs=$Packs;

	}
	
	function getCoins(){
		return "To get: " . $this->Points . "<br />" . 
			   "To get: " . $this->Coins . "<br />" . 
			   "To get: " . $this->Messi . "<br />" . 
			   "To get: " . $this->Packs;
	}

}

	//$Ibra = new Fifa(20, 60, "player", "cards");
	//echo $Ibra->getCoins();

/*
	class Ronoldo extends Fifa{

	function __construct($Points, $Coins, $Messi, $Packs, $Neymar)
	{

		parent::__construct($Points, $Coins, $Messi, $Packs);
		$this->Neymar=$Neymar;

	}
		function getNeymar(){
		return "this is:" . $this->Neymar;
		}
	}

	$Bale = new Ronoldo("money", "money", "player", "cards", "player");	
	echo $Bale->getCoins() . "<br />";
	echo $Bale->getNeymar();	
*/
	class cambaross extends Fifa{

	function __construct($Points, $Coins, $Messi, $Packs, $Robben)
	{

		parent::__construct($Points, $Coins, $Messi, $Packs);
		$this->Robben=$Robben;

	}
		function getRobben(){
		return "this is:" . $this->Robben;
		}
	}

	$Cesar = new cambaross("money", "money", "player", "cards", "player");	
	echo $Cesar->getCoins() . "<br />";
	echo $Cesar->getRobben();	

	?>
	?>

	