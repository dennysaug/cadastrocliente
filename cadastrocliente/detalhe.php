<?php
if($_POST['voltar'])
    header('Location: ./');

//ini_set('display_errors',1);
//error_reporting(E_ALL);
require_once('classes/Cliente.php');

$cliente = new Cliente();
$clientes = $cliente->geraDezClientes();

$index = (int) $_GET['id'];
$dados = $clientes[$index-1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POO - Detalhe - <?php echo $dados->nome ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3>
                Visualizar dados:
            </h3>
            <form action="detalhe.php" method="post" role="form">
                <div class="form-group">
                    <label for="">
                        Nome
                    </label>
                    <input class="form-control"  type="text" value="<?php echo $dados->nome ?>" required />
                </div>
                <div class="form-group">
                    <label for="">
                        CPF
                    </label>
                    <input class="form-control"  type="text" value="<?php echo $dados->cpf ?>" required />
                </div>
                <div class="form-group">
                    <label for="">
                        Data Nascimento
                    </label>
                    <input class="form-control"  type="text" value="<?php echo $dados->data_nascimento ?>" required />
                </div>
                <div class="form-group">
                    <label for="">
                        E-mail
                    </label>
                    <input class="form-control"  type="type" value="<?php echo $dados->email ?>" required />
                </div>

                <button type="submit" name="voltar" value="1"  class="btn btn-primary">
                    Voltar
                </button>
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>