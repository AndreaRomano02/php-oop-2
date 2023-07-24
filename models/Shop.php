<?php
require_once __DIR__ . '/Pets.php';

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
      if (!$pet || !$pet instanceof Pets) return;
      else $this->pets = $pets;
  }
}

$pet = new Pets('PROVA', 'gatto');
$pet2 = new Pets('PROVA 2', 'cane');

$test = new Shop('ciao', [$pet, $pet2]);
var_dump($test);
