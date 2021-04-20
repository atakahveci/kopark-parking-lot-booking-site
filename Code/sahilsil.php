<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  

if(isset($_GET['delete'])){
    $parkalani = $_GET['delete'];
    $sorgu="DELETE FROM sahilrez WHERE park='$parkalani'; ";
    if (mysqli_query($db_conn, $sorgu)) {
        $guncelle="UPDATE sahilparkalani SET durum = 'bos' WHERE parkkodu = '$parkalani'";
        mysqli_query($db_conn, $guncelle);
        header('location:personel.php');
  }  
    
}

?>