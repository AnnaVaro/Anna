<!doctype html>
<html>
<head>
    <title>Hello HTML</title>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="container">
	<div class="header">
	<!-- Создание меню-->
		<header>
		 <img src="images/knowknow1.png" class="logo">
            <?php include "./menu.php"; ?>
		</header>
	</div>
	<div class="content">
		<h1>Контакты</h1>
		<hr>
		<p>Адрес:129226 г. Москва, ул. Проспект мира, д.131, офис 3
		<br>
		Время работы: с 10 до 18 с Пн по Сб
		<br>
		Телефон: +7 (926) 476 22 62
		<br>
		Email: info@knowknow.ru </p>

			<form action="index.html">
				<fieldset>
					<legend>Форма отзыва</legend>
						<input type="text" placeholder="Как вас зовут">
						<input type="email" placeholder="Напишите ваш e-mail">
						<input type="password" placeholder="Придумайте пароль">
					<p>Выберите пол:</p>
						<input type="radio" id="male" name="pol">
						<label for="male">М</label>
						<input type="radio" id="female" name="pol">
						<label for="female">Ж</label>
					<p>Выберите тип сообщения:</p>
						<input type="radio" id="otz" name="tip">
						<label for="otz">Отзыв</label>
						<input type="checkbox" id="pers" checked="checked">
						<label for="pers">Согласен на обработку данных</label>
						<textarea cols="80" rows="10">Напишите, пожалуйста, ваш отзыв или рекомендацию!</textarea>
						<input type="submit" value="Отправить отзыв">
						<p><a href="mailto:info@knowknow.ru">Задавайте вопросы по электронной почте</a></p> 
				</fieldset>
			</form>
			&nbsp;</p>
			<a href="/">Назад на главную</a>
			&nbsp;</p>
			<a href="catalog.php">Посмотреть обучающие курсы</a>
		</div>
        <?php include "./footer.php"; ?>
</body>
</html>