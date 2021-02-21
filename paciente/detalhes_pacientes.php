<?php
    include '../assets/php/conexao.php';
    $query = 'select * from paciente where id = '.$_GET["idPaciente"];
    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll();
    $newURL = 'acesso_medicos';
    $sexo ="Sexo"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- MY padrão paginas -->
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <!-- MY detalhe -->
    <link rel="stylesheet" href="../assets/css/estilo-detalhes.css">

    <title>e-HUGV | Detalhes medico</title>
</head>
<body>
    <!-- Cabeçalho -->
    <?php  include '../assets/php/menu.php';?>

    <div class="screen">
        <div class="container-sm ml-auto" id="content-main">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 style="padding:5px;">Novo Medico</h4>

                    <form class="my-card form-group" action="acesso_pacientes.php?count=1" method="post">
                        <div class="form-floating mb-3">
                            <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php if(count($lista) > 0) echo $lista[0]['nome']; ?>">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="nascimento" type="text" class="form-control" id="floatingInput"  placeholder="30/01/2005" oninput="mascara(this, 'data')" value="<?php if(count($lista) > 0) echo $lista[0]['nascimento']; ?>">
                            <label for="floatingInput">Nascimento</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="cpf" type="text" class="form-control" id="floatingInput"  placeholder="071.507.602.79" oninput="mascara(this, 'cpf')" value="<?php if(count($lista) > 0) echo $lista[0]['cpf']; ?>">
                            <label for="floatingInput">Cpf</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="sexo" class="form-control" id="floatingInput" placeholder="071.507.602.79" value="<?php if(count($lista) > 0) echo $lista[0]['sexo'];?>">
                                <option value="masculino">masculino</option>
                                <option value="feminino">feminino</option>
                            </select>
                            <label for="floatingInput">Sexo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="telefone" type="text" class="form-control" id="floatingInput" placeholder="(92) 99614-0802" oninput="mascara(this, 'telefone')" value="<?php if(count($lista) > 0) echo $lista[0]['telefone']; ?>">
                            <label for="floatingInput">Telefone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="internacao" class="form-control" id="floatingInput" placeholder="071.507.602.79" value="<?php if(count($lista) > 0) echo $lista[0]['internacao'];?>">
                                <option value="UTI">UTI</option>
                                <option value="SemiUTI">SemiUTI</option>
                                <option value="Enfermaria">Enfermaria</option>
                                <option value="Aptm">Aptm</option>
                            </select>
                            <label for="floatingInput">Internação</label>
                        </div>
                        <div class="row">
                            <a href="acesso_pacientes.php?count=1" class="btn btn-success col-2 m-2 p-2"> Voltar</a>
                            <button type="submit" name="save" value="<?= $_GET['idPaciente'] ?>" class="btn btn-outline-success col-2 m-2 p-2"> Salvar</button>
                            <button type="submit" name="deletar" value="<?= $_GET['idPaciente'] ?>" class="btn btn-success col-2 m-2 p-2"> Deletar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="../assets/images/DetailScreen.png" alt="">
                </div>
            </div>
        </div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/utilitare.js"></script>
</body>
</html>
