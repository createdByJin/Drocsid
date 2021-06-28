<?php
    $id_prod = $_POST["id_produto"];
    
    include("../database/conection.php");

    // var_dump($id_produto);
    // die();

    $sql = "DELETE FROM produtos WHERE id_produto = $id_prod";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../home.php");
?>