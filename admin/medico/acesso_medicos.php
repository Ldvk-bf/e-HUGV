<?php
    include '../../assets/php/conexao.php';

    $query = 'select * from medico';
    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll();
?>


<html lang="pt-br" class="fullHeight"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- MY padrão paginas -->
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    
    <!-- css para a tela inicial do adm -->
    <link rel="stylesheet" href="../../assets/css/estilo-adm.css">

    <title>e-HUGV | Acesso Adm</title>
  </head>
  <body>

    <!-- Cabeçalho -->
    <?php  include '../../assets/php/menu.php';?>

    <!-- Parte principal -->
    <div class="screen">
        <div class="container-sm ml-5" id="content-main">
            <div class="container divisiao-superior">
                <a href="detalhes_medico.php?count=2&idMedico=0" class="btn btn-success" style="height: 2.5rem;"> adicionar médico</a>
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
                    </tr>
                </tHead>
                <tbody>
                    <?php 
                        foreach($lista as $medico) {
                            echo '<tr>';
                                echo '<td>'.$medico['id'].'</td>';
                                echo '<td>'.$medico['nome'].'</td>';
                                echo '<td>'.$medico['cpf'].'</td>';
                                echo '<td>'.$medico['telefone'].'</td>';
                                echo '<td>'.$medico['crm'].'</td>';
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