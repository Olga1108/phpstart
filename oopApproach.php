<?php
class User 
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Cat 
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Article 
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}

$author = new User('Bill');
$cat = new Cat('Pushok');
$article = new Article('Great', 'Interesting text', $author);

class Admin extends User 
{

}

$author1 = new Admin('Felix');
$article1 = new Article('Great title', 'Interesting new text', $author1);

var_dump($article1);