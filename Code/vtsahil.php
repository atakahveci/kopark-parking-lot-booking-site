<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  


if(isset($_POST['rating'])){
$email= $_POST['email'];
$adsoyad= $_POST['adsoyad'];
$rating= $_POST['rating'];
$yorum= $_POST['yorum'];

 
$kaydet="INSERT INTO sahilfeedback (email, adsoyad, rating, yorum) VALUES('$email', '$adsoyad', '$rating', '$yorum')";
     if (mysqli_query($db_conn, $kaydet)) {
    header('location:sahilyorumlar.php');  echo "<script type='text/javascript'>alert('Başarılı bir şekilde yorum attınız! ');
    </script>";
  }  



}


?>