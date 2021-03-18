<?php

namespace DesignPattern\Behavioral\Memento;

use DateTime;

class ConcreteMemento implements Memento
{

    public function __construct(private DateTime $date, private string $name, private string $filePath, private string $fileFormat)
    {
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of fileFormat
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Get the value of filePath
     */
    public function getFilePath()
    {
        return $this->filePath;
    }
}
