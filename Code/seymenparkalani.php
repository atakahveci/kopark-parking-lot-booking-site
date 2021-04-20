



<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
$adi_sorgu="select seymenparkalani.parkkodu, seymenparkalani.durum FROM seymenparkalani" ;  
$sonuc_adi=mysqli_query($db_conn,$adi_sorgu);
$row = mysqli_fetch_assoc($sonuc_adi);    //BURASI  ATA BURASI BUNDAN ŞEYEDE YAPACAKSIN PARKALANLARINA VE SONRA BİİTİYORRR HADİ KOLAYGELSİN


        $a1="select durum from seymenparkalani where parkkodu='A1'";
        $a1sonuc=mysqli_query($db_conn,$a1);   
        $row = mysqli_fetch_array($a1sonuc);
        $a1num=mysqli_num_rows($a1sonuc);
         if($a1num == 1){
             $_SESSION['a1']=$row['durum'];
        }
        $a2="select durum from seymenparkalani where parkkodu='A2'";
        $a2sonuc=mysqli_query($db_conn,$a2);   
        $row = mysqli_fetch_array($a2sonuc);
        $a2num=mysqli_num_rows($a2sonuc);
         if($a2num == 1){
             $_SESSION['a2']=$row['durum'];
        }
        $a3="select durum from seymenparkalani where parkkodu='A3'";
        $a3sonuc=mysqli_query($db_conn,$a3);   
        $row = mysqli_fetch_array($a3sonuc);
        $a3num=mysqli_num_rows($a3sonuc);
         if($a3num == 1){
             $_SESSION['a3']=$row['durum'];
        }
        $a4="select durum from seymenparkalani where parkkodu='A4'";
        $a4sonuc=mysqli_query($db_conn,$a4);   
        $row = mysqli_fetch_array($a4sonuc);
        $a4num=mysqli_num_rows($a4sonuc);
         if($a4num == 1){
             $_SESSION['a4']=$row['durum'];
        }
        $a5="select durum from seymenparkalani where parkkodu='A5'";
        $a5sonuc=mysqli_query($db_conn,$a5);   
        $row = mysqli_fetch_array($a5sonuc);
        $a5num=mysqli_num_rows($a5sonuc);
         if($a5num == 1){
             $_SESSION['a5']=$row['durum'];
        }
        $a6="select durum from seymenparkalani where parkkodu='A6'";
        $a6sonuc=mysqli_query($db_conn,$a6);   
        $row = mysqli_fetch_array($a6sonuc);
        $a6num=mysqli_num_rows($a6sonuc);
         if($a6num == 1){
             $_SESSION['a6']=$row['durum'];
        }
        $a7="select durum from seymenparkalani where parkkodu='A7'";
        $a7sonuc=mysqli_query($db_conn,$a7);   
        $row = mysqli_fetch_array($a7sonuc);
        $a7num=mysqli_num_rows($a7sonuc);
         if($a7num == 1){
             $_SESSION['a7']=$row['durum'];
        }
        $a8="select durum from seymenparkalani where parkkodu='A8'";
        $a8sonuc=mysqli_query($db_conn,$a8);   
        $row = mysqli_fetch_array($a8sonuc);
        $a8num=mysqli_num_rows($a8sonuc);
         if($a8num == 1){
             $_SESSION['a8']=$row['durum'];
        }
        $a9="select durum from seymenparkalani where parkkodu='A9'";
        $a9sonuc=mysqli_query($db_conn,$a9);   
        $row = mysqli_fetch_array($a9sonuc);
        $a9num=mysqli_num_rows($a9sonuc);
         if($a9num == 1){
             $_SESSION['a9']=$row['durum'];
        }
        $a10="select durum from seymenparkalani where parkkodu='A10'";
        $a10sonuc=mysqli_query($db_conn,$a10);   
        $row = mysqli_fetch_array($a10sonuc);
        $a10num=mysqli_num_rows($a10sonuc);
         if($a10num == 1){
             $_SESSION['a10']=$row['durum'];
        }
        $a11="select durum from seymenparkalani where parkkodu='A11'";
        $a11sonuc=mysqli_query($db_conn,$a11);   
        $row = mysqli_fetch_array($a11sonuc);
        $a11num=mysqli_num_rows($a11sonuc);
         if($a11num == 1){
             $_SESSION['a11']=$row['durum'];
        }
        $a12="select durum from seymenparkalani where parkkodu='A12'";
        $a12sonuc=mysqli_query($db_conn,$a12);   
        $row = mysqli_fetch_array($a12sonuc);
        $a12num=mysqli_num_rows($a9sonuc);
         if($a12num == 1){
             $_SESSION['a12']=$row['durum'];
        }

        $b1="select durum from seymenparkalani where parkkodu='B1'";
        $b1sonuc=mysqli_query($db_conn,$b1);   
        $row = mysqli_fetch_array($b1sonuc);
        $b1num=mysqli_num_rows($b1sonuc);
         if($b1num == 1){
             $_SESSION['b1']=$row['durum'];
        }
        $b2="select durum from seymenparkalani where parkkodu='B2'";
        $b2sonuc=mysqli_query($db_conn,$b2);   
        $row = mysqli_fetch_array($b2sonuc);
        $b2num=mysqli_num_rows($b2sonuc);
         if($b2num == 1){
             $_SESSION['b2']=$row['durum'];
        }
        $b3="select durum from seymenparkalani where parkkodu='B3'";
        $b3sonuc=mysqli_query($db_conn,$b3);   
        $row = mysqli_fetch_array($b3sonuc);
        $b3num=mysqli_num_rows($b3sonuc);
         if($b3num == 1){
             $_SESSION['b3']=$row['durum'];
        }
        $b4="select durum from seymenparkalani where parkkodu='B4'";
        $b4sonuc=mysqli_query($db_conn,$b4);   
        $row = mysqli_fetch_array($b4sonuc);
        $b4num=mysqli_num_rows($b4sonuc);
         if($b4num == 1){
             $_SESSION['b4']=$row['durum'];
        }
        $b5="select durum from seymenparkalani where parkkodu='B5'";
        $b5sonuc=mysqli_query($db_conn,$b5);   
        $row = mysqli_fetch_array($b5sonuc);
        $b5num=mysqli_num_rows($b5sonuc);
         if($b5num == 1){
             $_SESSION['b5']=$row['durum'];
        }
        $b6="select durum from seymenparkalani where parkkodu='B6'";
        $b6sonuc=mysqli_query($db_conn,$b6);   
        $row = mysqli_fetch_array($b6sonuc);
        $b6num=mysqli_num_rows($b6sonuc);
         if($b6num == 1){
             $_SESSION['b6']=$row['durum'];
        }
        $b7="select durum from seymenparkalani where parkkodu='B7'";
        $b7sonuc=mysqli_query($db_conn,$b7);   
        $row = mysqli_fetch_array($b7sonuc);
        $b7num=mysqli_num_rows($b7sonuc);
         if($b7num == 1){
             $_SESSION['b7']=$row['durum'];
        }
        $b8="select durum from seymenparkalani where parkkodu='B8'";
        $b8sonuc=mysqli_query($db_conn,$b8);   
        $row = mysqli_fetch_array($b8sonuc);
        $b8num=mysqli_num_rows($b8sonuc);
         if($b8num == 1){
             $_SESSION['b8']=$row['durum'];
        }
        $b9="select durum from seymenparkalani where parkkodu='B9'";
        $b9sonuc=mysqli_query($db_conn,$b9);   
        $row = mysqli_fetch_array($b9sonuc);
        $b9num=mysqli_num_rows($b9sonuc);
         if($b9num == 1){
             $_SESSION['b9']=$row['durum'];
        }
        $b10="select durum from seymenparkalani where parkkodu='B10'";
        $b10sonuc=mysqli_query($db_conn,$b10);   
        $row = mysqli_fetch_array($b10sonuc);
        $b10num=mysqli_num_rows($b10sonuc);
         if($b10num == 1){
             $_SESSION['b10']=$row['durum'];
        }
        $b11="select durum from seymenparkalani where parkkodu='B11'";
        $b11sonuc=mysqli_query($db_conn,$b11); 
        $row = mysqli_fetch_array($b11sonuc);
        $b11num=mysqli_num_rows($b11sonuc);
        if($b11num == 1){
            $_SESSION['b11']=$row['durum'];
        }

        $b12="select durum from seymenparkalani where parkkodu='B12'";
        $b12sonuc=mysqli_query($db_conn,$b12); 
        $row = mysqli_fetch_array($b12sonuc);
        $b12num=mysqli_num_rows($b12sonuc);
        if($b12num == 1){
            $_SESSION['b12']=$row['durum'];
        }

        $b13="select durum from seymenparkalani where parkkodu='B13'";
        $b13sonuc=mysqli_query($db_conn,$b13); 
        $row = mysqli_fetch_array($b13sonuc);
        $b13num=mysqli_num_rows($b13sonuc);
        if($b13num == 1){
            $_SESSION['b13']=$row['durum'];
        }
        $b14="select durum from seymenparkalani where parkkodu='B14'";
        $b14sonuc=mysqli_query($db_conn,$b14); 
        $row = mysqli_fetch_array($b14sonuc);
        $b14num=mysqli_num_rows($b14sonuc);
        if($b14num == 1){
            $_SESSION['b14']=$row['durum'];
        }
        $b15="select durum from seymenparkalani where parkkodu='B15'";
        $b15sonuc=mysqli_query($db_conn,$b15); 
        $row = mysqli_fetch_array($b15sonuc);
        $b15num=mysqli_num_rows($b15sonuc);
        if($b15num == 1){
            $_SESSION['b15']=$row['durum'];
        }
        $b16="select durum from seymenparkalani where parkkodu='B16'";
        $b16sonuc=mysqli_query($db_conn,$b16); 
        $row = mysqli_fetch_array($b16sonuc);
        $b16num=mysqli_num_rows($b16sonuc);
        if($b16num == 1){
            $_SESSION['b16']=$row['durum'];
        }

        $c1="select durum from seymenparkalani where parkkodu='C1'";
        $c1sonuc=mysqli_query($db_conn,$c1);   
        $row = mysqli_fetch_array($c1sonuc);
        $c1num=mysqli_num_rows($c1sonuc);
         if($c1num == 1){
             $_SESSION['c1']=$row['durum'];
        }
        $c2="select durum from seymenparkalani where parkkodu='C2'";
        $c2sonuc=mysqli_query($db_conn,$c2);   
        $row = mysqli_fetch_array($c2sonuc);
        $c2num=mysqli_num_rows($c2sonuc);
         if($c2num == 1){
             $_SESSION['c2']=$row['durum'];
        }
        $c3="select durum from seymenparkalani where parkkodu='C3'";
        $c3sonuc=mysqli_query($db_conn,$c3);   
        $row = mysqli_fetch_array($c3sonuc);
        $c3num=mysqli_num_rows($c3sonuc);
         if($c3num == 1){
             $_SESSION['c3']=$row['durum'];
        }
        $c4="select durum from seymenparkalani where parkkodu='C4'";
        $c4sonuc=mysqli_query($db_conn,$c4);   
        $row = mysqli_fetch_array($c4sonuc);
        $c4num=mysqli_num_rows($c4sonuc);
         if($c4num == 1){
             $_SESSION['c4']=$row['durum'];
        }
        $c5="select durum from seymenparkalani where parkkodu='C5'";
        $c5sonuc=mysqli_query($db_conn,$c5);   
        $row = mysqli_fetch_array($c5sonuc);
        $c5num=mysqli_num_rows($c5sonuc);
         if($c5num == 1){
             $_SESSION['c5']=$row['durum'];
        }
        $c6="select durum from seymenparkalani where parkkodu='C6'";
        $c6sonuc=mysqli_query($db_conn,$c6);   
        $row = mysqli_fetch_array($c6sonuc);
        $c6num=mysqli_num_rows($c6sonuc);
         if($c6num == 1){
             $_SESSION['c6']=$row['durum'];
        }
        $c7="select durum from seymenparkalani where parkkodu='C7'";
        $c7sonuc=mysqli_query($db_conn,$c7);   
        $row = mysqli_fetch_array($c7sonuc);
        $c7num=mysqli_num_rows($c7sonuc);
         if($c7num == 1){
             $_SESSION['c7']=$row['durum'];
        }
        $c8="select durum from seymenparkalani where parkkodu='C8'";
        $c8sonuc=mysqli_query($db_conn,$c8);   
        $row = mysqli_fetch_array($c8sonuc);
        $c8num=mysqli_num_rows($c8sonuc);
         if($c8num == 1){
             $_SESSION['c8']=$row['durum'];
        }
        $c9="select durum from seymenparkalani where parkkodu='C9'";
        $c9sonuc=mysqli_query($db_conn,$c9);   
        $row = mysqli_fetch_array($c9sonuc);
        $c9num=mysqli_num_rows($c9sonuc);
         if($c9num == 1){
             $_SESSION['c9']=$row['durum'];
        }
        $c10="select durum from seymenparkalani where parkkodu='C10'";
        $c10sonuc=mysqli_query($db_conn,$c10);   
        $row = mysqli_fetch_array($c10sonuc);
        $c10num=mysqli_num_rows($c10sonuc);
         if($c10num == 1){
             $_SESSION['c10']=$row['durum'];
        }
        $c11="select durum from seymenparkalani where parkkodu='C11'";
        $c11sonuc=mysqli_query($db_conn,$c11); 
        $row = mysqli_fetch_array($c11sonuc);
        $c11num=mysqli_num_rows($c11sonuc);
        if($c11num == 1){
            $_SESSION['c11']=$row['durum'];
        }

        $c12="select durum from seymenparkalani where parkkodu='C12'";
        $c12sonuc=mysqli_query($db_conn,$c12); 
        $row = mysqli_fetch_array($c12sonuc);
        $c12num=mysqli_num_rows($c12sonuc);
        if($c12num == 1){
            $_SESSION['c12']=$row['durum'];
        }

        $c13="select durum from seymenparkalani where parkkodu='C13'";
        $c13sonuc=mysqli_query($db_conn,$c13); 
        $row = mysqli_fetch_array($c13sonuc);
        $c13num=mysqli_num_rows($c13sonuc);
        if($c13num == 1){
            $_SESSION['c13']=$row['durum'];
        }
        $c14="select durum from seymenparkalani where parkkodu='C14'";
        $c14sonuc=mysqli_query($db_conn,$c14); 
        $row = mysqli_fetch_array($c14sonuc);
        $c14num=mysqli_num_rows($c14sonuc);
        if($c14num == 1){
            $_SESSION['c14']=$row['durum'];
        }
        $c15="select durum from seymenparkalani where parkkodu='C15'";
        $c15sonuc=mysqli_query($db_conn,$c15); 
        $row = mysqli_fetch_array($c15sonuc);
        $c15num=mysqli_num_rows($c15sonuc);
        if($c15num == 1){
            $_SESSION['c15']=$row['durum'];
        }
        $c16="select durum from seymenparkalani where parkkodu='C16'";
        $c16sonuc=mysqli_query($db_conn,$c16); 
        $row = mysqli_fetch_array($c16sonuc);
        $c16num=mysqli_num_rows($c16sonuc);
        if($c16num == 1){
            $_SESSION['c16']=$row['durum'];
        }

        $d1="select durum from seymenparkalani where parkkodu='D1'";
        $d1sonuc=mysqli_query($db_conn,$d1);   
        $row = mysqli_fetch_array($d1sonuc);
        $d1num=mysqli_num_rows($d1sonuc);
         if($d1num == 1){
             $_SESSION['d1']=$row['durum'];
        }
        $d2="select durum from seymenparkalani where parkkodu='D2'";
        $d2sonuc=mysqli_query($db_conn,$d2);   
        $row = mysqli_fetch_array($d2sonuc);
        $d2num=mysqli_num_rows($d2sonuc);
         if($d2num == 1){
             $_SESSION['d2']=$row['durum'];
        }
        $d3="select durum from seymenparkalani where parkkodu='D3'";
        $d3sonuc=mysqli_query($db_conn,$d3);   
        $row = mysqli_fetch_array($d3sonuc);
        $d3num=mysqli_num_rows($d3sonuc);
         if($d3num == 1){
             $_SESSION['d3']=$row['durum'];
        }
        $d4="select durum from seymenparkalani where parkkodu='D4'";
        $d4sonuc=mysqli_query($db_conn,$d4);   
        $row = mysqli_fetch_array($d4sonuc);
        $d4num=mysqli_num_rows($d4sonuc);
         if($d4num == 1){
             $_SESSION['d4']=$row['durum'];
        }
        $d5="select durum from seymenparkalani where parkkodu='D5'";
        $d5sonuc=mysqli_query($db_conn,$d5);   
        $row = mysqli_fetch_array($d5sonuc);
        $d5num=mysqli_num_rows($d5sonuc);
         if($d5num == 1){
             $_SESSION['d5']=$row['durum'];
        }
        $d6="select durum from seymenparkalani where parkkodu='D6'";
        $d6sonuc=mysqli_query($db_conn,$d6);   
        $row = mysqli_fetch_array($d6sonuc);
        $d6num=mysqli_num_rows($d6sonuc);
         if($d6num == 1){
             $_SESSION['d6']=$row['durum'];
        }
        $d7="select durum from seymenparkalani where parkkodu='D7'";
        $d7sonuc=mysqli_query($db_conn,$d7);   
        $row = mysqli_fetch_array($d7sonuc);
        $d7num=mysqli_num_rows($d7sonuc);
         if($d7num == 1){
             $_SESSION['d7']=$row['durum'];
        }
        $d8="select durum from seymenparkalani where parkkodu='D8'";
        $d8sonuc=mysqli_query($db_conn,$d8);   
        $row = mysqli_fetch_array($d8sonuc);
        $d8num=mysqli_num_rows($d8sonuc);
         if($d8num == 1){
             $_SESSION['d8']=$row['durum'];
        }
        $d9="select durum from seymenparkalani where parkkodu='D9'";
        $d9sonuc=mysqli_query($db_conn,$d9);   
        $row = mysqli_fetch_array($d9sonuc);
        $d9num=mysqli_num_rows($d9sonuc);
         if($d9num == 1){
             $_SESSION['d9']=$row['durum'];
        }
        $d10="select durum from seymenparkalani where parkkodu='D10'";
        $d10sonuc=mysqli_query($db_conn,$d10);   
        $row = mysqli_fetch_array($d10sonuc);
        $d10num=mysqli_num_rows($d10sonuc);
         if($d10num == 1){
             $_SESSION['d10']=$row['durum'];
        }
        $d11="select durum from seymenparkalani where parkkodu='D11'";
        $d11sonuc=mysqli_query($db_conn,$d11); 
        $row = mysqli_fetch_array($d11sonuc);
        $d11num=mysqli_num_rows($d11sonuc);
        if($d11num == 1){
            $_SESSION['d11']=$row['durum'];
        }

        $d12="select durum from seymenparkalani where parkkodu='D12'";
        $d12sonuc=mysqli_query($db_conn,$d12); 
        $row = mysqli_fetch_array($d12sonuc);
        $d12num=mysqli_num_rows($d12sonuc);
        if($d12num == 1){
            $_SESSION['d12']=$row['durum'];
        }


        $e1="select durum from seymenparkalani where parkkodu='E1'";
        $e1sonuc=mysqli_query($db_conn,$e1);   
        $row = mysqli_fetch_array($e1sonuc);
        $e1num=mysqli_num_rows($e1sonuc);
         if($e1num == 1){
             $_SESSION['e1']=$row['durum'];
        }
        $e2="select durum from seymenparkalani where parkkodu='E2'";
        $e2sonuc=mysqli_query($db_conn,$e2);   
        $row = mysqli_fetch_array($e2sonuc);
        $e2num=mysqli_num_rows($e2sonuc);
         if($e2num == 1){
             $_SESSION['e2']=$row['durum'];
        }
        $e3="select durum from seymenparkalani where parkkodu='E3'";
        $e3sonuc=mysqli_query($db_conn,$e3);   
        $row = mysqli_fetch_array($e3sonuc);
        $e3num=mysqli_num_rows($e3sonuc);
         if($e3num == 1){
             $_SESSION['e3']=$row['durum'];
        }
        $e4="select durum from seymenparkalani where parkkodu='E4'";
        $e4sonuc=mysqli_query($db_conn,$e4);   
        $row = mysqli_fetch_array($e4sonuc);
        $e4num=mysqli_num_rows($e4sonuc);
         if($a4num == 1){
             $_SESSION['e4']=$row['durum'];
        }
        $e5="select durum from seymenparkalani where parkkodu='E5'";
        $e5sonuc=mysqli_query($db_conn,$e5);   
        $row = mysqli_fetch_array($e5sonuc);
        $e5num=mysqli_num_rows($e5sonuc);
         if($e5num == 1){
             $_SESSION['e5']=$row['durum'];
        }
        $e6="select durum from seymenparkalani where parkkodu='E6'";
        $e6sonuc=mysqli_query($db_conn,$e6);   
        $row = mysqli_fetch_array($e6sonuc);
        $e6num=mysqli_num_rows($e6sonuc);
         if($e6num == 1){
             $_SESSION['e6']=$row['durum'];
        }
        $e7="select durum from seymenparkalani where parkkodu='E7'";
        $e7sonuc=mysqli_query($db_conn,$e7);   
        $row = mysqli_fetch_array($e7sonuc);
        $e7num=mysqli_num_rows($e7sonuc);
         if($e7num == 1){
             $_SESSION['e7']=$row['durum'];
        }
        $e8="select durum from seymenparkalani where parkkodu='E8'";
        $e8sonuc=mysqli_query($db_conn,$e8);   
        $row = mysqli_fetch_array($e8sonuc);
        $e8num=mysqli_num_rows($e8sonuc);
         if($e8num == 1){
             $_SESSION['e8']=$row['durum'];
        }
        $e9="select durum from seymenparkalani where parkkodu='E9'";
        $e9sonuc=mysqli_query($db_conn,$e9);   
        $row = mysqli_fetch_array($e9sonuc);
        $e9num=mysqli_num_rows($e9sonuc);
         if($e9num == 1){
             $_SESSION['e9']=$row['durum'];
        }
        $e10="select durum from seymenparkalani where parkkodu='E10'";
        $e10sonuc=mysqli_query($db_conn,$e10);   
        $row = mysqli_fetch_array($e10sonuc);
        $e10num=mysqli_num_rows($e10sonuc);
         if($e10num == 1){
             $_SESSION['e10']=$row['durum'];
        }
        $e11="select durum from seymenparkalani where parkkodu='E11'";
        $e11sonuc=mysqli_query($db_conn,$e11);   
        $row = mysqli_fetch_array($e11sonuc);
        $e11num=mysqli_num_rows($e11sonuc);
         if($e11num == 1){
             $_SESSION['e11']=$row['durum'];
        }
        $e12="select durum from seymenparkalani where parkkodu='E12'";
        $e12sonuc=mysqli_query($db_conn,$e12);   
        $row = mysqli_fetch_array($e12sonuc);
        $e12num=mysqli_num_rows($e9sonuc);
         if($e12num == 1){
             $_SESSION['e12']=$row['durum'];
        }

        $f1="select durum from seymenparkalani where parkkodu='F1'";
        $f1sonuc=mysqli_query($db_conn,$f1);   
        $row = mysqli_fetch_array($f1sonuc);
        $f1num=mysqli_num_rows($f1sonuc);
         if($f1num == 1){
             $_SESSION['f1']=$row['durum'];
        }
        $f2="select durum from seymenparkalani where parkkodu='F2'";
        $f2sonuc=mysqli_query($db_conn,$f2);   
        $row = mysqli_fetch_array($f2sonuc);
        $f2num=mysqli_num_rows($f2sonuc);
         if($f2num == 1){
             $_SESSION['f2']=$row['durum'];
        }
        $f3="select durum from seymenparkalani where parkkodu='F3'";
        $f3sonuc=mysqli_query($db_conn,$f3);   
        $row = mysqli_fetch_array($f3sonuc);
        $f3num=mysqli_num_rows($f3sonuc);
         if($f3num == 1){
             $_SESSION['f3']=$row['durum'];
        }
        $f4="select durum from seymenparkalani where parkkodu='F4'";
        $f4sonuc=mysqli_query($db_conn,$f4);   
        $row = mysqli_fetch_array($f4sonuc);
        $f4num=mysqli_num_rows($f4sonuc);
         if($f4num == 1){
             $_SESSION['f4']=$row['durum'];
        }
        $f5="select durum from seymenparkalani where parkkodu='F5'";
        $f5sonuc=mysqli_query($db_conn,$f5);   
        $row = mysqli_fetch_array($f5sonuc);
        $f5num=mysqli_num_rows($f5sonuc);
         if($f5num == 1){
             $_SESSION['f5']=$row['durum'];
        }
        $f6="select durum from seymenparkalani where parkkodu='F6'";
        $f6sonuc=mysqli_query($db_conn,$f6);   
        $row = mysqli_fetch_array($f6sonuc);
        $f6num=mysqli_num_rows($f6sonuc);
         if($f6num == 1){
             $_SESSION['f6']=$row['durum'];
        }
        $f7="select durum from seymenparkalani where parkkodu='F7'";
        $f7sonuc=mysqli_query($db_conn,$f7);   
        $row = mysqli_fetch_array($f7sonuc);
        $f7num=mysqli_num_rows($f7sonuc);
         if($f7num == 1){
             $_SESSION['f7']=$row['durum'];
        }
        $f8="select durum from seymenparkalani where parkkodu='F8'";
        $f8sonuc=mysqli_query($db_conn,$f8);   
        $row = mysqli_fetch_array($f8sonuc);
        $f8num=mysqli_num_rows($f8sonuc);
         if($f8num == 1){
             $_SESSION['f8']=$row['durum'];
        }
        $f9="select durum from seymenparkalani where parkkodu='F9'";
        $f9sonuc=mysqli_query($db_conn,$f9);   
        $row = mysqli_fetch_array($f9sonuc);
        $f9num=mysqli_num_rows($f9sonuc);
         if($f9num == 1){
             $_SESSION['f9']=$row['durum'];
        }
        $f10="select durum from seymenparkalani where parkkodu='F10'";
        $f10sonuc=mysqli_query($db_conn,$f10);   
        $row = mysqli_fetch_array($f10sonuc);
        $f10num=mysqli_num_rows($f10sonuc);
         if($f10num == 1){
             $_SESSION['f10']=$row['durum'];
        }
        $f11="select durum from seymenparkalani where parkkodu='F11'";
        $f11sonuc=mysqli_query($db_conn,$f11); 
        $row = mysqli_fetch_array($f11sonuc);
        $f11num=mysqli_num_rows($f11sonuc);
        if($f11num == 1){
            $_SESSION['f11']=$row['durum'];
        }

        $f12="select durum from seymenparkalani where parkkodu='F12'";
        $f12sonuc=mysqli_query($db_conn,$f12); 
        $row = mysqli_fetch_array($f12sonuc);
        $f12num=mysqli_num_rows($f12sonuc);
        if($f12num == 1){
            $_SESSION['f12']=$row['durum'];
        }

        $f13="select durum from seymenparkalani where parkkodu='F13'";
        $f13sonuc=mysqli_query($db_conn,$f13); 
        $row = mysqli_fetch_array($f13sonuc);
        $f13num=mysqli_num_rows($f13sonuc);
        if($f13num == 1){
            $_SESSION['f13']=$row['durum'];
        }
        $f14="select durum from seymenparkalani where parkkodu='F14'";
        $f14sonuc=mysqli_query($db_conn,$f14); 
        $row = mysqli_fetch_array($f14sonuc);
        $f14num=mysqli_num_rows($f14sonuc);
        if($f14num == 1){
            $_SESSION['f14']=$row['durum'];
        }
        $f15="select durum from seymenparkalani where parkkodu='F15'";
        $f15sonuc=mysqli_query($db_conn,$f15); 
        $row = mysqli_fetch_array($f15sonuc);
        $f15num=mysqli_num_rows($f15sonuc);
        if($f15num == 1){
            $_SESSION['f15']=$row['durum'];
        }
        $f16="select durum from seymenparkalani where parkkodu='F16'";
        $f16sonuc=mysqli_query($db_conn,$f16); 
        $row = mysqli_fetch_array($f16sonuc);
        $f16num=mysqli_num_rows($f16sonuc);
        if($f16num == 1){
            $_SESSION['f16']=$row['durum'];
        }

        $g1="select durum from seymenparkalani where parkkodu='G1'";
        $g1sonuc=mysqli_query($db_conn,$g1);   
        $row = mysqli_fetch_array($g1sonuc);
        $g1num=mysqli_num_rows($g1sonuc);
         if($g1num == 1){
             $_SESSION['g1']=$row['durum'];
        }
        $g2="select durum from seymenparkalani where parkkodu='G2'";
        $g2sonuc=mysqli_query($db_conn,$g2);   
        $row = mysqli_fetch_array($g2sonuc);
        $g2num=mysqli_num_rows($g2sonuc);
         if($g2num == 1){
             $_SESSION['g2']=$row['durum'];
        }
        $g3="select durum from seymenparkalani where parkkodu='G3'";
        $g3sonuc=mysqli_query($db_conn,$g3);   
        $row = mysqli_fetch_array($g3sonuc);
        $g3num=mysqli_num_rows($g3sonuc);
         if($g3num == 1){
             $_SESSION['g3']=$row['durum'];
        }
        $g4="select durum from seymenparkalani where parkkodu='G4'";
        $g4sonuc=mysqli_query($db_conn,$g4);   
        $row = mysqli_fetch_array($g4sonuc);
        $g4num=mysqli_num_rows($g4sonuc);
         if($g4num == 1){
             $_SESSION['g4']=$row['durum'];
        }
        $g5="select durum from seymenparkalani where parkkodu='G5'";
        $g5sonuc=mysqli_query($db_conn,$g5);   
        $row = mysqli_fetch_array($g5sonuc);
        $g5num=mysqli_num_rows($g5sonuc);
         if($g5num == 1){
             $_SESSION['g5']=$row['durum'];
        }
        $g6="select durum from seymenparkalani where parkkodu='G6'";
        $g6sonuc=mysqli_query($db_conn,$g6);   
        $row = mysqli_fetch_array($g6sonuc);
        $g6num=mysqli_num_rows($g6sonuc);
         if($g6num == 1){
             $_SESSION['g6']=$row['durum'];
        }
        $g7="select durum from seymenparkalani where parkkodu='G7'";
        $g7sonuc=mysqli_query($db_conn,$g7);   
        $row = mysqli_fetch_array($g7sonuc);
        $g7num=mysqli_num_rows($g7sonuc);
         if($g7num == 1){
             $_SESSION['g7']=$row['durum'];
        }
        $g8="select durum from seymenparkalani where parkkodu='G8'";
        $g8sonuc=mysqli_query($db_conn,$g8);   
        $row = mysqli_fetch_array($g8sonuc);
        $g8num=mysqli_num_rows($g8sonuc);
         if($g8num == 1){
             $_SESSION['g8']=$row['durum'];
        }
        $g9="select durum from seymenparkalani where parkkodu='G9'";
        $g9sonuc=mysqli_query($db_conn,$g9);   
        $row = mysqli_fetch_array($g9sonuc);
        $g9num=mysqli_num_rows($g9sonuc);
         if($c9num == 1){
             $_SESSION['g9']=$row['durum'];
        }
        $g10="select durum from seymenparkalani where parkkodu='G10'";
        $g10sonuc=mysqli_query($db_conn,$g10);   
        $row = mysqli_fetch_array($g10sonuc);
        $g10num=mysqli_num_rows($g10sonuc);
         if($g10num == 1){
             $_SESSION['g10']=$row['durum'];
        }
        $g11="select durum from seymenparkalani where parkkodu='G11'";
        $g11sonuc=mysqli_query($db_conn,$g11); 
        $row = mysqli_fetch_array($g11sonuc);
        $g11num=mysqli_num_rows($g11sonuc);
        if($g11num == 1){
            $_SESSION['g11']=$row['durum'];
        }

        $g12="select durum from seymenparkalani where parkkodu='G12'";
        $g12sonuc=mysqli_query($db_conn,$g12); 
        $row = mysqli_fetch_array($g12sonuc);
        $g12num=mysqli_num_rows($g12sonuc);
        if($g12num == 1){
            $_SESSION['g12']=$row['durum'];
        }

        $g13="select durum from seymenparkalani where parkkodu='G13'";
        $g13sonuc=mysqli_query($db_conn,$g13); 
        $row = mysqli_fetch_array($g13sonuc);
        $g13num=mysqli_num_rows($g13sonuc);
        if($g13num == 1){
            $_SESSION['g13']=$row['durum'];
        }
        $g14="select durum from seymenparkalani where parkkodu='G14'";
        $g14sonuc=mysqli_query($db_conn,$g14); 
        $row = mysqli_fetch_array($g14sonuc);
        $g14num=mysqli_num_rows($g14sonuc);
        if($g14num == 1){
            $_SESSION['g14']=$row['durum'];
        }
        $g15="select durum from seymenparkalani where parkkodu='G15'";
        $g15sonuc=mysqli_query($db_conn,$g15); 
        $row = mysqli_fetch_array($g15sonuc);
        $g15num=mysqli_num_rows($g15sonuc);
        if($g15num == 1){
            $_SESSION['g15']=$row['durum'];
        }
        $g16="select durum from seymenparkalani where parkkodu='G16'";
        $g16sonuc=mysqli_query($db_conn,$g16); 
        $row = mysqli_fetch_array($g16sonuc);
        $g16num=mysqli_num_rows($g16sonuc);
        if($g16num == 1){
            $_SESSION['g16']=$row['durum'];
        }

        $h1="select durum from seymenparkalani where parkkodu='H1'";
        $h1sonuc=mysqli_query($db_conn,$h1);   
        $row = mysqli_fetch_array($h1sonuc);
        $h1num=mysqli_num_rows($h1sonuc);
         if($h1num == 1){
             $_SESSION['h1']=$row['durum'];
        }
        $h2="select durum from seymenparkalani where parkkodu='H2'";
        $h2sonuc=mysqli_query($db_conn,$h2);   
        $row = mysqli_fetch_array($h2sonuc);
        $h2num=mysqli_num_rows($h2sonuc);
         if($h2num == 1){
             $_SESSION['h2']=$row['durum'];
        }
        $h3="select durum from seymenparkalani where parkkodu='H3'";
        $h3sonuc=mysqli_query($db_conn,$h3);   
        $row = mysqli_fetch_array($h3sonuc);
        $h3num=mysqli_num_rows($h3sonuc);
         if($h3num == 1){
             $_SESSION['h3']=$row['durum'];
        }
        $h4="select durum from seymenparkalani where parkkodu='H4'";
        $h4sonuc=mysqli_query($db_conn,$h4);   
        $row = mysqli_fetch_array($h4sonuc);
        $h4num=mysqli_num_rows($h4sonuc);
         if($h4num == 1){
             $_SESSION['h4']=$row['durum'];
        }
        $h5="select durum from seymenparkalani where parkkodu='H5'";
        $h5sonuc=mysqli_query($db_conn,$h5);   
        $row = mysqli_fetch_array($h5sonuc);
        $h5num=mysqli_num_rows($h5sonuc);
         if($h5num == 1){
             $_SESSION['h5']=$row['durum'];
        }
        $h6="select durum from seymenparkalani where parkkodu='H6'";
        $h6sonuc=mysqli_query($db_conn,$h6);   
        $row = mysqli_fetch_array($h6sonuc);
        $h6num=mysqli_num_rows($h6sonuc);
         if($h6num == 1){
             $_SESSION['h6']=$row['durum'];
        }
        $h7="select durum from seymenparkalani where parkkodu='H7'";
        $h7sonuc=mysqli_query($db_conn,$h7);   
        $row = mysqli_fetch_array($h7sonuc);
        $h7num=mysqli_num_rows($h7sonuc);
         if($h7num == 1){
             $_SESSION['h7']=$row['durum'];
        }
        $h8="select durum from seymenparkalani where parkkodu='H8'";
        $h8sonuc=mysqli_query($db_conn,$h8);   
        $row = mysqli_fetch_array($h8sonuc);
        $h8num=mysqli_num_rows($h8sonuc);
         if($h8num == 1){
             $_SESSION['h8']=$row['durum'];
        }
        $h9="select durum from seymenparkalani where parkkodu='H9'";
        $h9sonuc=mysqli_query($db_conn,$h9);   
        $row = mysqli_fetch_array($h9sonuc);
        $h9num=mysqli_num_rows($h9sonuc);
         if($h9num == 1){
             $_SESSION['h9']=$row['durum'];
        }
        $h10="select durum from seymenparkalani where parkkodu='H10'";
        $h10sonuc=mysqli_query($db_conn,$h10);   
        $row = mysqli_fetch_array($h10sonuc);
        $h10num=mysqli_num_rows($h10sonuc);
         if($h10num == 1){
             $_SESSION['h10']=$row['durum'];
        }
        $h11="select durum from seymenparkalani where parkkodu='H11'";
        $h11sonuc=mysqli_query($db_conn,$h11); 
        $row = mysqli_fetch_array($h11sonuc);
        $h11num=mysqli_num_rows($h11sonuc);
        if($h11num == 1){
            $_SESSION['h11']=$row['durum'];
        }

        $h12="select durum from seymenparkalani where parkkodu='H12'";
        $h12sonuc=mysqli_query($db_conn,$h12); 
        $row = mysqli_fetch_array($h12sonuc);
        $h12num=mysqli_num_rows($h12sonuc);
        if($h12num == 1){
            $_SESSION['h12']=$row['durum'];
        }

        $i1="select durum from seymenparkalani where parkkodu='I1'";
        $i1sonuc=mysqli_query($db_conn,$i1);   
        $row = mysqli_fetch_array($i1sonuc);
        $i1num=mysqli_num_rows($i1sonuc);
         if($i1num == 1){
             $_SESSION['i1']=$row['durum'];
        }
        $i2="select durum from seymenparkalani where parkkodu='I2'";
        $i2sonuc=mysqli_query($db_conn,$i2);   
        $row = mysqli_fetch_array($i2sonuc);
        $i2num=mysqli_num_rows($i2sonuc);
         if($i2num == 1){
             $_SESSION['i2']=$row['durum'];
        }
        $i3="select durum from seymenparkalani where parkkodu='I3'";
        $i3sonuc=mysqli_query($db_conn,$i3);   
        $row = mysqli_fetch_array($i3sonuc);
        $i3num=mysqli_num_rows($i3sonuc);
         if($i3num == 1){
             $_SESSION['i3']=$row['durum'];
        }
        $i4="select durum from seymenparkalani where parkkodu='I4'";
        $i4sonuc=mysqli_query($db_conn,$i4);   
        $row = mysqli_fetch_array($i4sonuc);
        $i4num=mysqli_num_rows($i4sonuc);
         if($a4num == 1){
             $_SESSION['i4']=$row['durum'];
        }
        $i5="select durum from seymenparkalani where parkkodu='I5'";
        $i5sonuc=mysqli_query($db_conn,$i5);   
        $row = mysqli_fetch_array($i5sonuc);
        $i5num=mysqli_num_rows($i5sonuc);
         if($i5num == 1){
             $_SESSION['i5']=$row['durum'];
        }
        $i6="select durum from seymenparkalani where parkkodu='I6'";
        $i6sonuc=mysqli_query($db_conn,$i6);   
        $row = mysqli_fetch_array($i6sonuc);
        $i6num=mysqli_num_rows($i6sonuc);
         if($i6num == 1){
             $_SESSION['i6']=$row['durum'];
        }
        $i7="select durum from seymenparkalani where parkkodu='I7'";
        $i7sonuc=mysqli_query($db_conn,$i7);   
        $row = mysqli_fetch_array($i7sonuc);
        $i7num=mysqli_num_rows($i7sonuc);
         if($i7num == 1){
             $_SESSION['i7']=$row['durum'];
        }
        $i8="select durum from seymenparkalani where parkkodu='I8'";
        $i8sonuc=mysqli_query($db_conn,$i8);   
        $row = mysqli_fetch_array($i8sonuc);
        $i8num=mysqli_num_rows($i8sonuc);
         if($i8num == 1){
             $_SESSION['i8']=$row['durum'];
        }
        $i9="select durum from seymenparkalani where parkkodu='I9'";
        $i9sonuc=mysqli_query($db_conn,$i9);   
        $row = mysqli_fetch_array($i9sonuc);
        $i9num=mysqli_num_rows($i9sonuc);
         if($i9num == 1){
             $_SESSION['i9']=$row['durum'];
        }
        $i10="select durum from seymenparkalani where parkkodu='I10'";
        $i10sonuc=mysqli_query($db_conn,$i10);   
        $row = mysqli_fetch_array($i10sonuc);
        $i10num=mysqli_num_rows($i10sonuc);
         if($i10num == 1){
             $_SESSION['i10']=$row['durum'];
        }
        $i11="select durum from seymenparkalani where parkkodu='I11'";
        $i11sonuc=mysqli_query($db_conn,$i11);   
        $row = mysqli_fetch_array($i11sonuc);
        $i11num=mysqli_num_rows($i11sonuc);
         if($i11num == 1){
             $_SESSION['i11']=$row['durum'];
        }
        $i12="select durum from seymenparkalani where parkkodu='I12'";
        $i12sonuc=mysqli_query($db_conn,$i12);   
        $row = mysqli_fetch_array($i12sonuc);
        $i12num=mysqli_num_rows($i9sonuc);
         if($i12num == 1){
             $_SESSION['i12']=$row['durum'];
        }

        $j1="select durum from seymenparkalani where parkkodu='J1'";
        $j1sonuc=mysqli_query($db_conn,$j1);   
        $row = mysqli_fetch_array($j1sonuc);
        $j1num=mysqli_num_rows($j1sonuc);
         if($j1num == 1){
             $_SESSION['j1']=$row['durum'];
        }
        $j2="select durum from seymenparkalani where parkkodu='J2'";
        $j2sonuc=mysqli_query($db_conn,$j2);   
        $row = mysqli_fetch_array($j2sonuc);
        $j2num=mysqli_num_rows($j2sonuc);
         if($j2num == 1){
             $_SESSION['j2']=$row['durum'];
        }
        $j3="select durum from seymenparkalani where parkkodu='J3'";
        $j3sonuc=mysqli_query($db_conn,$j3);   
        $row = mysqli_fetch_array($j3sonuc);
        $j3num=mysqli_num_rows($j3sonuc);
         if($j3num == 1){
             $_SESSION['j3']=$row['durum'];
        }
        $j4="select durum from seymenparkalani where parkkodu='J4'";
        $j4sonuc=mysqli_query($db_conn,$j4);   
        $row = mysqli_fetch_array($j4sonuc);
        $j4num=mysqli_num_rows($j4sonuc);
         if($j4num == 1){
             $_SESSION['j4']=$row['durum'];
        }
        $j5="select durum from seymenparkalani where parkkodu='J5'";
        $j5sonuc=mysqli_query($db_conn,$j5);   
        $row = mysqli_fetch_array($j5sonuc);
        $j5num=mysqli_num_rows($j5sonuc);
         if($j5num == 1){
             $_SESSION['j5']=$row['durum'];
        }
        $j6="select durum from seymenparkalani where parkkodu='J6'";
        $j6sonuc=mysqli_query($db_conn,$j6);   
        $row = mysqli_fetch_array($j6sonuc);
        $j6num=mysqli_num_rows($j6sonuc);
         if($j6num == 1){
             $_SESSION['j6']=$row['durum'];
        }
        $j7="select durum from seymenparkalani where parkkodu='J7'";
        $j7sonuc=mysqli_query($db_conn,$j7);   
        $row = mysqli_fetch_array($j7sonuc);
        $j7num=mysqli_num_rows($j7sonuc);
         if($j7num == 1){
             $_SESSION['j7']=$row['durum'];
        }
        $j8="select durum from seymenparkalani where parkkodu='J8'";
        $j8sonuc=mysqli_query($db_conn,$j8);   
        $row = mysqli_fetch_array($j8sonuc);
        $j8num=mysqli_num_rows($j8sonuc);
         if($j8num == 1){
             $_SESSION['j8']=$row['durum'];
        }
        $j9="select durum from seymenparkalani where parkkodu='J9'";
        $j9sonuc=mysqli_query($db_conn,$j9);   
        $row = mysqli_fetch_array($j9sonuc);
        $j9num=mysqli_num_rows($j9sonuc);
         if($j9num == 1){
             $_SESSION['j9']=$row['durum'];
        }
        $j10="select durum from seymenparkalani where parkkodu='J10'";
        $j10sonuc=mysqli_query($db_conn,$j10);   
        $row = mysqli_fetch_array($j10sonuc);
        $j10num=mysqli_num_rows($j10sonuc);
         if($j10num == 1){
             $_SESSION['j10']=$row['durum'];
        }
        $j11="select durum from seymenparkalani where parkkodu='J11'";
        $j11sonuc=mysqli_query($db_conn,$j11); 
        $row = mysqli_fetch_array($j11sonuc);
        $j11num=mysqli_num_rows($j11sonuc);
        if($j11num == 1){
            $_SESSION['j11']=$row['durum'];
        }

        $j12="select durum from seymenparkalani where parkkodu='J12'";
        $j12sonuc=mysqli_query($db_conn,$j12); 
        $row = mysqli_fetch_array($j12sonuc);
        $j12num=mysqli_num_rows($j12sonuc);
        if($j12num == 1){
            $_SESSION['j12']=$row['durum'];
        }

        $j13="select durum from seymenparkalani where parkkodu='J13'";
        $j13sonuc=mysqli_query($db_conn,$j13); 
        $row = mysqli_fetch_array($j13sonuc);
        $j13num=mysqli_num_rows($j13sonuc);
        if($j13num == 1){
            $_SESSION['j13']=$row['durum'];
        }
        $j14="select durum from seymenparkalani where parkkodu='J14'";
        $j14sonuc=mysqli_query($db_conn,$j14); 
        $row = mysqli_fetch_array($j14sonuc);
        $j14num=mysqli_num_rows($j14sonuc);
        if($j14num == 1){
            $_SESSION['j14']=$row['durum'];
        }
        $j15="select durum from seymenparkalani where parkkodu='J15'";
        $j15sonuc=mysqli_query($db_conn,$j15); 
        $row = mysqli_fetch_array($j15sonuc);
        $j15num=mysqli_num_rows($j15sonuc);
        if($j15num == 1){
            $_SESSION['j15']=$row['durum'];
        }
        $j16="select durum from seymenparkalani where parkkodu='J16'";
        $j16sonuc=mysqli_query($db_conn,$j16); 
        $row = mysqli_fetch_array($j16sonuc);
        $j16num=mysqli_num_rows($j16sonuc);
        if($j16num == 1){
            $_SESSION['j16']=$row['durum'];
        }

        $k1="select durum from seymenparkalani where parkkodu='K1'";
        $k1sonuc=mysqli_query($db_conn,$k1);   
        $row = mysqli_fetch_array($k1sonuc);
        $k1num=mysqli_num_rows($k1sonuc);
         if($k1num == 1){
             $_SESSION['k1']=$row['durum'];
        }
        $k2="select durum from seymenparkalani where parkkodu='K2'";
        $k2sonuc=mysqli_query($db_conn,$k2);   
        $row = mysqli_fetch_array($k2sonuc);
        $k2num=mysqli_num_rows($k2sonuc);
         if($k2num == 1){
             $_SESSION['k2']=$row['durum'];
        }
        $k3="select durum from seymenparkalani where parkkodu='K3'";
        $k3sonuc=mysqli_query($db_conn,$k3);   
        $row = mysqli_fetch_array($k3sonuc);
        $k3num=mysqli_num_rows($k3sonuc);
         if($k3num == 1){
             $_SESSION['k3']=$row['durum'];
        }
        $k4="select durum from seymenparkalani where parkkodu='K4'";
        $k4sonuc=mysqli_query($db_conn,$k4);   
        $row = mysqli_fetch_array($k4sonuc);
        $k4num=mysqli_num_rows($k4sonuc);
         if($k4num == 1){
             $_SESSION['k4']=$row['durum'];
        }
        $k5="select durum from seymenparkalani where parkkodu='K5'";
        $k5sonuc=mysqli_query($db_conn,$k5);   
        $row = mysqli_fetch_array($k5sonuc);
        $k5num=mysqli_num_rows($k5sonuc);
         if($k5num == 1){
             $_SESSION['k5']=$row['durum'];
        }
        $k6="select durum from seymenparkalani where parkkodu='K6'";
        $k6sonuc=mysqli_query($db_conn,$k6);   
        $row = mysqli_fetch_array($k6sonuc);
        $k6num=mysqli_num_rows($k6sonuc);
         if($k6num == 1){
             $_SESSION['k6']=$row['durum'];
        }
        $k7="select durum from seymenparkalani where parkkodu='K7'";
        $k7sonuc=mysqli_query($db_conn,$k7);   
        $row = mysqli_fetch_array($k7sonuc);
        $k7num=mysqli_num_rows($k7sonuc);
         if($k7num == 1){
             $_SESSION['k7']=$row['durum'];
        }
        $k8="select durum from seymenparkalani where parkkodu='K8'";
        $k8sonuc=mysqli_query($db_conn,$k8);   
        $row = mysqli_fetch_array($k8sonuc);
        $k8num=mysqli_num_rows($k8sonuc);
         if($k8num == 1){
             $_SESSION['k8']=$row['durum'];
        }
        $k9="select durum from seymenparkalani where parkkodu='K9'";
        $k9sonuc=mysqli_query($db_conn,$k9);   
        $row = mysqli_fetch_array($k9sonuc);
        $k9num=mysqli_num_rows($k9sonuc);
         if($c9num == 1){
             $_SESSION['k9']=$row['durum'];
        }
        $k10="select durum from seymenparkalani where parkkodu='K10'";
        $k10sonuc=mysqli_query($db_conn,$k10);   
        $row = mysqli_fetch_array($k10sonuc);
        $k10num=mysqli_num_rows($k10sonuc);
         if($k10num == 1){
             $_SESSION['k10']=$row['durum'];
        }
        $k11="select durum from seymenparkalani where parkkodu='K11'";
        $k11sonuc=mysqli_query($db_conn,$k11); 
        $row = mysqli_fetch_array($k11sonuc);
        $k11num=mysqli_num_rows($k11sonuc);
        if($k11num == 1){
            $_SESSION['k11']=$row['durum'];
        }

        $k12="select durum from seymenparkalani where parkkodu='K12'";
        $k12sonuc=mysqli_query($db_conn,$k12); 
        $row = mysqli_fetch_array($k12sonuc);
        $k12num=mysqli_num_rows($k12sonuc);
        if($k12num == 1){
            $_SESSION['k12']=$row['durum'];
        }

        $k13="select durum from seymenparkalani where parkkodu='K13'";
        $k13sonuc=mysqli_query($db_conn,$k13); 
        $row = mysqli_fetch_array($k13sonuc);
        $k13num=mysqli_num_rows($k13sonuc);
        if($k13num == 1){
            $_SESSION['k13']=$row['durum'];
        }
        $k14="select durum from seymenparkalani where parkkodu='K14'";
        $k14sonuc=mysqli_query($db_conn,$k14); 
        $row = mysqli_fetch_array($k14sonuc);
        $k14num=mysqli_num_rows($k14sonuc);
        if($k14num == 1){
            $_SESSION['k14']=$row['durum'];
        }
        $k15="select durum from seymenparkalani where parkkodu='K15'";
        $k15sonuc=mysqli_query($db_conn,$k15); 
        $row = mysqli_fetch_array($k15sonuc);
        $k15num=mysqli_num_rows($k15sonuc);
        if($k15num == 1){
            $_SESSION['k15']=$row['durum'];
        }
        $k16="select durum from seymenparkalani where parkkodu='K16'";
        $k16sonuc=mysqli_query($db_conn,$k16); 
        $row = mysqli_fetch_array($k16sonuc);
        $k16num=mysqli_num_rows($k16sonuc);
        if($k16num == 1){
            $_SESSION['k16']=$row['durum'];
        }

        $l1="select durum from seymenparkalani where parkkodu='L1'";
        $l1sonuc=mysqli_query($db_conn,$l1);   
        $row = mysqli_fetch_array($l1sonuc);
        $l1num=mysqli_num_rows($l1sonuc);
         if($l1num == 1){
             $_SESSION['l1']=$row['durum'];
        }
        $l2="select durum from seymenparkalani where parkkodu='L2'";
        $l2sonuc=mysqli_query($db_conn,$l2);   
        $row = mysqli_fetch_array($l2sonuc);
        $l2num=mysqli_num_rows($l2sonuc);
         if($l2num == 1){
             $_SESSION['l2']=$row['durum'];
        }
        $l3="select durum from seymenparkalani where parkkodu='L3'";
        $l3sonuc=mysqli_query($db_conn,$l3);   
        $row = mysqli_fetch_array($l3sonuc);
        $l3num=mysqli_num_rows($l3sonuc);
         if($l3num == 1){
             $_SESSION['l3']=$row['durum'];
        }
        $l4="select durum from seymenparkalani where parkkodu='L4'";
        $l4sonuc=mysqli_query($db_conn,$l4);   
        $row = mysqli_fetch_array($l4sonuc);
        $l4num=mysqli_num_rows($l4sonuc);
         if($l4num == 1){
             $_SESSION['l4']=$row['durum'];
        }
        $l5="select durum from seymenparkalani where parkkodu='L5'";
        $l5sonuc=mysqli_query($db_conn,$l5);   
        $row = mysqli_fetch_array($l5sonuc);
        $l5num=mysqli_num_rows($l5sonuc);
         if($l5num == 1){
             $_SESSION['l5']=$row['durum'];
        }
        $l6="select durum from seymenparkalani where parkkodu='L6'";
        $l6sonuc=mysqli_query($db_conn,$l6);   
        $row = mysqli_fetch_array($l6sonuc);
        $l6num=mysqli_num_rows($l6sonuc);
         if($l6num == 1){
             $_SESSION['l6']=$row['durum'];
        }
        $l7="select durum from seymenparkalani where parkkodu='L7'";
        $l7sonuc=mysqli_query($db_conn,$l7);   
        $row = mysqli_fetch_array($l7sonuc);
        $l7num=mysqli_num_rows($l7sonuc);
         if($l7num == 1){
             $_SESSION['l7']=$row['durum'];
        }
        $l8="select durum from seymenparkalani where parkkodu='L8'";
        $l8sonuc=mysqli_query($db_conn,$l8);   
        $row = mysqli_fetch_array($l8sonuc);
        $l8num=mysqli_num_rows($l8sonuc);
         if($l8num == 1){
             $_SESSION['l8']=$row['durum'];
        }
        $l9="select durum from seymenparkalani where parkkodu='L9'";
        $l9sonuc=mysqli_query($db_conn,$l9);   
        $row = mysqli_fetch_array($l9sonuc);
        $l9num=mysqli_num_rows($l9sonuc);
         if($l9num == 1){
             $_SESSION['l9']=$row['durum'];
        }
        $l10="select durum from seymenparkalani where parkkodu='L10'";
        $l10sonuc=mysqli_query($db_conn,$l10);   
        $row = mysqli_fetch_array($l10sonuc);
        $l10num=mysqli_num_rows($l10sonuc);
         if($l10num == 1){
             $_SESSION['l10']=$row['durum'];
        }
        $l11="select durum from seymenparkalani where parkkodu='L11'";
        $l11sonuc=mysqli_query($db_conn,$l11); 
        $row = mysqli_fetch_array($l11sonuc);
        $l11num=mysqli_num_rows($l11sonuc);
        if($l11num == 1){
            $_SESSION['l11']=$row['durum'];
        }

        $l12="select durum from seymenparkalani where parkkodu='L12'";
        $l12sonuc=mysqli_query($db_conn,$l12); 
        $row = mysqli_fetch_array($l12sonuc);
        $l12num=mysqli_num_rows($l12sonuc);
        if($l12num == 1){
            $_SESSION['l12']=$row['durum'];
        }
        





?>