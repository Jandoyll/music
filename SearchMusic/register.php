<?php 
	require "db.php";
	$data = $_POST;
	if ( isset($data['do_signup']) ) 
	{
		// Регистрация и проверки полей

		$errors = array();
		if(trim($data['login']) == '')
		{
			$errors[] = 'Введите логин!';
		}

		if(trim($data['email']) == '')
		{
			$errors[] = 'Введите Email!';
		}

		if($data['password'] == '')
		{
			$errors[] = 'Введите пароль!';
		}

		if($data['password_2'] != $data['password'])
		{
			$errors[] = 'Пароли не совпадают!';
		}

		if(R::count('users', "login=?", array($data['login'])) >0)
		{
			$errors[]='Пользователь с таким логином уже существует!';
		}

		if(R::count('users', "email=?", array($data['email'])) >0)
		{
			$errors[]='Пользователь с таким Email уже существует!';
		}

		if( empty($errors) )  
		{
			// все хорошо-регистрируем
			$user = R::dispense('users');
			$user->login=$data['login'];
			$user->email=$data['email'];
			$user->password=password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			echo '<div style="color: green;">Вы зарегестрированы!<br/><a href="index.php">Перейти на главную<a/></div>'; 
		} else
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
	<title>Регистрация</title>
	<link rel="stylesheet" href="css/reg-style.css">
</head>
<body>
 <form action="register.php" method="POST">

 	<p>
 		<p><strong>Ваш логин</strong></p>
 		<input type="text" name="login" value="<?php echo @$data['login']; ?> ">
 	</p>

 	<p>
 		<p><strong>Ваш Email</strong></p>
 		<input type="email" name="email" value="<?php echo @$data['email']; ?>">
 	</p>

 	<p>
 		<p><strong>Ваш пароль</strong></p>
 		<input type="password" name="password" >
 	</p>

 	<p>
 		<p><strong>Повторите пароль</strong></p>
 		<input type="password" name="password_2" >
 	</p>

 	<p>
 		<button type="submit" name="do_signup">Зарегистрироваться</button>
 	</p>

 </form>
</body>
</html>