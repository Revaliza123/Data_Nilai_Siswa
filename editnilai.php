<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>DATA NILAI</title>
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
</head>
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
<?php
    include "koneksi.php";

    $sql=mysqli_query($koneksi,"select * from nilai where id='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);

?>
<h3 align="center">MENGEDIT DATA NILAI<h2>

<form action="" method="POST">
<table align="center">
    <tr>
        <td width="150">id</td>
        <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><input typr="text" name="NISN" value="<?php echo $data['NISN'];?>"></td>
    </tr>
    <tr>
        <td>MAPEL</td>
        <td><input type="text" name="mapel" value="<?php echo $data['mapel'];?>"></td>
    </tr>
    <tr>
        <td>NILAI PENGETAHUAN</td>
        <td><input type="text" name="nilai1" value="<?php echo $data['nilai1'];?>"></td>
    </tr>
    <tr>
        <td>NILAI KETERAMPILAN</td>
        <td><input typr="text" name="nilai2" value="<?php echo $data['nilai2'];?>"></td>
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
    mysqli_query($koneksi,"update nilai set
    NISN = '$_POST[NISN]',
    mapel ='$_POST[mapel]',
    nilai1 = '$_POST[nilai1]',
    nilai2 = '$_POST[nilai2]'
    where id = '$_POST[id]'");

    echo"<p class='pesan'>data nilai baru telah ter edit</p>";
    echo "<meta http-equiv=refresh content=1;URL='datanilai.php'>";
}
?>
</body>
</html>