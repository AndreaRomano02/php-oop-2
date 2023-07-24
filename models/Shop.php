<?php
require_once __DIR__ . '/Product.php';
include_once __DIR__ . '/products/Food.php';
include_once __DIR__ . '/products/Toys.php';
include_once __DIR__ . '/products/Other.php';

class Shop
{
  protected $title;
  protected $pets = [];

  public function __construct(String $title, array $pets)
  {
    $this->setTitle($title);
    $this->setPets($pets);
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    if (!strlen($title)) return;
    $this->title = $title;
  }

  public function getPets()
  {
    return $this->pets;
  }

  public function setPets($pets)
  {
    foreach ($pets as $pet)
      if (!$pet || !$pet instanceof Product) return;
      else $this->pets = $pets;
  }
}

$pet = new Product('PROVA', 'gatto', 10);
$pet2 = new Food('PROVA 2', 'cane', 10, 300, ['pane', 'pasta']);
$pet3 = new Toys('PROVA 3', 'cane', 10, 'Gommoso e soffice', [8.5, 10]);
$pet4 = new Other('PROVA 4', 'cane', 10, 'Materiale espanso', [10, 5, 25]);

$test = new Shop('ciao', [$pet, $pet2, $pet3, $pet4]);
var_dump($test);
