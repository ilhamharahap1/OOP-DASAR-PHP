<?php 

//static keyword
//member yg terkait dengan kelas, bukan dengan objek
//nilai static akan selalu tetap meskipun objek di instansiasi berulang kali
//membuat kode menjadi procedural
// static biasa di gunakan pada menu help
// digunaan di calss class utility pada framework
//

class ContohKasus{
	public static $angka = 1;

	public static function halo(){
		return "halo " . self::$angka . "kali "; //this tidak bisa di gunakan disini, karena this hanya berfungsi ketika object sudah di instansiasi, disini karena objek tidak di instansiasi, di gunakan self::
	}

}

echo ContohKasus::$angka;
echo "<hr>";
echo ContohKasus::halo();
echo "<hr>";
echo ContohKasus::halo();


echo "<hr>";





//contoh tidak menggunakan static

class Contoh1 {
	public  $angka = 1;

	public function halllo() {
		return "Hallo " . $this->angka++ . "kali. <br>";
	}
}

$obj = new Contoh1;
echo $obj->halllo();
echo $obj->halllo();
echo $obj->halllo();

echo "<hr>";

$obj2 = new Contoh1;
echo $obj2->halllo();
echo $obj2->halllo();
echo $obj2->halllo();




echo "<hr>";


//contoh menggunakan static
echo "menggunakan static";


class Contoh {
	public static $angka = 1;

	public function hallo() {
		return "Hallo " . self::$angka++ . "kali. <br>";
	}
}


$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();










