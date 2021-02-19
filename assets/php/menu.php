<header>
    <nav class="navbar navbar-expand-md fixed-top navbar-light " id="Content-Header">
        <div class="container" id="menu">
            <a class="navbar-brand" href="/e-HUGV/index.php">
                <img src=
                    <?php
                        $string="";
                        if(isset($_GET['count'])) {
                            for($c = 0; $c < $_GET['count'];$c++) {
                                $string = $string."../";
                            }
                        }
                        echo $string."assets/images/Logo.png";
                    ?> alt="" class="image-logo">
                <div class="title">e-HUGV</div>
            </a>

            <h3 id="page-inicial">Seja Bem-vindo</h3>

            <a class="navbar-brand" href="/e-HUGV/index.php">
                <img src=
                    <?php
                        $string="";
                        if(isset($_GET['count'])) {
                            for($c = 0; $c < $_GET['count'];$c++) {
                                $string = $string."../";
                            }
                        }
                        echo $string."assets/images/Logo3.png";
                    ?> alt="" class="image-logo">
                <div class="title">UFAM</div>
            </a>
        </div>
    </nav>
</header>