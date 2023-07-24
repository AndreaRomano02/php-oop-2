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
