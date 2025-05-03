<?php

trait TimeStampable{
    public $createdAt;
    public $updatedAt;

    public function setCreatedAt($date){
        $this->createdAt = $date;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setUpdatedAt($date){
        $this->UpdatedAt = $date;
    }
    public function getUpdatedAt(){
        return $this->UpdatedAt;
    }
}

class post{
    use TimeStampable;
}
class comment{
    use TimeStampable;
}

$post = new post();
$post -> setCreatedAt('04.04.2025 12:06');
$post -> setUpdatedAt(date('d.m.Y H:i'));
print("пост был опубликован: {$post->getCreatedAt()} и обновлен {$post->getUpdatedAt()}<br>");

$comment = new comment();
$comment -> setCreatedAt('04.04.2025 16:00');
$comment -> setUpdatedAt(date('d.m.Y H:i'));
print("пост был опубликован: {$post->getCreatedAt()} и обновлен {$post->getUpdatedAt()}<br>");