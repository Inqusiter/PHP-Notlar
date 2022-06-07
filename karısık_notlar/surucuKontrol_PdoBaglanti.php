// PDO baglantısı yaparken surucu kontrol kodu 

  <?php

    echo '<pre>';
     print_r(PDO::getAvailableDrivers());
    echo '</pre>'
?>
// [0]= > mysql  [1]= > sqlite  sorgusu alındıktan sonra problem yok suruculer ok.

/////// pdo baglantisi

  <?php

      // pdo nesnesi oluşturduk
$pdo=new PDO("mysql:host=localhost;dbname=personel;charset=UTF8","loginadi","loginsifre");
// baglanti varsa ekrana bastırdık.
if($pdo){
  echo 'veri tabanı baglandı';
}
else{
  echo 'veri tabanı baglanmadı';
}
// baglantiyi kapattık
$pdo=null;

?>
