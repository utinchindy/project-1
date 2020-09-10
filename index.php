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
		echo "Meoww";
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
		echo "Guk Guk";
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
		echo "Miippp";
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
		echo "kwaaakk";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah seekor Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo $momo->bersuara(). "<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah seekor Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo $doggo->bersuara(). "<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah seekor Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo $zya->bersuara(). "<br>";

echo "<hr>";