<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Recent post</h6>

      <a href="<?= RutaCtrl::url('posts/new') ?>" class="btn btn-sm btn-primary">Nuevo post</a>
    </div>

    <?php
    include ('views/partials/table-posts.view.php');
    ?>
  </div>
</div>