<?php
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

function calcularTotal($carrito) {
    $suma = 0;
    foreach ($carrito as $item) {
        $suma += $item['precio'] * $item['cantidad'];
    }
    return $suma;
}

$totalSinDescuento = calcularTotal($carrito);
$descuento = 0;

if ($totalSinDescuento > 1000) {
    $descuento = 0.10;
} elseif ($totalSinDescuento > 500) {
    $descuento = 0.05;
}

$montoDescuento = $totalSinDescuento * $descuento;
$totalFinal = $totalSinDescuento - $montoDescuento;

foreach ($carrito as $item) {
    $subtotal = $item['precio'] * $item['cantidad'];
    echo "Producto: {$item['producto']} | Precio: {$item['precio']}€ | Cant: {$item['cantidad']} | Subtotal: {$subtotal}€\n";
}

echo "---------------------------\n";
echo "Total sin descuento: $totalSinDescuento €\n";
echo "Descuento aplicado: " . ($descuento * 100) . "%\n";
echo "Total final: $totalFinal €\n";
?>