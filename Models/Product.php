<?php

// Definizione del trait Discount
trait Discount {
    protected $discountPercentage;

    public function setDiscountPercentage($percentage) {
        $this->discountPercentage = $percentage;
    }

    public function applyDiscount() {
        if ($this->discountPercentage) {
            $discountedPrice = $this->price - ($this->price * $this->discountPercentage / 100);
            return $discountedPrice;
        }
        return $this->price;
    }
}

// Definizione della classe Product con l'utilizzo del trait Discount
class Product {
    use Discount;

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

    public function getProductInfo(): string {
        return $this->title . ', ' . $this->icon . ', ' . $this->category->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDiscountedPrice() {
        return $this->applyDiscount();
    }
}
?>