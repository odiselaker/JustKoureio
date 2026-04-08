<?php require_once "db/config.php"; ?>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO about (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title, $content]);

    echo "Successful!";
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"></textarea><br>
    <button type="submit">Save</button>
</form>