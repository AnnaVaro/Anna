<?php
$menu = array(
    array('url' => '/', 'title' => 'Главная'),
    array('url' => '/catalog.php', 'title' => 'Обучение'),
    array('url' => '/contacts.php', 'title' => 'Контакты'),
    array('url' => '/gallery.php', 'title' => 'Галерея'),
    array('url' => '/calc.php', 'title' => 'Калькулятор')
);
?>
<ul class="mainmenu">
    <?php foreach ($menu as $item): ?>
        <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
