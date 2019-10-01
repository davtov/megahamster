<?php
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 24.09.2019
 * Time: 13:01
 */

require_once 'room.php';

class octagon extends room{
    var $sidelength;

    /**
     * octagon constructor.
     * @param $sidelength
     */
    public function __construct(string $name,float $price,float $sidelength)
    {
        $this->sidelength = $sidelength;
        parent::__construct($name,$price);

    }

    public function getArea():float{
        return 2*$this->sidelength * $this->sidelength *(1+sqrt(2));
    }

    /**
     * @return float
     */

    public function getSidelength(): float
    {
        return $this->sidelength;
    }

    public function toHTML(){
        $name = $this->getName();
        $price = $this->getPrice();
        $sidelength = $this->getSidelength();
        $getArea = $this->getArea();
        return <<<ENDE
            <div class="product">
                <h1>$name</h1>
                <p>$price</p>
                <p>$sidelength</p>
                <p>$getArea</p>
            </div>  
ENDE;
    }



}