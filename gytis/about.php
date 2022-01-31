<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NFT - About</title>
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
                <a href="#"><img src="images/logo.png" alt="logo"></a>
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
            <h1>Non-Fungible Token (NFT) Definition</h1>
                <p><h2>Non-fungible tokens or NFTs are cryptographic assets on a blockchain with
                unique identification codes and metadata that distinguish them from each other.
                Unlike cryptocurencies , they cannot be traded or exchanged at equivalency.
                This differs from fungible tokens like cryptocurrencies,
                which are identical to each other and, therefore, can be used as a medium for commercial transactions.
            </h2></p>            
             
        </div>   
    </section>
    <section class="services">
        <div class="container">
            <div class="section-heading">
                <h2>Why it might just work out?</h2>
                <p>This will be the first ever NFT collection in Lithuania. Designed, programmed and minted  in collaboration with Milk agency.</p>
            </div>
            <div class="section-content flex-container">
                <div class="service">
                    <img src="images/about1.png" alt="chart up">
                    <h3>Value Growth</h3>
                    <p>Usually NFTs value grows if they have sucess in comunity</p>
                </div>
                <div class="service">
                    <img src="images/about2.png" alt="light bulb">
                    <h3>First in Lithuania</h3>
                    <p>We might not be the next cryptopunks but we are definetely first in Lithuania</p>
                </div>
                <div class="service">
                    <img src="images/about3.png" alt="monitor">
                    <h3>Collection for free</h3>
                    <p>Giving first collection of 52 NFTs for free to early birds who register here</p>
                </div>
                <div class="service">
                    <img src="images/about4.png" alt="gears">
                    <h3>Polygon Network</h3>
                    <p>Minted and spread on Polygon network to save on those huge Ether fees</p>
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
                <form class="contact-form">
                    <div class="input-row">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                     <input type="submit" class="btn btn-form" name="submit">
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
               <em>&copy; 2022 Designed by Gytis | Powered by <a href="http://themilk.lt" target="_blank">Milk</a></em> 
            </div>                    
        </footer>
</body>
</html>