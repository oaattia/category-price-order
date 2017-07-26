<?php


namespace AboutYou\Validations;

class Validation implements ValidationInterface
{

    /**
     * Validate the value
     *
     * @param $value
     * @param array $rules
     * @return array
     */
    public static function validate($value, array $rules) : array
    {
        $messages = [];

        foreach ($rules as $rule) {
            if (!((new $rule())->check($value))) {
                $messages[] = (new $rule())->message();
            }
        }

        return $messages;
    }
}