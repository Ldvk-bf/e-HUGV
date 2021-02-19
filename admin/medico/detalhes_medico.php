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
    <link rel="stylesheet" href="../../assets/css/estilo-detalhes.css">


    <title>e-HUGV | Detalhes medico</title>
</head>
<body>
    <!-- Cabeçalho -->
    <?php  include '../../assets/php/menu.php';?>
    <div class="screen">
        <div class="container-sm ml-auto" id="content-main">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 style="padding:5px;">Novo Medico</h4>

                    <form class="my-card form-group" action="acesso_medicos.php?count=2" method="post">
                        <div class="form-floating mb-3">
                            <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="cpf" type="text" class="form-control" id="floatingInput"  placeholder="111.111.111-11" oninput="mascara(this, 'cpf')">
                            <label for="floatingInput">Cpf</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="telefone" type="text" class="form-control" id="floatingInput" placeholder="(92) 99614-0802" oninput="mascara(this, 'telefone')">
                            <label for="floatingInput">Telefone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="crm" type="text" class="form-control" id="floatingInput" placeholder="4515213">
                            <label for="floatingInput">Crm</label>
                        </div>
                        <div class="row">
                            <a href="acesso_medicos.php?count=2" class="btn btn-success col-2 m-2 p-2"> Voltar</a>
                            <button type="submit" class="btn btn-outline-success col-2 m-2 p-2"> Salvar</button>
                            <button class="btn btn-success col-2 m-2 p-2"> Deletar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="../../assets/images/DetailScreen.png" alt="">
                </div>
            </div>
        </div>
    <div>

    <script src="../../assets/js/utilitares.js"></script>

</body>
</html>
