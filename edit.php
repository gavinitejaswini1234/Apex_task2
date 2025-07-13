<?php include 'config.php';
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn->query("UPDATE posts SET title='{$_POST['title']}', content='{$_POST['content']}' WHERE id=$id");
    header("Location: index.php");
}
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();
?>
<h2>Edit Post</h2>
<form method="post">
    Title: <input name="title" value="<?= $post['title'] ?>"><br><br>
    Content:<br><textarea name="content" rows="5" cols="30"><?= $post['content'] ?></textarea><br><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>
