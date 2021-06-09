<?php 

//Construtor adalah sebuah method yg khusus, otomatis di jalankan ketika kelas di instansiasi. otomatis method di jalankan


class Produk{
	public $judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;	


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; //jika this-> tidak dibuat, makan dia akan mencetak variable baru, sementara kita ingin mengambil nilai dari properti, untuk itu perlu variable scoope $this->
	}

}


$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi khisimo";
$produk3->peneerbit = "shonen jump";
$produk3->harga = 30000;



echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();