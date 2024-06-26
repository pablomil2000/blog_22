<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php
            foreach ($posts as $key => $post) {
                ?>
                <div class="post-preview">
                    <a href="post/<?= $post['slug'] ?>">
                        <h2 class="post-title"><?= $post['titulo'] ?></h2>
                    </a>
                    <p class="post-meta">
                        Publicado por
                        <a href="#!"><?= $Users->getById(array('id' => $post['autor']))[0]['nombre'] ?></a>
                        el <?= Funciones::dateFormat($post['fecha'], 'M d, Y') ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <?php
            }
            ?>

            <!-- Pager-->
            <div class="d-flex">
                <?php

                if ($page != 0) {
                    ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-start mb-4">
                        <a class="btn btn-primary text-uppercase" href="home&page=<?= $PaginacionPost->previus() ?>">← Newer
                            Posts</a>
                    </div>
                    <?php
                }
                // var_dump($PaginacionPost->numPages, $PaginacionPost->page);
                if ($PaginacionPost->numPages - 1 > $PaginacionPost->page) {
                    ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary text-uppercase" href="home&page=<?= $PaginacionPost->next() ?>">Older
                            Posts →</a>
                    </div>
                    <?php
                }
                ?>
            </div>


        </div>
    </div>
</div>