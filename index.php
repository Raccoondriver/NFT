<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Верстка «NFT»</title>
</head>

<body>
	<div class="rootpage">
		<h1>Верстка «NFT»</h1>
		<div class="rootpage__info">
			Особенности проекта
		</div>
		<h2>Готовые страницы:</h2>
		<ol class="rootpage__list">
			<li><a target="_blank" href="home.html">Главная</a></li>
		</ol>
		<h2>Попапы:</h2>
		<ol class="rootpage__list">
			<li><a target="_blank" href="home.html#"></a></li>
		</ol>
		<div class="rootpage__tnx">
			<h2>Спасибо за заказ!</h2>
			<p>Буду рад (а) хорошему отзыву.</p>
			<p>Обращайтесь еще!</p>
		</div>
		<div class="rootpage__contacts">
			<h2>Мои контакты:</h2>
			<p>Почта: <a href="mailto:email@gmail.com">email@gmail.com</a></p>
			<p>Телефон: <a href="tel:8800800800">8 800 800 800</a></p>
			<p>Соц. сеть: <a href="">ссылка на соц. сеть</a></p>
		</div>
	</div>
</body>
<style>
	@charset "UTF-8";
	@import url("https://fonts.googleapis.com/css?family=Montserrat:regular,700&display=swap");

	*,
	*::before,
	*::after {
		padding: 0px;
		margin: 0px;
		border: 0px;
		box-sizing: border-box;
	}

	html,
	body {
		height: 100%;
		margin: 0;
		padding: 0;
		min-width: 320px;
		width: 100%;
		color: #fff;
		background-color: #5e5373;
	}

	body {
		font-family: Montserrat;
		font-size: 100%;
		line-height: 1;
		font-size: 1rem;
	}

	a {
		text-decoration: underline;
		color: #ebe691
	}

	a:visited {
		text-decoration: underline;
		color: #aaa768;
	}

	a:hover {
		text-decoration: none;
	}

	ul li {
		list-style: none;
	}

	img {
		vertical-align: top;
	}

	.wrapper {
		width: 100%;
		min-height: 100%;
		overflow: hidden;
	}

	.rootpage {
		padding: 30px;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}

	@media (max-width: 767px) {
		.rootpage {
			padding: 30px 15px;
		}
	}

	h1 {
		color: #ebe691;
		font-size: 2.5rem;
		margin: 0px 0px 1.25rem 0px;
	}

	@media (max-width: 767px) {
		h1 {
			font-size: 1.85rem;
			margin: 0px 0px 1.25rem 0px;
		}
	}

	h2 {
		color: #ebe691;
		font-size: 1.25rem;
		margin: 0px 0px 1rem 0px;
	}

	@media (max-width: 767px) {
		h2 {
			font-size: 1.125rem;
			margin: 0px 0px 1rem 0px;
		}
	}

	.rootpage__info {
		line-height: 140%;
		margin: 0px 0px 1.5rem 0px;
	}

	.rootpage__list {
		margin: 0px 0px 2.25rem 1.25rem;
	}

	.rootpage__list li:not(:last-child) {
		margin: 0px 0px 15px 0px;
	}

	.rootpage__contacts,
	.rootpage__tnx {
		border-radius: 200px;
		padding: 20px 65px;
		line-height: 140%;
	}

	@media (max-width: 767px) {

		.rootpage__contacts,
		.rootpage__tnx {
			border-radius: 40px;
			padding: 20px;
		}
	}

	.rootpage__contacts {
		background: #32b5a4;

	}

	.rootpage__contacts a {
		color: #ebe691;
	}

	.rootpage__tnx {
		background: #c22d63;
		margin: 0px 0px 1rem 0px;
	}
</style>

</html>