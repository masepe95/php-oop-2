<?php
require_once __DIR__ . './products.php';
require_once __DIR__ . './category.php';
require_once __DIR__ . './food.php';
require_once __DIR__ . './toys.php';
require_once __DIR__ . './Misc.php';

$dogCategory = new Category('Cani', '&#128054;');
$catCategory = new Category('Gatti', '&#128049;');
$fishCategory = new Category('Pesci', '&#128031;');
$birdCategory = new Category('Uccelli', '&#128038;');

$foodProducts = [];

$foodProducts[] = new Food(
    $dogCategory,
    'Royal Canin Mini Adult',
    '€43,99',
    'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',
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
