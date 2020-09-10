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
		return "Meoww";
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
		return "Guk Guk";
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
		return "Miippp";
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
		return "kwaaakk";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah seekor Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Hewan ini memiliki suara ".$momo->bersuara(). "<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah seekor Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Hewan ini memiliki suara ".$doggo->bersuara(). "<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah seekor Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Hewan ini memiliki suara ".$zya->bersuara(). "<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha adalah seekor Angsa <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Hewan ini memiliki suara ".$masha->bersuara(). "<br>";

echo "<hr>";