
<?php
include 'db.php';

$result = $conn->query("SELECT * FROM comments ORDER BY created_at DESC");

while($row = $result->fetch_assoc()) {
  echo "<div class='comment'>" . htmlspecialchars($row['content']) . "</div>";
}
?>

