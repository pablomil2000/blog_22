<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded-top p-4">
    <div class="row">
      <div class="col-12 col-sm-6 text-center text-sm-start">
        &copy;2024 <a href="https://github.com/pablomil2000/">Pablo Martín López </a>, All Right Reserved.
      </div>
      <div class="col-12 col-sm-6 text-center text-sm-end">
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= RutaCtrl::url('views/assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

<!-- Template Javascript -->
<script src="<?= RutaCtrl::url('views/assets/lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?= RutaCtrl::url('views/assets/js/main.js') ?>"></script>

<link href="<?= RutaCtrl::url('views/assets/lib/summernote/summernote.min.css') ?>" rel="stylesheet" />
<script src="<?= RutaCtrl::url('views/assets/lib/summernote/summernote.min.js') ?>"></script>
<script>
  $(document).ready(function () {
    $('#summernote').summernote(
      {
        height: 300
      }
    );
  });
</script>
</body>

</html>