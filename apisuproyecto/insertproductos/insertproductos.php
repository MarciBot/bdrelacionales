<?php
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    echo json_encode(['error' => 'Solo metodo POST es permitido']);
}

//conectar a la BD sakila
require 'conexionproductos.php';

$data = json_decode(file_get_contents('php://input'), true);
$tipo = $data['producto'];
$seccion = $data['costo_producto'];
$precio = $data['cantidad_producto'];
$talla = $data['compras_producto'];

$query = $conn->prepare("INSERT INTO productos (producto, costo_producto, cantidad_producto, compras_producto) VALUES (?, ?, ?, ?)");

if(!$query){
    http_response_code(500);
    echo json_encode(["error" => "Ocurrio un error"]);
    exit;
}

$query->bind_param("ssis", $tipo, $seccion, $precio, $talla);

if($query->execute()){
    echo json_encode(["mensaje" => "producto insertado correctamente", "id" => $query->insert_id]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Fallo la inserción" . $query->error]);
}

$query->close();
$conn->close();

?>