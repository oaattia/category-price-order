<?php

namespace AboutYou\Repository;

use AboutYou\Entity\Category;

class CategoryRepository implements Repository
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @inheritdoc
     */
    public function findById(int $categoryId) : array
    {
        if( $this->category->id == $categoryId ) {
            return  $this->category->products;
        }

        return [];
    }
}