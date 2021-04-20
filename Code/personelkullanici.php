<?php
  session_start(); 

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
                    <a style="" href="personel.php" class="logo">
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
                       <a style=\"margin-left:10px\" href=\"personel.php\">Personel </a>
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

                         <?php       
                            $db_conn= mysqli_connect('localhost','root','');
                            mysqli_select_db($db_conn,'oto');
                            if ($db_conn->connect_error) {
                                die("Connection failed: " . $db_conn->connect_error);
                            } 
                            
                            $sorgu="select * from kullanici;";
                            $sonuc=mysqli_query($db_conn,$sorgu);         
                         ?>

       
        <div class="normaltext">
    <div class="hakdiv"
         id="divhak"
         style="display: block; margin: 0 auto; margin-top:15px; margin-bottom: 160px;">

        <center>
            <div class="CardDiv" style="background-color: #f0f0f0;">
                <div class="GreenTitleDiv">
                    <h3 style=" float:left; margin-top: 1px; margin-left: 8px; padding-left: 6px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Kopark Kullanıcıları</h3>
                </div>
                <div class="row offset-2 custyle" style="padding:5px; margin:10px 10px 10px 0px; ">
                    <table class="table table-striped custab" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:14px;  ">
                        

                            <thead style="padding-left:90px; padding-right:90px;">
                                <tr style="padding-left:90px; padding-right:90px;">
                                    
                                        <th>Email</th>
                                        <th>Ad Soyad</th>
                                        <th>Numara</th>
                                        <th>Araba</th>
                                        <th>Plaka</th>
                                </tr>
                            </thead>


                                      <?php 
                                       while($row=$sonuc->fetch_assoc()):
                                        ?>
                                    <tr>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['adsoyad']; ?></td>
                                        <td><?php echo $row['numara']; ?></td>
                                        <td><?php echo $row['araba']; ?></td>
                                        <td><?php echo $row['plaka']; ?></td>
                                    </tr>
                                      <?php
                                        endwhile;
                                        ?>
                                
                    </table>
                </div>
                <br />
                <br />
            </div>
            <a class="btnper btn-warning" style="font-size:14px;color:white; font-weight:500; font-family:'Segoe UI'" href="personel.php">Geri</a>
        </center>
    </div>
</div>













        <button class="btnr" onclick="topFunction()" id="myBtn" title="Yukarı Çıkarır">
            Yukarı
        </button>
        <footer class="FooterClass">
            <h3>Telif hakkı &copy;2020 KOPARK. Tüm hakları saklıdır.</h3>
            <h3>Telefon: (0850) 600 00 10</h3>
        </footer>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script src="scripted.js"></script>
        <script src="scripts.js"></script>
    </div>
</body>

</html>