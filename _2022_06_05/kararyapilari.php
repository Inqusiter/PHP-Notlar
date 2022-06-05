<?php

// 3 lü karşılaştırma yapısı.

$say1 = 10;
$say2 = 10;

// sayılar eşit mi diye soru sorduk == gelen değer doğru mu ? evet ise ilk  değilse yani  : bu değer dedik.
// == eşit != eşit değil

$kontrol = $say1 != $say2 ? "Sayılyar Eşit değil." : "Sayılar Eşit."."<br>";


echo $kontrol;


// if yapısı

if ($say1 == $say2) {

    echo "Sayılar eşittir.";
} 

else if ($say1 > $say2) {
    echo "$say1 büyüktür $say2";
}

else if ($say1 < $say2) {
    echo "$say1 küçüktür $say2";
}

else {
    echo "Sayılar eşit değil." ;
}

?>