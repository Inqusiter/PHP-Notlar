<?php

// Mantıksal Operatörler &&(and), || (or)
$kullaniciAdi = "admin";
$sifre = "123";

if ($kullaniciAdi == "admin" && $sifre =="123") {
    echo "Giriş Başarılı  ! <br>";
}
else {
    echo "Giriş Başarısız ! <br>";
}



// Karşılaştırma Operatorleri <,> <=, >=, ==, !=

echo 10 < 20 ? "Küçülktür <br>" : "Büyüktür";
echo 20 > 10 ? "Büyüktür <br>" : "Küçüktür";
echo 10 <= 20 ? "Küçük veya Eşittir <br>" : "Büyüktür";
echo 20 >= 10 ? "Büyük veya Eşittir <br>" : "Küçüktür";
echo 10 == 20 ? "Eşittir <br>": "Eşit değildir"; 
echo 20 != 10 ? " Eşit değildir <br>" : "Eşittir";
?>