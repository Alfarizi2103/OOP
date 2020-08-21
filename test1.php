<?php 

//toko komik

class  Komik{
      public $judul = "judul",
             $penulis = "penulis", 
             $genre = "genre",
             $harga = 0; 
}
//Komik 1
$komik1 = new Komik();
$komik1->judul = "Naruto"."<br>";
$komik1->penulis = "Masashi kishimoto"."<br>";
$komik1->genre = "Fiksi petualangan, Fantasi, Ninja, dan Seni bela diri"."<br>";
$komik1->harga = 30000;
var_dump($komik1);
echo "<br>";

//Komik 2
$komik2 = new Komik();
$komik2->judul = "One Piece"."<br>";
$komik2->penulis = "Eiichiro Oda"."<br>";
$komik2->genre = "Petualangan, dan fantasi"."<br>";
$komik2->harga = 30000; 
var_dump($komik2);
echo "<br>";

$komik3 = new Komik();
$komik3->judul = "Detective Conan"."<br>";
$komik3->penulis = "Gosho Aoyama"."<br>";
$komik3->genre = "Detektif, Misteri, dan Cerita Seru"."<br>";
$komik3->harga = 30000;
var_dump($komik3);
echo "<br>";

?>