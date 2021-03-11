<?php 
require __DIR__ . '/../db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SearchMusic</title>
	<link rel="icon" href="../../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<!-- MAIN__CONTAINER -->
	<div class="main__container">
		<!-- HEADER -->
		<header>
			<div class="header__logo">
				<img src="../../img/logo-1613123879496.png" class="logo" alt="">
			</div>
			<!-- Поиск -->
			<div class="header__search">
				<input class="b-search__string a-c_search" name="q" type="text" aria-label="Поиск" placeholder="В разработке ...." >
				<button class="b-search__submit" aria-label="Поиск" type="submit">
					<span class="fa fa-search fa-2x">
						
					</span>
				</button>
			</div>

			<!-- Поиск закрывается   Доделать -->
			<div class="header__actions">
			<?php if(isset($_SESSION['logged_user'])) : ?>
				<a href="../../logout.php">
					<button class="pure-button pure-button-only-hover">Выйти</button>
				</a>
				<?php else : ?>
				<a href="../../login.php">
						<button class="pure-button pure-button-only-hover">Войти</button>
					</a>
					<a href="../../register.php">
						<button class="pure-button pure-button-only-hover">Регистрация</button>
					</a>
			<?php endif; ?>
			</div>
		</header>
		<div class="container">
			<a class="back" href="/">На главную</a>