<?php include('views/modules/head.php'); ?>

<body>
    <!-- Navigation-->
    <?php include('views/modules/navbar.php'); ?>
    <!-- Page Header-->
    <?php include('views/modules/header.php'); ?>
    <!-- Main Content-->
    <?php PlantillaCtr::whiteList(array('login'), true, array('rolSelect', 'logout', 'post')); ?>

    <!-- Footer-->
    <?php include('views/modules/footer.php'); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="views/js/scripts.js"></script>
</body>

</html>