<?php

    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD' ]!== 'PUT'){
         http_response_code(500);
         echo json_encode(['ERROR' => 'Solo metodo PUT es permitido']);


    }

    require 'conexionproductos.php';

    
    $input = json_decode(file_get_contents('php://input'), true);
    $id = intval($input["id"]);
    $producto = $conn->real_escape_string($input["producto"]);
    $costo_producto= $conn->real_escape_string($input["costo_producto"]);
    $cantidad_producto = $conn->real_escape_string($input["cantidad_producto"]);
    $compras_producto = $conn->real_escape_string($input["compras_producto"]);
    $query = "UPDATE residuos SET producto = ?, costo_producto = ?, cantidad_producto = ?, compras_producto = ? WHERE id = ?";

    $st = $conn->prepare($query);

    if(!$st){
        http_response_code(500);
        echo json_encode(["error" => "Error en la consulta . $conn->error"]);
        exit();

    }

        $st->bind_param("sissi", $producto, $costo_producto, $cantidad_producto, $compras_producto, $id);

        if($st->execute()){
            if($st->affected_rows > 0){
                echo json_encode(["mensage" => "producto actualizado correctamente"]);

            }else{
                http_response_code(404);
                echo json_encode(["error" => "No se encontro el producto: $id" ]);

            }
        }else{
                http_response_code(500);
                echo json_encode(["error" => "Error al ejecutar" . $st->error ]);
        }        
            $st->close();
            $conn->close();
            















?>