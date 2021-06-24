<?php
    $id_prod = $_POST["id"];
    $desc_prod = $_POST["desc"];
    $quant_prod = $_POST["quant"];
    $categ_prod = $_POST["categ"];
    
    include("conexao.php");

    // var_dump($id_prod);
    // var_dump($desc_prod);
    // var_dump($quant_prod);
    // var_dump($categ_prod);
    // die();

    $sql = "INSERT INTO produto (id_produto, descricao, quantidade, categoria)"
            ."VALUES ($id_prod, '$desc_prod', $quant_prod, '$categ_prod')";

    $resultLogin = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../inventario.php");

    // var_dump($resultLogin);
    // die();
?>