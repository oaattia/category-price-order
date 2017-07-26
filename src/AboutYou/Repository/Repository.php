<?php


namespace AboutYou\Repository;


/**
 * Class Repository
 * @package AboutYou\Repository
 */
interface Repository
{
    /**
     * find all by the id
     *
     * @param int $id
     * @return array $items
     */
    public function findById(int $id) : array;
}