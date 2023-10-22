<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="home">Home</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">' . $user->getByid(array('id' => $_SESSION['user']))[0]['nombre'] . ' -- ' . $roles->getByid(array('id' => $_SESSION['rol']))[0]['nombre'] . '</a></li>';
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="rolSelect">Cambiar rol</a></li>';
                    echo '<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout">logout</a></li>';
                } else {
                ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login">login</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register">registro</a></li>
                <?php
                }
                ?>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>