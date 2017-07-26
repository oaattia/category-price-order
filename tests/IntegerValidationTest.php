<?php


namespace AboutYou\Tests;

use AboutYou\Validations\Rules\IntegerRule;
use AboutYou\Validations\Rules\MinMaxRule;
use AboutYou\Validations\Validation;
use PHPUnit\Framework\TestCase;

class IntegerValidationTest extends TestCase
{
    public function test_if_test_valid_numeric()
    {
        $value = 123;

        $this->assertEmpty(
            Validation::validate(
                $value,
                [
                    new IntegerRule(),
                    new MinMaxRule()
                ]
            )
        );
    }
}