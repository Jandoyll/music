<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SearchMusic</title>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main__container">
		<header>
			<div class="header__logo">
				<img src="img/logo-1613123879496.png" class="logo" alt="">
			</div>
			<div class="header__search">
				<input class="b-search__string a-c_search" name="q" type="text" aria-label="Поиск" placeholder="Найти песню или исполнителя" >
				<button class="b-search__submit" aria-label="Поиск" type="submit">
					<span class="fa fa-search fa-2x">
					</span>
				</button>
			</div>
			<div class="header__actions">
				<?php if(isset($_SESSION['logged_user'])) : ?>
					<a href="logout.php">
					<button class="pure-button pure-button-only-hover">Выйти</button>
				</a>
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
		<div class="container">
				<?php if(isset($_SESSION['logged_user'])) : ?>
			<div class="songers">
					<li class="songer">
					<img src="img/5nizza.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/5nizza/index.php">5'nizza</a>
				</li>
				<li class="songer">
					<img src="img/25.17.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/25.17/index.php">25/17</a>
				</li>
				<li class="songer">
					<img src="img/anacondaz.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/anacondaz/index.php">Anacondaz</a>
				</li>
				<li class="songer">
					<img src="img/comedoz.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/comedoz/index.php">Comedoz</a>
				</li>

				<li class="songer">
					<img src="img/iowa.png" class="songer__img" alt="">
					<a class="songer__name" href="songs/iowa/index.php">Iowa</a>
				</li>
				<li class="songer">
					<img src="img/iowa.png" class="songer__img" alt="">
					<a class="songer__name" href="songs/noize/index.php">Noize MC</a>
				</li>
				<li class="songer">
					<img src="img/aria.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/aria/index.php">Ария</a>
				</li>
				<li class="songer">
					<img src="img/affinazh.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/affinazh/index.php">Аффинаж</a>
				</li>
				<li class="songer">
					<img src="img/bi2.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/bi2/index.php">Би-2</a>
				</li>
				<li class="songer">
					<img src="img/valentin-strikalo.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/valentin-strikalo/index.php">Валентин Стрыкало</a>
				</li>
				<li class="songer">
					<img src="img/egor-nats.jpg" class="songer__img" alt="">
					<a class="songer__name" href="songs/egor-nats/index.php">Егор Натс</a>
				</li>
				<?php else : ?>
				<h4>Для просмотра необходимо <a href="login.php">войти</a>/<a href="register.php">зарегистрироваться</a> </h4>

				<li class="songer">
					<img src="img/5nizza.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">5'nizza</a>
				</li>
				<li class="songer">
					<img src="img/25.17.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">25/17</a>
				</li>
				<li class="songer">
					<img src="img/anacondaz.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Anacondaz</a>
				</li>
				<li class="songer">
					<img src="img/comedoz.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Comedoz</a>
				</li>

				<li class="songer">
					<img src="img/iowa.png" class="songer__img" alt="">
					<a class="songer__name" href="">Iowa</a>
				</li>
				<li class="songer">
					<img src="img/iowa.png" class="songer__img" alt="">
					<a class="songer__name" href="songs/noize/index.php">Noize MC</a>
				</li>
				<li class="songer">
					<img src="img/aria.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Ария</a>
				</li>
				<li class="songer">
					<img src="img/affinazh.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Аффинаж</a>
				</li>
				<li class="songer">
					<img src="img/bi2.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Би-2</a>
				</li>
				<li class="songer">
					<img src="img/valentin-strikalo.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Валентин Стрыкало</a>
				</li>
				<li class="songer">
					<img src="img/egor-nats.jpg" class="songer__img" alt="">
					<a class="songer__name" href="">Егор Натс</a>
				</li>
				<?php endif; ?>
			</div>
		</div>
<?php include'footer.php' ?>
