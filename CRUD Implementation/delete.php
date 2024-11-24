<?php 
include 'database.php';

$id    = $_GET['id'];
$sql   = $connect -> query("SELECT * FROM datareview WHERE id='$id' ");
$data  = $sql -> fetch_assoc();
$query = $connect -> query("DELETE FROM datareview WHERE id='$id' ");

if($query){
    echo '';
    header("refresh:1  url=dashboard.php");
} else {
    echo '';
    header("refresh:1  url=dashboard.php");
}

?>