<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>HOME</title>
<style>
body{
    padding : 0;
    margin : 0;
    font-size:15px;
    background-image: url("img/cartoons-4k-image-cool-wallpaper-preview.jpg");
    background-size:cover;
    
  }    
ul {
      list-style-type:none;    
      margin:0;
      padding:0;
      overflow:hidden;
      background-color:rgb(135, 206, 235);
      position:sticky;
  }
li{
      margin:auto;
      padding: 20px 19px;
      display: inline-block;
   }
a{
      color:black;
      text-decoration:none;
      font-size:10px;
      font-family:sans-serif;
   }
h2{
    text-align:center;
}
h3{
    text-align:center;
    font-size:25px;
    margin-top:60px;
}

</style>
</head>
<body>
    <?php
    include "koneksi.php";
    include "session.php";
    ?>
    <header>
        <ul>
            <li><a href="homesiswa.php">HOME</a></li>
            <li><a href="datasiswauser.php">DATA SISWA</a></li>
            <li><a href="dataguruuser.php">DATA GURU</a></li>
            <li><a href="datanilaiuser.php">DATA NILAI</a></li>
            <li><a href="galeriuser.php">GALERI</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </nav>
    </header>
<h2>XI RPL</h2>
<img src="img/Logosmkn4padalarang-removebg-preview.png" style="display:block;margin:auto;padding:10px;margin-top:50px;width:170px;height:130;">
<h3 style="color:white;margin-top:100px;">RPL adalah sebuah jurusan di SMKN 4 PADALARANG yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan,
     manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</h3>
</body>
</html>