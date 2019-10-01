<?php
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 01.10.2019
 * Time: 11:32
 */

require_once 'room.php';

class rectangle extends room{
    var $width;
    var $length;

    /**
     * rectangle constructor.
     * @param $width
     * @param $length
     */
    public function __construct(string $name,float $price,$width, $length)
    {
        $this->width = $width;
        $this->length = $length;
        parent::__construct($name,$price);
    }


    public function getArea():float{
        return $this->length * $this->width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    public function toHTML(){
        $name = $this->getName();
        $price = $this->getPrice();
        $length = $this->getLength();
        $width = $this->getWidth();
        $getArea = $this->getArea();
        return <<<ENDE
            <div class="product">
                <h1>$name</h1>
                <p>$price</p>
                <p>$length</p>
                <p>$width</p>
                <p>$getArea</p>
            </div>  
ENDE;
    }
}