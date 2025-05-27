<?php
    header(header: "Content-Type: application/json");
    header(header: "Acess-Control-Allow-Origin: *");

    $usuario=[
        ["id" => 1, "nombre" => "Alejandro Fernandez", "correo" => "alefernandez@gmail.com"]
        ["id" => 1, "nombre" => "Alejo Fernandez", "correo" => "alejofernandez@gmail.com"]
        ["id" => 1, "nombre" => "Ana Fernandez", "correo" => "anafernandez@gmail.com"]
    ];
    echo json_encode(value: $usuarios);
?>
