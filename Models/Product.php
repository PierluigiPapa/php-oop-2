<?php

trait Discount {
    protected $discountPercentage;

    public function setDiscountPercentage($percentage) {

        try { 
            if(!is_string($percentage)) {
                throw new Exception("Il prodotto non è scontato" );
            }
            
            $this->discountPercentage = $percentage;
            // var_dump($percentage);
        
        } catch (Exception $e) {
            echo "<pre class='text-danger fw-bold'>";              
            echo "Comunicazione: " . $e->getMessage();
            echo "</pre>";
        }
    }

    public function applyDiscount() {
        if ($this->discountPercentage) {
            $discountedPrice = $this->price - ($this->price * $this->discountPercentage / 100);
            return $discountedPrice;
        }
        return $this->price;
    }
}

class Product {
    use Discount;

    public $title;
    public $icon;
    public $price;
    public $img;
    public $category;
    public $type;

    public function __construct($_title, $_icon, $_price, $_img, $_category, $_type) {
        $this->title = $_title;
        $this->icon = $_icon;
        $this->price = $_price;
        $this->img = $_img;
        $this->category = $_category;
        $this->type = $_type;
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