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
            <li><a style="align:right;" href="login.php">LOGIN</a></li>
        </ul>
    </nav>
    </header>
<h2>XI RPL</h2>
<img src="img/Logosmkn4padalarang-removebg-preview.png" style="display:block;margin:auto;padding:10px;margin-top:50px;width:170px;height:130;">
<h3>RPL adalah sebuah jurusan di SMKN 4 PADALARANG yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan,
     manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</h3>
</body>
</html>