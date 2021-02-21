
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilo-login-alter.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>e-HUGV | Login adm</title>
</head>
<body id="corpo">

    <div id="content-main">
            <img src="../assets/images/logo.png" alt="" class="logo">
            <h4 class="title" style="margin-bottom: 60px;">e-HUGV | Adminstrador</h4>

            <form action="acesso.php?count=1" method="post" class="form-group">
                <div class="input-box">
                    <input name="usuario" type="text" tabindex="1" placeholder="Jose augusto" class="form-control">
                    <label class="form-label">Usuario</label>
                </div>
                <div class="input-box">
                    <input name="senha" type="password" placeholder="Jose augusto" tabindex="2" class="form-control">
                    <label class="form-label">Senha</label>
                </div>

                <button type="submit" class="btn btn-outline-success" style="width: 100%;"> Login </button>
            </form>
    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    if(isset($_GET['flag'])){
        if(!$_GET['flag']){
            echo '<script> alert("Sua senha ou o usuario está errado")';
            echo '</script>';
        }
    }
?>