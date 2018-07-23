<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mechfashion</title>
    <meta name="discription" content=""/>
    <meta name="keywords" content=""/>
    <meta http-eguip="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/cube.css" type="text/css"/>
    <link rel="stylesheet" href="css/sliderImg.css" type="text/css"/>
    <link rel="stylesheet" href="css/burger.css" type="text/css"/>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/cubeAnimation.js"></script>
    <script src="js/burgerAnimation.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/productSwitch.js"></script>
    <script src="js/sendMail.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118907193-1"></script>
    
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118907193-1');
    </script>

</head>
    
<body onload="obrot(8)">
    
<?php

    session_start();
    error_reporting(0);

    
    if(isset($_SESSION['mailSendingRaport'])) {
        
        if(isset($_SESSION['mailSendingError']) && $_SESSION['mailSendingError'])
            echo '<div class="sendingRaport bad">';
        else
            echo '<div class="sendingRaport good">';
        
        echo $_SESSION['mailSendingRaport'];
        echo '</div>';
        
        unset($_SESSION['mailSendingRaport']);
        unset($_SESSION['mailSendingError']);
    }
    
?>
    
    <div class="burgerContainer">
        
        <div class="burgerBody">
            
            <div class="burgerCustomization" id="burgerBox1">
                
                <div class="galeryBox">
                        
                    <div onclick="loadImg(1)" id="miniImg1"></div>
                    <div onclick="loadImg(2)" id="miniImg2"></div>
                    <div onclick="loadImg(3)" id="miniImg3"></div>
                    <div onclick="loadImg(4)" id="miniImg4"></div>
                        
                </div>
                
                <div class="burgerImageBox" id="picture">
                    
                </div>
                
                <div class="burgerBuyBox">
                    
                    <h1>All black</h1>
                    
                    <div class="firstDiv">
                        
                        <span>Price:</span>
                        <span>Size:</span>
                        <span>Kind of lock:</span>
                        <span>Shipping:</span>
                        
                    </div>
                    
                    <div class="buyButton">
                        
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="95QLSHQMTSF82" id="PPcode">
<table>
<tr><td><input style="display: none;" type="hidden" name="on0" value="Size"></td></tr><tr><td><select style="display: none;" name="os0">
	<option id="PPsize" value="40%" style="display: none;"></option>
</select> </td></tr>
<tr><td><input style="display: none;" type="hidden" name="on1" value="Kind of lock"></td></tr><tr><td><select style="display: none;" name="os1">
	<option id="PPzipType" value="" style="display: none;"></option>
</select> </td></tr>
</table>

<input type="hidden" name="currency_code" value="USD">
<input type="image" src="css/img/PayButton.png" border="0" name="submit" alt="PayPal – Płać wygodnie i bezpiecznie" style="width: 250px;">
<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
</form>

                    </div>
                    
                    <div>
                        
                        <span id="priceBox">$</span>
                        
                        <span class="row1">
                            <button onclick="price(1,'size',1)" id="customizationButton1">40%</button>
                            <button onclick="price(2,'size',2)" id="customizationButton2">60%</button>
                            <button onclick="price(3,'size',3)" id="customizationButton3">65%</button>
                            
                            <button onclick="price(4,'size',4)" id="customizationButton4">75%</button>
                            <button onclick="price(5,'size',5)" id="customizationButton5">TKL</button>
                            <button onclick="price(6,'size',6)" id="customizationButton6">Fullsize</button>
                            <!--<button onclick="price(7,'size',7)" id="customizationButton7">R7</button>-->

                        </span>
                        
                        <span class="row2">
 

                            <button onclick="price(8,'zip',1)" id="customizationButton8">Velcro</button>
                            <button onclick="price(9,'zip',2)" id="customizationButton9">Magnetic flap</button>
                            <button onclick="price(10,'zip',3)" id="customizationButton10">Cord lock</button>
                        
                        </span>
                        
                        <span>polish post</span>
                    
                    </div>
                    
                </div>
            
            </div>
            
            <div class="burgerProductDetails" id="burgerBox2">
                
                <div>
                    
                    <h1>Multiple sleeves</h1>
                    
                    <span style="font-size: 22px;">
                    If you want to purchase more than one sleeve, we will cover shipping cost. In case of bigger order (shared) for local community contact us for batch price.
                    Furthermore, we will be more than happy to cooperate with keycap set designers.
                    </span>
                    
                </div>
                
                <div>
                    
                    <h1>Manufacturing time</h1>
                    
                    <span>
                    Currently it is 1-2 week. (prior to shipping)
                    </span>
                    
                </div>
                
            </div>
            
            <div class="burgerShipping" id="burgerBox3">
                
                <div>
                    
                    <h1>Shipping</h1>
                    
                    <span>
                    International tracked - 6$ <br/> (5-10 business days) <br/><br/>
                    Once your sleeve is finished, we ship it instantly.
                    </span>
                    
                </div>
                
                <div>
                    
                    <h1>Payment</h1>
                    
                    <span>
                    Paypal - fast, secure and easy payment method. Your payment will be registered immediately, so we can start crafting your sleeve right away.
                    </span>
                </div>
                
            </div>
            
            <div class="burgerSize" id="burgerBox4">
                
                <div>
                    <h1>SIZE</h1>
                    <ul>
                        <li onclick="switchSize(1)">40%</li>
                        <li onclick="switchSize(2)">60%</li>
                        <li onclick="switchSize(3)">65%</li>
                        <li onclick="switchSize(4)">75%</li>
                        <li onclick="switchSize(5)">TKL</li>
                        <li onclick="switchSize(6)">Fullsize</li>
                    </ul>
                    
                </div>
                
                <div>
                    
                    <div id="size1" class="sizeBox">
                        
                        <h1>40%</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: Vortex Core 40%, Planck, Niu Mini, JD40 <br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>
                    <div id="size2" class="sizeBox">
                        
                        <h1>60%</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: Pok3r, Anne Pro, HHKB.<br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>
                    <div id="size3" class="sizeBox">
                        
                        <h1>65%</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: TADA68,Magicforce 68, Leopold FC660M.<br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>
                    <div id="size4" class="sizeBox">
                        
                        <h1>75%</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: Vortex Race3, Octagon 75%. <br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>
                    <div id="size5" class="sizeBox">
                        
                        <h1>TKL</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: Ducky One, Filco Majestouch 2 TKL, Varmilo VA87M.<br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>
                    <div id="size6" class="sizeBox">
                        
                        <h1>Fullsize</h1>
                        
                        <span>
                        Example keyboard models which fit to this size: Ducky Shine 6, Leopold FC980M.<br/>
                        If you would like to have perfectly tailored size to your keyboard, contact us.
                        </span>
                        
                    </div>

                </div>
                
            </div>
            
            <div class="burgerZip" id="burgerBox5">
                
                <div>
                    <h1>Zip</h1>
                    <ul>
                        <li onclick="switchZip(1)">Velcro</li>
                        <li onclick="switchZip(2)">Magnetic flap</li>
                        <li onclick="switchZip(3)">Cord lock</li>
                    </ul>
                    
                </div>
                
                <div>
                    
                    <div id="zip1">
                       
                       <h1>Velcro</h1>
                        
                       <span class="zipContent"> 
                       Oldschool velcro. Strong and safe, just to ensure everything is fine with your keyboard inside.
                       </span>
                       
                    </div>
                    
                    <div id="zip2">
                        
                        <h1>Magnetic flap</h1>
                        
                        <span class="zipContent">
                        Secure closing with customizable color. Mostly sleeves have one magnetic button, while we recommend two for the biggest one's.
                        </span>
                        
                    </div>
                    
                    <div id="zip3">
                        
                        <h1>Cord lock</h1>
                        
                        <span class="zipContent">
                        Cordlock is applicative and keeps your keyboard safe inside sleeve. Cord is choosen to best match sleeve.
                        </span>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div class="aboutUs" id="burgerBox6">
                
                <div class="logoImg"></div>
                
                <span>Mechfashion is for you and your keyboard. We can create whatever sleeve you desire, from choosing fabrics, closings to every sleeve’s color aspect. Quality and your satisfaction are extremely important for us. It doesn’t matter if your sleeve is crazy, vibrant keycap set themed or just all black - every cut and stitch is made with love to mechanical keyboards community.</span>
            </div>
            
        </div>
        
        <div class="burgerBelt">
            
            <input type="checkbox" class="burger">
            
            <div class="burgerNav">
                
                <a onclick="switchBurger(1)">Customization</a>
                
            </div>
            
            <div class="burgerLeftNav">
                
                <a href="colorGallery.php">Create your own</a>
                <a onclick="switchBurger(3)">Shipping &amp; Payment</a>
                <a onclick="switchBurger(2)">More info</a> 
                <a onclick="switchBurger(4)">Size table</a>
                <a onclick="switchBurger(5)">Closing styles</a>
                <a onclick="switchBurger(6)">About us</a>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="sliderContainer">
        
        <div class="sliderScreen">
        
            <div onclick="slider('left')">
            </div>
            
            <div class="slideBox" id="sliderBox">
                <?php

                for($i = 1; $i <= 6; $i++) {

                    echo "<div class='sliderThem' id='sliderThem$i'>";
                    echo "</div>";
                }
                ?>
            </div>
            
            <div class="circleBox">
                
                <?php

                for($i = 1; $i <= 6; $i++) {

                    echo "<div class='circle' id='circle$i' onclick='slider($i)'>";
                    echo "</div>";
                }
                ?>

            </div>
        
            <div onclick="slider('right')">
            </div>
             
        </div>
            
     </div>
    
    <div class="cubeContainer">
            
<?php
        
        $nameTab[0] = "";
        $nameTab[1] = "All black";
        $nameTab[2] = "Nautilus";
        $nameTab[3] = "Godspeed";
        $nameTab[4] = "Serika";
        $nameTab[5] = "Carbon";
        $nameTab[6] = "Nautilus (canvas)";
        $nameTab[7] = "Pulse (canvas)";
        $nameTab[8] = "Laser (canvas)";
        $nameTab[9] = "";
        $nameTab[10] = "";
        $nameTab[11] = "";
        $nameTab[12] = "";
            
        for ($i = 1; $i <= 8; $i++) {
                
            echo "<div class='container'>";
            echo "<div class='cube' id='cube$i' onclick='productSwitch($i)'>";

                echo "<div class='front'><span>$nameTab[$i]</span></div>";
                echo "<div class='back'><span>$nameTab[$i]</span></div>";
                echo "<div class='right'><span>$nameTab[$i]</span></div>";
                echo "<div class='left'><span>$nameTab[$i]</span></div>";
                echo "<div class='top'><span>$nameTab[$i]</span></div>";
                echo "<div class='bottom'><span>$nameTab[$i]</span></div>";

            echo "</div>";
            echo "</div>";
                
        }     
          
?>

    </div>
    
    <div class="footer">
        
        <div class="socialMedia">
            
            <div class="FB"> <a href="https://m.me/100001905762430"></a>
            </div>
            
            <div class="INSTAGRAM"><a href="https://www.instagram.com/mech_fashion"></a>
            </div>
            
            <div class="REDIT"><a href="https://www.reddit.com/user/Pitrek7"></a>
            </div>
            
            <div></div>
             
        </div>
        
        <a>Copyright © 2017 Mechfashion. All rights reserved</a>
        
    </div>
    
</body>
    
</html>