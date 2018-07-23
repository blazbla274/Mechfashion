<html>

<head>
     <meta charset="utf-8"/>
     <title>Color gallery</title>
     <meta name="discription" content=""/>
     <meta name="keywords" content=""/>
     <meta http-eguip="X-UA-Compatible" content="IE=edge,chrome=1"/>
     <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
     <link rel="shortcut icon" href="favicon.ico" />
    
    <link rel="stylesheet" href="css/colorGallery.css" type="text/css"/>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="js/sendMail.js"></script>

</head>
<body>
    
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
    
    <div class="topBox">
        
        <div> <a href="index.php"></a>
        </div>
        
    </div>
        
    <h2>
    It seems like you would like to create your own sleeve design.
    Depending on your preferred closing style (flap/cordlock), pick your desired colorway. There is polyester for exterior, flap, pocket and fleece for interior.
    You can choose different color for each part of sleeve.
    </h2>
    
    <h1>Polyester</h1>
    
    <div class="container">
    
<?php
        
    $namePol[0] = "";
    $namePol[1] = "Black";
    $namePol[] = "Gray";
    $namePol[] = "Navy";
    $namePol[] = "Cornflower";
    $namePol[] = "Light blue";
    $namePol[] = "Orange";
    $namePol[] = "Red";
    $namePol[] = "Light beige";
    $namePol[] = "Brown";
    $namePol[] = "Light green";
    $namePol[] = "Light gray";
    $namePol[] = "Burgundy";
    $namePol[] = "Bordeaux";
    $namePol[] = "Turquoise";
    $namePol[] = "Dark purple";
    $namePol[] = "Purple";
    $namePol[] = "Green";
    $namePol[] = "Pink";
    $namePol[] = "Raspberry";
    $namePol[] = "Yellow";
    $namePol[] = "Mint";
    $namePol[] = "White";
        
        for($i = 1; $i <= 22; $i++) {
            echo "<div class='box id$i'>";
            echo "<div>$namePol[$i]</div>";
            echo "</div>";
        }
        
?>
        
    </div>
    
    <h1>Fleece</h1>
    
    <div class="container">

<?php
    
    $nameFlee[0] = "";
    $nameFlee[1] = "Black";
    $nameFlee[] = "Gray";
    $nameFlee[] = "Light gray";
    $nameFlee[] = "Red";
    $nameFlee[] = "Orange";
    $nameFlee[] = "Yellow";
    $nameFlee[] = "Navy";
    $nameFlee[] = "Pink";
    $nameFlee[] = "Cornflower";
    $nameFlee[] = "Dark purple";
    $nameFlee[] = "Purple";
    $nameFlee[] = "Amaranth";
    $nameFlee[] = "Burgundy";
    $nameFlee[] = "Mint";
    $nameFlee[] = "Teal";
    $nameFlee[] = "Turquoise";
    $nameFlee[] = "Light blue";
    $nameFlee[] = "Green";
    $nameFlee[] = "Brown";
    $nameFlee[] = "Beige";
    $nameFlee[] = "Camel";
    $nameFlee[] = "Light green";
        
        for($i = 1; $i <= 22; $i++) {
            echo "<div class='box idF$i'>";
            echo "<div>$nameFlee[$i]</div>";
            echo "</div>";
        }
        
?>
    </div>
    
    <h2>Please fill form below. We will reply as soon as possible!</h2>
    
    <div class="footer" id="message">
        
        <form method="post" action="sendMail.php">
        
            <label>Name/Nickname 
                
                <span>
<?php
   if(isset($_SESSION['nameError']) && $_SESSION['nameError'])  echo "Something is missing here.";    
?>
                </span>
                
            </label>
            <input name="name" placeholder="Your name or nickname" value="<?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; unset($_SESSION['name']); } ?>">

            <label>Email
                
                <span>
<?php
   if(isset($_SESSION['emailError']) && $_SESSION['emailError'])  echo "Check if your email is correct.";    
?>
                </span>
                
            </label>
            <input name="email" type="email" placeholder="Necessery to contact you" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; unset($_SESSION['email']); } ?>">

            <label>Description
                
                <span>
<?php
   if(isset($_SESSION['messageError']) && $_SESSION['messageError'])  echo "You forgot about message.";    
?>
                </span>
                
            </label>
            <textarea name="message" placeholder="Please provide us here every detail about your desired sleeve. Closing style, color of each part of sleeve (exterior, interior, flap, pocket) and size. Expect reply within 12hours. Thank you, we really appreciate it." ><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?></textarea>

            <input id="submit" name="submit" type="submit" value="Send">
        
        </form>
        
        <div class="footerEnd">
            
            <a>Copyright © 2017 Mechfashion. All rights reserved</a>
            
        </div>
        
    </div>

</body>
</html>