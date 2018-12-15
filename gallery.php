<?php
$title = "Галерея";
$h1 = "Галерея";
function gallery($id=null) {
    $link = mysqli_connect("127.0.0.1", "root", "", "anna");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    mysqli_set_charset($link, "utf8");

    if($id) {
        mysqli_query($link, "UPDATE gallery SET `likes`=`likes`+1 WHERE `id`=".mysqli_real_escape_string($link, $id));
        $result = mysqli_query($link, "SELECT `id`, `server_address`, `size`, `name`, `likes` FROM gallery WHERE `id`=".mysqli_real_escape_string($link, $id));
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($link);
        return $row;
    }
    else {

        $images = array();
        if ($result = mysqli_query($link, "SELECT `id`, `server_address`, `size`, `name`, `likes` FROM gallery ORDER BY likes")) {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $images[] = $row;
            }
            mysqli_free_result($result);
        }
    }
    mysqli_close($link);
    return $images;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <!-- Создание меню-->
        <header class="clearfix">
            <img src="images/knowknow1.png" class="logo">
            <?php include "./menu.php"; ?>
        </header>
    </div>

    <div class="slaider">
        <div class="slaider-text">
            KnowKnow — компания которая специализируется на HR-услугах для клиентов малого и среднего бизнеса и корпоративных клиентах
        </div>
    </div>
    <div class="content">
        <?php if (!empty($_GET['id'])):?>
            <?php $image=gallery($_GET['id'])?>
            <h1><?php echo $h1.' - '.$image['name']; ?></h1>
            <img src="<?php echo $image['server_address']; ?>" alt="<?php echo $image['name']; ?>"/>
            <div><?php echo $image['likes'];?></div>
        <?php else:?>
        <h1><?php echo $h1; ?></h1>
        <hr>
        <h2>Бизнес-завтрак «Эффективные прееговоры»</h2>
        <p>Переговорные поединки научат вас быстро искать выход из ситуации, ориентироваться в новой информации, принимать решения как можно быстрее и более взвешенно. А самое главное – поединок позволит вам хорошо провести время, отвлечься от насущных проблем и, тем не менее, принесет пользу.</p>

        <p>Формат проведения:</p>
        <ul>
            <li>подготовка к переговорам;</li>
            <li>sparring (отработка техник и методов ведения переговоров);</li>
            <li>получ ение обратной связи.</li>
        </ul>
        <div class="gallery">
        <?php foreach (gallery() as $image):?>
            <div class="gallery-item">
                <a href="/gallery.php?id=<?php echo $image['id']; ?>" target="_blank"><img src="<?php echo $image['server_address']; ?>" alt="<?php echo $image['name']; ?>"/></a>
            </div>
            <?php endforeach;?>
        </div>
        <?php endif;?>
    </div>
    <?php include "./footer.php"; ?>
</body>
</html>