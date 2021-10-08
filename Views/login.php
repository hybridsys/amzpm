<!DOCTYPE html>
<html>
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
<body >
    <div class="row">
        <div class="col-sm-12" style="padding:30px;max-width: 400px;">
            <h2>ACESSO AO SISTEMA</h2>
            <div class="card">
                <div class="card-body">
                    <?php if(isset($_SESSION['errorLoginMsg'])): ?>
                        <div class="callout callout-danger">
                            <p><?php echo $_SESSION['errorLoginMsg']; ?></p>
                        </div>
                    <?php unset($_SESSION['errorLoginMsg']); endif ;?>
                    <form action="<?=BASE_URL?>login/login" method="POST">
                        <div class="input-group mb-3">
                            <input type="email" name="user_email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="user_password" class="form-control" placeholder="Insira a senha">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Confirma</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL?>assets/js/confirm.js"></script>
</body>
</html>
