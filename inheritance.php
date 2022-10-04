<?php
// Jualan Preoduk
// Komik
// Game

class Produk {
    public  $judul = "Judul",
            $penulis= "Penulis",
            $penerbit = "Penerbit",
            $harga = 0,
            $jmlHalaman,
            $waktuMain;
            

    // Dibawah ini adalah methot constructor

    public function __construct ($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }


    // Di bawah ini adalah method di dalam class

    public function getLabel(){

        // return Berfungsi untuk mengembalikan nilan

        // This digunakan untuk mengambil varibel dari luar method
        return "$this->penulis , $this->penerbit, (Rp $this->harga)";
    }

    public function getInfoProduk(){
        $str = ": {$this->judul} | {$this->getLabel()} ";


        return $str;
    }

}

// class komik anak/turunan dari class produk
class Komik extends produk{
    public function GetInfoProduk(){
        $str =  $str = "Komik : {$this->judul} | {$this->getLabel()} - {$this->jmlHalaman} Halaman ";
        return $str;

    }
}

class Game extends Produk{
    public function GetInfoProduk(){
        $str =  $str = "Game : {$this->judul} | {$this->getLabel()} - {$this->waktuMain} Jam ";
        return $str;

    }
}


    // Di bawah ini adalah class object type

class CetakInfoProduk {

    // Parameter hanya menerima dari class produk
    // dengan menambah nama class produk di depan parameter methot cetak
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} ";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masaki Kisimoto", "Shonen Jump", 30000, 100, 0);

// Memanggil class menggunakan new
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();