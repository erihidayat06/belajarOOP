<?php
// Jualan Preoduk
// Komik
// Game

abstract class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;
            

    // Dibawah ini adalah methot constructor

    public function __construct ($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setJudul($judul){
        if( !is_string($judul) ){
            throw new Exception("Judul Harus String");
            
        }
        
        $this->judul = $judul;
    }

    public function setPenulis($penulis){
        $this->penulis =$penulis;
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

    public function getJudul(){
        return $this->judul;
    }
   

    // Di bawah ini adalah method di dalam class

    public function getLabel(){

        // return Berfungsi untuk mengembalikan nilan

        // This digunakan untuk mengambil varibel dari luar method
        return "$this->penulis , $this->penerbit, (Rp $this->harga)";
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }


    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfoProduk();
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} ";


        return $str;
    }

 
     public function setDiskon($diskon){
        $this->diskon = $diskon;
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
        $str =  $str = "Komik : " . $this->getInfo(). "- {$this->jmlHalaman} Halaman "; //peren digunakan untuk memanggil function dari class produk
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
        $str =  $str = "Game : " . $this->getInfo(). " ~ {$this->waktuMain} Jam ";
        return $str;

    }

   
}


    // Di bawah ini adalah class object type

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    // Parameter hanya menerima dari class produk
    // dengan menambah nama class produk di depan parameter methot cetak
    public function cetak(){
        $str = "{DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masaki Kisimoto", "Shonen Jump", 30000, 100);

// Memanggil class menggunakan new
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000,50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();