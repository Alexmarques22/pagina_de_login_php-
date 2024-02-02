<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Senha</title>
    <link rel="stylesheet" href="css/senha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
require 'usuario-consultar.php';
$usuarios = LisTarUsusrios();
var_dump($usuarios);


?>

<body>



<table class="tb_senha">
    <tr>
        <thead>

        <th>Usuario</th>
        <th>Senha</th>
        <th><a href="#" class="btn btn-info">Editar</a></th>
        <th><a href="#" class="btn btn-danger">Excluir</a></th>
        </thead>
        <tbody>

    </tr>
<?php foreach($usuarios as $linha ){ ?>

    <tr>
        <td>João</td>
        <td>25</td>
        <th><a href="#" class="btn btn-info">Editar</a></th>
        <th><a href="#" class="btn btn-danger">Excluir</a></th>
    </tr>
        
    <$php }?>
</tbody>
</table>
    
</body>
</html>