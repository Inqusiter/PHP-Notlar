<?php
//degisken tanimalamda $ kullanılır.
$ad = "berat";
$soyad = "karabulut";
$yas = 20;


// dizi tanımlama.
$dizi = array("Elma","Armut","Erik");

//boolen tanımlama.
$kontrol = true;

// degişkleneri yazdırmak için echo.
echo $ad;
echo $soyad;
echo $yas;
echo("Alt satıra kaydırdım. <br>");

// dizi elemanı yazdırma sıfırıncı eleman.
echo $dizi[0];
echo("Alt satıra kaydırdım. <br>");

// boolen elemanı yazdırma.
echo $kontrol;
echo("Alt satıra kaydırdım. <br>");

// boş satır basma. Alt satıra atlatma.

echo "                ";
echo("Alt satıra kaydırdım. <br>");

// degiskleneri string içine olduğu gibi yazabilirsin.

echo "Adı : $ad Soyad: $soyad Yaş: $yas Birinci dizi elemanı: $dizi[0] boolen ifade: $kontrol "

// degiskenlerin tanımlama kuralları standartdır. 


?>