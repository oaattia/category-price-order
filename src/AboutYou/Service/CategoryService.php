<?php

namespace AboutYou\Service;

use AboutYou\Repository\Repository;
use AboutYou\Validations\Rules\IntegerRule;
use AboutYou\Validations\Validation;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var Repository
     */
    private $repository;

    /**
     * CategoryService constructor.
     *
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * This method should read from a data source (JSON in our case)
     * and return an unsorted list of products found in the data source.
     *
     * @param integer $categoryId
     *
     * @return \AboutYou\Entity\Product[]
     */
    public function getProducts($categoryId) : array
    {
        $validationMessages = Validation::validate($categoryId, [
            new IntegerRule()
        ]);

        if(!empty($validationMessages)) {
            return $validationMessages;
        }

        return $this->repository->findById($categoryId);
    }
}