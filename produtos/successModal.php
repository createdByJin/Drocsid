<?php

    function success_alert()
    {
        return $modal = '<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">'
                            .'<div class="modal-dialog modal-sm" role="document">'
                                .'<div class="modal-content">'
                                    .'<div class="modal-header">'
                                        .'<h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>'
                                        .'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'
                                            .'<span aria-hidden="true">&times;</span>'
                                        .'</button>'
                                    .'</div>'
                                    .'<div class="modal-body">'
                                        .'<p>'
                                            .'There are three species of zebras: the plains zebra, the mountain zebra and the Grévys zebra. The plains zebra and the mountain
                                            zebra belong to the subgenus Hippotigris, but Grévys zebra is the sole species of subgenus Dolichohippus. The latter
                                            resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                                            genus Equus, along with other living equids.'
                                        .'</p>'
                                    .'</div>'
                                    .'<div class="modal-footer">'
                                        .'<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>'
                                        .'<button type="button" class="btn btn-primary">Confirm</button>'
                                    .'</div>'
                                .'</div>'
                            .'</div>'
                        .'</div>';
    }

?>