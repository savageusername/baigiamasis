<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NFT - FAQ</title>
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
            <h1>Frequently Asked Questions (FAQ)</h1><br>       
            <img src="images/FAQ.png" style="width:25%">   
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="section-heading">
                <h2>WHAT IS AN NFT? WHAT DOES IT STAND FOR?</h2>
                <br>
                <p>“Non-fungible” more or less means that it's unique and can't be replaced with something else. For example, a bitcoin is fungible — trade one for another bitcoin, and you'll have exactly the same thing. A one-of-a-kind trading card, however, is non-fungible. If you traded it for a different card, you'd have something completely different.</p>
            </div>
            <div class="section-heading">
                <h2>HOW DO NFTS WORK?</h2>
                <br>
                <p>At a very high level, most NFTs are part of the Ethereum blockchain. Ethereum is a cryptocurrency, like bitcoin or dogecoin, but its blockchain also supports these NFTs, which store extra information that makes them work differently from, say, an ETH coin. It is worth noting that other blockchains can implement their own versions of NFTs.</p>
            </div>
            <div class="section-heading">
                <h2>WHAT MAKES NFTS SO SPECIAL?</h2>
                <br>
                <p>Non-fungible tokens have unique attributes; they are usually linked to a specific asset. They can be used to prove the ownership of digital items like game skins right through to the ownership of physical assets.</p>
            </div>
            <div class="section-heading">
                <h2>HOW ARE NON-FUNGIBLE TOKENS USED?</h2>
                <br>
                <p>They're bought and sold on NFT marketplaces. While dedicated marketplaces such as OpenSea and Rarible have hitherto dominated the field, recently some of the leading cryptocurrency exchanges have begun to muscle in on the space.</p>
            </div>
            
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="section-heading">
                <h2>Want to win a FREE NFT?!</h2>
                <p>As we will start minting our NFT’s on Polygon network – first hundred subscribers will 
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