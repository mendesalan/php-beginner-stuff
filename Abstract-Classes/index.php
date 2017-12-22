<?php

/**
* 
*/
abstract class Shape // Abstract Class
{
	protected $color;	

	function __construct($color = 'red')
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	} 

	abstract public function getArea(); // Abstract method

}

/**
* 
*/
class Square extends Shape
{
	protected $legth = 4;

	public function getArea()
	{
		return pow($this->legth, 2);
	}	

}

/**
* 
*/
class Triangle extends Shape
{
	protected $base = 4;

	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}		
}

/**
* 
*/
class Circle extends Shape
{
	protected $radius = 5;
	public function getArea() // declare getArea() because it extends an abstract method, so it must be defined.
	{
		return M_PI * pow($this->radius, 2);
	}	
}


// echo (new Triangle('blue'))->getColor();
// echo (new Triangle('blue'))->getArea();

// echo (new Square('blue'))->getColor();
// echo (new Square('blue'))->getArea();

echo (new Circle)->getArea();