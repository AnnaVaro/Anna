<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обучение</title>
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

		<div class="slaider slaider2">
				<div class="slaider-text">
					Наше обучение - это встречи собственников бизнеса, предпринимателей с интересными людьми за чашкой кофе, которые в непринужденной обстановке рады общению на различные темы, обмену опытом, приобретению новых знаний, знакомых и друзей
				</div>
		</div>

	<div class="content">
		<h1>Темы обучения</h1>
		<hr>
		<div class="catalog">
			<div class="catalog-item">
				<img src="images/play.jpg"/>
				<br />
				<a href="./pages/tovar1.html">Темя 1 "Эффективные переговоры"</a>
				<form action="button.php">
				 	<p><input type="submit" value="Записаться на обучение"></p>
				</form>
			</div>

			<div class="catalog-item">
			 	<img src="images/phone.jpg"/>
			 	<br />
			 	<a href="./pages/tovar2.html">Тема 2 "Продажи по телефону" </a>
				<form action="button.php">
				  	<p><input type="submit" value="Записаться на обучение"></p>
				</form>
			</div>

			<div class="catalog-item">
				<img src="images/apteka.jpg"/>
				<br />
				<a href="./pages/tovar3.html">Тема 3 "Мерчендайзинг" </a>
				<form action="button.php">
				  	<p><input type="submit" value="Записаться на обучение"></p>
				</form>
			</div>
			<br style="clear: both;" />
	</div>

			<a href="/">Назад на главную</a>
        <?php include "./footer.php"; ?>

</body>
</html>