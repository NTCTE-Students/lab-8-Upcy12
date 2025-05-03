<?php

abstract class Document {
    abstract public function save($name);
}

class PDFDocument extends Document{
    public function save($name){
        print("Файл '{$name}.pdf' был сохранен!<br>");
    }
}

class WordDocument extends Document{
    public function save($name){
        print("Файл '{$name}.docx' был сохранен!<br>");
    }
}

class ExcelDocument extends Document{
    public function save($name){
        print("Файл '{$name}.xlsx' был сохранен!<br>");
    }
}

$Documents = [new PDFDocument(), new WordDocument(), new ExcelDocument()];

foreach($Documents as $document){
    $document ->save('Work');
}