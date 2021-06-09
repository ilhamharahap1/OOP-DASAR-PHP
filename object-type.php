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



class CetakInfoProduk{
	public function cetak( Produk $produk ){ // fungsi cetak hanya menerima parameter jenis kelas produk dengan objek apa, ketika berusaha mencetak instan kelas produk yg tidak ada, akan error, harus kelas yang ada
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; //getLabel disini adlah function getLabel yg di buat
		return $str;
	}
}





$produk1 = new Produk("naruto", "masasi","shonen", 30000); 

echo "<hr>";

$produk2 = new Produk("uncharted", "neil", "sony", 250000);
echo "Komik :". $produk1->getLabel();
echo "<br>";
echo "Game :". $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1); //jalnkan function dengan kelas produk1 komik yang telah di buat