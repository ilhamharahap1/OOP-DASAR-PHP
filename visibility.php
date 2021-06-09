<?php  

//visibility acces modifier

// konsep yang digunakan untk mengatur akses dari property dan method pda sebuah object
//terdapat 3 keyword dapa visibility
//*public dapat digunakan dimana saja, bahkan di luar kelas
// *protected hanya dapat di gunakan di dalam sebuah method kelas beserta turunanya
// *privat hanya dapat diguakan di dalam sebuah kelas tertentu saja

//knp harus menggunakan visibility
// hanya memperlihatkan aspek dari kela yg di butuhkan saja
// menetukan kebutuhan yang jelas untuk object
// untuk menghindari kendala pada kode untuk menghindari bug



<?php  


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


	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
		return $str;
	}



}

	class Komik extends Produk { 
		public $jlhHalaman;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jlhHalaman = 0 ){
			parent::__construct($judul, $penulis, $penerbit , $harga  );
			$this->jlhHalaman = $jlhHalaman;
		}
		public function getInfoProduk(){
			$str = "Komik :". parent::getInfoProduk() . " - {$this->jlhHalaman}. Halaman"; 
			return $str;
		}

	}


	class Game extends Produk {
		public $waktuMain; 

		public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0 ) { 
			parent::__construct($judul , $penulis, $penerbit , $harga);
			$this->waktuMain = $waktuMain; 

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