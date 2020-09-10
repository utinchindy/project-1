<?php 

/**
 * 
 */
class Hewan
{
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