<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  
$mail= $_POST['email'];
$adisoyadi = $_POST['adsoyad'];
$telefonu = $_POST['numara'];
$arabasi= $_POST['araba'];
$plakasi= $_POST['plaka'];
$sifresi= $_POST['sifre'];


$s="select * from kullanici where email='$mail'";
$sonuc=mysqli_query($db_conn,$s);
$num=mysqli_num_rows($sonuc);

if($num == 1){
    echo "<script type='text/javascript'>alert('Bu email ile daha önce hesap açılmıştır!');
    </script>";
    include("kayit.php");
}
else{
    $kaydet="INSERT INTO kullanici (email, adsoyad, numara, araba, plaka, sifre) VALUES('$mail', '$adisoyadi', '$telefonu', '$arabasi', '$plakasi', '$sifresi')";
     if (mysqli_query($db_conn, $kaydet)) {
    header('location:giris.php'); 
  }  
}
?>
