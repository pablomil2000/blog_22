<div class="container-fluid position-relative d-flex p-0">
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->


  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
      <a href="index.html" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
          <img class="rounded-circle" src="<?= RutaCtrl::url('views/assets/img/user.jpg') ?>" alt=""
            style="width: 40px; height: 40px;">
          <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
          </div>
        </div>
        <div class="ms-3">
          <h6 class="mb-0"><?= $user[0]['nombre'] ?></h6>
          <span>Admin</span>
        </div>
      </div>
      <div class="navbar-nav w-100">
        <a href="<?= RutaCtrl::url('home') ?>"
          class="nav-item nav-link <?= $url[0] == 'home' || $url[0] == '' ? 'active' : '' ?>"><i
            class="fa fa-home me-2"></i>Home</a>
        <!-- <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
              class="fa fa-laptop me-2"></i>Elements</a>
          <div class="dropdown-menu bg-transparent border-0">
            <a href="button.html" class="dropdown-item">Buttons</a>
          </div>
        </div> -->
        <a href="<?= RutaCtrl::url('posts') ?>" class="nav-item nav-link <?= $url[0] == 'posts' ? 'active' : '' ?>"><i
            class="fa fa-clipboard me-2"></i>Posts</a>
      </div>
    </nav>
  </div>
  <!-- Sidebar End -->


  <!-- Content Start -->
  <div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
      <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
      </a>
      <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
      </a>
      <div class="navbar-nav align-items-center ms-auto">

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="<?= RutaCtrl::url('views/assets/img/user.jpg') ?>" alt=""
              style="width: 40px; height: 40px;">
            <span class="d-none d-lg-inline-flex"><?= $user[0]['nombre'] ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
            <a href="<?= RutaCtrl::url('logout') ?>" class="dropdown-item">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->