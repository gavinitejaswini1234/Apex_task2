<?php include 'config.php'; ?>
<h2>All Posts</h2>
<a href="create.php">+ Add New Post</a><hr>

<?php
$res = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while ($row = $res->fetch_assoc()) {
    echo "<h3>{$row['title']}</h3><p>{$row['content']}</p>";
    echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
    echo "<a href='delete.php?id={$row['id']}'>Delete</a><hr>";
}
?>
