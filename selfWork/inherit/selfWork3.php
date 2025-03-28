<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
        print("$this->title - произведение, написанноая $this->author на $this->pages страниц.<br>");
    }
}

class Article extends Material {
    public $type;

    public function __construct($title, $author, $type) {
        parent::__construct($title, $author);
        $this->type = $type;
        print("$this->title - статья, написанная $this->author в $this->type виде.<br>");
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
        print("'$this->title' - видео, записанное $this->author и его продолжительность $this->duration мин.<br>");
    }
}

$book = new Book('война и мир', 'Толстой Л.Н.', 1440);

$article = new Article('большая война в городе', 'Александр К.Л.', 'электронный');

$video = new Video('Европа против арабов','ucSpaceTeam', 32);