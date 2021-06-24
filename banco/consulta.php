<?php

    function dataBase_data() {

        include("conexao.php");

        $sql = "SELECT * FROM produto";

        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        // var_dump($result);
        // die();

        $list = "";

        if (mysqli_num_rows($result) > 0) {
                
            $array = array();

            $list .= '<table class="table table-data2">'
                        .'<thead>'
                            .'<tr>'
                                .'<th>ID</th>'
                                .'<th>DESCRIÇÃO</th>'
                                .'<th>QUANTIDADE</th>'
                                .'<th>CATEGORIA</th>'
                            .'</tr>'
                        .'</thead>'
                    .'<tbody>';
            
            while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($array, $linha);
            }
            
            foreach ($array as $coluna) {
                
                $list .=
                        '<tr class="tr-shadow">'
                            .'<td>'.$coluna["id_produto"].'</td>'
                            .'<td>'
                                .'<span class="block-email">'.$coluna["descricao"].'</span>'
                            .'</td>'
                            .'<td class="desc">'.$coluna["quantidade"].'</td>'
                            .'<td>'.$coluna["categoria"].'</td>'
                            .'<td>'
                                .'<div class="table-data-feature">'
                                    .'<button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#staticModal">'
                                        .'<i class="zmdi zmdi-edit"></i>'
                                    .'</button>'
                                    .'<button class="item" data-placement="top" title="Delete" data-toggle="modal" data-target="#smallmodal">'
                                        .'<i class="zmdi zmdi-delete"></i>'
                                    .'</button>'
                                .'</div>'
                            .'</td>'
                        .'</tr>'
                        .'<tr class="spacer"></tr>';
            }
        
            $list .= '</tbody>'
                .'</table>';

        } else {
            $list .= "<div>"
                        ."<p>Seus registros são exibidos aqui</p>"
                    ."</div>";
        }

        return $list;
    }
?>