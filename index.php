<?php
include_once __DIR__ . '/models/Shop.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' />
  <title>E-Commerce</title>
</head>

<body>
  <h1 class="text-center my-3"><?= $pet_shop->getTitle(); ?></h1>

  <div class="container">
    <div class="row row-cols-3 g-3">
      <?php foreach ($products as $product) : ?>
        <div class="col">
          <div class="card">
            <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->getDescription() ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $product->getDescription() ?></h5>
              <div class="card-text">
                <p><?= $product->getType() ?></p>
                <p><?= $product->getPrice() ?></p>
                <?php if ($product instanceof Food) : ?>
                  <p><?= $product->getWeight() ?></p>
                  <p>
                    <?php foreach ($product->getIngredients() as $ingredient) : ?>
                      <span><?= $ingredient ?>,</span>
                    <?php endforeach ?>
                  </p>
                <?php elseif ($product instanceof Other) : ?>
                  <p><?= $product->getMaterials() ?></p>
                  <p><?= $product->getSize() ?></p>
                <?php elseif ($product instanceof Toys) : ?>
                  <p><?= $product->getFeature() ?></p>
                  <p><?= $product->getSize() ?></p>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>