<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.08.2019
 * Time: 10:49
 */

class Nomenclature {
    public $margin = 10;
    public $profit = 0;
    public $products = array();

    private static $instance;  // Экземпляр объекта

    // Защищаем от создания через new Singleton
    private function __construct() { /* ... @return Singleton */ }

    // Защищаем от создания через клонирование
    private function __clone() { /* ... @return Singleton */ }

    // Защищаем от создания через unserialize
    private function __wakeup()  { /* ... @return Singleton */ }

    // Возвращает единственный экземпляр класса. @return Singleton
    public static function getInstance() {
        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function doAction() { }

    public function addProduct ($product) {
        array_push($this->products, $product);
    }

    public function calcProfit () {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum+= $product->calcFinalPrice();
        }
        $this->profit = $sum*$this->margin;
        return $this->profit;
    }
}

abstract class Product {
    public $name;
    public $price = 10;

    public function __construct($name) {
        $this->name = $name;
    }
}

class DigitalProduct extends Product {
    public function calcFinalPrice() {
        return $this->price/2;
    }
}

class NaturalProduct extends Product{
    public function calcFinalPrice() {
        return $this ->price;
    }
}

class WeightProduct extends Product {
    public $weight;
    public $count;
    public function calcFinalPrice() {
        return $this ->price * $this->weight * $this->count;
    }
}

$a = Nomenclature::getInstance();
$a->addProduct(new DigitalProduct('CRM'));
$a->addProduct(new DigitalProduct('CRM 2'));
$a->addProduct(new NaturalProduct('Table'));
$a->addProduct(new WeightProduct('Candy'));

echo $a->calcProfit();
