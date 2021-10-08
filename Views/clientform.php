<section class="content">
    <div class="container-fluid" >
        <form method="POST" id="clientform" class = "ls-form ls-form-horizontal" action="<?=BASE_URL?>client/save" enctype="multipart/form-data">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title'"><strong>Dados do Cliente</strong></h3>
                        </div>
                        <div class="col-sm-6" style="text-align: right">
                            <input type="submit" class="btn btn-success bg-gradient-success" value="Salvar" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($clientID) && !empty($clientID) ){ ?>
                        <input type="hidden" name="id" id="id" value="<?=$clientID?>"/>
                    <?php }
                    ?>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <label for="client_name">Nome do Cliente</label>
                                        <input type="text"
                                               class="form-control"
                                               id="client_name"
                                               name="client_name" required value="<?=isset($client['client_name'])?$client['client_name']:'' ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="client_address">Endereço</label>
                                <input type="text"
                                       class="form-control address"
                                       id="client_address"
                                       name="client_address" value="<?=isset($client['client_address'])?$client['client_address']:'' ?>"/>
                            </div>
                            <div class="col-sm-4">
                                <label for="client_zipcode">CEP</label>
                                <input type="text"
                                       class="form-control zipcode cep"
                                       id="client_zipcode"
                                       name="client_zipcode" value="<?=isset($client['client_zipcode'])?$client['client_zipcode']:'' ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="client_neighborhood">Bairro</label>
                                <input type="text"
                                       class="form-control neighborhood"
                                       id="client_neighborhood"
                                       name="client_neighborhood" value="<?=isset($client['client_neighborhood'])?$client['client_neighborhood']:'' ?>"/>
                            </div>
                            <div class="col-sm-5">
                                <label for="client_city">Cidade</label>
                                <input type="text"
                                       class="form-control city"
                                       id="client_city"
                                       name="client_city" value="<?=isset($client['client_city'])?$client['client_city']:'' ?>"/>
                            </div>
                            <div class="col-sm-2">
                                <label for="client_state">Estado</label>
                                <input type="text"
                                       class="form-control state"
                                       id="client_state"
                                       name="client_state" value="<?=isset($client['client_state'])?$client['client_state']:'' ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="client_phone">Telefone</label>
                                <input type="text"
                                       class="form-control phone"
                                       id="client_phone"
                                       name="client_phone" value="<?=isset($client['client_phone'])?$client['client_phone']:'' ?>"/>
                            </div>
                            <div class="col-sm-4">
                                <label for="clientemail">Email</label>
                                <input type="email"
                                       class="form-control"
                                       id="clientemail"
                                       name="clientemail" value="<?=isset($client['clientemail'])?$client['clientemail']:'' ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>