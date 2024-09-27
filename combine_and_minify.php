<?php
// Se você não precisar de bibliotecas externas, pode remover a linha abaixo
// require 'vendor/autoload.php'; 

// Diretório de produção
$productionDir = 'production';
$imagesDir = 'assets/imagens';
$productionImagesDir = "$productionDir/images";

// Criar a pasta 'production' caso não exista
if (!file_exists($productionDir)) {
    mkdir($productionDir, 0777, true);
}

// Criar a pasta de imagens na produção caso não exista
if (!file_exists($productionImagesDir)) {
    mkdir($productionImagesDir, 0777, true);
}

// --- 1. Minificação de CSS ---
$cssFiles = [
    'assets/css/header.css',
    'assets/css/main.css',
    'assets/css/about.css',
    'assets/css/factory.css',
    'assets/css/quality.css',
    'assets/css/references.css',
    'assets/css/footer.css'
];

$combinedCSS = '';
foreach ($cssFiles as $file) {
    if (file_exists($file)) {
        $combinedCSS .= file_get_contents($file) . "\n";
    } else {
        echo "Arquivo CSS não encontrado: $file\n";
    }
}

$minifiedCSS = preg_replace('/\s+/', ' ', $combinedCSS);
file_put_contents("$productionDir/combined.min.css", $minifiedCSS);
echo "CSS combinado e minificado!\n";

// --- 2. Minificação de JavaScript ---
$jsFiles = [
    'assets/js/section-main.js',
    'assets/js/scripts.js',
    'assets/js/scripts2.js'
];

$combinedJS = '';
foreach ($jsFiles as $file) {
    if (file_exists($file)) {
        $combinedJS .= file_get_contents($file) . "\n";
    } else {
        echo "Arquivo JS não encontrado: $file\n";
    }
}

$minifiedJS = preg_replace('/\s+/', ' ', $combinedJS);
file_put_contents("$productionDir/combined.min.js", $minifiedJS);
echo "JavaScript combinado e minificado!\n";

// --- 3. Minificação de PHP ---
$phpFiles = [
    'includes/header.php',
    'includes/section-main.php',
    'includes/section-about.php',
    'includes/section-factory.php',
    'includes/section-quality.php',
    'includes/section-history.php',
    'includes/section-references.php',
    'includes/footer.php',
];

$combinedCode = '';
foreach ($phpFiles as $file) {
    if (file_exists($file)) {
        $combinedCode .= file_get_contents($file) . "\n";
    } else {
        echo "Arquivo PHP não encontrado: $file\n";
    }
}

$minifiedCode = preg_replace('/\s+/', ' ', $combinedCode);
file_put_contents("$productionDir/combined.min.php", $minifiedCode);
echo "PHP combinado e minificado!\n";

// --- 4. Mover Imagens ---
$images = glob("$imagesDir/*.{jpg,jpeg,png,gif,svg}", GLOB_BRACE);
foreach ($images as $image) {
    $imageName = basename($image);
    $destination = "$productionImagesDir/$imageName";

    // Copiar imagem para o diretório de produção
    copy($image, $destination);
    echo "Imagem '$imageName' movida para '$destination'\n";
}

// Atualizar os caminhos das imagens no código PHP combinado
$minifiedCode = str_replace('assets/imagens/', 'images/', $minifiedCode);
file_put_contents("$productionDir/combined.min.php", $minifiedCode);

echo "Caminhos das imagens atualizados no PHP combinado!\n";
