// tanımlnan değişkenler metinlerde kullanılabilir.

<?php
	 $baslik = "PHP DEGİSKEN BASLİK";
	 $metin = "PHP DEGİSKEN METİN";
  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>
	<h1>HTML BAŞLIK</h1>
	<p>Bu bir alt başlık</p>

	<h1>

	<?php 
		echo "PHP BAŞLIK";
	 ?>
	</h1>

	// php kodu taglar arasında gömülüp tagların özelliklerini aynen taşır.
	// php kodu içerisinde yazılan echo komutunun içerisine taglar yazılabilir.

	<?php
		echo "<h1> PHP BAŞLIK </h1>";
	 ?>


	 //degiskenlerin baslık olarak yazılması.
	 <?php 
	 	 echo "<h1> $baslik </h1>";
	 	 echo "<p1> $metin </p1>";
	  ?>

</body>
</html>