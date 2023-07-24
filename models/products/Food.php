<?php
require_once __DIR__ . '/../Product.php';

class Food extends Product
{
  protected $weight;
  protected $ingredients = [];

  public function __construct(String $description, String $type, String $price, String $weight, array $ingredients)
  {
    parent::__construct($description, $type, $price);
    $this->setWeight($weight);
    $this->setIngredients($ingredients);
  }

  public function getWeight()
  {
    return $this->weight;
  }
  public function setWeight($weight)
  {
    if (!strlen($weight) || !is_numeric($weight) || $weight <= 0) return;
    $this->weight = $weight . 'g';
  }

  public function setIngredients($ingredients)
  {
    if (!$ingredients) return;
    $this->ingredients = $ingredients;
  }
  public function getIngredients()
  {
    return $this->ingredients;
  }
}
