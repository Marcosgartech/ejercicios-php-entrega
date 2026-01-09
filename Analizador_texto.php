<?php
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

$textoLimpio = strtolower(preg_replace('/[^\w\s]/u', '', $texto));
$palabras = explode(" ", $textoLimpio);

$palabrasFiltradas = array_filter($palabras, function($p) {
    return strlen($p) >= 3;
});

$conteo = array_count_values($palabrasFiltradas);
arsort($conteo);

echo "Palabras totales (>=3 letras): " . count($palabrasFiltradas) . "\n";
echo "Palabras que se repiten:\n";

foreach ($conteo as $palabra => $frecuencia) {
    if ($frecuencia > 1) {
        echo "- $palabra: $frecuencia veces\n";
    }
}

reset($conteo);
echo "La palabra más repetida es: " . key($conteo) . " (" . current($conteo) . " veces)\n";
?>