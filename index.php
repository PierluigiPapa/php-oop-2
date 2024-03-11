<?php

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Item.php';
include_once __DIR__ . '/Models/Category.php';

$dogCategory = new Category('Cani');
$catCategory = new Category('Gatti');
$fishCategory = new Category('Pesci');

$itemProduct = new Item('Prodotto');
$itemFood = new Item('Cibo');
$itemToy = new Item('Gioco');
$itemAquarium = new Item('Acquario');

$dogToy = new Product('Gioco con la corda', '<i class="fa-solid fa-dog"></i>', 5.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000', $dogCategory);
$dogFood = new Product('Croccantini','<i class="fa-solid fa-dog"></i>',45.90,'https://arcaplanet.vtexassets.com/arquivos/ids/224339/virtus-rustic-cane-adult.jpg?v=637454741677770000', $dogCategory);

$catToy = new Product('Peluche uccelli','<i class="fa-solid fa-cat"></i>', 7.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/285901/2474973329d5508cba2eaa88596d223f87392a6e_db7c5540b7e8cfe711b38d4fcf1decf5e2e4ac67--1-.jpg?v=638200168536230000', $catCategory);
$catFood = new Product('Scatoletta di pesce', '<i class="fa-solid fa-cat"></i>', 6.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/261928/expecial-multipack-kitten-sogliola-pesce-bianco.jpg?v=637655709538470000', $catCategory);

$fishAquarium = new Product('Acquario', '<i class="fa-solid fa-fish"></i>', 98.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258807/amtra-modern-tank-40-led.jpg?v=637599431023330000', $fishCategory);
$fishFood = new Product('Fiocchi per pesci rossi', '<i class="fa-solid fa-fish"></i>', 2.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/258048/next-pesci-rossi-fiocchi.jpg?v=637590012799600000', $fishCategory);

$products = [$dogToy, $dogFood, $catFood, $catToy, $fishAquarium, $fishFood];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- LINK FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-warning">
    <main class="container">
        <h1 class="text-center py-4 fw-bold">BOOLARCA</h1>
        <section class="row">
        <?php foreach ($products as $product) { ?>
            
            <div class="col-4 mb-5">
                <div class="card h-100 position-relative shadow"> 
                    <img src="<?php echo $product->img; ?>" class="card-img-top img-fluid">
                    
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <?php echo $product->title; ?>
                        </h5>
                        
                        <p class="text-center">
                            <?php echo $product->category->name; ?>
                        </p>
                        
                        <div class="position-absolute top-0 me-2 py-3 end-0"> 
                            <h6 class="card-subtitle">
                            <?php echo $product->icon; ?>
                            </h6>
                        </div>
                        
                        <div class="text-center">
                            <?php $product->setDiscountPercentage(10); ?>
                            <p class="mb-1"><s>Prezzo base: <?php echo number_format($product->getPrice(), 2); ?>&euro;</s></p>
                            <p class="mb-0">Prezzo scontato: <?php echo number_format($product->getDiscountedPrice(), 2); ?>&euro;</p>
                            <button type="button" class="btn btn-dark my-3">Acquista <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php } ?>
    </main>

<!-- LINK BOOTSTRAP - JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>