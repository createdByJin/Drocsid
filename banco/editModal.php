<?php

    

    function createEditModal() {

        return $modal = 
                    '<div class="modal-content">'
                .'<div class="modal-header">'
                    .'<h5 class="modal-title" id="EditStaticModal">Editar Cadastro</h5>'
                    .'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'
                    .'<span aria-hidden="true">&times;</span>'
                    .'</button>'
                    .'</div>'
                    .'<div class="modal-body">'
                    .'<form action="banco/editar.php" method="post" novalidate="novalidate">'
                    .'<div class="form-group">'
                    .'<label for="cc-payment" class="control-label mb-1">ID</label>'
                    .'<input id="cc-pament" name="id" type="text" class="form-control" autocomplete="off" aria-required="true" aria-invalid="false" value="hello">'
                    .'</div>'
                    .'<div class="form-group has-success">'
                    .'<label for="cc-name" class="control-label mb-1">Descrição</label>'
                    .'<input id="cc-name" name="desc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="off" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="hello">'
                                .'<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>'
                                .'</div>'
                                .'<div class="row">'
                                .'<div class="col-6">'
                                .'<div class="form-group">'
                                .'<label for="cc-exp" class="control-label mb-1">Quantidade</label>'
                                .'<input id="cc-exp" name="quant" type="number" class="form-control cc-exp" value="1" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year"
                                        autocomplete="off" value="hello">'
                                        .'<span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>'
                                        .'</div>'
                                        .'</div>'
                                        .'<div class="col-6">'
                                        .'<label for="x_card_code" class="control-label mb-1">Categoria</label>'
                                        .'<div class="input-group">'
                                        .'<input id="x_card_code" name="categ" type="text" class="form-control cc-cvc" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off" value="hello">'

                                        .'</div>'
                                        .'</div>'
                                        .'</div>'
                                        .'<div class="modal-footer">'
                                        .'<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>'
                                        .'<button type="submit" class="btn btn-primary">Confirm</button>'
                                        .'</div>'
                                        .'</form>'
                                        .'</div>'                  
                                        .'</div>';

    }
    
?>