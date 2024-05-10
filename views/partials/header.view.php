<header class="masthead" style="background-image: url('<?= RutaCtrl::url('views/assets/img/home-bg.jpg') ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <span class="subheading">Un blog desarrollado por <a href="https://twitter.com/Pablo_WebDev__"
                            target="_blank">
                            <h1>Pablo Martín López</h1>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#">PabloBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="<?= RutaCtrl::url('home') ?>">Home</a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">' . $user->getByid(array('id' => $_SESSION['user']))[0]['nombre'] . ' -- ' . $roles->getByid(array('id' => $_SESSION['rol']))[0]['nombre'] . '</a></li>';
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="' . RutaCtrl::url('rolSelect') . '">Cambiar rol</a></li>';
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="' . RutaCtrl::url('logout') . '">logout</a></li>';
                } else {
                    ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="<?= RutaCtrl::url('login') ?>">login</a></li>
                    <!-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="<?= RutaCtrl::url('register') ?>">registro</a></li> -->
                    <?php
                }
                ?>
                <!-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Contact</a></li> -->
            </ul>
        </div>
    </div>
</nav>