<?php

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Komik : Naruto | Ecobag, Shonen Jump (Rp. 30000) - 100 Halaman. 
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak (Produk $produk) { // membuat type data dari instance object
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Ecobag", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();