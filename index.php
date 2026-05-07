<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/index.css">

<?php $page_title = "Home"; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header.php'; ?>

<div class="container">
    <div class="photos d-flex">
        <div class="bigphoto">
            <img src="assets/images/photoBIG.jpg"
                height="auto" 
                width="800px"
                alt="barber">
        </div>

        <div class="smallphoto">
            <img src="assets/images/photoLITTLE.jpg"
                height="auto" 
                width="800px"
                alt="barber">

            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque officia recusandae repellendus ut consequuntur laboriosam aperiam labore deleniti nesciunt. Vel quibusdam consequatur, asperiores ipsam neque sit iure rem architecto fuga?</p>
        </div>
    </div>
</div>

<div class="datahours">
    <?php include_once 'php-elements/data-hours.php'; ?>
</div>

<?php include_once 'includes/footer.php'; ?>