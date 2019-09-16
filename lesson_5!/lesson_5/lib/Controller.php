<?php

class Controller {

    private static $_instance = null;
    private $view;

    // приватный конструктор ограничивает реализацию getInstance ()
    private function __construct() {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->view = new \Twig\Environment($loader, [
            'cache' => 'templates/compilation_cache',
        ]);

        $this->view->addGlobal('menu', array(
            array('url' => '/', 'title' => 'Главная'),
            array('url' => '/catalog.php', 'title' => 'Обучение'),
            array('url' => '/contacts.php', 'title' => 'Контакты'),
            array('url' => '/gallery.php', 'title' => 'Галерея'),
            array('url' => '/calc.php', 'title' => 'Калькулятор'),
            array('url' => '/registration.php', 'title' => 'Регистрация'),
            array('url' => '/login.php', 'title' => 'Авторизация'),
        ));
    }

    // ограничивает клонирование объекта
    protected function __clone() {

    }

    static public function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function beforeAction ($params) {
        return true;
    }

    protected function render($name, $params=[]) {
        return $this->view-render($name.'.tpl', $params);
    }
}