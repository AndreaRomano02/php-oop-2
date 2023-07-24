<?php
class Product
{

  public $image = 'Nessuna Immagine';
  protected $description;
  protected $type;
  protected $price;

  public function __construct(String $description, String $type, String $price)
  {
    $this->setDescription($description);
    $this->setType($type);
    $this->setPrice($price);
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    if (!strlen($description)) return;
    $this->description = $description;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($currentType)
  {
    $types = require  __DIR__ . '/../data/types.php';
    if (!strlen($currentType)) return;
    foreach ($types as $type) {
      if (strtolower($type) === strtolower($currentType))
        $this->type = $type;
    }
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    if (!is_numeric($price)) return;
    $this->price = '€' .  number_format($price, 2);
  }
}
