<?php 

//Construtor adalah sebuah method yg khusus, otomatis di jalankan ketika kelas di instansiasi. otomatis method di jalankan


class Produk{
	public $judul, 
			$penulis,
			$penerbit,
			$harga;	


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){ //nilai default nya disisi pada parameter, ketika hanya sebagian yg memiliki nilai, yg ksoong akan di isi nilai default
		$this->judul = $judul; //variabel pada parameter akan mengambil nilai dari variabel public Produk
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; //jika this-> tidak dibuat, makan dia akan mencetak variable baru, sementara kita ingin mengambil nilai dari properti, untuk itu perlu variable scoope $this->
	}

}


$produk1 = new Produk("naruto", "masasi","shonen", 30000); //setiap produk di buat objecnta,nilai nya diterima oleh constructor dan di pakai mengganti propertinya




echo "<hr>";

$produk2 = new Produk("uncharted", "neil", "sony", 250000);
$produk3 = new Produk("smacke down");
echo "Komik :". $produk1->getLabel();
echo "<br>";
echo "Game :". $produk2->getLabel();
echo "<br>";
var_dump($produk3); //yg terisi hanya nama game pada var_dump