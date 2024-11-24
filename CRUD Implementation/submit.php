<?php include'database.php';

$prod   = $_POST['prod'];
$user   = $_POST['user'];
$review = $_POST['review'];

$query = mysqli_query($connect, "INSERT INTO datareview (prod, user, review) VALUES ('$prod', '$user', '$review')");

if ($query) {
    echo '';
    header("refresh:1  url=dashboard.php");
} else {
    echo '';
    header("refresh:1  url=dashboard.php");
}



?>