<?php
class Product{
    protected $brand;
    protected $name;
    protected $animal;
    protected $price;
    protected $image;

    function __construct($_brand, $_name,  $_animal, $_price, $_image)
    {
        $this->brand = $_brand;
        $this->name = $_name;
        $this->animal = $_animal;
        $this->price = $_price;
        $this->image = $_image;
    }

    function getBrand()
    {
        return $this->brand;
    }
    function getName()
    {
        return $this->name;
    }
 
    function getAnimal()
    {
        return $this->animal;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getImage()
    {
        return $this->image;
    }
    /////////////////////////////////////////

    
    function setName($_name)
    {
        $this->name = $_name;
    }
    function setPrice($_price){
        $this->price = $_price;
    }  
}
?>