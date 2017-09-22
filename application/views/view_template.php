<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php Model::getTitle(); ?></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />

	<script type="text/javascript" src="/js/js.js"></script>


</head>
<body>
	<header>
		<div class="wrapper">
			<div class="header-top">
				<img src="../../img/logo-white.png">
				<span style="font-weight: 800;"><i>Dance Studio</i></span>
				<a style="float: right; padding-top: 0.5%;">войти</a>
			</div>

		</div>
		<nav>
			<div class="wrapper" id="cover-text">
				<ul>
					<li>Новости</li>
					<li>Видео</li>
					<li>Фото</li>
					<li>Команда</li>
					<li><a href="#bottom">Контакты</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div>
		<?php include 'application/views/'.$content_view; ?>
	</div>
	<footer>
		<div class="wrapper">
			<div class="footer-info">
				<div>
					<span>
						Как с нами связаться
					</span>
				</div>
				<div>
					<ul>
						<li>Телефон:</li>
						<li>+38 (777) 777 77 77</li>
						<li>+38 (777) 777 77 77</li>
					</ul>
				</div>
				<div>
					<ul>
						<li>Адресс:</li>
						<li>Житомирская область</li>
						<li>г. Коростень</li>
						<li>yл. Шолом Алейхема 13А</li>
					</ul>
				</div>
				<div>
					<ul>
						<li>Email:</li>
						<li>forma@forma.com</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>