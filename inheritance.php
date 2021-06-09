<?php  


//inheritance/pewarisan konsep yg menciptakan hirarti antar kelas, memungkinkan menghubungkan antar kelas
//child class , ,mewarisi semua properti dan method dari parent nya(yg visible)
//child class, memperluas(extend) fungsionalitas dari parent nya



//object type - menggunakan objek sebagai tipe data


//masalah disini adalah ketika menambahkan jumlah halaman, waktu main dan tipe nya apa, kasus disini ada komik dan game, dimana komik memiliki halamana, sementara game memiliki waktu bukan halaman.
// salah satu caranya adalah dengan menambah variable baru, di inisialkan di construct, membuat method baru getInfoLengkap jika komik menampilkan halaman, jika game menampilkan waktu main. kemudian pada pemanggilan pada produk komik di beri inisal halaman dan tipe nya komik, kemudian pada game di buat waktu dengan tipe nya adalah game


class Produk{
	public $judul, 
			$penulis,
			$penerbit,
			$harga,
			$jlhHalaman,
			$waktuMain,
			$tipe;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jlhHalaman = 0, $waktuMain = 0, $tipe){ 
		$this->judul = $judul; 
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jlhHalaman = $jlhHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; 
	}


	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
		if ($this->tipe == "Komik") {
			$str .= " -{$this->jlhHalaman} Halaman.";
		}else if ( $this->tipe == "Gamen"){
			$str .= " -{$this->waktuMain} Jam.";
		}
		return $str;
	}



}



class CetakInfoProduk{
	public function cetak( Produk $produk ){ 
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}
}





$produk1 = new Produk("naruto", "masasi","shonen", 30000, 100, 0, "Komik"); //100 = halaman
echo "<hr>";
$produk2 = new Produk("uncharted", "neil", "sony", 250000, 0, 50, "Game"); //50 = waktu main


echo $produk1->getInfoLengkap();
echo "<hr>";
echo $produk2->getInfoLengkap();