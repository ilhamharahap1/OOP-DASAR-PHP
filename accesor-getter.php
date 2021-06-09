<?php  

//setter getter(accesor method) menghindari ketika membuat properti visibility public, agas tidak bisa di akses sembarangan/secara langsung

class Produk{
	private $judul, 
			$penulis,
			$penerbit;
	protected $diskon = 0;

	private $harga;		


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){ 
		$this->judul = $judul; 
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}


	public function setJudul($judul){ //untuk langsung merubah judul tidak akan bisa, karena propertinya privat, jika ingin merubah judul nya harus buat method baru, dengan nama lain membuat celahnya
		// if ( !is_string($judul)) {
		// 	throw new Exception("Judul Harus String");
			
		// } peringatah kerika mangubah judul bukan string
		$this->judul = $judul;
	}



	public function setPenulis($penulis){ 
		 $this->penulis = $penulis;
	}


	public function getPenulis(){
		return $this->penulis;
	}



	public function setPenerbit($penerbit){ 
		 $this->penerbit = $penerbit;
	}


	public function getPenerbit(){
		return $this->penulis;
	}





	public function getJudul(){ //karena Produk adalah private, untuk mengakses nilai yang ada di dalam nya, maka harus di buat method yang bisa mengaksesnya di dalam class Produk itu sendiri atau bisa di sebut harus di buat celah nya

		return $this->judul;
	}

	

	public function setHarga($harga){ 
		 $this->$penulis = $harga;
	}


	public function getHarga(){ 
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
echo $produk2->getHarga(); 
echo "<hr>";


$produk1->setJudul("JudulBaru");
echo $produk1->getJudul();