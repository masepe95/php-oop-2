<?php
require_once __DIR__ . '/Models/category.php';
require_once __DIR__ . '/Models/products.php';
require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/toys.php';
require_once __DIR__ . '/Models/Misc.php';
require_once __DIR__ . '/Models/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP OOP 2 - Pets E-Commerce</title>
</head>

<body>
    <main class="p-4">
        <!-- PRODOTTI CIBO -->
        <h2 class="text-center">Cibo per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($foodProducts as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->category->name ?>
                        <?php echo $element->category->icon ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->productName ?></h5>
                        <img class="img-fluid" src="<?php echo $element->imgPath ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Tipo prodotto: <?php echo $element->type ?></p>
                        <p class="mb-0">Ingredienti: <?php echo $element->ingredients ?></p>
                        <p class="mb-1">Porzione: <?php echo $element->servingSize ?></p>
                        <p class="mb-1"> Prezzo: <?php echo $element->price ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- PRODOTTI GIOCHI -->
        <h2 class="text-center">Giochi per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($toyProducts as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->category->name ?>
                        <?php echo $element->category->icon ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->productName ?></h5>
                        <img class="img-fluid" src="<?php echo $element->imgPath ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Caratteristiche: <?php echo $element->features ?></p>
                        <p class="mb-0">Dimensioni: <?php echo $element->size ?></p>
                        <p class="mb-1"> Prezzo: <?php echo $element->price ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- PRODOTTI MISC -->
        <h2 class="text-center">Varie per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($miscProducts as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->category->name ?>
                        <?php echo $element->category->icon ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->productName ?></h5>
                        <img class="img-fluid" src="<?php echo $element->imgPath ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Materiale prodotto: <?php echo $element->material ?></p>
                        <p class="mb-0">Dimensioni: <?php echo $element->size ?></p>
                        <p class="mb-1"> Prezzo: <?php echo $element->price ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>