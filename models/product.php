<?php

    class Product {
        public $title;
        public $icon;
        public $price;
        public $img;
        public $category;

        public function __construct($_title, $_icon, $_price, $_img, $_category) {
            $this->title = $_title;
            $this->icon = $_icon;
            $this->price = $_price;
            $this->img = $_img;
            $this->category = $_category;
        }

        public function getProductInfo(): string{
            return $this->title . ' , ' . $this->icon. ' , ' . $this->category->name;
        }


        public function getPrice() {
            return $this->price;
        }
    }
?>

