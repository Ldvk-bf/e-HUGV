<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- MY padrão paginas -->
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    
    <!-- MY detalhe -->
    <link rel="stylesheet" href="../../assets/css/estilo-detalhe.css">


    <title>e-HUGV | Detalhes medico</title>
</head>
<body>
    <!-- Cabeçalho -->
    <?php  include '../../assets/php/menu.php';?>
    <div class="screen">
        <div class="container-sm ml-auto" id="content-main">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>Adicionar Medico</h3>
                    <h3>Alterar Medico</h3>

                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Nome">
                        <input type="text" class="form-control" placeholder="cpf" oninput="mascara(this, 'cpf')">
                        <input type="text" class="form-control" placeholder="telefone" oninput="mascara(this, 'telefone')">
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                One of three columns
                </div>
            </div>
        </div>
    <div>

    <script src="../../assets/js/utilitares.js"></script>

</body>
</html>