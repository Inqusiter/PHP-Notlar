<?php

$sayi1 = 18;
$sayi2 = 20;



//matematiksel işlemlerde standart matematiksel işlem sembolleri kullanılır.

$toplam = $sayi1 + $sayi2;

$fark = $sayi1 - $sayi2;

$bolum = $sayi1 / $sayi2;

$carpim = $sayi1 * $sayi2;

$mod = $sayi1 % $sayi2;

echo "Sayi1: $sayi1 ,  Sayi2: $sayi2 ,Toplam: $toplam , Fark: $fark , Bölüm: $bolum , Çarpım: $carpim , Mod Alma: $mod"


// kısayol tanımlama. Kısayol tanımlarken işlemoperatoru= değer yazılır.

$sayi1 = $sayi1 + 10;

$sayi1 += 10; // kullanımı kısayoldur.

// karakok alma.
$sayi3 = 16;
echo sqrt($sayi3);
echo "Sayının Karekökü : " .sqrt($sayi3);

// üssü alma.
echo "Sayının Üssü : " .pow(4,2);

// mutlak deger alma.
echo "Sayının Mutlak : " .abs(-3);

// en küçük sayı.
echo "En küçük sayı : " .min(2,3,4,5,6);

// en büyük sayı.
echo "En Büyük sayı : " .max(2,3,4,5,6);


// veri tipi öğrenme.
echo "Kelimenin Veri Tipi".gettype($degisken);

?>