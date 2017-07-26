<?php

namespace AboutYou\Tests;

use AboutYou\Entity\Category;
use AboutYou\Repository\CategoryRepository;
use AboutYou\Service\CategoryService;
use AboutYou\Sources\JsonSource;
use PHPUnit\Framework\TestCase;

class CategoryServiceTest extends TestCase
{

    private $source;

    public function setUp()
    {
        $this->source = (new JsonSource())->set(file_get_contents("stubs/valid_json.json", true))->get();
    }

    public function test_if_we_pass_category_id_we_get_the_products()
    {
        $categoryService = new CategoryService(
            new CategoryRepository(new Category($this->source['id'], $this->source['name'], $this->source['products']))
        );
        $categories = $categoryService->getProducts(17325);

        $this->assertCount(2, $categories);
        $this->assertNotEmpty($categories);
    }


    public function test_if_we_passing_wrong_category_id_we_get_null()
    {
        $categoryService = new CategoryService(
            new CategoryRepository(new Category($this->source['id'], $this->source['name'], $this->source['products']))
        );
        $categories = $categoryService->getProducts(1);
        $this->assertEmpty($categories);
    }


    public function test_if_category_id_not_valid()
    {
        $categoryService = new CategoryService(
            new CategoryRepository(new Category($this->source['id'], $this->source['name'], $this->source['products']))
        );
        $categories = $categoryService->getProducts("string");
        $this->assertEquals($categories, ["not valid number not valid"]);
    }


}
