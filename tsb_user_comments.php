<?php
$mysqli = mysqli_connect('localhost', 'tigerstylebd', 'tsbl1971', 'tigerstylebd');

if ($mysqli) {
  echo "Connection Successful";
} else {
  echo "No Connection";
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "INSERT INTO `tsb_user_comments`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";

mysqli_query($mysqli, $query);
header('location:welcome-to-our-website.php');

?>
