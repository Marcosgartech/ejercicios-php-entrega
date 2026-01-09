<?php
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

$aprobados = 0;
$suspendos = 0;
$mejorPromedio = -1;
$mejorEstudiante = "";

foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);
    $estado = ($promedio >= 6) ? "Aprobado" : "Suspenso";
    
    echo "Estudiante: $nombre | Promedio: " . number_format($promedio, 2) . " | Estado: $estado\n";

    if ($promedio >= 6) $aprobados++; else $suspendos++;

    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "---------------------------\n";
echo "Total Aprobados: $aprobados\n";
echo "Total Suspendos: $suspendos\n";
echo "Estudiante con nota más alta: $mejorEstudiante con " . number_format($mejorPromedio, 2) . "\n";
?>