<?php
class Pets
{
  protected $description;
  protected $type;
  protected $price;
  protected $weight;
  protected $ingredients;

  public function __construct($description, $type)
  {
    $this->setDescription($description);
    $this->setType($type);
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
}
