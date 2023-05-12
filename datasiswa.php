<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <FontAwesomeIcon icon="fa-regular fa-trash" />
    <title>DATA SISWA</title>
</head>
<style>
body{
    padding : 0;
    margin : 0;
    font-size:15px;
    background-image: url("img/pexels-brand-&-palms-768938.jpg");
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
    <?php
        $mysqli= new mysqli ("revakbar.rpl-smk4padalarang.my.id","rplsmk4padalaran_revakbar","bZrTpHC6","rplsmk4padalaran_revakbar");
    ?>
    <h2 align="center">DATA SISWA</h2>
    <table class="table table-striped" border="2" align="center">
    
        <tr align="center">
            <th>NISN</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>TANGGAL LAHIR</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php
        include "koneksi.php";
        $ambil = mysqli_query($mysqli,"select * from siswa");
        while($tampil = mysqli_fetch_array($ambil)){
        echo "
        <tr>
            <td>$tampil[NISN]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kelas]</td>
            <td>$tampil[tanggal_lahir]</td>
            <td><a href='?kode=$tampil[NISN]'>Hapus</a></td>
            <td><a href='editsiswa.php?kode=$tampil[NISN]'>Edit</a></td>
        </tr>";
        }
        ?>
    </table>
    <button style=display:block;margin:auto;><a href="inputsiswa.php">Tambah Data</a></button>
            <?php
            if(isset($_GET['kode'])){
                mysqli_query($koneksi, "delete from siswa where NISN='$_GET[kode]'");

                echo "Data Telah Terhapus";
                echo "<meta http-equiv=refresh content=2;URL='datasiswa.php'>";
            }
            ?>
</body>
</html>