<?php  


//inheritance/pewarisan konsep yg menciptakan hirarti antar kelas, memungkinkan menghubungkan antar kelas
//child class , ,mewarisi semua properti dan method dari parent nya(yg visible)
//child class, memperluas(extend) fungsionalitas dari parent nya



//object type - menggunakan objek sebagai tipe data


//ovirriding membuat method di class yg memiliki nama sama di kelas parrent, menimpa method di class parrent


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


	public function getLabel(){ //mengambil nilai hanya penulis dan penerbit
		return "$this->penulis, $this->penerbit"; 
	}


	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
		return $str;
	}



}

	class Komik extends Produk { //extends dari parrent yaitu Produk
		public $jlhHalaman;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jlhHalaman = 0 ){
			parent::__construct($judul, $penulis, $penerbit , $harga  );
			$this->jlhHalaman = $jlhHalaman;
		}
		public function getInfoProduk(){
			$str = "Komik :". parent::getInfoProduk() . " - {$this->jlhHalaman}. Halaman"; //daripada mengulah hal terjadi di parrent di child, dilakukan overiding, yaitu memanggil method getInfoProduk dengn memanggil parent::(method statisc), karena parent bukan string jdi tidak di pakai kurung kurawal, sebelum paren tutup string, setelah paren buka string lagi agar program bisa menampilkan yang harus di tampilkan dan di olah, getInfoProduk merupakan clas method dari parent, buka dari child class
			return $str;
		}

	}


	class Game extends Produk {
		public $waktuMain; //merupakan nilai yang hanya ada pada gamem jadi harus di buat variabel tersendirinya agar tidak membebankan pada parent dan lebih menandakan ini adlah child class

		public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0 ) { // merupakan method yang sama dengan parent, hanya saja disini lebih di spesifikkan karena memasukkan hal yang hanya dimiliki suatu child class seperti waaktu main
			parent::__construct($judul , $penulis, $penerbit , $harga);
			$this->waktuMain = $waktuMain; // contuct yang dimiliki oleh parent, tetapi disini juga lebih di spesifikkan karena mengambil clas dari parrent, tetapi nilainya dari method child itu sendiri seperti waktu main

		}
		

		public function getInfoProduk(){
		$str = " Game :".parent::getInfoProduk() . " ~ {$this->waktuMain}. Jam";
			return $str;
		}

	}





class CetakInfoProduk{
	public function cetak( Produk $produk ){ 
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}
}





$produk1 = new Komik("naruto", "masasi","shonen", 30000, 100); //100 = halaman
echo "<hr>";
$produk2 = new Game("uncharted", "neil", "sony", 250000, 50);


echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();