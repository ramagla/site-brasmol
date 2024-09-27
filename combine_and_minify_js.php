<?php
// Arquivos JavaScript que deseja combinar
$jsFiles = [
    'assets/js/scripts.js',
    'assets/js/scripts2.js',
    'assets/js/section-main.js'
];

// Combinar o conteúdo de todos os arquivos JS
$combinedJS = '';
foreach ($jsFiles as $file) {
    if (file_exists($file)) {
        $combinedJS .= file_get_contents($file) . "\n";
    } else {
        echo "Arquivo JS não encontrado: $file\n";
    }
}

// Minificar o JavaScript
$minifiedJS = preg_replace([
    '/\/\*.*?\*\//s',  // Remove comentários de múltiplas linhas
    '/\/\/.*?\n/',      // Remove comentários de linha única
    '/\s+/',            // Remove espaços em branco
    '/\s*([{}|:;,])\s*/' // Remove espaços em torno de caracteres
], ['', '', ' ', '$1'], $combinedJS);

// Manter os parênteses e chaves em locais apropriados
$minifiedJS = str_replace(['}', '{', '(', ')'], ['}', '{', '(', ')'], $minifiedJS);

// Salvar o JS combinado e minificado na pasta production
if (!file_exists('production')) {
    mkdir('production', 0777, true);
}
file_put_contents('production/combined.min.js', $minifiedJS);

echo "Minificação e combinação de JS concluídas! Arquivo salvo em 'production/combined.min.js'\n";
