<?php


namespace AboutYou\Entity;


use AboutYou\Sources\Source;

abstract class Entity
{
    /**
     * @var Source
     */
    protected $source;

    /**
     * Entity constructor.
     * @param Source $source
     */
    public function __construct(Source $source)
    {
        $this->source = $source;
    }


}