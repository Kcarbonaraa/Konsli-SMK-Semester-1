<!--For connecting the php codes with the sql database-->

<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "database_web_crud";

$connect = mysqli_connect($server, $user, $password, $database);
if (!$connect) (
    die ("Koneksi Gagal:".mysqli_connect_error())
)

?>