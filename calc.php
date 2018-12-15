<?php
$title = "Калькулятор";
$h1 = "Калькулятор";
$result = require __DIR__ . '/formula.php';
?>
<!DOCTYPE html>
<html lang="en">
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
            Калькулятор - поможет быстро рассчитать стоимость, выбранного обучения
        </div>
    </div>

    <h1><?php echo $h1; ?></h1>
    <hr>
    <div class="content">
        <form action="/calc.php" method="get">
            <input type="text" name="x1">
            <select name="operation">
                <option value="+">сложение</option>
                <option value="-">разность</option>
                <option value="*">умножение</option>
                <option value="/">деление</option>
            </select>
            <input type="text" name="x2">
            <input type="submit" value="Посчитать"> <br/><br/>
            Результат: <?= $result ?>
        </form>
    </div>
    <br style="clear: both;" />
</div>
<?php include "./footer.php"; ?>
</body>
</html>
