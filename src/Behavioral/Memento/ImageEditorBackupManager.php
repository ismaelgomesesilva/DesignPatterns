<?php

namespace DesignPattern\Behavioral\Memento;

class ImageEditorBackupManager
{
    private $memento;

    public function __construct(private ImageEditor $imageEditor)
    {
    }

    public function Backup(): void
    {
        echo "Backup realizado\n";
        $this->memento[] = $this->imageEditor->save();
    }

    public function Undo(): void
    {
        $memento = array_pop($this->memento);

        if (is_null($memento)) {
            echo "No backups\n";
            return;
        }
        echo "Restore executado\n";
        $this->imageEditor->restore($memento);
    }

    public function ShowMementos(): void
    {
        print_r($this->memento);
    }
}
