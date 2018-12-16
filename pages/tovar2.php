<?php
$title = "Товар 2";
$h1 = "Товар 2";
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
	<div class="slaider slaider4">
		<div class="slaider-text">
		Тема 2 "Продажи по телефону"
		</div>
	</div>
	<div class="content">
		<hr>
		<p>Как часто вы слышите «Спасибо, я перезвоню» «Спасибо, я подумаю»? Успешные продавцы умеют обходить вопрос цены и выявлять проблему.
			<br>
			<br>
			<b>«ФИШКИ» ОБУЧЕНИЯ:</b>
			<ul>
			 	<li>Формирование модели уверенного и активного телефонного поведения;</li>
			 	<li>Умение убеждать и работать с сопротивлением клиента.</li>
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
		 <br />
			<span style="color: #10c479;">ПРИЯТНЫЙ БОНУС. </span>
			<br /><br />
			<span style="color: #10c479;">КАЖДЫЙ УЧАСТНИК ВЕБИНАРА ПОЛУЧИТ ПРОМОКОД НА ЭЛЕКТРОННЫЙ КУРС И ПОДСКАЗКИ ОТ KNOWKNOW</span>
			<br /><br />
        <br />
        <form action="../cart.php">
            <p><input type="submit" value="Записаться на обучение"></p>
        </form>
			<a href="../catalog.php">Посмотреть другие курсы</a>
			<br /><br />
			<a href="../index.php">Назад на главную</a>
        </div>
    </div>
    <?php include "../footer.php"; ?>
</body>
</html>