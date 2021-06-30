<?php

    $nome = $_POST["nome"];
    $senha = $_POST["password"];

    include("../database/conection.php");

    // var_dump($nome);
    // die();

    $sql = "SELECT * FROM usuarios "
            ." WHERE login = '$nome'"
            ." AND Senha = '$senha'";


    $resultLogin = mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    if (mysqli_num_rows($resultLogin) > 0 )
    {

        $array = array();

        while ($linha = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC))
        {
            array_push($array, $linha);
        }

        foreach($array as $coluna) {

            if ($coluna["id_usuario"] == 1)
            {
                header('location: ../home.php');
                // echo "olá mundo";
            }
            // else 
            // {
            //     header('location: ../cliente.php');
            // }
        }
    }
    else
    {
        header('location: '.$_SERVER["HTTP_REFERER"]);
    }
?>
    