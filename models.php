<?php

class Product {

    
    public $title;
    public $description;
    public $qty;
    public $image;

    //public $price = '67';
    //public $discount = '34';

    function getDiscountedPrice() {
        //return $this->price - $this->discount;
        return $this->qty * 2;
    }


    function __construct($p) {
        $this->title = $p->title;
        $this->description = $p->description;
        $this->qty = $p->qty;
        $this->image = $p->image;
}
    /*
    private $productTitle;

    function getProductTitle() {
        return $this->productTitle;
    }
    */



}

$pr = $x = new stdClass();
$pr->title = "iPhone";
$pr->price = 11;
$pr->description = "xxx";
$pr->image = "xxx";

$p = new Product($pr);

var_dump($p);
