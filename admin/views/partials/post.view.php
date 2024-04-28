<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0"><?= $post[0]['titulo'] ?></h6>

      <a href="<?= RutaCtrl::url('posts') ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-arrow-left"></i>
        Volver
      </a>
    </div>
    <div class="table-responsive">
      <?= $post[0]['texto'] ?>
    </div>
  </div>
</div>