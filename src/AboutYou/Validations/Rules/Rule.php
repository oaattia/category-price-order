<?php

namespace AboutYou\Validations\Rules;


interface Rule
{
    /**
     * @param $value
     * @return bool
     */
    public function check($value) : bool;

    /**
     * Return error message
     *
     * @return string
     */
    public function message() : string;
}