<?php
include_once __DIR__ . '/models/Shop.php';


$product1 = new Food('Royal Canin Mini Adult', 'cane', 43.99, 545, ['Prosciutto', 'Riso']);
$product1->image = 'https://images-ext-1.discordapp.net/external/OMX-U3jqj53vaKY4QlWSrVg83Pi4MINFPcWt1V1t818/%3Fw%3D201%26h%3D202%26c%3D7%26r%3D0%26o%3D5%26dpr%3D1.5%26pid%3D1.7/https/th.bing.com/th/id/OIP.C3zzw1OWmJVUd4Xde8jCQgHaHa';

$product2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno E riso', 'cane', 44.99, 600, ['Manzo', 'Cereali']);
$product2->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';

$product3 = new Food('Almo Nature Cat Daily Lattina', 'gatto', 34.99, 400, ['Tonno', 'Pollo', 'Prociutto']);
$product3->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg';

$product4 = new Food('Mangime per Pesci Guppy in Fiocchi', 'pesce', 2.95, 30, ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);
$product4->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg';

$product5 = new Other('Voliera Wilma in Legno', 'uccello', 184.99, 'Legno', [83, 67, 153]);
$product5->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg';

$product6 = new Other('Cartucce Filtranti per Filtro EasyCrystal', 'pesce', 2.29, 'Materiale espanso', []);
$product6->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg';

$product7 = new Toys('Kong Classic', 'cane', 13.49, 'Galleggia e rimbalza', [8.5, 10]);
$product7->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg';

$product8 = new Toys('Topini di peluche Trixie', 'gatto', 4.99, 'Morbido con codina in corda', [8.5, 10]);
$product8->image = 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg';

$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8];

$pet_shop = new Shop('PET SHOP', $products);

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