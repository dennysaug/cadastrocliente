<?

ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('classes/Cliente.php');

$cliente = new Cliente();
$clientes = $cliente->geraDezClientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POO - Cadastro de Cliente</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3>
                LISTA DE CLIENTES
            </h3>
            <? if (isset($clientes)): ?>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        CPF
                    </th>
                    <th>
                        Data Nascimento
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Telefone
                    </th>
                </tr>
                </thead>
                <tbody>
                <? foreach($clientes as $n => $dados): ?>
                <tr>
                    <td>
                        <?= ++$n ?>
                    </td>
                    <td>
                        <?= $dados->nome ?>
                    </td>
                    <td>
                        <?= $dados->cpf ?>
                    </td>
                    <td>
                        <?= $dados->data_nascimento ?>
                    </td>
                    <td>
                        <?= $dados->email ?>
                    </td>
                    <td>
                        <?= $dados->telefone ?>
                    </td>
                </tr>
                <? endforeach; ?>
                </tbody>
            </table>
            <? endif;?>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>