<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/toys.php';
require_once __DIR__ . '/Misc.php';

$dogCategory = new Category('Cani', '&#128054;');
$catCategory = new Category('Gatti', '&#128049;');
$fishCategory = new Category('Pesci', '&#128031;');
$birdCategory = new Category('Uccelli', '&#128038;');

$foodProducts = [];

$foodProducts[] = new Food(
    $dogCategory,
    'Royal Canin Mini Adult',
    '€43,99',
    'data:image/jpeg;base64,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',
    'Secco',
    'Prosciutto, riso',
    '545gr'
);

$foodProducts[] = new Food(
    $dogCategory,
    'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
    '€44,99',
    'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
    'Secco',
    'Manzo, cereali',
    '600gr'
);

$foodProducts[] = new Food(
    $catCategory,
    'Almo Nature Cat Daily Lattina',
    '34,99',
    'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
    'Umido',
    'tonno, pollo, prosciutto',
    '400gr'
);

$foodProducts[] = new Food(
    $fishCategory,
    'Mangime per Pesci Guppy in Fiocchi',
    '€2,95',
    'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
    'Granuli',
    'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe',
    '30gr'
);

$miscProducts = [];

$miscProducts[] = new Misc(
    $birdCategory,
    'Voliera Wilma in Legno',
    '€184,99',
    'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
    'Legno',
    'L83 x P67 x H153 cm'
);

$miscProducts[] = new Misc(
    $fishCategory,
    'Cartucce Filtranti per Filtro EasyCrystal',
    '€2,29',
    'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
    'Materiale espanso',
    'Non Disponibili'
);

$toyProducts = [];

$toyProducts[] = new Toy(
    $dogCategory,
    'Kong Classic',
    '€13,49',
    'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
    'Galleggia e rimbalza',
    '8cm x 10cm'
);

$toyProducts[] = new Toy(
    $catCategory,
    'Topini di peluche Trixie',
    '€4,99',
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'Morbido con codina in corda',
    '8cm x 10cm'
);
