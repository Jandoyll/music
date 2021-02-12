<?php 
require "libs/rb.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SearchMusic</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- MAIN__CONTAINER -->
	<div class="main__container">
		<!-- HEADER -->
		<header>
			<div class="header__logo">
				<img src="img/header__logo.png" alt="">
			</div>
			<!-- Поиск -->
			<div class="header__search">
				<input class="b-search__string a-c_search" name="q" type="text" aria-label="Поиск" placeholder="Найти песню или исполнителя" >
				<button class="b-search__submit" aria-label="Поиск" type="submit">
					<span class="fa fa-search fa-2x">
					</span>
				</button>
			</div>

			<!-- Поиск закрывается   Доделать -->
			<div class="header__actions">
			<?php if(isset ($_SESSION['logged_user'])) : ?>
				Привет, <?php echo $_SESSION['logged_user']; ?>! 
				<hr>
				<a href="logout.php">Выйти</a>
				<?php else : ?>
					<a href="login.php">
						<button class="pure-button pure-button-only-hover">Войти</button>
					</a>
					<a href="register.php">
						<button class="pure-button pure-button-only-hover">Регистрация</button>
					</a>
					<?php endif; ?>
				</div>
				
		</header>
		<!-- Закрытие HEADER -->
		<div class="container">
			<ul class="songs">
				<li class="song">
					<a class="song__name" href="garik.html">Гарик Погорелов - Под твоим окном</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
				<li class="song">
					<a class="song__name" href="">q</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- Закрытие MAIN__CONTAINER -->
</body>
</html>