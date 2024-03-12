<?php

class Item extends Product{
    public $type;

    public function __construct($_title, $_icon, $_price, $_img, $_category, $_type) {
        $this->type = $_type;
    }
}

?>