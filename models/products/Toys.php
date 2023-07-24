<?php
require_once __DIR__ . '/../Product.php';

class Toys extends Product
{
  protected $feature;
  protected $size;

  public function __construct(String $description, String $type, String $price, String $feature, array $size)
  {
    parent::__construct($description, $type, $price);
    $this->setFeature($feature);
    $this->setSize($size);
  }

  public function getFeature()
  {
    return $this->feature;
  }
  public function setFeature($feature)
  {
    if (!strlen($feature)) return;
    $this->feature = $feature;
  }

  public function setSize($size)
  {
    if (count($size) < 1) return;
    $this->size = "$size[0] cm x $size[1] cm";
  }
  public function getSize()
  {
    return $this->size;
  }
}
