<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="header">
	<!-- Создание меню-->
		<header>
			 <img src="images/knowknow1.png" class="logo">
            <?php include "./menu.php"; ?>
		</header>
	</div>
	<div class="content">
		<form action="index.html"> 
			<p><input placeholder="Ваше имя" name="user"></p>
			<p><input placeholder="Ваша почта" name="email"></p>
			<p><input placeholder="Ваш телефон" name="phone"></p>
			<input type="submit" value="Отправить">
            <br/><br/><br/><br/>
		</form> 
	</div>
    <?php include "./footer.php"; ?>
</body>
</html>