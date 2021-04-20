<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  


$park= $_POST['park'];
$tutar= $_POST['tutar'];
$saat= $_POST['saat'];
$adsoyad= $_POST['adsoyad'];
$numara= $_POST['numara'];
$araba= $_POST['araba'];
$plaka= $_POST['plaka'];



$kaydet="INSERT INTO kadikoyrez (park, tutar, saat, adsoyad, numara, araba, plaka) VALUES('$park', '$tutar', '$saat', '$adsoyad', '$numara', '$araba', '$plaka')";
     if (mysqli_query($db_conn, $kaydet)) {
        $guncelle="UPDATE kadikoyparkalani SET durum = 'dolu' WHERE parkkodu = '$park'";
        mysqli_query($db_conn, $guncelle);
            header('location:index.php');  echo "<script type='text/javascript'>alert('Rezarvasyonunuz başarılı bir şekilde yapılmıştır!');
            </script>";
  
  }  
  

?>