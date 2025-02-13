<?php

// Retrieve the 'search' parameter from the query string
$keyword = isset($_GET['search']) ? trim($_GET['search']) : '';

// Define a list of acceptable keywords
$list = [
    "Bonus288 promo",
    "Bonus288 Gratis",
    "Bonus288 Terbaru",
    "Bonus288 Menang",
    "Bonus288 Jackpot",
    "Bonus288 Slot",
    "Bonus288 Login",
    "Bonus288 Daftar",
    "Bonus288 Bonus",
    "Bonus288 Game",
    "Bonus288 Online",
    "Bonus288 Cashback",
    "Bonus288 Deposit",
    "Bonus288 Withdraw",
    "Bonus288 Referral",
    "Bonus288 Hari Ini",
    "Bonus288 Link Alternatif",
    "Bonus288 Apk",
    "Bonus288 Tips Menang",
];

// Normalize the keyword for case-insensitive comparison
$normalizedKeyword = strtolower($keyword);

// Check if the normalized keyword is in the list
$found = false;
$matchedKeyword = ''; // Variable to store the matched keyword

foreach ($list as $item) {
    if (strtolower($item) === $normalizedKeyword) {
        $found = true;
        $matchedKeyword = $item; // Store the matched keyword with the correct casing
        break;
    }
}

if ($found) {
    // Generate dynamic title and meta description
    $pageTitle = htmlspecialchars("$matchedKeyword 🌞 Informasi Terbaru dan Promo Menarik", ENT_QUOTES, 'UTF-8');
    $metaDescription = htmlspecialchars("$matchedKeyword! Akses akun Anda dengan cepat dan aman. Nikmati berbagai bonus menarik, promo eksklusif, dan pengalaman bermain terbaik. Daftar dan mainkan hari ini! Dapatkan promo, tips, dan panduan lengkap untuk pengalaman terbaik.", ENT_QUOTES, 'UTF-8');

    // Generate the canonical URL
    $canonicalUrl = "https://cong1-wuk0ng.pages.dev/odenk.php?search=" . urlencode($matchedKeyword);

    // Include the search results view
    include 'pencarian.php';
} else {
    // Redirect back to index with an error message
    header("Location: index.php?error=Keyword not found");
    exit();
}
?>
