<?php
    $id_prod = $_POST["id-produto"];
    $desc_prod = $_POST["desc-prod"];
    $quant_prod = $_POST["quant-prod"];
    $categ_prod = $_POST["categoria"];
    
    include("../database/conection.php");

    // var_dump($id_prod);
    // var_dump($desc_prod);
    // var_dump($quant_prod);
    // var_dump($categ_prod);
    // die();

    $sql = "INSERT INTO produtos (id_produto, descricao, quantidade, categoria_id)"
            ."VALUES ($id_prod, '$desc_prod', $quant_prod, '$categ_prod')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../novo-cadastro.php");
?>