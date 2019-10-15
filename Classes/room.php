<?php
namespace David\Megahamster;

/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 17.09.2019
 * Time: 12:49
 */
abstract class room{
    protected $name;
    protected $price;
    protected $special_equipment;
    public function __construct(string $name,float  $price, string $special_equipment){
        $this->name=$name;
        $this->price=$price;
        $this->special_equipment=$special_equipment;
    }
    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
    /**
     * @return float
     */
    public function getPrice():float
    {
        return $this->price;
    }
    public function __toString() :string
    {
        return $this->getName()." ".$this->getPrice();
    }

    /**
     * @return mixed
     */
    public function getSpecialEquipment():string
    {
        return $this->special_equipment;
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
