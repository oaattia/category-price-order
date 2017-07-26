<?php

namespace AboutYou\Tests;

use AboutYou\Sources\JsonSource;
use PHPUnit\Framework\TestCase;

class DataSourceTest extends TestCase
{

    private $json;


    public function setUp()
    {
        $this->json = new JsonSource();
    }


    public function test_if_data_source_is_valid_json_format()
    {
        $content = $this->json->set(file_get_contents("stubs/valid_json.json", true))->get();

        $this->assertArraySubSet(
            [
                "name" => "Clothes",
                "id" => 17325,
            ],
            $content
        );
    }


    /**
     * @expectedException \AboutYou\Exceptions\UnValidDataType
     */
    public function test_if_data_source_is_not_valid_json()
    {
        $this->json->set(file_get_contents("stubs/not_valid_json.json", true))->get();
    }


    public function test_if_data_source_file_not_passed_return_default_location()
    {
        $content = $this->json->get();

        $this->assertNotContains(
            [
                "name" => "Clothes",
                "id" => 17325,
            ],
            $content
        );
    }

}