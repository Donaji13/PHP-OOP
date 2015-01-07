<?php
	
	class shoes {
	public brand = "sketchers";
	public type = "low tops";
	public price = "$20.00";

		function getShoes() {
		return “{$this>brand}” .
		“{$this>price}”;

		}
	}
	$shoe1 = new Shoes();
	$shoe1->brand = “Sketchers”;
	$shoe1->price = “$20.00”;


	class shirts {
	public size = "S , M , L , XL";
	public price = "$10 - $30";
	public brand = "H & M";
	}

	function getShirts() {
		return “{$this>brand}” .
		“{$this>price}”;

		}
	}
	$shirt1 = new Shirt();
	$shirt1->brand = “H & M”;
	$shirt1->price = “$20.00”;

	class pants {
	public size = "30";
	public brand = "Levis";
	public style = "Husky";
	}


	function getPants() {
		return “{$this>brand}” .
		“{$this>style}”;

		}
	}
	$pants1 = new Pants();
	$pants1->brand = “Levis”;
	$pants1->style = “Husky”;



