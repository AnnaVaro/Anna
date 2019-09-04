<?php
$title = "Товар 1";
$h1 = "Товар 1";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<!-- Создание меню-->
		<header>
			 <img src="../images/knowknow1.png" class="logo">
			 <?php include "../menu.php"; ?>
		</header>	
	</div>
	<div class="slaider slaider3">
			<div class="slaider-text">
			Тема 1 "Эффективные переговоры"
			</div>
		</div>
	<div class="content">
		<hr>
		<p>В основе любого успеха лежит практика, которая позволяет Вам действовать и чувствовать себя уверенно в любой ситуации.
		Во время занятия мы отработаем на практике пройденный ра.зличные кейсы. Это поможет Вам сформировать навык эффективного переговорщика.
		<br /><br />
		<b>НА ОБУЧЕНИИ ВЫ:</b>
		<ul>
		 	<li>Закрепите техники по переговорам и работе с манипуляциями</li>
		 	<li>Рассмотрите разные стратегии поведения переговоров и поймете какую стратегию где и когда применять</li>
		 	<li>Получите полезные советы, отработаете типичные ошибки по проведению переговоров и работе с манипуляциями</li>
		</ul>
		<b>В РЕЗУЛЬТАТЕ ВЫ:</b>
		<ul>
		 	<li>Повысите свой профессиональный уровень переговорщика</li>
		 	<li>Сможете эффективно работать манипуляциями клиентов и с легкостью проводить переговоры</li>
		</ul>
		<b> РАСПИСАНИЕ И ИНТЕНСИВНОСТЬ ОБУЧЕНИЯ</b>
		<p>
            <table border="1" cellpadding="4" cellspacing="0">
                <tr>
                    <td rowspan="2">Формы обучения</td>
                    <th height="120" colspan="2">Вебинар</th>
                    <th height="120" colspan="3">Тренинг</th>
                    <th height="120" colspan="2">Бизнес-завтрак</th>
                </tr>
                <tr>
                    <th>10.11.2018</th><th>12.11.2018</th><th>17.11.2018</th><th>18.11.2018</th><th>19.11.2018</th><th>25.11.2018</th><th>26.11.2018</th>
                </tr>
            <tr align="center">
                <td>Кол-во часов</td>
                <td>1 час </td><td>1 час</td><td>6 часов</td><td>6 часов</td><td>6 часов</td><td>3 часа</td><td>3 часа</td>
            </tr>
            </table>
		</p>
        <br />
        <form action="../cart.php">
            <p><input type="submit" value="Записаться на обучение"></p>
        </form>
			<a href="../catalog.php">Посмотреть другие курсы</a>
		<br /><br />
			<a href="../index.php">Назад на главную</a>
</div>
    <?php include "../footer.php"; ?>
</body>
</html>