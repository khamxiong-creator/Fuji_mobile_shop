

<?php
include 'db.php';

$content = $_POST['content'];

if (!empty($content)) {
  $stmt = $conn->prepare("INSERT INTO comments (content) VALUES (?)");
  $stmt->bind_param("s", $content);
  $stmt->execute();
  echo "success";
}
?>

