<?php

use DesignPattern\Behavioral\Memento\ImageEditor;
use DesignPattern\Behavioral\Memento\ImageEditorBackupManager;

require "../../vendor/autoload.php";

$imageEditor = new ImageEditor("teste", "gif");
$imageEditorBackupManager = new ImageEditorBackupManager($imageEditor);
$imageEditorBackupManager->Backup();
print_r($imageEditor);

$imageEditor->convertFormatTo("png");
$imageEditorBackupManager->Backup();
print_r($imageEditor);

$imageEditor->convertFormatTo("tiff");
print_r($imageEditor);

$imageEditorBackupManager->ShowMementos();
$imageEditorBackupManager->Undo();
print_r($imageEditor);

$imageEditorBackupManager->ShowMementos();
$imageEditorBackupManager->Undo();
print_r($imageEditor);

$imageEditorBackupManager->ShowMementos();
$imageEditorBackupManager->Undo();
print_r($imageEditor);

$imageEditorBackupManager->ShowMementos();
print_r($imageEditor);
