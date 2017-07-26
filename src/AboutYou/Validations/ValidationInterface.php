<?php

namespace AboutYou\Validations;


interface ValidationInterface
{
    public static function validate($value, array $rules) : array;
}