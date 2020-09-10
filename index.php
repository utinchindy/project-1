<?php 

/**
 * 
 */
class Hewan
{
	public $momo, $doggo, $zya, $masha, $bisa_terbang;

	public function bersuara(){
		return "Hewan Ini Bersuara : ";
	} 
}

/**
 * 
 */
class Kucing extends Hewan
{
	public $bisa_terbang = "Hewan ini tidak bisa terbang";

	public function bersuara()
	{
		echo "Meoww <br> <hr>";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
}

/**
 * 
 */
class Anjing extends Hewan
{
	
	public $bisa_terbang = "Hewan ini tidak bisa terbang";

	public function bersuara()
	{
		echo "Guk Guk <br> <hr>";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
}

/**
 * 
 */
class Elang extends Hewan
{
	public $bisa_terbang = "Hewan ini bisa terbang";
	
	public function bersuara()
	{
		echo "Miippp <br> <hr>";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
}

/**
 * 
 */
class Angsa extends Hewan
{
	public $bisa_terbang = "Hewan ini bisa terbang";
	
	public function bersuara()
	{
		echo "kwaaakk <br> <hr>";
	}

	public function jumlah_kaki(){
		return "Hewan ini memiliki jumlah kaki : ";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah seekor Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo $momo->bersuara(). "<br>";