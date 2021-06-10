<?php 

//constant 
//sebuah identifier menyimpan nilai yang nilai nya tidak dapat berubah ubah, beda nya dengan variabel adalah constant tidak memakai tanda $, dan biasanya menggunakan huruf besar untuk constant, cara penulisan ada 2: 
// define(); define ini tidak bisa di simpan dalam kelas, fungsinya constata global
// conts bisa di gunakan dalam kelas, sehingga bisa digunakan dalam OOP
// dalam php juga sudah ada constant yg di sediakan, yaitu
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// _NAMESPACE__

//define (name, value); , contoh :
// define ('NAMA', "Ilham");
// contoh ke dua const Name = value;
//const UMUR = 24;

// define('NAMA', 'ilham');


// echo NAMA;

// echo "<hr>";

// const UMUR = 24;
// echo UMUR;

// contoh
// class Coba {
// 	const NAMA = 'Ilham';

// }
// echo Coba::NAMA; //pemanggilana ny sama seprti menggunakan static


// echo __LINE__; //ini akan menampilkan baris dimana line di tuliskan, hasil dari ini adalah 40
// echo __FILE__; //ini akan menampilkan file yg bersangkutan, disini akan menampilkan constant.php
// echo __DIR__; ini akan menampilkan dimana file tersimpan, contoh di sini file constan
// echo __FUNCTION__; untuk mengetahui di function man atau kelas mana
// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();


// echo __CLASS__; untuk menampilkan kelas
// echo __TRAIT__;
// echo __METHOD__;
// echo _NAMESPACE__;