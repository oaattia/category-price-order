<?php


namespace AboutYou\Validations\Rules;


class IntegerRule implements Rule
{
    public function check($value) : bool
    {
        if (is_int($value)) {
            return true;
        }

        return false;
    }

    /**
     * Return error messages
     *
     * @return string
     */
    public function message() : string
    {
        return "not valid number not valid";
    }
}