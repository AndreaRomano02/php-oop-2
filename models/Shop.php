<?php
require_once __DIR__ . '/Pets.php';

class Shop
{
  protected $title;
  protected $pets;

  public function __construct($title, $pets)
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
    if (!$pets) return;
    $this->pets = $pets;
  }
}

$pet = new Pets('PROVA', 'gatto');

$test = new Shop('ciao', $pet);
var_dump($test);
