<?php
namespace David\Megahamster;
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 24.09.2019
 * Time: 13:01
 */

require_once 'room.php';

class octagon extends room{
    protected $sidelength;

    /**
     * octagon constructor.
     * @param $sidelength
     */
    public function __construct(string $name,float $price,float $sidelength, string $special_equipment)
    {
        $this->sidelength = $sidelength;
        parent::__construct($name,$price,$special_equipment);

    }

    public function getArea():float{
        return 2*$this->sidelength * $this->sidelength *(1+sqrt(2));
    }

    /**
     * @return float
     */

    public function getSidelength():float{
        return $this->sidelength;
    }

    public function getSpecialEquipment():string
    {
       return $this->special_equipment;
    }

    public function toHTML(){
        $name = $this->getName();
        $price = $this->getPrice();
        $sidelength = $this->getSidelength();
        $getArea = number_format($this->getArea(),2);
        $special_equipment = $this->getSpecialEquipment();
        return <<<ENDE
            <div class="product">
                <h1>$name</h1>
                <p>Price: $price €</p>
                <p>Sidelength: $sidelength cm</p>
                <p>Area: $getArea cm2</p>
                <p>Special Equipment: $special_equipment</p>
            </div>  
ENDE;
    }



}