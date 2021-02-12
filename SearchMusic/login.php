<?php 
	require "db.php";
	$data = $_POST;
	if( isset($data['do_login']))
	{
		$errors = array();
		$user = R::findOne('users','login = ?', array($data['login']));
		if( $user )
		{
			$_SESSION['logged_user'] = $user;
			if(password_verify($data['password'], $user->password)) 
			{
				( $_SESSION['logged_user']=$user);
				header('Location:/');
			} else
			{
				$errors[] = 'Неверный пароль!';
			}
		} else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		if( ! empty($errors) )  
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="stylesheet" href="css/log-style.css">
</head>
<body>
<form action="login.php" method="POST">
	
	<p>
 		<p><strong>Логин</strong></p>
 		<input type="text" name="login" value="<?php echo @$data['login']; ?> ">
 	</p>


 	<p>
 		<p><strong>Пароль</strong></p>
 		<input type="password" name="password" >
 	</p>

 	<p>
 		<button type="submit" name="do_login">Войти</button>
 	</p>
</form>
</body>
</html>