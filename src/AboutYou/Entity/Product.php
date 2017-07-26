<?php

namespace AboutYou\Entity;


class Product
{
    /**
     * Id of the Product.
     *
     * @var int
     */
    public $id;

    /**
     * Name of the Product.
     *
     * @var string
     */
    public $name;

    /**
     * Description of the Product.
     *
     * @var string
     */
    public $description;

    /**
     * Unsorted list of Variants with their corresponding prices.
     *
     * @var \AboutYou\Entity\Variant[]
     */
    public $variants = [];

    /**
     * Product constructor.
     * @param int $id
     * @param string $name
     * @param string $description
     * @param array $variants
     */
    public function __construct(int $id, string $name, string $description, array $variants)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        foreach ($variants as $key => $variant) {
            $this->variants[] = new Variant(
                $key,
                $variant['isDefault'],
                $variant['isAvailable'],
                $variant['quantity'],
                $variant['size'],
                new Price($variant['price']['current'], $variant['price']['old'], $variant['price']['isSale'])
            );
        }
    }


}
