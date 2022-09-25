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
            $waktuMain,
            $tipe;
            

    // Dibawah ini adalah methot constructor

    public function __construct ($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "-"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }


    // Di bawah ini adalah method di dalam class

    public function getLabel(){

        // return Berfungsi untuk mengembalikan nilan

        // This digunakan untuk mengambil varibel dari luar method
        return "$this->penulis , $this->penerbit, (Rp $this->harga)";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ";

        // percabangan untuk menentukan tipe
        if($this->tipe == "Komik"){
            $str .= "~ {$this->jmlHalaman} Halaman";
        }elseif($this->tipe == "Game"){
            $str .= "~ {$this->waktuMain} Jam";
        }

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


$produk1 = new Produk("Naruto", "Masaki Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");

// Memanggil class menggunakan new
$produk2 = new Produk("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();