
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css" />
    <title>Login</title>
<style>
body{
    background-image: url("img/foto-wallpaper-keren-1280x720.webp");
    background-size:cover;
}
</style>
</head>
<?php
session_start();
include "koneksi.php";
?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
<form action="" method ="POST">
<table align="center">
<div class="form-outline mb-4" >
    <tr>
        <th colspan="2" height="40">LOGIN</th>
    </tr>
    <tr>
        <td> <input type="text" name="username" placeholder="Username" class="form-control" style="margin-bottom:20px;"></td>
    </tr>
    <tr>
        <td> <input type="password" name="password" placeholder="Password" class="form-control" style="margin-bottom:20px;"></td>
    </tr>
    <tr>
        <td> <input type="submit" value="login" name="proseslog" class="btn btn-primary btn-block mb-4"></td>
    </tr>
    </div>
</table>
</form>
</div>
        </div>
      </div>
    </div>
  </div>
  </section> 

<?php
if(isset($_POST['proseslog'])){
    $sql=mysqli_query($koneksi, "select * from usersiswa where username = '$_POST[username]'
    and password = '$_POST[password]'");
    $sql1=mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek=mysqli_num_rows($sql);
    $cek1=mysqli_num_rows($sql1);
    if($cek >0){
        $_SESSION['username']= $_POST['username'];

        echo "<P align=center><b> Anda Login sebagai siswa </b><p>";
        echo "<meta http-equiv=refresh content=0;URL='homesiswa.php'>";
    }elseif($cek1 >0){
        $_SESSION['username']= $_POST['username'];

        echo "<P align=center><b> Anda Login sebagai admin </b><p>";
        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else{
        echo "<p align=center><b> username dan password salah ! </b><p>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}
