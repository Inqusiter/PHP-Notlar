<?php
$isimler = array("Berat", "Ali","Veli","Hüseyin") ;



foreach ($isimler as $isim) {
    echo "$isim <br>" ; 
}


foreach ($isimler as $indeksno => $isim) {
    echo "$indeksno indeksli eleman - $isim <br>";
}

//////////////////////////////////////////

$sayilar = range(1,10); 

foreach ($sayilar as $sayino => $sayi) {
    echo "$sayino indeksli eleman - $sayi <br>";
}

?>