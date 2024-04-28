<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Posts</h6>

      <a href="<?= RutaCtrl::url('posts/create') ?>" class="btn btn-sm btn-primary">
        <i class="fas fa-plus-circle"></i>
        Nuevo post
      </a>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-white">
            <th scope="col">id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Visitas</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($posts as $post) {
            ?>
            <tr>
              <td><?= $post['id'] ?></td>
              <td><?= $post['titulo'] ?></td>
              <td><?= $post['autor'] ?></td>
              <td><?= Funciones::dateFormat($post['fecha']) ?></td>
              <td><?= $post['views'] ?></td>
              <td><a class="btn btn-sm btn-primary" href="<?= RutaCtrl::url('posts/' . $post['slug']) ?>">Ver</a>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6" class="p-2">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <?= $PaginacionPost->getPagination(); ?>
                </ul>
              </nav>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>