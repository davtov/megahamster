<?php
namespace David\Megahamster;

/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 01.10.2019
 * Time: 11:32
 */

require_once 'room.php';

class rectangle extends room{
    protected $width;
    protected $length;

    /**
     * rectangle constructor.
     * @param $width
     * @param $length
     */
    public function __construct(string $name,float $price,float $width,float $length, string $special_equipment)
    {
        $this->width = $width;
        $this->length = $length;
        parent::__construct($name,$price,$special_equipment);
    }


    public function getArea():float{
        return $this->length * $this->width;
    }

    /**
     * @return mixed
     */
    public function getWidth():float
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getLength():float
    {
        return $this->length;
    }

    /**
     * @return array
     */
    public function getSpecialEquipment():string
    {
        return $this->special_equipment;
    }


    public function toHTML(){
        $name = $this->getName();
        $price = $this->getPrice();
        $length = $this->getLength();
        $width = $this->getWidth();
        $getArea = $this->getArea();
        $special_equipment = $this->getSpecialEquipment();
        return <<<ENDE
            <div class="product">
                <h1>$name</h1>
                <p>Price: $price €</p>
                <p>Length: $length cm</p>
                <p>Width: $width cm</p>
                <p>Area: $getArea cm2</p>
                <p>Special Equipment: $special_equipment</p>
            </div>  
ENDE;
    }
}