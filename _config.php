<?php 
$conn = mysqli_connect("localhost", 'root' , '', "anikatsu") or die("Connection fail");


$websiteTitle = "AniKatsu"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png?v=2"; // Logo
$contactEmail = "xyz@gmail.com"; // Contact Email

$version = "0.4";

//Donate 
$donate = "#";

// Socials 
$telegram = "https://t.me/#"; // telegram
$discord = "https://discord.com/#"; // Discord
$redit = "#"; // Reddit
$twitter = "#"; // Twitter
 


$disqus = "https://indianime.disqus.com";


// API URL
$api = "http://anikatsu.shashanktiwar11.repl.co";


$banner = $websiteUrl . "/files/images/banner.png";
?>
