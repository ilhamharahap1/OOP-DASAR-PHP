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






class Produk{
	public $judul, 
			$penulis,
			$penerbit;
	protected $diskon = 0;

	private $harga;		//hanya dapat di akses di kelas tententu saja, tidak semua class bisa memanggil begitu saja


	// protected $harga; //hanya bisa di akses oleh class Produk dan turunannya seperti child clas


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){ 
		$this->judul = $judul; 
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}

	




	public function getHarga(){ //kelas ini hanya akan berlaku pada kelas Produk saja, karena sudah di ganti menjadi private
			return $this->harga - ( $this->harga * $this->diskon / 100);
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

		// public function getHarga(){ //ini akan berlaku jika kyeword nya adalah protected karena hanya berlaku untuk class dan turunannya
		// 	return $this->harga;
		// }


		public function setDiskon( $diskon ){
		$this->diskon = $diskon ;
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga(); //pemanggilan ini hanya bisa di lakukan ketika kelas any adlah protected