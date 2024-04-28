<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Crear nuevo post</h6>

      <a href="<?= RutaCtrl::url('posts') ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-arrow-left"></i>
        Volver
      </a>
    </div>
    <div class="table-responsive">

      <form method="post">
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
          <label for="contenido" class="form-label">Contenido</label>
          <!-- <textarea class="form-control" id="contenido" name="contenido" rows="3" required></textarea> -->
          <input type="text" id="summernote" name="text">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>

    </div>
  </div>
</div>