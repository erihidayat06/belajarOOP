<?php
// Jualan Preoduk
// Komik
// Game

class Produk {
    public  $judul = "Judul",
            $penulis= "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;
            

    // Dibawah ini adalah methot constructor

    public function __construct ($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    // Di bawah ini adalah method di dalam class

    public function getLabel(){

        // return Berfungsi untuk mengembalikan nilan

        // This digunakan untuk mengambil varibel dari luar method
        return "$this->penulis , $this->penerbit, $this->harga";
    }

}


$produk1 = new Produk("Naruto", "Masaki Kisimoto", "Shonen Jump", 30000);

// Memanggil class menggunakan new
$produk2 = new Produk("Uncharted", "Neil Drucmann", "Sony Computer", 250000);

$produk3 = new Produk();

var_dump($produk3);

// Mencetak menggunakan Function
echo "Komik". $produk1->getLabel();
echo "<br>";
echo "Game". $produk2->getLabel();
echo "<br>";
echo "Judul Komik : " . $produk1->getlabel();