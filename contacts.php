<?php
$title = "Контакты";
$h1 = "Контакты";
$z = array(
  1 => $_POST['name'] ?? '',
  2 => $_POST['email'] ?? '',
  3 => $_POST['content'] ?? '',
  4 => date("m.d.Y H:i") ?? ''
);
$dl = '';

if($z[1] && $z[2] && $z[3]){

  mail("info@knowknow.ru", "новый отзыв", $z[1] . "\n" . $z[2] . "\n" . $z[3]);

  if(strpos($z[3], 'http://') === false){
    $fp = fopen("comments.txt", "a+");
    $mytext =  $z[2] ."\n" . $z[1] . "\n" . $z[4] . "\n" . $z[3]."\n\n";
    $save = fwrite($fp, $mytext);
    fclose($fp); // закрытие файла
    Header("Location: ".$_SERVER['PHP_SELF']);
    exit;
  } else { // если в тексте есть http://
    $dl = '<b style="color: red;">Ваш отзыв будет опубликован после проверки автором сайта</b>';
  }

} else {

  $fp = @fopen("comments.txt", "r");
  if ($fp) {
    while (!feof($fp)) {
      $dl .= fgetss($fp, 8000, "<dl>,<dt>,<dd>");
    }
  }
  fclose($fp);

}
?>
<!doctype html>
<html>
<head>
    <title><?php echo $title; ?></title>
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
		<h1><?php echo $h1; ?></h1>
		<hr>
		<p>Адрес:129226 г. Москва, ул. Проспект мира, д.131, офис 3
		<br>
		Время работы: с 10 до 18 с Пн по Сб
		<br>
		Телефон: +7 (926) 476 22 62
		<br>
		Email: info@knowknow.ru </p>

        <form method="post">
            <label>Как к Вам обращаться:</label>
            <input type='text' name='name' required/>
            <label>Email:</label>
            <input type='email' name='email' required/>
            <label>Ваш отзыв:</label>
            <textarea name='content' required rows="5"></textarea>
            <input type='submit' value='Отправить отзыв'/>
        </form>

        <dl>
            <? echo $dl; ?> <!-- PHP -->
        </dl>
			<a href="/">Назад на главную</a><br/>
			<a href="catalog.php">Посмотреть обучающие курсы</a>
        <br/><br/>
		</div>
    </div>
        <?php include "./footer.php"; ?>
</body>
</html>