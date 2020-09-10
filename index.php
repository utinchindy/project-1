<?php 

/**
 * 
 */
class Hewan
{
	public $momo, $doggo, $zya, $masha;

	public function bersuara(){
		return "Hewan Ini Bersuara : ";
	} 
}

/**
 * 
 */
class Kucing extends Hewan
{
	
	public function bersuara()
	{
		echo "Meoww";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
	public function bisa_terbang(){
		return "Hewan ini tidak bisa terbang";
	}
}

/**
 * 
 */
class Anjing extends Hewan
{
	
	public function bersuara()
	{
		echo "Guk Guk";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
	public function bisa_terbang(){
		return "Hewan ini tidak bisa terbang";
	}
}

/**
 * 
 */
class Elang extends Hewan
{
	
	public function bersuara()
	{
		echo "Miippp";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
	public function bisa_terbang(){
		return "Hewan ini bisa terbang";
	}
}

/**
 * 
 */
class Angsa extends Hewan
{
	
	public function bersuara()
	{
		echo "kwaaakk";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
	public function bisa_terbang(){
		return "Hewan ini bisa terbang";
	}
}

