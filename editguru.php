<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>EDIT DATA GURU</title>
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

    $sql=mysqli_query($koneksi,"select*from guru where NIP='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);

?>
<h3 align="center">MENGEDIT DATA GURU<h2>

<form action="" method="post">
    <table align=center>
        <tr>
            <td width="130">NIP</td>
            <td><input type="text" name="NIP" value="<?php echo $data['NIP'];?>"></td>
        </tr>
        <tr>
            <td>nama</id>
            <td><input type="text" name="nama" value="<?php echo $data ['nama'];?>"></td>
        </tr>
        <tr>
            <td>Jabatan</id>
            <td><input type="text" name="jabatan" value="<?php echo $data ['jabatan'];?>"></td>
        </tr>
        <tr>
            <td>Kode</id>
            <td><input type="text" name="kode" value="<?php echo $data ['kode'];?>"></td>
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
    mysqli_query($koneksi,"update guru set
    nama= '$_POST[nama]',
    jabatan= '$_POST[jabatan]',
    kode= '$_POST[kode]'
    where NIP= '$_POST[NIP]'");

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='dataguru.php'>";
}
?>
</html>
</body>
