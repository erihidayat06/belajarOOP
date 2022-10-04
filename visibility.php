<?php
// Jualan Preoduk
// Komik
// Game

class Produk {
    public  $judul,
            $penulis,
            $penerbit;

    protected $diskon = 0;

    private $harga;
            

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
        return "$this->penulis , $this->penerbit, (Rp $this->harga)";
    }


    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} ";


        return $str;
    }

}

// class komik anak/turunan dari class produk   
class Komik extends produk{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){

    parent::__construct ($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
    }

    public function GetInfoProduk(){
        $str =  $str = "Komik : " . parent::getInfoProduk(). "- {$this->jmlHalaman} Halaman "; //peren digunakan untuk memanggil function dari class produk
        return $str;

    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){

        parent::__construct ($judul, $penulis, $penerbit, $harga);
    
        $this->waktuMain = $waktuMain;
        }

    public function GetInfoProduk(){
        $str =  $str = "Game : " . parent::getInfoProduk(). " ~ {$this->waktuMain} Jam ";
        return $str;

    }

    // menggunakan visibiliti protectide
    public function setDiskon($diskon){
        $this->diskon = $diskon;
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


$produk1 = new Komik("Naruto", "Masaki Kisimoto", "Shonen Jump", 30000, 100);

// Memanggil class menggunakan new
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";

$produk2->setDiskon(20);
echo $produk2->getHarga();