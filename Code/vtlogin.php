<?php  
session_start();
//vt bağlantısı
$usernameVal=$_REQUEST["email"];
//$passwordVAl=$_REQUEST["password"];
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 

else
{
     $escapedPW = mysqli_real_escape_string($db_conn,$_REQUEST['sifre']);

     //hatirla checkboxu tıklandı ise kullanıcı veilerini cookie haline getiriyor.
 if (isset($_REQUEST['hatirla']))
   $escapedRemember = mysqli_real_escape_string($db_conn,$_REQUEST['hatirla']);

 $cookie_time = 60 * 60 * 24 * 30; // 30 days
  $cookie_time_Onset=$cookie_time+ time();
  if (isset($escapedRemember)) {
    
    setcookie("email", $usernameVal, $cookie_time_Onset);
    setcookie("sifre", $escapedPW, $cookie_time_Onset);  

  } else {

      $cookie_time_fromOffset=time() -$cookie_time;
setcookie("email", '',$cookie_time_fromOffset );
    setcookie("sifre", '', $cookie_time_fromOffset);  

  }
 

  $adi_sorgu="select kullanici.id, kullanici.adsoyad, kullanici.numara, kullanici.araba, kullanici.plaka FROM kullanici WHERE kullanici.email='$usernameVal'" ;  
  $sonuc_adi=mysqli_query($db_conn,$adi_sorgu);
  $row = mysqli_fetch_assoc($sonuc_adi);    


$s="select * from kullanici where email='$usernameVal' && sifre='$escapedPW'";
$sonuc=mysqli_query($db_conn,$s);
$num=mysqli_num_rows($sonuc);



if($num == 1){
    $_SESSION['email']=$usernameVal;
    $_SESSION['adsoyad']=$row['adsoyad'];
    $_SESSION['numara']=$row['numara'];
    $_SESSION['araba']=$row['araba'];
    $_SESSION['plaka']=$row['plaka'];
    $_SESSION['id']=$row['id'];
    header('location:index.php'); 
}
else if($usernameVal=="admin" && $escapedPW=="admin"){
  header('location:personel.php'); 
}
else{
  echo "<script type='text/javascript'>alert('Yanlış Şifre!');
  </script>";
  include("giris.php");
   
}

}
?>
