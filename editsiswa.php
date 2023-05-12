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

    $sql=mysqli_query($koneksi,"select*from siswa where NISN='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);

?>
<h3 align="center">MENGEDIT DATA SISWA<h2>

<form action="" method="POST">
<table  align="center" style='margin-top:30px;'>
    <tr>
        <td width="150">NISN</td>
        <td><input type="text" name="NISN" value="<?php echo $data['NISN'];?>"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input typr="text" name="nama" value="<?php echo $data['nama'];?>"></td>
    </tr>
    <tr>
        <td>KELAS</td>
        <td><input type="text"name="kelas" value="<?php echo $data['kelas'];?>"></td>
    </tr>
    <tr>
        <td>MAPEL</td>
        <td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>"></td>
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
    mysqli_query($koneksi,"update siswa set
    nama = '$_POST[nama]',
    kelas = '$_POST[kelas]',
    tanggal_lahir ='$_POST[tanggal_lahir]'
    where NISN = '$_POST[NISN]'");

    echo"<p class='pesan'>data siswa baru telah ter edit</p>";
    echo "<meta http-equiv=refresh content=1;URL='datasiswa.php'>";
}
?>
</body>
</html>