<?php
  require_once 'kadikoyparkalani.php';
  $A1=$_SESSION['a1'];
  $A2=$_SESSION['a2'];
  $A3=$_SESSION['a3'];
  $A4=$_SESSION['a4'];
  $A5=$_SESSION['a5'];
  $A6=$_SESSION['a6'];
  $A7=$_SESSION['a7'];
  $A8=$_SESSION['a8'];
  $A9=$_SESSION['a9'];
  $A10=$_SESSION['a10'];
  $A11=$_SESSION['a11'];
  $A12=$_SESSION['a12'];

  $B1=$_SESSION['b1'];
  $B2=$_SESSION['b2'];
  $B3=$_SESSION['b3'];
  $B4=$_SESSION['b4'];
  $B5=$_SESSION['b5'];
  $B6=$_SESSION['b6'];
  $B7=$_SESSION['b7'];
  $B8=$_SESSION['b8'];
  $B9=$_SESSION['b9'];
  $B10=$_SESSION['b10'];
  $B11=$_SESSION['b11'];
  $B12=$_SESSION['b12'];
  $B13=$_SESSION['b13'];
  $B14=$_SESSION['b14'];
  $B15=$_SESSION['b15'];
  $B16=$_SESSION['b16'];

  $C1=$_SESSION['c1'];
  $C2=$_SESSION['c2'];
  $C3=$_SESSION['c3'];
  $C4=$_SESSION['c4'];
  $C5=$_SESSION['c5'];
  $C6=$_SESSION['c6'];
  $C7=$_SESSION['c7'];
  $C8=$_SESSION['c8'];
  $C9=$_SESSION['c9'];
  $C10=$_SESSION['c10'];
  $C11=$_SESSION['c11'];
  $C12=$_SESSION['c12'];
  $C13=$_SESSION['c13'];
  $C14=$_SESSION['c14'];
  $C15=$_SESSION['c15'];
  $C16=$_SESSION['c16'];

  $D1=$_SESSION['d1'];
  $D2=$_SESSION['d2'];
  $D3=$_SESSION['d3'];
  $D4=$_SESSION['d4'];
  $D5=$_SESSION['d5'];
  $D6=$_SESSION['d6'];
  $D7=$_SESSION['d7'];
  $D8=$_SESSION['d8'];
  $D9=$_SESSION['d9'];
  $D10=$_SESSION['d10'];
  $D11=$_SESSION['d11'];
  $D12=$_SESSION['d12'];

  $E1=$_SESSION['e1'];
  $E2=$_SESSION['e2'];
  $E3=$_SESSION['e3'];
  $E4=$_SESSION['e4'];
  $E5=$_SESSION['e5'];
  $E6=$_SESSION['e6'];
  $E7=$_SESSION['e7'];
  $E8=$_SESSION['e8'];
  $E9=$_SESSION['e9'];
  $E10=$_SESSION['e10'];
  $E11=$_SESSION['e11'];
  $E12=$_SESSION['e12'];

  $F1=$_SESSION['f1'];
  $F2=$_SESSION['f2'];
  $F3=$_SESSION['f3'];
  $F4=$_SESSION['f4'];
  $F5=$_SESSION['f5'];
  $F6=$_SESSION['f6'];
  $F7=$_SESSION['f7'];
  $F8=$_SESSION['f8'];
  $F9=$_SESSION['f9'];
  $F10=$_SESSION['f10'];
  $F11=$_SESSION['f11'];
  $F12=$_SESSION['f12'];
  $F13=$_SESSION['f13'];
  $F14=$_SESSION['f14'];
  $F15=$_SESSION['f15'];
  $F16=$_SESSION['f16'];

  $G1=$_SESSION['g1'];
  $G2=$_SESSION['g2'];
  $G3=$_SESSION['g3'];
  $G4=$_SESSION['g4'];
  $G5=$_SESSION['g5'];
  $G6=$_SESSION['g6'];
  $G7=$_SESSION['g7'];
  $G8=$_SESSION['g8'];
  $G9=$_SESSION['g9'];
  $G10=$_SESSION['g10'];
  $G11=$_SESSION['g11'];
  $G12=$_SESSION['g12'];
  $G13=$_SESSION['g13'];
  $G14=$_SESSION['g14'];
  $G15=$_SESSION['g15'];
  $G16=$_SESSION['g16'];

  $H1=$_SESSION['h1'];
  $H2=$_SESSION['h2'];
  $H3=$_SESSION['h3'];
  $H4=$_SESSION['h4'];
  $H5=$_SESSION['h5'];
  $H6=$_SESSION['h6'];
  $H7=$_SESSION['h7'];
  $H8=$_SESSION['h8'];
  $H9=$_SESSION['h9'];
  $H10=$_SESSION['h10'];
  $H11=$_SESSION['h11'];
  $H12=$_SESSION['h12'];
  
   if(!isset($_SESSION['email'])){
    header('location:index.php');
  } 
  
  if(isset($_SESSION['email'])){
    $adsoyad=$_SESSION['adsoyad'];
    $numara= $_SESSION['numara'];
    $araba= $_SESSION['araba'];
   $plaka=$_SESSION['plaka'];
  }
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#161616">
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KOPARK</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link
      href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/kopark/img/FAV.png">
    <link href="styleslide.css" rel="stylesheet" />
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="stylesd.css">
    <style>
    @media screen {
      img {
        max-width: 100%;
      }
      td,
      th {
        box-sizing: border-box;
      }
      u~div .wrapper {
        min-width: 100vw;
      }
      a[x-apple-data-detectors] {
        color: inherit;
        text-decoration: none;
      }
      .all-font-roboto {
        font-family: Roboto, -apple-system, "Segoe UI", sans-serif !important;
      }
      .all-font-sans {
        font-family: -apple-system, "Segoe UI", sans-serif !important;
      }
    }
    @media (max-width: 600px) {
      .sm-inline-block {
        display: inline-block !important;
      }
      .sm-hidden {
        display: none !important;
      }
      .sm-leading-32 {
        line-height: 32px !important;
      }
      .sm-p-20 {
        padding: 20px !important;
      }
      .sm-py-12 {
        padding-top: 12px !important;
        padding-bottom: 12px !important;
      }
      .sm-text-center {
        text-align: center !important;
      }
      .sm-text-xs {
        font-size: 12px !important;
      }
      .sm-text-lg {
        font-size: 18px !important;
      }
      .sm-w-1-4 {
        width: 25% !important;
      }
      .sm-w-3-4 {
        width: 75% !important;
      }
      .sm-w-full {
        width: 100% !important;
      }
    }
  </style>
  <style>
    @media (max-width: 600px) {
      .sm-dui17-b-t {
        border: solid #EAAD04;
        border-width: 4px 0 0;
      }
    }
  </style>

  </head>
  <body
    style=" background-color: #020916;"
  >
    <div class="bg">
    <header style="background-color:#151F2E">
    <div class="container" style="position: relative; padding-bottom:25px">
        <nav>
            <div class="menu-icons">
              <i class="icon ion-md-menu" style="color: #EAAD04;"></i>
              <i class="icon ion-md-close" style="color: #EAAD04;"></i>
            </div>
            <a style="" href="index.php" class="logo">
                <img style="width:17.6rem;height: 6.7rem; padding-top:20px"
                     src="/kopark/img/LOGO.png"
                     alt="" />
            </a>


            <ul class="nav-listt">
            <?php if(!isset($_SESSION['email'])){
                      echo " <li>
                      <img style=\"width: 2rem;
                          height: 2rem;
                          
                          \"
                           src=\"/kopark/img/anasayfa.png\"
                           alt=\" \" />
                      <a style=\"margin-left:10px\" href=\"index.php\">Ana Sayfa </a>
                  </li>
                      
                      <li >
                      <img style=\"width: 2rem;
                          height: 2rem;
                          \"
                           src=\"/kopark/img/giris.png\"
                           alt=\"  \" />
                      <a style=\"margin-left:10px\" href=\"giris.php\" >Giriş Yap</a>
                  </li>
                   <li >
                  <img style=\"width: 2.8rem;
                      height: 2rem;
                      
                      \"
                       src=\"/kopark/img/kayit.png\"
                       alt= \"  \" />
                  <a style=\"margin-left:10px\" href=\"kayit.php\" >Üye Ol</a>
                  </li>";
                      }
                      ?>

                        <?php if(isset($_SESSION['email'])){
                         echo " <li>
                         <img style=\"width: 2rem;
                             height: 2rem;
                             
                             \"
                              src=\"/kopark/img/anasayfa.png\"
                              alt=\" \" />
                         <a style=\"margin-left:10px\" href=\"index.php\">Ana Sayfa </a>
                     </li>
                     <li>
                     <img style=\"width: 2.2rem;
                         height: 2.2rem;
                         
                         \"
                          src=\"/kopark/img/cikis.png\"
                          alt=\" \" />
                     <a style=\"margin-left:10px\" href=\"cikis.php\">Cikis Yap </a>
                 </li>"; 
                        }
                       ?> 
            </ul>
        </nav>
    </div>
</header>

      <br>
     
      <div class="normaltext">
          
    <div class="hakdiv"
         id="divhak"
         style="display: block; margin: 0 auto; margin-top:1px; margin-bottom: 13px;">
        <center> 
       
            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">KADIKÖY - Katlı</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ojro9JBWDxHirGOukUBjhuQUZRGuZ2jY" id="pic2" width="330" height="300"></iframe>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;">Çok Katlı Otopark</p>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                    Adres: Kadıköy, Öztürk Sk. No:9, 41050 İzmit/Kocaeli  <br /> 
                    Otopark Güvenlik Kameraları ile Korunmaktadır.<br />
                    Otopark 24 saat Açıktır.
                    </p>  
                    
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#EAAD04; text-align:left;  font-weight:900;">
                         0 - 1 Saat     :3,50tl <br />
                         1 - 2 Saat     :4,50tl <br />
                         2 - 4 Saat     :5,75tl <br />
                         4 - 8 Saat     :6,75tl <br />
                         12 - 24 Saat   :8,75tl 
                    </p>
                    
                    <a href="kadikoyyorumlar.php"><button type="button" class="btnr" style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;" >Yorumlar</button></a>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                        Google Genel Puanı:      <img src="/kopark/img/4.png" id="yildiz" alt="">
                    </p> 

                   
                    <br />
                </div>
            </div>


            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; color:#EAAD04; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">İşlem Bilgileri</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; "> 
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;"> KADIKÖY - Katlı</p>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                    Seçmiş olduğunuz otoparkın aşağıda size sunmuş olduğu park alanları mevcut. Lütfen rezerve etmek istediğiniz alanı seçiniz daha sonra
                    gerekli bilgileri doldurarak işlemi tamamlayınız. Aşağıda görmüş olduğunuz bilgileri doğru doldurduğunuz emin olunuz. Otoparklar arası
                    fiyatlar çeşitlilik gösterebilir. *Katlı Otoparklarda birden fazla şablon vardır.
                    </p> <br>
                    <hr style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">
                   
                    <br />
                    <ul class="showcase">
        <li>
            <div style="
            background-color:#5c5c5c;
             height: 31px;
             margin-right:10px;
             width: 17px;
             border-radius: 2px;"></div>
            <p>Boş</p>
        </li>
        <li>
            <div style="
            background-color: #FFD21E;
             height: 31px;
             width: 17px;
             margin-right:10px;
             border-radius: 2px;"></div> 
            <p>Seçili : </p><p style="color:#EAAD04; font-weight:600;" id="demo"></p>
        </li>
        <li>
            <div style="
            background-color: #c9c9c9;
             height: 31px;
             font-size:12px;
             font-family:'segue ui';
             margin-right:10px;
             width: 17px;
             border-radius: 2px;"></div>
            <p>Dolu</p>
        </li>
    </ul>
    <br>


            <form
              action="vtkadikoyrez.php"
              method="post"
              style="margin-bottom: 10px;"
            >


<p style="color:#EAAD04; font-weight:600;">1 Kat</p>
    <div id="fond" style="width:350px; height:auto;margin:0 auto; padding:16px; " class="container">
        <div style="margin-left:3px; margin-top:1px;">
        <div class="row">
        <?php 
        if($A1=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A1=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($A2=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A2=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B1=="bos"){
            echo" <div class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B1=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B2=="bos"){
            echo" <div class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B2=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B3=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B3=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B4=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B4=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C1=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C1=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C2=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C2=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C3=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C3=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C4=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C4=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($D1=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D1=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($D2=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D2=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($A3=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A3=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A4=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-right:199px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A4=="dolu"){
            echo" <div style=\"height: 17px; width: 31px; margin-right:199px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D3=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D3=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D4=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D4=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($A5=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A5=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        
        <?php 
        if($A6=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A6=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($B5=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B5=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($B6=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B6=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($B7=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B7=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($B8=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B8=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($C5=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C5=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($C6=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C6=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($C7=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C7=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($C8=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C8=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>

        <?php 
        if($D5=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D5=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        

        
        
        <?php 
        if($D6=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D6=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($A7=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A7=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($A8=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A8=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B9=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B9=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($B10=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B10=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B11=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B11=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($B12=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B12=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
           <?php 
        if($C9=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C9=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C10=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C10=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C11=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C11=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($C12=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C12=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($D7=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D7=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($D8=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D8=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($A9=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A9=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($A10=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-right:199px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A10=="dolu"){
            echo" <div style=\"height: 17px; width: 31px; margin-right:199px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($D9=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D9=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($D10=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D10=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($A11=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:2px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A11=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:2px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        
        <?php 
        if($A12=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"A12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($A12=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"A12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B13=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B13\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B13=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B13\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B14=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B14\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B14=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B14\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B15=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B15\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B15=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B15\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B16=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"B16\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($B16=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"B16\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C13=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C13\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C13=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C13\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C14=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C14\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C14=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C14\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($C15=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C15\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C15=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C15\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($C16=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"C16\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($C16=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"C16\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D11=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D11=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>

        <?php 
        if($D12=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"D12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($D12=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"D12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        
        
        </div>
       
        </div>
        <br>
        <p style="color:#EAAD04; font-weight:600;">2 Kat</p>
    <div id="fond" style="width:350px; height:auto;margin:0 auto; padding:16px; " class="container">
        <div style="margin-left:3px; margin-top:1px;">
        <div class="row">
        <?php 
        if($E1=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E1=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($E2=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E2=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F1=="bos"){
            echo" <div class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F1=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F2=="bos"){
            echo" <div class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F2=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F3=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F3=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F4=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F4=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G1=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G1=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G2=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G2=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G3=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G3=="dolu"){
            echo" <div  class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G4=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G4=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($H1=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H1\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H1=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H1\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($H2=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H2\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H2=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H2\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($E3=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E3=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E4=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-right:199px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E4=="dolu"){
            echo" <div style=\"height: 17px; width: 31px; margin-right:199px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H3=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H3\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H3=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H3\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H4=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H4\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H4=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H4\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($E5=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E5=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        
        <?php 
        if($E6=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E6=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($F5=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F5=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($F6=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F6=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($F7=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F7=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($F8=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F8=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($G5=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G5=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($G6=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G6=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($G7=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G7=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($G8=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G8=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>

        <?php 
        if($H5=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H5\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H5=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H5\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        

        
        
        <?php 
        if($H6=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H6\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H6=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H6\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($E7=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E7=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($E8=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E8=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F9=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F9=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($F10=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F10=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F11=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F11=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($F12=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F12=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
           <?php 
        if($G9=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G9=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G10=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G10=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G11=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G11=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($G12=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G12=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($H7=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H7\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H7=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H7\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($H8=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H8\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H8=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H8\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($E9=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E9=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($E10=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-right:199px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E10=="dolu"){
            echo" <div style=\"height: 17px; width: 31px; margin-right:199px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($H9=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H9\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H9=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H9\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
         <?php 
        if($H10=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H10\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H10=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H10\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        <div class="row">
        <?php 
        if($E11=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:2px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E11=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:2px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        
        <?php 
        if($E12=="bos"){
            echo" <div style=\" height: 17px; width: 31px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"E12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($E12=="dolu"){
            echo" <div style=\"height: 17px; width: 31px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"E12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F13=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F13\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F13=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F13\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F14=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F14\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F14=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F14\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F15=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F15\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F15=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F15\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F16=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"F16\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($F16=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"F16\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G13=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G13\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G13=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G13\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G14=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G14\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G14=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G14\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($G15=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G15\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G15=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G15\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
       <?php 
        if($G16=="bos"){
            echo" <div  class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"G16\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($G16=="dolu"){
            echo" <div class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"G16\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H11=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H11\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H11=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H11\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>

        <?php 
        if($H12=="bos"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat\">
            <label class=\"flow-option\">
            <input class=\"seat\"  type=\"radio\" onclick=\"myFunction()\"value=\"H12\" name=\"park\"/>
            <span class=\"yellow-stamp\"></span>
            </label>
        </div>  ";
        }
        ?>
        <?php 
        if($H12=="dolu"){
            echo" <div style=\" height: 17px; width: 31px; margin-bottom:0px;\" class=\"seat occupied\">
            <label class=\"flow-option\">
            <input class=\"seat occupied\" disabled type=\"radio\" onclick=\"myFunction()\"value=\"H12\" name=\"park\"/>
            <span class=\"yellow-stamp occupied\"></span>
            </label>
        </div>  ";
        }
        ?>
        </div>
        
        
        </div>
       
        </div>

        <div> <br> 
            <p style="text-align:left; color:white; font-size:15px;">Zaman Aralığı</p>
        <div class="movie-container">
        <select id="movie" name="tutar" >

                         0 - 1 Saat     :3,50tl <br />
                         1 - 2 Saat     :4,50tl <br />
                         2 - 4 Saat     :5,75tl <br />
                         4 - 8 Saat     :6,75tl <br />
                         12 - 24 Saat   :8,75tl 


        <option disabled selected value>Seçiniz</option>
            <option value="3.5">0 - 1 Saat</option>
            <option value="4.5">1 - 2 Saat</option>
            <option value="5.75">2 - 4 Saat</option>
            <option value="6.75">4 - 8 Saat</option>
            <option value="8.75">12 - 24 Saat</option>
        </select>
        
        <select id="box2" style="display: none;" name="saat">
        <option disabled selected value>Seçiniz</option>
             <option value="0 - 1">4.5TL</option>
             <option value="1 - 2">4.5TL</option>
             <option value="2 - 4">5.75TL</option>
             <option value="4 - 8">6.75TL</option>
             <option value="12 - 24">8.75TL</option>
            </select>
         </div>

           
         
         <div>
         
            <p style="text-align:left; color:white; font-size:15px;">Ad Soyad</p>
            <input type="text" name="adsoyad" value=" <?php echo $adsoyad; ?>" readonly="readonly" required class="inputts">
            <p style="text-align:left; color:white; font-size:15px;">Numara</p>
            <input type="text" name="numara"value=" <?php echo $numara; ?>" readonly="readonly" required class="inputts">
            <p style="text-align:left; color:white; font-size:15px;">Araba</p>
            <input type="text" name="araba" value=" <?php echo $araba; ?>" readonly="readonly" required class="inputts">
            <p style="text-align:left; color:white; font-size:15px;">Plaka</p>
            <input type="text" name="plaka" value=" <?php echo $plaka; ?>" readonly="readonly" required class="inputts">
        </div>

        </div>
        <div style="box-sizing: border-box; margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; ">
  <div style="display: none; line-height: 0; font-size: 0;"></div>
  <table class="wrapper all-font-sans" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
      <td align="center" style="padding: 24px;" width="100%">
        <table class="sm-w-full" width="600" cellpadding="0" cellspacing="0" role="presentation">
          <tr>
            
            <td align="left" class="sm-p-20 sm-dui17-b-t" style="border-radius: 2px; padding: 40px; position: relative; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05); vertical-align: top;" bgcolor="#ffffff" valign="top">
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td width="80%">
                    <h2 class="sm-text-lg all-font-roboto" style="font-weight: 700; line-height: 100%; margin: 0;color:#000000; margin-bottom: 4px; font-size: 24px;">Genel</h2>
                    <p class="sm-text-xs" style="margin: 0; color: #a0aec0; font-size: 14px;">Rezarvasyon Tutarınız!</p>
                  </td>
                </tr>
              </table>
              <div style="line-height: 32px;">&zwnj;</div>
              <table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="sm-inline-block" style="color: #718096;" width="50%">Araç Sahibi</td>
                  <td class="sm-inline-block" style="font-weight: 600; color:#000000; text-align: right;" width="50%" align="right"><?php echo $adsoyad; ?></td>
                </tr>
                <tr>
                  <td class="sm-inline-block" style="color: #718096;" width="50%">Park Alanı</td>
                  <td class="sm-inline-block" style="font-weight: 600; color:#000000; text-align: right;" width="50%" align="right" id="demo2"></td>
                </tr>
                <tr>
                  <td class="sm-inline-block" style="color: #718096;" width="50%">Otopark</td>
                  <td class="sm-inline-block" style="font-weight: 600; color:#000000; text-align: right;" width="50%" align="right">KADIKÖY - Katlı</td>
                </tr>
                <tr>
                  <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Address</td>
                  <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600;color:#000000; text-align: right;" width="50%" align="right">Kadıköy, Öztürk Sk. No:9</td>
                </tr>
              </table>
             
              <table style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                
                <tr>
                  <td style="font-weight: 600; padding-top: 32px; color: #000000; font-size: 20px;" width="50%">Toplam Tutar:</td>
                  <td style="font-weight: 600; padding-top: 32px; text-align: right; color: #68d391; font-size: 17px;" width="50%" align="right"><span id="count"></span> park alanı <span id="total">0</span> &#8378;</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>

<button type="submit" name="dolphin" class="btnr"
style="margin: 0 auto; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;" >Rezerve Et</button>  
        

</form>

    </div>

    <br><br><br>

                </div>
            </div>
         <br><br><br>




     </center>
      <button
        class="btnr"
        onclick="topFunction()"
        id="myBtn"
        title="Yukarı Çıkarır"
      >
        Yukarı
      </button>
      <footer class="FooterClass">
        <h3>Telif hakkı &copy;2020 KOPARK. Tüm hakları saklıdır.</h3>
        <h3>Telefon: (0850) 600 00 10</h3>
      </footer>
      <script>
       function myFunction() {
                        let rates = document.getElementsByName('park');
                        rates.forEach((rate) => {
                            if (rate.checked) {
                                document.getElementById("demo2").innerHTML = ` ${rate.value}`;
                                document.getElementById("demo").innerHTML = ` ${rate.value}`;
                            }
                        })
                };
      
      </script>
      <script src="scripted.js"></script>
      <script src="scripts.js"></script>
    </div>
  </body>
</html>