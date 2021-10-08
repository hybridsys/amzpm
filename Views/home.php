<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <h4>Listagem de clientes</h4>
            </div>
            <div class="col-sm-8" style="text-align: right">
                <a href="<?=BASE_URL?>/client/insert" class="btn btn-flat btn-success" style="line-height: 0.7rem">Adicionar Novo</a>
            </div>
        </div>
        <div class="listclient">
            <table class="table table-sm table-condensed" id="listClients">
                <thead>
                <tr>
                    <th>Nome do Cliente</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <?php foreach ($clients as $client){
                    ?>
                    <tr>
                        <td width="40%"><?=$client['client_name']?></td>
                        <td width="20%"><?=$client['client_city']?></td>
                        <td width="10%"><?=$client['client_phone']?></td>
                        <td width="5%"><a href="<?=BASE_URL.'client/edit/'.$client['id']?>"
                                                 class="btn btn-flat btn-warning" style="line-height: 0.7rem">Editar</a></td>
                        <td width="5%">
                            <a href="<?=BASE_URL.'client/delete/'.$client['id']?>"
                               class="btn btn-flat btn-danger"
                               style="line-height: 0.7rem"
                               data-confirm="confirmationOfDelete">Excluir
                            </a>
                        </td>

                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>