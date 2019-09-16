<?php
CONST PHOTO_PATH = 'images';
CONST PHOTO_SMALL_PATH = 'img';

// авто-загрузчик Twig-а
require_once 'Twig/Auto.php';
Twig_Auto::register();

try {
    // хранилище шаблонов
    $loader = new Twig_Loader_Filesystem('template');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('footer.tmpl');

    // Список фотографий
    $photos_in_dir = array_slice(scandir(PHOTO_PATH), 2);

    // передаём переменные и значения в шаблон
    // выводим сформированное содержание
    //echo print_r($photos_in_dir);
    echo $template->render(array(
        'title' => 'Список фотографий мероприятий',
        'path_to_photo_small' => PHOTO_SMALL_PATH,
        'photos' => $photos_in_dir
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    </title>Фото мероприятий</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>ГАЛЕРЕЯ</h1>
</header>


<div class="images">
    <?php for ($i=0; $i < count($images); $i++) : ?> // Перебираем все файлы
        <a href="image.php?photo=<?=$images[$i] ?>">
            <img src="<?=PHOTO_SMALL.$images[$i] ?>">
        </a>
    <?php endfor; ?>
</div>

<div class="add_foto">
    <form action="" method="POST" enctype="multipart/form-data">
        <span> <b>Добавить файл: </b> </span>
        <input type="file" name="userfile">
        <button type="submit" name="send">ЗАГРУЗИТЬ</button> <br>
        <span><?=$message?></span>
    </form>
</div>

</body>
</html>