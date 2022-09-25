<?php
// Jualan Preoduk
// Komik
// Game

class Produk {
    public  $judul = "Judul",
            $penulis= "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;


    // Di bawah ini adalah method di dalam class

    public function getLabel(){

        // return Berfungsi untuk mengembalikan nilan

        // This digunakan untuk mengambil varibel dari luar method
        return "$this->penulis , $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();

// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masahi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// Memanggil class menggunakan new
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// Mencetak menggunakan Function
echo "Komik". $produk3->getLabel();
echo "<br>";
echo "Game". $produk4->getLabel();