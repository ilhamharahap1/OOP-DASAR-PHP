<?php 

//jual produk
//jual komik
//game



class Produk{
	public $judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;	


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; //jika this-> tidak dibuat, makan dia akan mencetak variable baru, sementara kita ingin mengambil nilai dari properti, untuk itu perlu variable scoope $this->
	}

}

// $produk1 = new produk(); 
// //var_dump($produk1); ini kan mencetak nilai default, yaitu judul = judul
// $produk1->judul = "naruto";
// var_dump($produk1); //ini akan menimpa nilai default, dari judul akan menjadi naruto

// $produk2 = new Produk();
// $produk2->judul = "warkop"; //ini akan mencetak dua produk, dimana produk ke dua di timpa dengan warkop
// $produk2->tambahProperty = "hahahah"; //karena tidak ada properti bernama ini, makan akan di tambahkan properti bari dengan nilai hahaha
// var_dump($produk2);






//property
//mempresentasikan datd/keadaaan dari sebuah object

//method
//mempresentasikan perilaku dari sebuah objek
//function yg ada didalam pbject
//samaseperti function di dalam php, di tambha visibility di depan nya



$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi khisimo";
$produk3->peneerbit = "shonen jump";
$produk3->harga = 30000;


// echo "Komik : $produk3->penulis, $produk3->peneerbit";
// echo "<br>";
// echo $produk3->getLabel(); // yang di cetak adalah penulis dan penerbit nilai yg telah di timpa di produk3, bukan default lagi



echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();