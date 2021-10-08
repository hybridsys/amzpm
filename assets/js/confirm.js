$(document).ready(function(){
    $('a[data-confirm]').click(function(ev){
        var href = $(this).attr('href');
        var modalWindow = '';
        modalWindow +='<div class="modal fade" id="confirm-delete">';
        modalWindow +='     <div class="modal-dialog">';
        modalWindow +='        <div class="modal-content bg-danger">';
        modalWindow +='            <div class="text-center">';
        modalWindow +='                <h4 class="modal-title text-center">Confirmação de exclusão</h4>';
        modalWindow +='            </div> ';
        modalWindow +='            <div class="modal-body" style="color: #0b2e13;background-color: #fff"> ';
        modalWindow +='                <p class="text-center">Confirma a exclusão do cliente?</p> ';
        modalWindow +='            </div>';
        modalWindow +='            <div class="modal-footer justify-content-between" style="background-color: #fff">';
        modalWindow +='                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>';
        modalWindow +='                <a role="button" ';
        modalWindow +='                   class="btn btn-danger" ';
        modalWindow +='                   id="dataConfirmOK"';
        modalWindow +='                   href="#">Confirmar';
        modalWindow +='                </a>';
        modalWindow +='            </div>';
        modalWindow +='        </div>';
        modalWindow +='    </div>';
        modalWindow +='</div>';

        if(!$('#confirm-delete').length){
            $('body').append(modalWindow);

        }
        $('#dataConfirmOK').attr('href', href);
        $('#confirm-delete').modal({show:true});
        return false;
    });
});