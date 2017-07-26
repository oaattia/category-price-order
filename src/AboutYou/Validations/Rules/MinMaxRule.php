<?php


namespace AboutYou\Validations\Rules;


class MinMaxRule implements Rule
{
    public function check($value) : bool
    {
        if (strlen($value) < 2 || strlen($value) >= 12) {
            return false;
        }

        return true;
    }

    /**
     * Return error messages
     *
     * @return string
     */
    public function message() : string
    {
        return "min 2 characters and max 12";
    }
}