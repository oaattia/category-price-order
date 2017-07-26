<?php


namespace AboutYou\Sources;


use AboutYou\Exceptions\UnValidDataType;

class JsonSource implements Source
{

    /**
     * @var
     */
    protected $content;


    /**
     * Get the default data source location
     *
     * @return string
     */
    public function getFileLocation()
    {
        return 'data/17325.json';
    }


    /**
     * set the fileContent
     *
     * @param string $fileContent
     * @return Source
     * @throws UnValidDataType
     */
    public function set(string $fileContent) : Source
    {
        if (json_decode($fileContent, true) == null) {
            throw new UnValidDataType("Not a valid json file");
        }

        $this->content = json_decode($fileContent, true);

        return $this;
    }

    /**
     * Get file content in array
     *
     * @return array
     */
    public function get() : array
    {
        return $this->content ?? json_decode($this->returnDefaultDataSourceContent(), true);
    }

    /**
     * Return default content location from the default file
     *
     * @return string
     */
    protected function returnDefaultDataSourceContent(): string
    {
        return file_get_contents($this->getFileLocation(), true);
    }
}