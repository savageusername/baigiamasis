<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NFT - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <?php require_once __DIR__ . '/php/app.php'; ?>
    <script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
    <script src="js/mmenu.js"></script>
</head>
<body>
    <header class="site-header">
        <div class="container flex-container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="mobilemenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1><img src="images/regular.png" style = "width: 50%"/></h1>
            <br><br>            
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <img src="images/nft/01.png" style="width:30%">
                </div>
                <div class="mySlides fade">
                  <img src="images/nft/02.png" style="width:30%">
                </div>
                <div class="mySlides fade">
                  <img src="images/nft/03.png" style="width:30%">
                </div>
                <div class="mySlides fade">
                  <img src="images/nft/04.png" style="width:30%">
                </div>
                <div class="mySlides fade">
                    <img src="images/nft/05.png" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/06.png" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/07.jpg" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/08.jpg" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/09.jpg" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/10.jpg" style="width:30%">
                  </div>
                  <div class="mySlides fade">
                    <img src="images/nft/11.jpg" style="width:30%">
                  </div>
              </div>
              <script src="js/slides.js"></script>
              <br><br>
            <p><h2>This will be first ever NFT collection designed, programed and minted in Lithuania! 
                This collection will contain randomly generated poker player avatars with various attributes. 
               
            </h2></p>   
            <a href="about.php">MOOOAR INFO...</a><br><br>
            <h2>TIME LEFT UNTIL FIRST MINT:</h2>
            <script src="js/clock.js"></script>
            <p id="demo"></p>                       
        </div>
    </section>
    
    <section class="services">
        <div class="container">
            <div class="section-heading">
                <h2>How it all works?</h2>
                <p>This will be the first ever NFT collection in Lithuania. Designed, programmed and minted  in collaboration with <a href="http://themilk.lt" target="_blank">Milk</a> agency.</p>
            </div>
            <div class="section-content flex-container">
                <div class="service">
                    <img src="images/nft/01r.png" alt="nft1">
                    <h3>Designed</h3>
                    <p>Designed by leading Lithuanian marketing company </p>
                </div>
                <div class="service">
                    <img src="images/nft/02r.jpg" alt="nft2">
                    <h3>Programed</h3>
                    <p>Programed with different atributes which are randomly assigned</p>
                </div>
                <div class="service">
                    <img src="images/nft/11r.jpg" alt="nft3">
                    <h3>Minted</h3>
                    <p>Minted on Polygon network with reasonable GAS fees</p>
                </div>
                <div class="service">
                    <img src="images/nft/09r.jpg" alt="nft4">
                    <h3>Air droped</h3>
                    <p>Airdrop after the mint to our first lucky and early subscribers</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="section-heading">
                <h2>Want to win a FREE NFT?!</h2>
                <p>As we will start minting our NFT's on Polygon network - first hundred subscribers will 
                    enter a draw with a 52% chance of winning his or her own NFT!</p>
            </div>
            <div class="section-content">
                <form class="contact-form" id="contact" action="index.php" method="post">
                    <div class="input-row">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                     <input type="submit" class="btn btn-form" name="submit" id="contact-submit">
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
               <em>&copy; 2022 Designed by Gytis</a> | Powered by <a href="http://themilk.lt" target="_blank">Milk</a></em> 
            </div>                    
        </footer>
    </body>
</html>