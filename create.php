<?php include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn->query("INSERT INTO posts (title, content) VALUES ('{$_POST['title']}', '{$_POST['content']}')");
    header("Location: index.php");
}
?>
<h2>Create Post</h2>
<form method="post">
    Title: <input name="title"><br><br>
    Content:<br><textarea name="content" rows="5" cols="30"></textarea><br><br>
    <button type="submit">Save</button>
</form>
<a href="index.php">Back</a>
