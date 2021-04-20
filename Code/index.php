<?php
  session_start();
  if(isset($_SESSION['email'])){
    $adi=$_SESSION['adsoyad'];
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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="styleslide.css" rel="stylesheet" />
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

<div id="sliderdiv">
        <slider>
          <slide>
            <h2 style="">Çok Katlı</h2>
            <p>Otoparklar</p></slide
          >
          <slide
            ><h2 style="">Yer Altı</h2>
            <p>Otoparklar</p></slide
          >
          <slide
            ><h2 style="">Yol Dışı</h2>
            <p>Otoparklar</p></slide
          >
          <slide
            ><h2 style="">Yol Dışı</h2>
            <p>Otoparklar</p></slide
          >
        </slider>
      </div>

      <br>
     
      <div class="normaltext">
          
    <div class="hakdiv"
         id="divhak"
         style="display: block; margin: 0 auto; margin-top:15px; margin-bottom: 160px;">
 <?php if(isset($_SESSION['email'])){
echo " <h2 style=\" font-size:23px; text-align:center; color:#EAAD04; position: relative; \">Hoşgeldin</h2> ";
echo " <h2 style=\" font-size:23px; text-align:center; color:#EAAD04; position: relative; \">$adi</h2> ";

                      }
                      ?>

<?php if(!isset($_SESSION['email'])){
echo " <h2 style=\" font-size:25px; text-align:center; color:#EAAD04; position: relative; \">Anasayfa</h2> ";

}
?>

 <br><br>
        <center>
       
            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Çok Katlı Otopark</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                <img src="/kopark/img/oto1.png" id="pic1" alt="">
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;"> DOLPHIN CENTER - Yer Altı</p>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                    Adres: Körfez, Berk Sk. No:1, 41040 İzmit/Kocaeli  <br /> 
                    Otopark Güvenlik Kameraları ile Korunmaktadır.<br />
                    Otopark 7/24 Açıktır ve Asansörlüdür.   
                    </p>
                    
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#EAAD04; text-align:left;  font-weight:900;">
                         0 - 1 Saat     :4,50tl <br />
                         1 - 2 Saat     :5,75tl <br />
                         2 - 4 Saat     :7,25tl <br />
                         12 - 24 Saat   :11,00tl 
                    </p><a href="dolphin.php"><button type="button" class="btnr" style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;">İncele</button></a>
                    
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                        Google Genel Puanı:      <img src="/kopark/img/3bucuk.png" id="yildiz" alt="">
                    </p> 
                    <br />
                </div>
            </div>
            
            <hr style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">
            <br>

            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Çok Katlı Otopark</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                <img src="/kopark/img/oto2.png" id="pic1" alt="">
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;"> SEYMEN KARDEŞLER - Kapalı</p>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                    Adres: Dumlupınar, Albay Burak Cd. No:35, 41650 Gölcük/Kocaeli <br /> 
                    Telefon: 0542 503 10 71<br /> 
                    Otopark Güvenlik Kameraları ile Korunmaktadır.   <br />
                    Otopark 7/24 Açıktır ve Asansörlüdür.
                    </p>                   
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#EAAD04; text-align:left;  font-weight:900;">
                         0 - 1 Saat     :4,00tl <br />
                         1 - 2 Saat     :5,00l <br />
                         2 - 12 Saat     :6,00tl <br />
                         12 - 24 Saat   :8,00tl     
                    </p>
            
                    <a href="seymen.php"><button type="button" class="btnr" style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;">İncele</button></a>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                        Google Genel Puanı:      <img src="/kopark/img/4.png" id="yildiz" alt="">
                    </p> 
                    <br />
                </div>
            </div>
            <hr style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">
            <br>

            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Çok Katlı Otopark</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                <img src="/kopark/img/oto3.png" id="pic1" alt="">
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;">KADIKÖY - Katlı</p>
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
                    <a href="kadikoy.php"><button type="button" class="btnr" style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;">İncele</button></a>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                        Google Genel Puanı:      <img src="/kopark/img/4.png" id="yildiz" alt="">
                    </p> 
                    <br />
                </div>
            </div>
            <hr style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">
            <br>


            <div class="CardDiv">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Yol Dışı Otopark</h3>
                </div>
                <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                <img src="/kopark/img/oto5.png" id="pic1" alt="">
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;">Sahil Otopark</p>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                    Adres: Ömerağa, 41300 İzmit/Kocaeli  <br /> 
                    Telefon: +90 262 335 15 88   <br />
                    Otopark Güvenlik Kameraları ile Korunmaktadır.<br />
                    Otopark 7/24 Açıktır.
                    </p>
                    
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#EAAD04; text-align:left;  font-weight:900;">
                         0 - 1 Saat     :4,00l <br />
                         1 - 2 Saat     :5,00tl <br />
                         2 - 4 Saat     :8,00tl <br />
                         12 - 24 Saat   :10,00tl 
                    </p>
                    <a href="sahil.php"><button type="button" class="btnr" style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;">İncele</button></a>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                        Google Genel Puanı:      <img src="/kopark/img/4bucuk.png" id="yildiz" alt="">
                    </p> 
                    <br />
                </div>
            </div>
            <hr style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">
            <br>


            
            
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

      <script src="scripts.js"></script>
    </div>
  </body>
</html>