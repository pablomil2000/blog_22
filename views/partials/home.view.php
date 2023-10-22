<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php
            foreach ($posts as $key => $post) {
            ?>
                <div class="post-preview">
                    <a href="post&post=<?= $post['id'] ?>">
                        <h2 class="post-title"><?= $post['titulo'] ?></h2>
                        <h3 class="post-subtitle">
                            <?php
                            $texto = $post['texto'];
                            $vec = explode(' ', $texto);
                            if (count($vec) > $MAXIMO_PALABRAS) {
                                $texto = '';
                                for ($i = 0; $i < $MAXIMO_PALABRAS; $i++) {
                                    $texto .= $vec[$i] . ' ';
                                }
                                $texto .= '...';
                            }
                            echo $texto;
                            ?>
                        </h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!"><?= $Users->getById(array('id' => $post['autor']))[0]['nombre'] ?></a>
                        on <?= Funciones::dateFormat($post['fecha'], 'M d, Y') ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            <?php
            }
            ?>

            <?php

            if ($page != 0) {
            ?>
                <!-- Pager-->
                <div class="d-flex justify-content-start">
                    <a class="btn btn-primary text-uppercase" href="home&page=<?= $PaginacionPost->previus() ?>">Older Posts →</a>
                </div>
            <?php
            }
            // var_dump($PaginacionPost->numPages, $PaginacionPost->page);
            if ($PaginacionPost->numPages - 1 > $PaginacionPost->page) {
            ?>
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="home&page=<?= $PaginacionPost->next() ?>">Older Posts →</a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</div>