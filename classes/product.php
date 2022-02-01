<?php  
class product{
    private $name;
    private $brand;
    private $price;

    public function __construct($_name, $_brand, $_price)
    {
        $this->addName($_name);
        $this->addBrand($_brand);
        $this->addPrice($_price);
    }

    public function getName()
    {
        return $this->name;
    }

    public function addName($_name)
    {
        $this->name = $_name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function addBrand($_brand)
    {
        $this->brand = $_brand;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function addPrice($_price)
    {
        $this->price = $_price;
    }
}
?>