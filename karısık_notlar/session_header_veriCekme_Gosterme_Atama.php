<?php include "kontrol.php"; ?>
<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <title></title>
</head>



 <header class="p-3 bg-dark text-white">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">AnaSayfa</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Gelecek</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Hakkımızda</a></li>
        </ul>



        // php echo içerisinde html kodları yazabiliyorduk.

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Giriş</button>
          <?php 

          // degiskenleri echo içinde kullanmak için tanımlama yaptık.

          $giris = "giris.php";
          $cikis = "cikis.php";
          $id = $_SESSION["ID"];


          // eger session id yok ise giris butonu var ise çıkış butonu ve kullanıcı id yazdırdık.
          // echo içerisinde html kodları çalıştırmak için '' tırnak kullandık değişkenleri atamak için '' kullandık ve standart "" arasına yerleştirdi.

          if (!isset($_SESSION["ID"])) {
          echo ' <a href="'.$giris.'"><button type="button" class="btn btn-outline-light me-2" >Giriş</button></a>'; }
          else {
                 echo '<a href="'.$cikis.'"><button type="button" class="btn btn-outline-light me-2" >Çıkış</button></a>';
                 echo '<button type="button" class="btn btn-warning">ID:'.$id.' </button>';
          }   

     
           ?>

          
        </div>
      </div>
    </div>
    
  </header>

 


<body>




</body>
</html>

