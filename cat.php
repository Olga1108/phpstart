<?php
class Cat
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'Hello. My name is ' . $this->name . '!';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$cat1 = new Cat('Snow');
$cat2 = new Cat('Barsik');
// $cat1->name = 'Snow';
// $cat2->name = 'Barsik';
// $cat1->color = 'white';
// $cat1->weight = 4;

var_dump($cat1);

$cat1->sayHello();
$cat1->setName('Markis');
$cat1->sayHello();
$cat2->sayHello();

class Post 
{
    protected $title;
    protected $text;

    public function __construct(string $title, string $text)
    {
      $this->title = $title;
      $this->text = $text;  
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title): void 
    {
        $this->title = $title;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text): void 
    {
        $this->text = $text;
    }
}

class Lesson extends Post 
{
    private $homework;

    public function __construct(string $title, string $text, string $homework) 
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public function getHomework() 
    {
        return $this->homework;
    }

    public function setHomework($homework): void 
    {
        $this->homework = $homework;
    }
}

$lesson = new Lesson('Math', 'I love Math', 'New Topic and tasks');
echo 'Subject: ' . $lesson->getTitle();