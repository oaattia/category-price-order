<?php

namespace AboutYou\Sources;


interface Source
{

    /**
     * Get the default data Source location
     *
     * @return string
     */
    public function getFileLocation();

    /**
     * @param string $fileName
     * @return Source
     */
    public function set(string $fileName) : Source;

    /**
     * @return array
     */
    public function get() : array;
}