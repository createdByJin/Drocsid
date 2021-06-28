<?php
    $id_categoria = $_POST["id-categ"];
    $desc_categoria = $_POST["desc-categ"];
    
    include("../database/conection.php");

    // var_dump($id_categoria);
    // var_dump($desc_categoria);
    // die();

    $sql = "INSERT INTO categorias (id_categoria, descricao)
            VALUES ($id_categoria, '$desc_categoria')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../categorias.php");
?>