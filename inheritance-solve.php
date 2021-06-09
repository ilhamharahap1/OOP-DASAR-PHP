<?php  


//inheritance/pewarisan konsep yg menciptakan hirarti antar kelas, memungkinkan menghubungkan antar kelas
//child class , ,mewarisi semua properti dan method dari parent nya(yg visible)
//child class, memperluas(extend) fungsionalitas dari parent nya



//object type - menggunakan objek sebagai tipe data


//penyelesian nya adalah dengan membuat parrent class dan child class, mengapus inialisasi waktu dan halaman dengan mengisi di bagian child clas nya. child class bisa mengambil method di parret, sederhananya program akan mengecek code di child clas, jika tidak ada ,dia akan mengambil dari parrent nya


class Produk{
	public $judul, 
			$penulis,
			$penerbit,
			$harga,
			$jlhHalaman,
			$waktuMain;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jlhHalaman = 0, $waktuMain = 0){ 
		$this->judul = $judul; 
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jlhHalaman = $jlhHalaman;
		$this->waktuMain = $waktuMain;
		
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; 
	}


	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
		return $str;
	}



}

	class Komik extends Produk { //extends dari parrent yaitu Produk
		public function getInfoProduk(){
			$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jlhHalaman}. Halaman";
			return $str;
		}

	}


	class Game extends Produk {
		public function getInfoProduk(){
			$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain}. Jam";
			return $str;
		}

	}





class CetakInfoProduk{
	public function cetak( Produk $produk ){ 
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}
}





$produk1 = new Komik("naruto", "masasi","shonen", 30000, 100, 0); //100 = halaman
echo "<hr>";
$produk2 = new Produk("uncharted", "neil", "sony", 250000, 0, 50);


echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();