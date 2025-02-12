<?php
// Retrieve the 'search' parameter from the query string
$keyword = isset($_GET['search']) ? trim($_GET['search']) : '';

// Define a list of acceptable keywords
$list = [
    "BONUS288 Promo",
    "BONUS288 Gratis",
    "BONUS288 Terbaru",
    "BONUS288 Menang",
    "BONUS288 Jackpot",
    "BONUS288 Slot",
    "BONUS288 Login",
    "BONUS288 Daftar",
    "BONUS288 Bonus",
    "BONUS288 Game",
    "BONUS288 Online",
    "BONUS288 Cashback",
    "BONUS288 Deposit",
    "BONUS288 Withdraw",
    "BONUS288 Referral",
    "BONUS288 Hari Ini",
    "BONUS288 Link Alternatif",
    "BONUS288 Apk",
    "BONUS288 Tips Menang",
];

// Check if the keyword is in the list (case insensitive)
if (in_array(strtolower($keyword), array_map('strtolower', $list))) {
    // Generate dynamic title, meta description, and canonical URL
    $pageTitle = "$keyword - Informasi Terbaru dan Promo Menarik di 288backend";
    $metaDescription = "Temukan informasi terbaru tentang $keyword di 288backend. Dapatkan promo, tips, dan panduan lengkap untuk pengalaman terbaik.";
    $canonicalUrl = "https://cong1-wuk0ng.pages.dev/288backend?search=" . urlencode($keyword);
    
    // Output the content with proper HTML structure
    echo "
    <!DOCTYPE html>
    <html amp lang="en-ID">
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>$pageTitle</title>
        <meta name="description"
            content="$metaDescription" />
        <meta name="robots" content="index,follow" />
        <link href="https://images.linkcdn.cloud/V2/395/favicon/favicon-451185846.webp" rel="shortcut icon"
            type="image/x-icon" />
        <link rel="canonical" href="#" />
        <meta property="og:site_name" content="BONUS288 AGENT" />
        <meta property="og:image:alt" content="BONUS288 AGENT" />
        <meta property="og:image" content="https://images.pixieset.com/70097088/4cec7fdebbb808b685abf13c4584767a-xxlarge.jpg" />
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js" />
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <style amp-boilerplate>
            body {
                -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                animation: -amp-start 8s steps(1, end) 0s 1 normal both
            }
    
            @-webkit-keyframes -amp-start {
                from {
                    visibility: hidden
                }
    
                to {
                    visibility: visible
                }
            }
    
            @-moz-keyframes -amp-start {
                from {
                    visibility: hidden
                }
    
                to {
                    visibility: visible
                }
            }
    
            @-ms-keyframes -amp-start {
                from {
                    visibility: hidden
                }
    
                to {
                    visibility: visible
                }
            }
    
            @-o-keyframes -amp-start {
                from {
                    visibility: hidden
                }
    
                to {
                    visibility: visible
                }
            }
    
            @keyframes -amp-start {
                from {
                    visibility: hidden
                }
    
                to {
                    visibility: visible
                }
            }
        </style>
        <noscript>
            <style amp-boilerplate>
                body {
                    -webkit-animation: none;
                    -moz-animation: none;
                    -ms-animation: none;
                    animation: none
                }
            </style>
        </noscript>
    
        <style amp-custom>
            * {
                box-sizing: border-box;
            }
    
            body {
                font-family: monospace;
                position: relative;
                background: #000000;
                background-image: radial-gradient(#202020 5%, transparent 50%);
                background-size: 5px 5px;
                background-attachment: fixed;
            }
    
            .container {
                max-width: 400px;
                height: 100vh;
                margin: 0 auto;
                padding: 15px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                overflow: hidden;
            }
    
            .welcome {
                max-width: 350px;
                margin: 0 auto;
            }
    
            .welcome h1 {
                font-size: 12px;
                color: #fff;
                overflow: hidden;
                border-right: .15em solid #fbf4a0;
                /* The typwriter cursor */
                white-space: nowrap;
                letter-spacing: .09em;
                animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
            }
    
            @keyframes typing {
                from {
                    width: 0
                }
    
                to {
                    width: 100%
                }
            }
    
            @keyframes blink-caret {
    
                from,
                to {
                    border-color: transparent
                }
    
                50% {
                    border-color: #fbf4a0;
                }
            }
    
            .banner {
                border-radius: 10px;
            }
    
            .btn-login {
                padding: 10px;
                color: #000000;
                font-size: 20px;
                font-weight: bold;
                text-decoration: none;
                text-align: center;
                background: linear-gradient(to bottom, #ffc200 100%, rgb(0 0 0) 0%);
                margin-top: 10px;
                border-radius: 10px;
                position: relative;
                z-index: 2;
                box-shadow: 0 0 10px #ffe000;
            }
    
            .btn-daftar {
                padding: 10px;
                color: #fff;
                font-size: 20px;
                font-weight: bold;
                text-decoration: none;
                text-align: center;
                background: linear-gradient(to bottom, #ff0000 100%, rgb(255, 0, 0) 0%);
                margin-top: 10px;
                border-radius: 10px;
                position: relative;
                z-index: 2;
                box-shadow: 0 0 10px #ff0000;
            }
    
            .copyright {
                text-align: center;
                color: #ffffff96;
            }
    
            .nagaterbang {
                position: fixed;
                z-index: 1;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                margin: auto;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <header>
                <center><a href="https://ava188.com/LiveChat-Bonus288"><amp-img id="image" class="animated tada infinite slower"
                            src="https://images.linkcdn.cloud/V2/395/logo/logo-451185846.webp"
                            alt="BONUS288 AGENT" width="260" height="141" layout="intrinsic"></amp-img></a>
            </header>
            <div class="welcome">
                <h1>BONUS288 AGENT NO #1 DI DUNIA</h1>
            </div>
    
            <amp-img src="https://images.pixieset.com/70097088/4cec7fdebbb808b685abf13c4584767a-xxlarge.jpg" width="500"
                height="500" layout="intrinsic" class="banner"></amp-img>
    
            <a href="https://ava188.com/Login-Bonus288" target="_blank" rel="noreferrer noopener" role="button"
                class="btn-login">LOGIN</a>
            <a href="https://ava188.com/Daftar-Bonus288" target="_blank" rel="noreferrer noopener" role="button"
                class="btn-daftar">DAFTAR</a>
    
            <p class="copyright">© 2025 • <a style="color: #ffffff;" href="https://cong1-wuk0ng.pages.dev/288backend">SEO Wukong</a> •
                All Rights Reserved.</p>
        </div>
    
    </body>
    
    </html>";
} else {
    // Return a 404 error if the keyword is not found
    header("HTTP/1.0 404 Not Found");
    echo "<!DOCTYPE html>
    <html lang='id'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>404 - Halaman Tidak Ditemukan</title>
        <meta name='description' content='Maaf, halaman yang Anda cari tidak tersedia di 288backend.'>
        <meta name='robots' content='noindex, nofollow'>
        <link rel='canonical' href='https://cong1-wuk0ng.pages.dev/404' />
    </head>
    <body>
        <h1>404 - Halaman Tidak Ditemukan</h1>
        <p>Maaf, halaman yang Anda cari tidak tersedia.</p>
    </body>
    </html>";
}
?>
