<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=Parisienne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=Parisienne&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/header.css">
    <title><?php echo isset($page_title) ? $page_title : "Default Page"; ?></title>

</head>
<body>
  <div class="header d-flex justify-center text-center items-center f-size-25 color-gold b-shadow pos-relative over-hidden">

    <a href="index.php"><img class="logo" src="assets/icons/lionlogo.png" height="auto" width="180px" alt="logo"></a>

<div class="hamburger">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

<div class="sidebar">
  <span class="closeSidebar">&times;</span>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>

 <div class="social">
    <a href="#"><img src="assets/icons/instagram.png" height="auto" width="50px" alt="icon"></a> 
    <a href="#"><img src="assets/icons/telegram.png" height="auto" width="50px" alt="icon"></a> 
    <a href="#"><img src="assets/icons/facebook.png" height="auto" width="50px" alt="icon"></a> 

   <iframe class="map bd-radius-5 mt-50" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48459.39317770896!2d22.90929196661237!3d40.61417583416895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a838f41428e0ed%3A0x9bae715b8d574a9!2zzpjOtc-Dz4POsc67zr_Ovc6vzrrOtw!5e0!3m2!1sel!2sgr!4v1775668582146!5m2!1sel!2sgr" 
      height="350px"
      width="350px"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
   </iframe>
  </div>
</div>

      <h1 class="monsieur-la-doulaise-regular">JustKoureio</h1>
      <h2 class="syncopate-regular">JUSTKOUREIO</h2>

      <video class="video-bg pos-absolute top-50 left-50 min-w-100 min-h-100 w-auto h-auto transform filterBB object-cover" autoplay muted loop>
        <source src="assets/videos/HAIRMAN.mp4" type="video/mp4">
      </video>
  </div>

<script src="JS/script.js"></script>
</body>
</html>