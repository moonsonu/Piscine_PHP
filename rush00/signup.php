<?PHP
$x = 0;
if ($_POST['submit'] == 'SUBMIT')
{
	if ($_POST['new_login'] == "")
		echo "Unavailable Login\n";
	else if ($_POST['new_pw'] == "")
		echo "Unavailable Password\n";
	else
	{
		$user_info = unserialize(file_get_contents("data/user.txt"));
		foreach ($user_info['login'] as $user)
		{
			if ($user == $_POST['new_login'])
			{
				$x = 1;
				include 'signup_fail.html';
				break;
			}
		}
		if ($x == 0)
		{
			$user_info['login'][] = $_POST['new_login'];
			$user_info['passwd'][] = hash("whirlpool", $_POST['new_pw']);
			file_put_contents("data/user.txt", serialize($user_info));
			include 'ft_minishop.html';
		}
	}
}
?>
