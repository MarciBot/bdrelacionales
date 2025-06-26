<?php

         $conn = new mysqli("localhost", "root", "", "productos");


          $sql = "SELECT * FROM productos";
          $result = $conn->query($sql);

          $datos = [];

         while ($row = $result->fetch_assoc()) {
         $datos[] = $row;
}


         header('Content-Type: application/json');
        echo json_encode($datos);
?>