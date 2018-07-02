<?PHP
include "connection.php";
if ($_POST['new_login'] == "")
	echo "Unavailable Login\n";
else if ($_POST['new_pw'] == "")
	echo "Unavailable Password\n";
else
{
	$user = $_POST['new_login'];
	$passwd = hash("md5", $_POST['new_pw']);
	$sql = "SELECT * FROM 'user' WHERE login='{$user}'";
	$ur = mysqli_query($conn, $sql);
	$signup = mysqli_fetch_assoc($ur);
	echo $sql;
	if ($signup > 0)
	{
		include 'signup_fail.html';
		exit();
	}
	else
	{
		$insert = "INSERT INTO `user`(`login`, `passwd`, `admin`) VALUES ('{$user}', '{$passwd}', 'no')";
		mysqli_query($conn, $insert);
		include 'index.php';
	}
}
?>
