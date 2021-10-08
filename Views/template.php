<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Teste Jorge Santos - AZM|PM</title>

    <link rel="stylesheet" href="<?=BASE_URL;?>assets/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body style="padding: 20px">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><strong>Início do teste - Jorge Santos</strong></h1>
            </div>
            <div class="col-sm-6" style="text-align: right">
                <a class = "btn btn-danger" href="<?=BASE_URL?>login/logout">Sair do sistema</a>
            </div>
        </div>
    </div>
</section>

<div style="padding: 30px">
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL?>assets/js/confirm.js"></script>
</body>
</html>