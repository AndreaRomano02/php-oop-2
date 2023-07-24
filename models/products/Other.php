<?php
require_once __DIR__ . '/../Product.php';

class Other extends Product
{
  protected $materials;
  protected $size;

  public function __construct(String $description, String $type, String $price, String $materials, array $size)
  {
    parent::__construct($description, $type, $price);
    $this->setMaterials($materials);
    $this->setSize($size);
  }

  public function getMaterials()
  {
    return $this->materials;
  }
  public function setMaterials($materials)
  {
    if (!strlen($materials)) return;
    $this->materials = $materials;
  }

  public function setSize($size)
  {
    if (count($size) < 3) $this->size =  'ND';
    else  $this->size = "M: L $size[0] x P $size[1] x H $size[2] cm";
  }
  public function getSize()
  {
    return $this->size;
  }
}
