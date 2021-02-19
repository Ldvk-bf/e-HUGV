<!DOCTYPE html>

<html lang="pt-br" class="fullHeight"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- MY Css -->
    <link rel="stylesheet" href="assets/css/estilos.css">

    <title>e-HUGV | Inicio</title>
  </head>
  <body>

    <!-- Cabeçalho -->
    <?= include 'assets/php/menu.php' ?>

    <!-- Parte principal -->
    <div class="screen">
        <div class="container-sm ml-5" id="content-main">
            <img src="assets/images/Plataforma.png" alt="" class="image-entrace">
            
            <div class="content-card-nav">
                <div class="container card display">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h4>Area restrita</h4>
                        </div>
                        <div class="card-text text-center">
                            Acesso destinado aos profissionais<br>
                            do HUGV<br><br>
                            <a href="login_medico.html" class="btn btn-outline-success">Acesso restrito</a>
                        </div>
                    </div>
                </div>
                <div class="container card display">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h4>Area Familiares</h4>
                        </div>
                        <div class="card-text text-center">
                            Acesso destinado aos familiares <br>
                            e pacientes do HUGV <br><br>
                            <a href="" class="btn btn-outline-success">Acesso familiar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
  
</body></html>