<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password);

mysqli_query($conn, $sql);
mysqli_select_db($conn, "minishop");
?>
