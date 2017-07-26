<?php

namespace AboutYou\Entity;


class Variant
{
    /**
     * Id of the Variant.
     *
     * @var int
     */
    public $id;

    /**
     * Defines if the Variant is default for the product.
     *
     * @var bool
     */
    public $isDefault;

    /**
     * Defines if the Variant is Available or not.
     * 
     * @var bool
     */
    public $isAvailable;

    /**
     * Number of available items in stock.
     *
     * @var int
     */
    public $quantity;

    /**
     * Size of the Variant.
     *
     * @var mixed
     */
    public $size;

    /**
     * Variant price.
     * 
     * @var \AboutYou\Entity\Price
     */
    public $price;


    /**
     * Variant constructor.
     * @param int $id
     * @param bool $isDefault
     * @param bool $isAvailable
     * @param int $quantity
     * @param string $size
     * @param Price $price
     */
    public function __construct(int $id, bool $isDefault, bool $isAvailable, int $quantity, string $size, Price $price)
    {
        $this->id = $id;
        $this->isDefault = $isDefault;
        $this->isAvailable = $isAvailable;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->price = $price;
    }
}
