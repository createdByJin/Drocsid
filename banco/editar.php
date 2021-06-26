<?php
    include("conexao.php");

    function editProduct() {

        $id_prod = $_POST["id"];
        $desc_prod = $_POST["desc"];
        $quant_prod = $_POST["quant"];
        $categ_prod = $_POST["categ"];


        $sql = "UPDATE produto"
                ."SET id_produto = $id_prod,"
                ."descricao = $desc_prod,"
                ."quantidade = $quant_prod,"
                ."categoria = $categ_prod"
                ."WHERE id_produto = $id_prod";
        // UPDATE produto SET descricao = 'Teste para editar produto', quantidade = 12, categoria = 'Nada a ver' where id_produto = 7


        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        // var_dump($result);
        // die();

        header("location: ../inventario.php");

        // var_dump($resultLogin);
        // die();
    }
?>