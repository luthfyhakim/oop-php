<?php

class Produk {
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto"; // menimpa isi dari property
$produk1->penulis = "Ecobag";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = "Uncharted"; 
$produk2->penulis = "Neil";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 250000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();