<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>TAMBAH DATA SISWA</title>
</head>
<style>
body{
    padding : 0;
    margin : 0;
    font-size:15px;
    background-image: url("img/pexels-brand-&-palms-768938.jpg");
    background-size:cover;
    font-family:times;
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
</style>
<body>
<header>
        <ul>
        <li><a href="home.php">HOME</a></li>
            <li><a href="datasiswa.php">MANAGAMENT SISWA</a></li>
            <li><a href="dataguru.php">MANAGEMENT GURU</a></li>
            <li><a href="datanilai.php">MANAGEMENT NILAI</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </nav>
    </header>
</body>
</html>
<h4 align="center">TAMBAH DATA<h4>

<form action="" method="POST">
<table align="center" style='margin-top:40px;'>
    <tr>
        <td width="130">NIP</td>
        <td><input type="text" name="NIP"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>JABATAN</td>
        <td><input type="text" name="jabatan"></td>
    </tr>
    <tr>
        <td>kode</td>
        <td><input type="text" name="kode"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    $sql=mysqli_query($koneksi,"insert into guru set
    NIP = '$_POST[NIP]',
    nama = '$_POST[nama]',
    jabatan = '$_POST[jabatan]',
    kode = '$_POST[kode]'");

    echo"<p class='pesan'>data guru baru telah di simpan</p>";
    echo "<meta http-equiv=refresh content=1;URL='dataguru.php'>";
}
?>