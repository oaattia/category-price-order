<?php

namespace AboutYou\Entity;


class Price
{
    /**
     * Current price.
     *
     * @var int
     */
    public $current;

    /**
     * Old price.
     *
     * @var int|null
     */
    public $old;

    /**
     * Defines if the price is sale.
     *
     * @var bool
     */
    public $isSale;


    /**
     * Price constructor.
     * @param int $current
     * @param int|null $old
     * @param bool $isSale
     */
    public function __construct(int $current, $old, bool $isSale)
    {
        $this->current = $current;
        $this->old = $old;
        $this->isSale = $isSale;
    }
}
