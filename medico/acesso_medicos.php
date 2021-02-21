<?php
    include '../assets/php/conexao.php';
    if(count($_POST) > 0) {
        if(!isset($_POST['deletar'])){
            if($_POST['save'] == 0){
                $query = 'insert into medico (nome,cpf,telefone,crm,senha) values ("'.$_POST['nome'].'","'.$_POST['cpf'].'","'.$_POST['telefone'].'","'.$_POST['crm'].'","'.$_POST['senhaMedico'].'")';
                $return = $conexao->exec($query);
            } else {
                $query = 'Update medico set nome="'.$_POST['nome'].'",cpf="'.$_POST['cpf'].'",telefone="'.$_POST['telefone'].'",crm="'.$_POST['crm'].'",senha="'.$_POST['senhaMedico'].'" where id='.$_POST['save'];
                $return = $conexao->exec($query);
            }
        } else {
            if($_POST['deletar'] != 0) {
                $query = 'delete from medico where id = '.$_POST["deletar"];
                echo $query;
                $stmt = $conexao->exec($query);
            }
        }
    }

    $query = 'select * from medico';
    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll();
?>  


<html lang="pt-br" class="fullHeight"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- MY padrão paginas -->
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <!-- css para a tela inicial do adm -->
    <link rel="stylesheet" href="../assets/css/estilo-adms.css">

    <title>e-HUGV | Acesso Adm</title>
  </head>
  <body>

    <!-- Cabeçalho -->
    <?php  include '../assets/php/menu.php';?>

    <!-- Parte principal -->
    <div class="screen">
        <div class="container-sm ml-5" id="content-main">
            <div class="container divisiao-superior">
                <a href="../admin/acesso.php?count=1" class="btn btn-outline-success m-3"> Voltar</a>
                <a href="detalhes_medico.php?count=1&idMedico=0" class="btn btn-success" style="height: 2.5rem;"> adicionar médico</a>
                <input type="text" placeholder="pesquisar pelo nome" class="form-control" id="pesquisa">
            </div>
            <table class="table">
                <tHead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>cpf</th>
                        <th>telefone</th>
                        <th>crm</th>
                        <th>senha</th>
                    </tr>
                </tHead>
                <tbody>
                    <?php 
                        foreach($lista as $medico) {
                            echo '<tr>';
                                echo '<td><a href="detalhes_medico.php?count=1&idMedico='.$medico['id'].'">'.$medico['id'].'</a></td>';
                                echo '<td><a href="detalhes_medico.php?count=1&idMedico='.$medico['id'].'">'.$medico['nome'].'</a></td>';
                                echo '<td>'.$medico['cpf'].'</td>';
                                echo '<td>'.$medico['telefone'].'</td>';
                                echo '<td>'.$medico['crm'].'</td>';
                                echo '<td>'.$medico['senha'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
  
</body></html>