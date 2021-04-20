<?php
  session_start(); 

   if(!isset($_SESSION['email'])){
    header('location:index.php');
  } 
  
  if(isset($_SESSION['email'])){
    $email= $_SESSION['email'];
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
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KOPARK</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/kopark/img/FAV.png">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="stylesd.css">

</head>

<body style=" background-color: #020916;">
    <div class="bg">
        <header style="background-color:#151F2E">
            <div class="container" style="position: relative; padding-bottom:25px">
                <nav>
                    <div class="menu-icons">
                        <i class="icon ion-md-menu" style="color: #EAAD04;"></i>
                        <i class="icon ion-md-close" style="color: #EAAD04;"></i>
                    </div>
                    <a style="" href="index.php" class="logo">
                        <img style="width:17.6rem;height: 6.7rem; padding-top:20px" src="/kopark/img/LOGO.png" alt="" />
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

            <div class="hakdiv" id="divhak"
                style="display: block; margin: 0 auto; margin-top:1px; margin-bottom: 13px;">
                <center>

                    <div class="CardDiv">
                        <div class="GreenTitleDiv">
                            <h3
                                style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                SEYMEN KARDEŞLER - Kapalı</h3>
                        </div>
                        <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                            <img src="/kopark/img/oto2.png" id="pic1" alt="">
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;">
                                Çok Katlı Otopark</p>
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                                Adres: Dumlupınar, Albay Burak Cd. No:35, 41650 Gölcük/Kocaeli <br />
                                Telefon: 0542 503 10 71<br />
                                Otopark Güvenlik Kameraları ile Korunmaktadır. <br />
                                Otopark 7/24 Açıktır ve Asansörlüdür.
                            </p>
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#EAAD04; text-align:left;  font-weight:900;">
                                0 - 1 Saat :4,00tl <br />
                                1 - 2 Saat :5,00l <br />
                                2 - 12 Saat :6,00tl <br />
                                12 - 24 Saat :8,00tl
                            </p>

                            <a href="seymen.php"><button type="button" class="btnr"
                                    style="float:right; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500;">Geri
                                    Dön</button></a>
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                                Google Genel Puanı: <img src="/kopark/img/4.png" id="yildiz" alt="">
                            </p>
                            <br />
                        </div>
                    </div>


                    <div class="CardDiv">
                        <div class="GreenTitleDiv">
                            <h3
                                style=" float:left; color:#EAAD04; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                Otopark Yorumları </h3>
                        </div>
                        <div style="padding:15px 16px 15px 16px;  height: auto; overflow: auto; ">
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;font-weight:700;">
                                Bilgilendirme</p>
                            <p
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                                Aşağıda görmüş olduğunuz alanda hesap bilgileriniz otomatik bir şekilde girilmiştir. 5
                                yıldız üzerinden puanlayabilirsiniz ve en aşağıda bulunan yorum alanına
                                değerlendirmenizi yazabilirsiniz.
                                Başka kullanıcıların yorumlarını ve puanlarını görmek için en aşağıdaki bölüme bakınız!

                            </p>
                            <br>
                            <hr
                                style="display: block; height: 1px; border: 0; border-top: 2px solid #0A101C; margin: 1em 0; padding: 0;">




                            <form action="vtseymen.php" method="post" style="margin-bottom: 10px;">







                                <div>

                                    <p style="text-align:left; color:white; font-size:15px;">Ad Soyad</p>
                                    <input type="text" name="adsoyad" value=" <?php echo $adsoyad; ?>"
                                        readonly="readonly" required class="inputts">
                                    <p style="text-align:left; color:white; font-size:15px;">E-posta</p>
                                    <input type="text" name="email" value=" <?php echo $email; ?>" readonly="readonly"
                                        required class="inputts">
                                    <p style="text-align:left; color:white; font-size:15px;">Değerlendirme</p>
                                    <input type="hidden" name="rating" id="rating">
                                    <div style="float:left; margin-bottom:13px;margin-top:5px;" id="rateYo"></div>
                                    <textarea style="height: 150px; padding: 15px; margin-bottom:10px;" name="yorum"
                                        placeholder="Değerlendirmenizi buraya yazınız..."> </textarea>


                                </div>

                        </div>


                        <button type="submit" name="dolphinyorumlar" class="btnr"
                            style="margin: 0 auto; font-family:'Segoe UI'; padding:4px 14px 4px 14px; font-size:14px; font-weight:500; margin-bottom:20px;">Yorum
                            Ekle</button>


                        </form>

                        <?php       
                            $db_conn= mysqli_connect('localhost','root','');
                            mysqli_select_db($db_conn,'oto');
                            if ($db_conn->connect_error) {
                                die("Connection failed: " . $db_conn->connect_error);
                            } 
                            
                            $sorgu="select * from seymenfeedback;";
                            $sonuc=mysqli_query($db_conn,$sorgu);
                            
                                    
                         ?>


                        <div class="container">
                            <div class="content-container clearfix"
                                style="background-color:#0B1320; border-radius:8px;">

                                <h3
                                    style=" float:left; font-size: 20px;
  padding-top: 8px;
    color:#EAAD04; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                    Otopark Değerlendirmeleri </h3><br><br><br>

                                <div class="col-md-12">
                                    <p
                                        style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  color:#DDDEE5; text-align:left;">
                                        Başka kullanıcıların yorumlarını ve puanlarını görmek için en aşağıdaki bölüme
                                        bakınız! Sizin eklemiş olduğunuz yorum listenin en alt kısmında yer almaktadır.

                                    </p><br><br>
                                    <table class="table table-hover" style="color: #FFFFFF;font-size:13px;">
                                        <tbody id="myTable">
                                            <ul class="mail-list">
                                                <?php 
                                       while($row=$sonuc->fetch_assoc()):
                                        ?>
                                                <tr>
                                                    <td style="padding:45px; 
                                    vertical-align: top;
                                    border-top: 1px solid #dee2e6;">

                                                        <span class="mail-sender"
                                                            style="font-size:15px; font-weight:500;">
                                                            <?php echo $row['adsoyad']; ?>
                                                        </span> <br>
                                                        <span class="mail-subject"
                                                            style="font-size:14px; font-weight:500;">
                                                            <?php echo $row['email']; ?></span><br>
                                                        <span class="mail-subject"
                                                            style="font-size:14px; font-weight:500;">
                                                            <?php echo $row['yorum']; ?></span><br>
                                                        <span class="mail-subject rateYo-<?php $row['id']; ?>"
                                                            style="font-size:14px; font-weight:600;"></span><br>
                                                        <div class="media-body">
                                                            <h3 class="media-heading">
                                                                <div class="rateYo-<?php echo $row['id']; ?>"></div>
                                                            </h3>
                                                            <script>
                                        $(function(){
                                            $(".rateYo-<?php echo $row['id']; ?>").rateYo({
                                            readOnly:true,
                                            rating:<?php echo $row['rating']; ?>,
                                            });
                                        });
                                        </script>
                                                        </div>

                                                    </td>

                                                </tr>

                                                <?php
                                        endwhile;
                                        ?>
                                            </ul>
                                    </table>
                                    </tbody>

                                </div>
                            </div>
                        </div>

                        <br>


                    </div>
                    <br><br><br>
            </div>
        </div>
        <br><br><br>




        </center>
        <button class="btnr" onclick="topFunction()" id="myBtn" title="Yukarı Çıkarır">
            Yukarı
        </button>
        <footer class="FooterClass">
            <h3>Telif hakkı &copy;2020 KOPARK. Tüm hakları saklıdır.</h3>
            <h3>Telefon: (0850) 600 00 10</h3>
        </footer>
        <script>
        $(function() {

            $("#rateYo").rateYo({
                fullStar: true,
                onSet: function(rating, rateYoInstance) {
                    $("#rating").val(rating);
                }
            });

        });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script src="scripted.js"></script>
        <script src="scripts.js"></script>
    </div>
</body>

</html>