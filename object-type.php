<?php 

//object type - menggunakan objek sebagai tipe data


class Produk{
	public $judul, 
			$penulis,
			$penerbit,
			$harga;	


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){ 
		$this->judul = $judul; 
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; 
	}

}


$produk1 = new Produk("naruto", "masasi","shonen", 30000); 




echo "<hr>";

$produk2 = new Produk("uncharted", "neil", "sony", 250000);
$produk3 = new Produk("smacke down");
echo "Komik :". $produk1->getLabel();
echo "<br>";
echo "Game :". $produk2->getLabel();
echo "<br>";
var_dump($produk3); 