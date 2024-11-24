<?php 
include 'database.php';

$id     = $_POST['id'];
$review = $_POST['review'];

$query = mysqli_query ($connect, "UPDATE datareview SET review ='$review' WHERE id='$id' ");
if($query){
    echo '';
    header("refresh:1  url=dashboard.php");
} else {
    echo '';
    header("refresh:1  url=dashboard.php");
}

?>