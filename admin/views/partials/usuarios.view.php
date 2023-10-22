<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>roles</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $key => $user) {

                            $userRol = $misRoles->getByid(array('user_id' => $user['id']));

                            foreach ($userRol as $key => $value) {
                                $cad[] = $value['rol_id'];
                            }

                            $roles = $rol->getByField('(' . implode(', ', $cad) . ')', 'id');

                            foreach ($roles as $key => $value) {
                                $roles2[] = $value['nombre'];
                            }

                            // var_dump($cad);
                        ?>
                            <tr>
                                <td scope="row"><?= $user['id'] ?></td>
                                <td><?= $user['nombre'] ?></td>
                                <td> <?= implode(', ', $roles2); ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <!-- Footer -->
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>


<!-- Ventana modal con el formulario de alta -->
<div class="modal fade" id="modalAlta">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Añadir usuarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                El formulario de nuevo usuario
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar </button>
                <button type="button" class="btn btn-primary">Guardar Usuario</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->