<?php 

//toko komik

class  Komik{
      public $judul = "judul",
             $penulis = "penulis", 
             $genre = "genre",
             $harga = 0; 

    public function getCetak(){
      return "$this->judul, $this->penulis, $this->genre,$this->harga";
    }
    public function __construct($judul, $penulis, $genre, $harga){
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->genre = $genre;
    	$this->harga = $harga;
    }
}
class cetakinfokomik{
    public function cetakinfo(Komik $Komik){
        $str="{$Komik->judul} , {$Komik->getCetak()}";
        return $str;
    }
}

//Komik 1
$komik1 = new Komik("Naruto", "Masashi kishimoto", "Fiksi petualangan, Fantasi, Ninja, dan Seni bela diri", 30000);
echo "Detail komik :".$komik1->getCetak();


echo "<br>";
echo "<br>";

//Komik 2
$komik2 = new Komik("One Piece",       "Eiichiro Oda", "Petualangan, dan fantasi",  30000); 
echo "Detail komik :".$komik2->getCetak();

echo "<br>";
echo "<br>";

//Komik3
$komik3 = new Komik( "Detective Conan", "Gosho Aoyama", "Detektif, Misteri, dan Cerita Seru", 30000);
echo "Detail komik :".$komik3->getCetak();

echo "<br>";
$infoProduk = new cetakinfokomik();
echo $infoProduk->cetakinfo($komik2);
?>