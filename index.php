<?php
$title = "Главная";
$h1 = "О нас";
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
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

    <div class="slaider">
        <div class="slaider-text">
            KnowKnow — компания которая специализируется на HR-услугах для клиентов малого и среднего бизнеса и корпоративных клиентах
        </div>
    </div>
    <div class="content">
        <h1><?php echo $h1; ?></h1>
        <hr>
        <p style="text-align: left;"><strong>С 2008 года</strong> мы реализовали много проектов для клиентов МСБ из разных сфер: розничная и оптовая торговля, рекламные услуги, производство, рекрутинговые и страховые компании.</p>
        <p style="text-align: left;"><strong>В 2013 году </strong>официально появился бренд KnowKnow. К этому времени у клиентов появляется потребность получать качественную услугу в любое удобное время. И нами было выделено два направления:</p>
        <ul style="text-align: left;">
            <li><strong>HR-консультант</strong> - это комплекс услуг, разработанный специально для клиентов малого и среднего бизнеса, с учетом реальных потребностей и бюджетов</li>
            <li><strong>Дистанционный портал <a href="http://www.KnowKnow.ru" target="_blank">KnowKnow.ru</a></strong>, посвященный on-line обучению  по различным направлениям (вебинары, дистанционные курсы и бизнес-симуляции, дистанционный коучинг, тестирование и разработка бизнес-тренажеров)</li>
        </ul>
        <p style="text-align: left;"><strong>Мы решаем следующие задачи клиентов:</strong></p>
        <ul style="text-align: left;">
            <li>Повышение профессионализма сотрудников</li>
            <li>Правильный подбор команды</li>
            <li>Разработка системы мотивации, которая будет работать</li>
            <li>Увеличение прибыли за счет качественного обслуживания</li>
            <li>Разработка on-line инструментов по всем HR-направлениям различного уровня сложности</li>
        </ul>
        <p style="text-align: left;"><strong>В 2014 году</strong> запущен проект HR-консультант для клиентов Банков. За этот период мы оказали более 2000 тыс. услуг, связанных с HR-процессами для клиентов малого и среднего бизнеса, обсуживающихся в Банках.</p>
        <p style="text-align: left;"><strong>В 2015 году</strong> мы серьезно занялись <strong>Digital решениями для HR</strong> различной сложности и вывели это направление в отдельный проект.</p>
        <p style="text-align: left;"><strong>Наши sтренеры и эксперты</strong></p>
        <ul>
            <li style="text-align: left;">Сертифицированы по международным стандартам</li>
            <li style="text-align: left;">Знают теорию через практику</li>
            <li style="text-align: left;">Работают до конечного результата</li>
        </ul>
            </div>
    <?php include "./footer.php"; ?>
</body>
</html>
