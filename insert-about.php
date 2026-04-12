<?php require_once "db/config.php"; ?>

<style>
    body {
        background-color: dimgray;
    }

    .inserts {
        background-color: grey;
        border-radius: 10px;
        border-radius: 15px;
        width: 35%;
        height: auto;
        margin: 0 auto; 
        margin-top: 25px;
        text-align: center;
        margin-top: 15%;
        padding: 40px;
    }

    .inserts input{
        border-radius: 5px;
        background-color: black;
        color: gold;
    }

    .inserts textarea{
        border-radius: 5px;
        background-color: black;
        color: gold;
        width: 300px;
        height: 300px;
    }

    .inserts button{
        border-radius: 5px;
        background-color: gold;
        color: black;
    }


</style>

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

<div class="inserts">
    <form method="POST">
      <input type="text" name="title" placeholder="Title"><br><br>
      <textarea name="content" placeholder="Content"></textarea><br><br>
      <button type="submit">Save</button>
    </form>
</div>