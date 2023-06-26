<?php
interface CalculateSquare 
{
    public function calculateSquare(): float; 
}

class Rectangle implements CalculateSquare
{
    private $x;
    private $y;

    public function __construct(int $x, int $y) 
    {
      $this->x = $x;
      $this->y = $y;  
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare 
{
    private $x;

    public function __construct(int $x) 
    {
      $this->x = $x;  
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Circle implements CalculateSquare 
{
    const PI = 3.1416;
    private $r;

    public function __construct(int $r) 
    {
      $this->r = $r;  
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

$circle1 = new Circle(3);

var_dump($circle1 instanceof Circle);
var_dump($circle1 instanceof CalculateSquare);
echo '<br>';

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5)
];

foreach ($objects as $object) {
    if ($object instanceof CalculateSquare) {
        echo 'The object: ' . get_class($object) . ' implements the CalculateSquare interface. The square: ' . $object->calculateSquare();
        echo '<br>';
    }
}

class A 
{
    public function method1() 
    {
        return $this->method2();
    }
    protected function method2()
    {
        return 'A';
    }
}

class B extends A 
{
    protected function method2()
    {
        return 'B';
    }
}

$b = new B();

echo $b->method1();