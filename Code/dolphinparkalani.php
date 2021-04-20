



<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'oto');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
$adi_sorgu="select dolphinparkalani.parkkodu, dolphinparkalani.durum FROM dolphinparkalani" ;  
$sonuc_adi=mysqli_query($db_conn,$adi_sorgu);
$row = mysqli_fetch_assoc($sonuc_adi);    //BURASI  ATA BURASI BUNDAN ŞEYEDE YAPACAKSIN PARKALANLARINA VE SONRA BİİTİYORRR HADİ KOLAYGELSİN


        $a1="select durum from dolphinparkalani where parkkodu='A1'";
        $a1sonuc=mysqli_query($db_conn,$a1);   
        $row = mysqli_fetch_array($a1sonuc);
        $a1num=mysqli_num_rows($a1sonuc);
         if($a1num == 1){
             $_SESSION['a1']=$row['durum'];
        }
        $a2="select durum from dolphinparkalani where parkkodu='A2'";
        $a2sonuc=mysqli_query($db_conn,$a2);   
        $row = mysqli_fetch_array($a2sonuc);
        $a2num=mysqli_num_rows($a2sonuc);
         if($a2num == 1){
             $_SESSION['a2']=$row['durum'];
        }
        $a3="select durum from dolphinparkalani where parkkodu='A3'";
        $a3sonuc=mysqli_query($db_conn,$a3);   
        $row = mysqli_fetch_array($a3sonuc);
        $a3num=mysqli_num_rows($a3sonuc);
         if($a3num == 1){
             $_SESSION['a3']=$row['durum'];
        }
        $a4="select durum from dolphinparkalani where parkkodu='A4'";
        $a4sonuc=mysqli_query($db_conn,$a4);   
        $row = mysqli_fetch_array($a4sonuc);
        $a4num=mysqli_num_rows($a4sonuc);
         if($a4num == 1){
             $_SESSION['a4']=$row['durum'];
        }
        $a5="select durum from dolphinparkalani where parkkodu='A5'";
        $a5sonuc=mysqli_query($db_conn,$a5);   
        $row = mysqli_fetch_array($a5sonuc);
        $a5num=mysqli_num_rows($a5sonuc);
         if($a5num == 1){
             $_SESSION['a5']=$row['durum'];
        }
        $a6="select durum from dolphinparkalani where parkkodu='A6'";
        $a6sonuc=mysqli_query($db_conn,$a6);   
        $row = mysqli_fetch_array($a6sonuc);
        $a6num=mysqli_num_rows($a6sonuc);
         if($a6num == 1){
             $_SESSION['a6']=$row['durum'];
        }
        $a7="select durum from dolphinparkalani where parkkodu='A7'";
        $a7sonuc=mysqli_query($db_conn,$a7);   
        $row = mysqli_fetch_array($a7sonuc);
        $a7num=mysqli_num_rows($a7sonuc);
         if($a7num == 1){
             $_SESSION['a7']=$row['durum'];
        }
        $a8="select durum from dolphinparkalani where parkkodu='A8'";
        $a8sonuc=mysqli_query($db_conn,$a8);   
        $row = mysqli_fetch_array($a8sonuc);
        $a8num=mysqli_num_rows($a8sonuc);
         if($a8num == 1){
             $_SESSION['a8']=$row['durum'];
        }
        $a9="select durum from dolphinparkalani where parkkodu='A9'";
        $a9sonuc=mysqli_query($db_conn,$a9);   
        $row = mysqli_fetch_array($a9sonuc);
        $a9num=mysqli_num_rows($a9sonuc);
         if($a9num == 1){
             $_SESSION['a9']=$row['durum'];
        }
        $a10="select durum from dolphinparkalani where parkkodu='A10'";
        $a10sonuc=mysqli_query($db_conn,$a10);   
        $row = mysqli_fetch_array($a10sonuc);
        $a10num=mysqli_num_rows($a10sonuc);
         if($a10num == 1){
             $_SESSION['a10']=$row['durum'];
        }
        $a11="select durum from dolphinparkalani where parkkodu='A11'";
        $a11sonuc=mysqli_query($db_conn,$a11);   
        $row = mysqli_fetch_array($a11sonuc);
        $a11num=mysqli_num_rows($a11sonuc);
         if($a11num == 1){
             $_SESSION['a11']=$row['durum'];
        }
        $a12="select durum from dolphinparkalani where parkkodu='A12'";
        $a12sonuc=mysqli_query($db_conn,$a12);   
        $row = mysqli_fetch_array($a12sonuc);
        $a12num=mysqli_num_rows($a9sonuc);
         if($a12num == 1){
             $_SESSION['a12']=$row['durum'];
        }

        $b1="select durum from dolphinparkalani where parkkodu='B1'";
        $b1sonuc=mysqli_query($db_conn,$b1);   
        $row = mysqli_fetch_array($b1sonuc);
        $b1num=mysqli_num_rows($b1sonuc);
         if($b1num == 1){
             $_SESSION['b1']=$row['durum'];
        }
        $b2="select durum from dolphinparkalani where parkkodu='B2'";
        $b2sonuc=mysqli_query($db_conn,$b2);   
        $row = mysqli_fetch_array($b2sonuc);
        $b2num=mysqli_num_rows($b2sonuc);
         if($b2num == 1){
             $_SESSION['b2']=$row['durum'];
        }
        $b3="select durum from dolphinparkalani where parkkodu='B3'";
        $b3sonuc=mysqli_query($db_conn,$b3);   
        $row = mysqli_fetch_array($b3sonuc);
        $b3num=mysqli_num_rows($b3sonuc);
         if($b3num == 1){
             $_SESSION['b3']=$row['durum'];
        }
        $b4="select durum from dolphinparkalani where parkkodu='B4'";
        $b4sonuc=mysqli_query($db_conn,$b4);   
        $row = mysqli_fetch_array($b4sonuc);
        $b4num=mysqli_num_rows($b4sonuc);
         if($b4num == 1){
             $_SESSION['b4']=$row['durum'];
        }
        $b5="select durum from dolphinparkalani where parkkodu='B5'";
        $b5sonuc=mysqli_query($db_conn,$b5);   
        $row = mysqli_fetch_array($b5sonuc);
        $b5num=mysqli_num_rows($b5sonuc);
         if($b5num == 1){
             $_SESSION['b5']=$row['durum'];
        }
        $b6="select durum from dolphinparkalani where parkkodu='B6'";
        $b6sonuc=mysqli_query($db_conn,$b6);   
        $row = mysqli_fetch_array($b6sonuc);
        $b6num=mysqli_num_rows($b6sonuc);
         if($b6num == 1){
             $_SESSION['b6']=$row['durum'];
        }
        $b7="select durum from dolphinparkalani where parkkodu='B7'";
        $b7sonuc=mysqli_query($db_conn,$b7);   
        $row = mysqli_fetch_array($b7sonuc);
        $b7num=mysqli_num_rows($b7sonuc);
         if($b7num == 1){
             $_SESSION['b7']=$row['durum'];
        }
        $b8="select durum from dolphinparkalani where parkkodu='B8'";
        $b8sonuc=mysqli_query($db_conn,$b8);   
        $row = mysqli_fetch_array($b8sonuc);
        $b8num=mysqli_num_rows($b8sonuc);
         if($b8num == 1){
             $_SESSION['b8']=$row['durum'];
        }
        $b9="select durum from dolphinparkalani where parkkodu='B9'";
        $b9sonuc=mysqli_query($db_conn,$b9);   
        $row = mysqli_fetch_array($b9sonuc);
        $b9num=mysqli_num_rows($b9sonuc);
         if($b9num == 1){
             $_SESSION['b9']=$row['durum'];
        }
        $b10="select durum from dolphinparkalani where parkkodu='B10'";
        $b10sonuc=mysqli_query($db_conn,$b10);   
        $row = mysqli_fetch_array($b10sonuc);
        $b10num=mysqli_num_rows($b10sonuc);
         if($b10num == 1){
             $_SESSION['b10']=$row['durum'];
        }
        $b11="select durum from dolphinparkalani where parkkodu='B11'";
        $b11sonuc=mysqli_query($db_conn,$b11); 
        $row = mysqli_fetch_array($b11sonuc);
        $b11num=mysqli_num_rows($b11sonuc);
        if($b11num == 1){
            $_SESSION['b11']=$row['durum'];
        }

        $b12="select durum from dolphinparkalani where parkkodu='B12'";
        $b12sonuc=mysqli_query($db_conn,$b12); 
        $row = mysqli_fetch_array($b12sonuc);
        $b12num=mysqli_num_rows($b12sonuc);
        if($b12num == 1){
            $_SESSION['b12']=$row['durum'];
        }

        $b13="select durum from dolphinparkalani where parkkodu='B13'";
        $b13sonuc=mysqli_query($db_conn,$b13); 
        $row = mysqli_fetch_array($b13sonuc);
        $b13num=mysqli_num_rows($b13sonuc);
        if($b13num == 1){
            $_SESSION['b13']=$row['durum'];
        }
        $b14="select durum from dolphinparkalani where parkkodu='B14'";
        $b14sonuc=mysqli_query($db_conn,$b14); 
        $row = mysqli_fetch_array($b14sonuc);
        $b14num=mysqli_num_rows($b14sonuc);
        if($b14num == 1){
            $_SESSION['b14']=$row['durum'];
        }
        $b15="select durum from dolphinparkalani where parkkodu='B15'";
        $b15sonuc=mysqli_query($db_conn,$b15); 
        $row = mysqli_fetch_array($b15sonuc);
        $b15num=mysqli_num_rows($b15sonuc);
        if($b15num == 1){
            $_SESSION['b15']=$row['durum'];
        }
        $b16="select durum from dolphinparkalani where parkkodu='B16'";
        $b16sonuc=mysqli_query($db_conn,$b16); 
        $row = mysqli_fetch_array($b16sonuc);
        $b16num=mysqli_num_rows($b16sonuc);
        if($b16num == 1){
            $_SESSION['b16']=$row['durum'];
        }

        $c1="select durum from dolphinparkalani where parkkodu='C1'";
        $c1sonuc=mysqli_query($db_conn,$c1);   
        $row = mysqli_fetch_array($c1sonuc);
        $c1num=mysqli_num_rows($c1sonuc);
         if($c1num == 1){
             $_SESSION['c1']=$row['durum'];
        }
        $c2="select durum from dolphinparkalani where parkkodu='C2'";
        $c2sonuc=mysqli_query($db_conn,$c2);   
        $row = mysqli_fetch_array($c2sonuc);
        $c2num=mysqli_num_rows($c2sonuc);
         if($c2num == 1){
             $_SESSION['c2']=$row['durum'];
        }
        $c3="select durum from dolphinparkalani where parkkodu='C3'";
        $c3sonuc=mysqli_query($db_conn,$c3);   
        $row = mysqli_fetch_array($c3sonuc);
        $c3num=mysqli_num_rows($c3sonuc);
         if($c3num == 1){
             $_SESSION['c3']=$row['durum'];
        }
        $c4="select durum from dolphinparkalani where parkkodu='C4'";
        $c4sonuc=mysqli_query($db_conn,$c4);   
        $row = mysqli_fetch_array($c4sonuc);
        $c4num=mysqli_num_rows($c4sonuc);
         if($c4num == 1){
             $_SESSION['c4']=$row['durum'];
        }
        $c5="select durum from dolphinparkalani where parkkodu='C5'";
        $c5sonuc=mysqli_query($db_conn,$c5);   
        $row = mysqli_fetch_array($c5sonuc);
        $c5num=mysqli_num_rows($c5sonuc);
         if($c5num == 1){
             $_SESSION['c5']=$row['durum'];
        }
        $c6="select durum from dolphinparkalani where parkkodu='C6'";
        $c6sonuc=mysqli_query($db_conn,$c6);   
        $row = mysqli_fetch_array($c6sonuc);
        $c6num=mysqli_num_rows($c6sonuc);
         if($c6num == 1){
             $_SESSION['c6']=$row['durum'];
        }
        $c7="select durum from dolphinparkalani where parkkodu='C7'";
        $c7sonuc=mysqli_query($db_conn,$c7);   
        $row = mysqli_fetch_array($c7sonuc);
        $c7num=mysqli_num_rows($c7sonuc);
         if($c7num == 1){
             $_SESSION['c7']=$row['durum'];
        }
        $c8="select durum from dolphinparkalani where parkkodu='C8'";
        $c8sonuc=mysqli_query($db_conn,$c8);   
        $row = mysqli_fetch_array($c8sonuc);
        $c8num=mysqli_num_rows($c8sonuc);
         if($c8num == 1){
             $_SESSION['c8']=$row['durum'];
        }
        $c9="select durum from dolphinparkalani where parkkodu='C9'";
        $c9sonuc=mysqli_query($db_conn,$c9);   
        $row = mysqli_fetch_array($c9sonuc);
        $c9num=mysqli_num_rows($c9sonuc);
         if($c9num == 1){
             $_SESSION['c9']=$row['durum'];
        }
        $c10="select durum from dolphinparkalani where parkkodu='C10'";
        $c10sonuc=mysqli_query($db_conn,$c10);   
        $row = mysqli_fetch_array($c10sonuc);
        $c10num=mysqli_num_rows($c10sonuc);
         if($c10num == 1){
             $_SESSION['c10']=$row['durum'];
        }
        $c11="select durum from dolphinparkalani where parkkodu='C11'";
        $c11sonuc=mysqli_query($db_conn,$c11); 
        $row = mysqli_fetch_array($c11sonuc);
        $c11num=mysqli_num_rows($c11sonuc);
        if($c11num == 1){
            $_SESSION['c11']=$row['durum'];
        }

        $c12="select durum from dolphinparkalani where parkkodu='C12'";
        $c12sonuc=mysqli_query($db_conn,$c12); 
        $row = mysqli_fetch_array($c12sonuc);
        $c12num=mysqli_num_rows($c12sonuc);
        if($c12num == 1){
            $_SESSION['c12']=$row['durum'];
        }

        $c13="select durum from dolphinparkalani where parkkodu='C13'";
        $c13sonuc=mysqli_query($db_conn,$c13); 
        $row = mysqli_fetch_array($c13sonuc);
        $c13num=mysqli_num_rows($c13sonuc);
        if($c13num == 1){
            $_SESSION['c13']=$row['durum'];
        }
        $c14="select durum from dolphinparkalani where parkkodu='C14'";
        $c14sonuc=mysqli_query($db_conn,$c14); 
        $row = mysqli_fetch_array($c14sonuc);
        $c14num=mysqli_num_rows($c14sonuc);
        if($c14num == 1){
            $_SESSION['c14']=$row['durum'];
        }
        $c15="select durum from dolphinparkalani where parkkodu='C15'";
        $c15sonuc=mysqli_query($db_conn,$c15); 
        $row = mysqli_fetch_array($c15sonuc);
        $c15num=mysqli_num_rows($c15sonuc);
        if($c15num == 1){
            $_SESSION['c15']=$row['durum'];
        }
        $c16="select durum from dolphinparkalani where parkkodu='C16'";
        $c16sonuc=mysqli_query($db_conn,$c16); 
        $row = mysqli_fetch_array($c16sonuc);
        $c16num=mysqli_num_rows($c16sonuc);
        if($c16num == 1){
            $_SESSION['c16']=$row['durum'];
        }

        $d1="select durum from dolphinparkalani where parkkodu='D1'";
        $d1sonuc=mysqli_query($db_conn,$d1);   
        $row = mysqli_fetch_array($d1sonuc);
        $d1num=mysqli_num_rows($d1sonuc);
         if($d1num == 1){
             $_SESSION['d1']=$row['durum'];
        }
        $d2="select durum from dolphinparkalani where parkkodu='D2'";
        $d2sonuc=mysqli_query($db_conn,$d2);   
        $row = mysqli_fetch_array($d2sonuc);
        $d2num=mysqli_num_rows($d2sonuc);
         if($d2num == 1){
             $_SESSION['d2']=$row['durum'];
        }
        $d3="select durum from dolphinparkalani where parkkodu='D3'";
        $d3sonuc=mysqli_query($db_conn,$d3);   
        $row = mysqli_fetch_array($d3sonuc);
        $d3num=mysqli_num_rows($d3sonuc);
         if($d3num == 1){
             $_SESSION['d3']=$row['durum'];
        }
        $d4="select durum from dolphinparkalani where parkkodu='D4'";
        $d4sonuc=mysqli_query($db_conn,$d4);   
        $row = mysqli_fetch_array($d4sonuc);
        $d4num=mysqli_num_rows($d4sonuc);
         if($d4num == 1){
             $_SESSION['d4']=$row['durum'];
        }
        $d5="select durum from dolphinparkalani where parkkodu='D5'";
        $d5sonuc=mysqli_query($db_conn,$d5);   
        $row = mysqli_fetch_array($d5sonuc);
        $d5num=mysqli_num_rows($d5sonuc);
         if($d5num == 1){
             $_SESSION['d5']=$row['durum'];
        }
        $d6="select durum from dolphinparkalani where parkkodu='D6'";
        $d6sonuc=mysqli_query($db_conn,$d6);   
        $row = mysqli_fetch_array($d6sonuc);
        $d6num=mysqli_num_rows($d6sonuc);
         if($d6num == 1){
             $_SESSION['d6']=$row['durum'];
        }
        $d7="select durum from dolphinparkalani where parkkodu='D7'";
        $d7sonuc=mysqli_query($db_conn,$d7);   
        $row = mysqli_fetch_array($d7sonuc);
        $d7num=mysqli_num_rows($d7sonuc);
         if($d7num == 1){
             $_SESSION['d7']=$row['durum'];
        }
        $d8="select durum from dolphinparkalani where parkkodu='D8'";
        $d8sonuc=mysqli_query($db_conn,$d8);   
        $row = mysqli_fetch_array($d8sonuc);
        $d8num=mysqli_num_rows($d8sonuc);
         if($d8num == 1){
             $_SESSION['d8']=$row['durum'];
        }
        $d9="select durum from dolphinparkalani where parkkodu='D9'";
        $d9sonuc=mysqli_query($db_conn,$d9);   
        $row = mysqli_fetch_array($d9sonuc);
        $d9num=mysqli_num_rows($d9sonuc);
         if($d9num == 1){
             $_SESSION['d9']=$row['durum'];
        }
        $d10="select durum from dolphinparkalani where parkkodu='D10'";
        $d10sonuc=mysqli_query($db_conn,$d10);   
        $row = mysqli_fetch_array($d10sonuc);
        $d10num=mysqli_num_rows($d10sonuc);
         if($d10num == 1){
             $_SESSION['d10']=$row['durum'];
        }
        $d11="select durum from dolphinparkalani where parkkodu='D11'";
        $d11sonuc=mysqli_query($db_conn,$d11); 
        $row = mysqli_fetch_array($d11sonuc);
        $d11num=mysqli_num_rows($d11sonuc);
        if($d11num == 1){
            $_SESSION['d11']=$row['durum'];
        }

        $d12="select durum from dolphinparkalani where parkkodu='D12'";
        $d12sonuc=mysqli_query($db_conn,$d12); 
        $row = mysqli_fetch_array($d12sonuc);
        $d12num=mysqli_num_rows($d12sonuc);
        if($d12num == 1){
            $_SESSION['d12']=$row['durum'];
        }


        $e1="select durum from dolphinparkalani where parkkodu='E1'";
        $e1sonuc=mysqli_query($db_conn,$e1);   
        $row = mysqli_fetch_array($e1sonuc);
        $e1num=mysqli_num_rows($e1sonuc);
         if($e1num == 1){
             $_SESSION['e1']=$row['durum'];
        }
        $e2="select durum from dolphinparkalani where parkkodu='E2'";
        $e2sonuc=mysqli_query($db_conn,$e2);   
        $row = mysqli_fetch_array($e2sonuc);
        $e2num=mysqli_num_rows($e2sonuc);
         if($e2num == 1){
             $_SESSION['e2']=$row['durum'];
        }
        $e3="select durum from dolphinparkalani where parkkodu='E3'";
        $e3sonuc=mysqli_query($db_conn,$e3);   
        $row = mysqli_fetch_array($e3sonuc);
        $e3num=mysqli_num_rows($e3sonuc);
         if($e3num == 1){
             $_SESSION['e3']=$row['durum'];
        }
        $e4="select durum from dolphinparkalani where parkkodu='E4'";
        $e4sonuc=mysqli_query($db_conn,$e4);   
        $row = mysqli_fetch_array($e4sonuc);
        $e4num=mysqli_num_rows($e4sonuc);
         if($a4num == 1){
             $_SESSION['e4']=$row['durum'];
        }
        $e5="select durum from dolphinparkalani where parkkodu='E5'";
        $e5sonuc=mysqli_query($db_conn,$e5);   
        $row = mysqli_fetch_array($e5sonuc);
        $e5num=mysqli_num_rows($e5sonuc);
         if($e5num == 1){
             $_SESSION['e5']=$row['durum'];
        }
        $e6="select durum from dolphinparkalani where parkkodu='E6'";
        $e6sonuc=mysqli_query($db_conn,$e6);   
        $row = mysqli_fetch_array($e6sonuc);
        $e6num=mysqli_num_rows($e6sonuc);
         if($e6num == 1){
             $_SESSION['e6']=$row['durum'];
        }
        $e7="select durum from dolphinparkalani where parkkodu='E7'";
        $e7sonuc=mysqli_query($db_conn,$e7);   
        $row = mysqli_fetch_array($e7sonuc);
        $e7num=mysqli_num_rows($e7sonuc);
         if($e7num == 1){
             $_SESSION['e7']=$row['durum'];
        }
        $e8="select durum from dolphinparkalani where parkkodu='E8'";
        $e8sonuc=mysqli_query($db_conn,$e8);   
        $row = mysqli_fetch_array($e8sonuc);
        $e8num=mysqli_num_rows($e8sonuc);
         if($e8num == 1){
             $_SESSION['e8']=$row['durum'];
        }
        $e9="select durum from dolphinparkalani where parkkodu='E9'";
        $e9sonuc=mysqli_query($db_conn,$e9);   
        $row = mysqli_fetch_array($e9sonuc);
        $e9num=mysqli_num_rows($e9sonuc);
         if($e9num == 1){
             $_SESSION['e9']=$row['durum'];
        }
        $e10="select durum from dolphinparkalani where parkkodu='E10'";
        $e10sonuc=mysqli_query($db_conn,$e10);   
        $row = mysqli_fetch_array($e10sonuc);
        $e10num=mysqli_num_rows($e10sonuc);
         if($e10num == 1){
             $_SESSION['e10']=$row['durum'];
        }
        $e11="select durum from dolphinparkalani where parkkodu='E11'";
        $e11sonuc=mysqli_query($db_conn,$e11);   
        $row = mysqli_fetch_array($e11sonuc);
        $e11num=mysqli_num_rows($e11sonuc);
         if($e11num == 1){
             $_SESSION['e11']=$row['durum'];
        }
        $e12="select durum from dolphinparkalani where parkkodu='E12'";
        $e12sonuc=mysqli_query($db_conn,$e12);   
        $row = mysqli_fetch_array($e12sonuc);
        $e12num=mysqli_num_rows($e9sonuc);
         if($e12num == 1){
             $_SESSION['e12']=$row['durum'];
        }

        $f1="select durum from dolphinparkalani where parkkodu='F1'";
        $f1sonuc=mysqli_query($db_conn,$f1);   
        $row = mysqli_fetch_array($f1sonuc);
        $f1num=mysqli_num_rows($f1sonuc);
         if($f1num == 1){
             $_SESSION['f1']=$row['durum'];
        }
        $f2="select durum from dolphinparkalani where parkkodu='F2'";
        $f2sonuc=mysqli_query($db_conn,$f2);   
        $row = mysqli_fetch_array($f2sonuc);
        $f2num=mysqli_num_rows($f2sonuc);
         if($f2num == 1){
             $_SESSION['f2']=$row['durum'];
        }
        $f3="select durum from dolphinparkalani where parkkodu='F3'";
        $f3sonuc=mysqli_query($db_conn,$f3);   
        $row = mysqli_fetch_array($f3sonuc);
        $f3num=mysqli_num_rows($f3sonuc);
         if($f3num == 1){
             $_SESSION['f3']=$row['durum'];
        }
        $f4="select durum from dolphinparkalani where parkkodu='F4'";
        $f4sonuc=mysqli_query($db_conn,$f4);   
        $row = mysqli_fetch_array($f4sonuc);
        $f4num=mysqli_num_rows($f4sonuc);
         if($f4num == 1){
             $_SESSION['f4']=$row['durum'];
        }
        $f5="select durum from dolphinparkalani where parkkodu='F5'";
        $f5sonuc=mysqli_query($db_conn,$f5);   
        $row = mysqli_fetch_array($f5sonuc);
        $f5num=mysqli_num_rows($f5sonuc);
         if($f5num == 1){
             $_SESSION['f5']=$row['durum'];
        }
        $f6="select durum from dolphinparkalani where parkkodu='F6'";
        $f6sonuc=mysqli_query($db_conn,$f6);   
        $row = mysqli_fetch_array($f6sonuc);
        $f6num=mysqli_num_rows($f6sonuc);
         if($f6num == 1){
             $_SESSION['f6']=$row['durum'];
        }
        $f7="select durum from dolphinparkalani where parkkodu='F7'";
        $f7sonuc=mysqli_query($db_conn,$f7);   
        $row = mysqli_fetch_array($f7sonuc);
        $f7num=mysqli_num_rows($f7sonuc);
         if($f7num == 1){
             $_SESSION['f7']=$row['durum'];
        }
        $f8="select durum from dolphinparkalani where parkkodu='F8'";
        $f8sonuc=mysqli_query($db_conn,$f8);   
        $row = mysqli_fetch_array($f8sonuc);
        $f8num=mysqli_num_rows($f8sonuc);
         if($f8num == 1){
             $_SESSION['f8']=$row['durum'];
        }
        $f9="select durum from dolphinparkalani where parkkodu='F9'";
        $f9sonuc=mysqli_query($db_conn,$f9);   
        $row = mysqli_fetch_array($f9sonuc);
        $f9num=mysqli_num_rows($f9sonuc);
         if($f9num == 1){
             $_SESSION['f9']=$row['durum'];
        }
        $f10="select durum from dolphinparkalani where parkkodu='F10'";
        $f10sonuc=mysqli_query($db_conn,$f10);   
        $row = mysqli_fetch_array($f10sonuc);
        $f10num=mysqli_num_rows($f10sonuc);
         if($f10num == 1){
             $_SESSION['f10']=$row['durum'];
        }
        $f11="select durum from dolphinparkalani where parkkodu='F11'";
        $f11sonuc=mysqli_query($db_conn,$f11); 
        $row = mysqli_fetch_array($f11sonuc);
        $f11num=mysqli_num_rows($f11sonuc);
        if($f11num == 1){
            $_SESSION['f11']=$row['durum'];
        }

        $f12="select durum from dolphinparkalani where parkkodu='F12'";
        $f12sonuc=mysqli_query($db_conn,$f12); 
        $row = mysqli_fetch_array($f12sonuc);
        $f12num=mysqli_num_rows($f12sonuc);
        if($f12num == 1){
            $_SESSION['f12']=$row['durum'];
        }

        $f13="select durum from dolphinparkalani where parkkodu='F13'";
        $f13sonuc=mysqli_query($db_conn,$f13); 
        $row = mysqli_fetch_array($f13sonuc);
        $f13num=mysqli_num_rows($f13sonuc);
        if($f13num == 1){
            $_SESSION['f13']=$row['durum'];
        }
        $f14="select durum from dolphinparkalani where parkkodu='F14'";
        $f14sonuc=mysqli_query($db_conn,$f14); 
        $row = mysqli_fetch_array($f14sonuc);
        $f14num=mysqli_num_rows($f14sonuc);
        if($f14num == 1){
            $_SESSION['f14']=$row['durum'];
        }
        $f15="select durum from dolphinparkalani where parkkodu='F15'";
        $f15sonuc=mysqli_query($db_conn,$f15); 
        $row = mysqli_fetch_array($f15sonuc);
        $f15num=mysqli_num_rows($f15sonuc);
        if($f15num == 1){
            $_SESSION['f15']=$row['durum'];
        }
        $f16="select durum from dolphinparkalani where parkkodu='F16'";
        $f16sonuc=mysqli_query($db_conn,$f16); 
        $row = mysqli_fetch_array($f16sonuc);
        $f16num=mysqli_num_rows($f16sonuc);
        if($f16num == 1){
            $_SESSION['f16']=$row['durum'];
        }

        $g1="select durum from dolphinparkalani where parkkodu='G1'";
        $g1sonuc=mysqli_query($db_conn,$g1);   
        $row = mysqli_fetch_array($g1sonuc);
        $g1num=mysqli_num_rows($g1sonuc);
         if($g1num == 1){
             $_SESSION['g1']=$row['durum'];
        }
        $g2="select durum from dolphinparkalani where parkkodu='G2'";
        $g2sonuc=mysqli_query($db_conn,$g2);   
        $row = mysqli_fetch_array($g2sonuc);
        $g2num=mysqli_num_rows($g2sonuc);
         if($g2num == 1){
             $_SESSION['g2']=$row['durum'];
        }
        $g3="select durum from dolphinparkalani where parkkodu='G3'";
        $g3sonuc=mysqli_query($db_conn,$g3);   
        $row = mysqli_fetch_array($g3sonuc);
        $g3num=mysqli_num_rows($g3sonuc);
         if($g3num == 1){
             $_SESSION['g3']=$row['durum'];
        }
        $g4="select durum from dolphinparkalani where parkkodu='G4'";
        $g4sonuc=mysqli_query($db_conn,$g4);   
        $row = mysqli_fetch_array($g4sonuc);
        $g4num=mysqli_num_rows($g4sonuc);
         if($g4num == 1){
             $_SESSION['g4']=$row['durum'];
        }
        $g5="select durum from dolphinparkalani where parkkodu='G5'";
        $g5sonuc=mysqli_query($db_conn,$g5);   
        $row = mysqli_fetch_array($g5sonuc);
        $g5num=mysqli_num_rows($g5sonuc);
         if($g5num == 1){
             $_SESSION['g5']=$row['durum'];
        }
        $g6="select durum from dolphinparkalani where parkkodu='G6'";
        $g6sonuc=mysqli_query($db_conn,$g6);   
        $row = mysqli_fetch_array($g6sonuc);
        $g6num=mysqli_num_rows($g6sonuc);
         if($g6num == 1){
             $_SESSION['g6']=$row['durum'];
        }
        $g7="select durum from dolphinparkalani where parkkodu='G7'";
        $g7sonuc=mysqli_query($db_conn,$g7);   
        $row = mysqli_fetch_array($g7sonuc);
        $g7num=mysqli_num_rows($g7sonuc);
         if($g7num == 1){
             $_SESSION['g7']=$row['durum'];
        }
        $g8="select durum from dolphinparkalani where parkkodu='G8'";
        $g8sonuc=mysqli_query($db_conn,$g8);   
        $row = mysqli_fetch_array($g8sonuc);
        $g8num=mysqli_num_rows($g8sonuc);
         if($g8num == 1){
             $_SESSION['g8']=$row['durum'];
        }
        $g9="select durum from dolphinparkalani where parkkodu='G9'";
        $g9sonuc=mysqli_query($db_conn,$g9);   
        $row = mysqli_fetch_array($g9sonuc);
        $g9num=mysqli_num_rows($g9sonuc);
         if($c9num == 1){
             $_SESSION['g9']=$row['durum'];
        }
        $g10="select durum from dolphinparkalani where parkkodu='G10'";
        $g10sonuc=mysqli_query($db_conn,$g10);   
        $row = mysqli_fetch_array($g10sonuc);
        $g10num=mysqli_num_rows($g10sonuc);
         if($g10num == 1){
             $_SESSION['g10']=$row['durum'];
        }
        $g11="select durum from dolphinparkalani where parkkodu='G11'";
        $g11sonuc=mysqli_query($db_conn,$g11); 
        $row = mysqli_fetch_array($g11sonuc);
        $g11num=mysqli_num_rows($g11sonuc);
        if($g11num == 1){
            $_SESSION['g11']=$row['durum'];
        }

        $g12="select durum from dolphinparkalani where parkkodu='G12'";
        $g12sonuc=mysqli_query($db_conn,$g12); 
        $row = mysqli_fetch_array($g12sonuc);
        $g12num=mysqli_num_rows($g12sonuc);
        if($g12num == 1){
            $_SESSION['g12']=$row['durum'];
        }

        $g13="select durum from dolphinparkalani where parkkodu='G13'";
        $g13sonuc=mysqli_query($db_conn,$g13); 
        $row = mysqli_fetch_array($g13sonuc);
        $g13num=mysqli_num_rows($g13sonuc);
        if($g13num == 1){
            $_SESSION['g13']=$row['durum'];
        }
        $g14="select durum from dolphinparkalani where parkkodu='G14'";
        $g14sonuc=mysqli_query($db_conn,$g14); 
        $row = mysqli_fetch_array($g14sonuc);
        $g14num=mysqli_num_rows($g14sonuc);
        if($g14num == 1){
            $_SESSION['g14']=$row['durum'];
        }
        $g15="select durum from dolphinparkalani where parkkodu='G15'";
        $g15sonuc=mysqli_query($db_conn,$g15); 
        $row = mysqli_fetch_array($g15sonuc);
        $g15num=mysqli_num_rows($g15sonuc);
        if($g15num == 1){
            $_SESSION['g15']=$row['durum'];
        }
        $g16="select durum from dolphinparkalani where parkkodu='G16'";
        $g16sonuc=mysqli_query($db_conn,$g16); 
        $row = mysqli_fetch_array($g16sonuc);
        $g16num=mysqli_num_rows($g16sonuc);
        if($g16num == 1){
            $_SESSION['g16']=$row['durum'];
        }

        $h1="select durum from dolphinparkalani where parkkodu='H1'";
        $h1sonuc=mysqli_query($db_conn,$h1);   
        $row = mysqli_fetch_array($h1sonuc);
        $h1num=mysqli_num_rows($h1sonuc);
         if($h1num == 1){
             $_SESSION['h1']=$row['durum'];
        }
        $h2="select durum from dolphinparkalani where parkkodu='H2'";
        $h2sonuc=mysqli_query($db_conn,$h2);   
        $row = mysqli_fetch_array($h2sonuc);
        $h2num=mysqli_num_rows($h2sonuc);
         if($h2num == 1){
             $_SESSION['h2']=$row['durum'];
        }
        $h3="select durum from dolphinparkalani where parkkodu='H3'";
        $h3sonuc=mysqli_query($db_conn,$h3);   
        $row = mysqli_fetch_array($h3sonuc);
        $h3num=mysqli_num_rows($h3sonuc);
         if($h3num == 1){
             $_SESSION['h3']=$row['durum'];
        }
        $h4="select durum from dolphinparkalani where parkkodu='H4'";
        $h4sonuc=mysqli_query($db_conn,$h4);   
        $row = mysqli_fetch_array($h4sonuc);
        $h4num=mysqli_num_rows($h4sonuc);
         if($h4num == 1){
             $_SESSION['h4']=$row['durum'];
        }
        $h5="select durum from dolphinparkalani where parkkodu='H5'";
        $h5sonuc=mysqli_query($db_conn,$h5);   
        $row = mysqli_fetch_array($h5sonuc);
        $h5num=mysqli_num_rows($h5sonuc);
         if($h5num == 1){
             $_SESSION['h5']=$row['durum'];
        }
        $h6="select durum from dolphinparkalani where parkkodu='H6'";
        $h6sonuc=mysqli_query($db_conn,$h6);   
        $row = mysqli_fetch_array($h6sonuc);
        $h6num=mysqli_num_rows($h6sonuc);
         if($h6num == 1){
             $_SESSION['h6']=$row['durum'];
        }
        $h7="select durum from dolphinparkalani where parkkodu='H7'";
        $h7sonuc=mysqli_query($db_conn,$h7);   
        $row = mysqli_fetch_array($h7sonuc);
        $h7num=mysqli_num_rows($h7sonuc);
         if($h7num == 1){
             $_SESSION['h7']=$row['durum'];
        }
        $h8="select durum from dolphinparkalani where parkkodu='H8'";
        $h8sonuc=mysqli_query($db_conn,$h8);   
        $row = mysqli_fetch_array($h8sonuc);
        $h8num=mysqli_num_rows($h8sonuc);
         if($h8num == 1){
             $_SESSION['h8']=$row['durum'];
        }
        $h9="select durum from dolphinparkalani where parkkodu='H9'";
        $h9sonuc=mysqli_query($db_conn,$h9);   
        $row = mysqli_fetch_array($h9sonuc);
        $h9num=mysqli_num_rows($h9sonuc);
         if($h9num == 1){
             $_SESSION['h9']=$row['durum'];
        }
        $h10="select durum from dolphinparkalani where parkkodu='H10'";
        $h10sonuc=mysqli_query($db_conn,$h10);   
        $row = mysqli_fetch_array($h10sonuc);
        $h10num=mysqli_num_rows($h10sonuc);
         if($h10num == 1){
             $_SESSION['h10']=$row['durum'];
        }
        $h11="select durum from dolphinparkalani where parkkodu='H11'";
        $h11sonuc=mysqli_query($db_conn,$h11); 
        $row = mysqli_fetch_array($h11sonuc);
        $h11num=mysqli_num_rows($h11sonuc);
        if($h11num == 1){
            $_SESSION['h11']=$row['durum'];
        }

        $h12="select durum from dolphinparkalani where parkkodu='H12'";
        $h12sonuc=mysqli_query($db_conn,$h12); 
        $row = mysqli_fetch_array($h12sonuc);
        $h12num=mysqli_num_rows($h12sonuc);
        if($h12num == 1){
            $_SESSION['h12']=$row['durum'];
        }
        
?>