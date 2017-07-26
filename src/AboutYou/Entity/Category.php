<?php

namespace AboutYou\Entity;

class Category extends Entity
{

    /**
     * Id of the Category.
     *
     * @var int
     */
    public $id;

    /**
     * Name of the Category.
     *
     * @var string
     */
    public $name;

    /**
     * List of Products that belong to a Category.
     *
     * @var \AboutYou\Entity\Product[]
     */
    public $products = [];

    /**
     * Category constructor.
     * @param int $id
     * @param string $name
     * @param Product[] $products
     */
    public function __construct(int $id, string $name, array $products)
    {
        $this->id = $id;
        $this->name = $name;
        foreach ($products as $key => $product) {
            $this->products[] = new Product($key, $product['name'], $product['description'], $product['variants']);
        }
    }


}
