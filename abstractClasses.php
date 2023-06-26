<?php
abstract class AbstractClass 
{
    abstract public function getValue();

    public function printValue()
    {
        echo 'Value: ' . $this->getValue();
    }
}

class ClassA extends AbstractClass 
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue() 
    {
        return $this->value;
    }
}

$objectA = new ClassA('interesting property');
$objectA->printValue();

class A {
    public static $x;
    public static function getX() 
    {
        return self::$x;
    }
    public static function test(int $x) 
    {
        return 'x = ' . $x;
    }
}

echo '<br>';
echo A::test(5);
A::$x = 5;
$a = new A();
var_dump($a->getX());

class User 
{
    private $role;
    private $name;
    
    public function __construct(string $role, string $name) 
    {
        $this->role = $role;
        $this->name = $name;
    }

    public static function createAdmin(string $name) 
    {
        return new self('admin', $name);
    }
}

$admin = User::createAdmin('John');

class Human 
{
    private static $count = 0;
    public function __construct() 
    {
        self::$count++;
    }
    public static function getCount() 
    {
        return self::$count;
    }
}

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
$human4 = new Human();

echo '<br>';
echo 'People are ' . Human::getCount();