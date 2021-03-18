<?php

namespace DesignPattern\Behavioral\Memento;

use DateTime;

class ImageEditor
{
    public function __construct(private string $filePath, private string $fileFormat)
    {
    }

    public function convertFormatTo(string $format): void
    {
        $this->fileFormat = $format;
        $this->filePath = explode(".", $this->filePath)[0] . "." . $format;
    }

    function save(): Memento
    {
        $date = new DateTime();

        return new ConcreteMemento($date, $date->getTimestamp(), $this->filePath, $this->fileFormat);
    }

    function restore(ConcreteMemento $memento)
    {
        $this->fileFormat = $memento->getFileFormat();
        $this->filePath = $memento->getFilePath();
    }
}
