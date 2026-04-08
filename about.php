<link rel="stylesheet" href="/my-project/CSS/about.css">

<?php $page_title = "About"; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header+.php'; ?>

<?php
    $sql = "SELECT * FROM about ORDER BY about_ID DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $about = $stmt->fetch();
?>

<div class="title-content">
    <h1><?php echo $about['title']; ?></h1>
    <p><?php echo $about['content']; ?></p>
</div>


<?php include_once 'includes/footer.php'; ?>