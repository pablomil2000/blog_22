<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">

        <form method="POST" action="">

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">acceder como...</label>

                <select name="rol" id="" class="form-control">
                    <?php
                    foreach ($mis_roles as $key => $rol) {
                        echo '<option value="' . $rol['rol_id'] . '">' . $roles->getByid(array('id' => $rol['rol_id']))[0]['nombre'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-primary btn-block mb-4" onclick="submit()">Iniciar sesion</button>

                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="logout">Cerrar sesion</a>
                </div>
            </div>

            <!-- Submit button -->
        </form>
    </div>
</div>