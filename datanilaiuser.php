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
            <li><a href="homesiswa.php">HOME</a></li>
            <li><a href="datasiswauser.php">DATA SISWA</a></li>
            <li><a href="dataguruuser.php">DATA GURU</a></li>
            <li><a href="datanilaiuser.php">DATA NILAI</a></li>
            <li><a href="galeriuser.php">GALERI</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </nav>
    </header>
    <?php
            $mysqli = new mysqli("revakbar.rpl-smk4padalarang.my.id","rplsmk4padalaran_revakbar","bZrTpHC6","rplsmk4padalaran_revakbar");
    ?>
    <h3 align="center">DATA NILAI</h3>
    <table class="table table-striped" border="2" align="center">
        <tr>
            <th>ID</th>
            <th>NISN</th>
            <th>MAPEL</th>
            <th>NILAI PENGETAHUAN</th>
            <th>NILAI KETERAMPILAN</th>
            <th>NILAI AKHIR</th>
            <th>GRADE</th>
    
        </tr>
        <?php
        include "koneksi.php";
        $ambil = mysqli_query($mysqli,"select * from nilai");
        while($tampil = mysqli_fetch_array($ambil)){
            $A=$tampil['nilai1'];
            $B=$tampil['nilai2'];
            $hasil= ($A+$B)/2;
        if ($hasil>=90){
            $grade = "A";
        }elseif($hasil>=70){
            $grade = "B";
        }else {
        }
        echo "
        <tr>
            <td>$tampil[id]</td>
            <td>$tampil[NISN]</td>
            <td>$tampil[mapel]</td>
            <td>$tampil[nilai1]</td>
            <td>$tampil[nilai2]</td>
            <td>$hasil</td>
            <td>$grade</td>
        </tr>";
        }
        ?>
    </table>
</body>
</html>