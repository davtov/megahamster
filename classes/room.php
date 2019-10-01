<?php
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 17.09.2019
 * Time: 12:49
 */
class room{
    protected $name;
    protected $price;
    public function __construct($name, $price){
        $this->name=$name;
        $this->price=$price;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
    public function __toString()
    {
        return $this->getName()." ".$this->getPrice();
    }

    public function toHTML(){
        $name = $this->getName();
        $price = $this->getPrice();
        return <<<ENDE
            <div class="product">
                <h1>$name</h1>
                <p>$price</p>
            </div>  
ENDE;
    }
}
