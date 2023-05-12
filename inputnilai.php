<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>TAMBAH DATA NILAI</title>
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
<div class="form-group">
<table align="center" style='margin-top:40px;'>
    <tr>
        <td width="130">ID</td>
        <td><input type="text"  name="id"></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><input type="text"  name="NISN"></td>
    </tr>
    <tr>
        <td>MAPEL</td>
        <td><input type="text"  name="mapel"></td>
    </tr>
    <tr>
        <td>NILAI PENGETAHUAN</td>
        <td><input type="text"  name="nilai1"></td>
    </tr>
    <tr>
        <td>NILAI KETERAMPILAN</td>
        <td><input type="text"  name="nilai2"></td>
    </tr>
    <tr>
        <td>NILAI SIKAP</td>
        <td><input type="text" name="nilai3"></td>
    </tr>
    <tr>
        <td>SISWA NISN</td>
        <td><input type="text" name="siswa_nisn"></td>
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
    mysqli_query($koneksi,"insert into nilai set
    id = '$_POST[id]',
    NISN = '$_POST[NISN]',
    mapel = '$_POST[mapel]',
    nilai1 = '$_POST[nilai1]',
    nilai2 = '$_POST[nilai2]',
    nilai3 = '$_POST[nilai3]',
    siswa_nisn='$_POST[siswa_nisn]'");



    echo"<p class='pesan'>data nilai baru telah di simpan</p>";
    echo "<meta http-equiv=refresh content=1;URL='datanilai.php'>";
}
?>