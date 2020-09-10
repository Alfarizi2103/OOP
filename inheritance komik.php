<?php 

//toko komik

class  Buku{
      public $Jenis,
             $judul,
             $penulis, 
             $genre,
             $harga,
             $tebalbuku;


   public function getCetak(){
    return "$this->judul, (Rp $this->harga)";
 }
    public function __construct($Jenis = "Jenis", $judul = "judul", $penulis = "penulis", $genre = "genre", $harga = 0, $tebalbuku = "tebalbuku"){
        $this->Jenis=$Jenis;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->genre = $genre;
        $this->harga = $harga;
        $this->tebalbuku = $tebalbuku;
    }

public function cetakinfo(){
        $str="{$this->Jenis} , {$this->getCetak()}";
        return $str;
 }
}

 class Komik extends Buku{
    public function cetakinfo(){
         $str="Komik :{$this->judul}, {$this->getCetak()} | tebal : {$this->tebalbuku}";
        return $str;
    }
}


//Komik 1
$komik1 = new Komik("Komik", "Naruto", "Masashi kishimoto", "Fiksi petualangan, Fantasi, Ninja, dan Seni bela diri", 30000, "30 halaman");
echo $komik1->cetakinfo();


echo "<br>";
echo "<br>";

//Komik 2
$komik2 = new Komik("Komik", "One Piece", "Eiichiro Oda", "Petualangan, dan fantasi",  30000, "30 halaman"); 
echo $komik2->cetakinfo();

echo "<br>";
echo "<br>";

//Komik3
$komik3 = new Komik("Komik", "Detective Conan", "Gosho Aoyama", "Detektif, Misteri, dan Cerita Seru", 30000, "45 halaman");
echo $komik3->cetakinfo();


?>