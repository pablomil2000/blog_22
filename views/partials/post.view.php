<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1 class="post-title"><?= $post['0']['titulo'] ?></h1>

            </div>

            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>
                    <?= $post['0']['texto'] ?>
                </p>
                <p class="post-meta d-flex justify-content-around">
                    <span>
                        Posted by
                        <a href="#!"><?= $UserCtrl->getById(array('id' => $post[0]['autor']))[0]['nombre'] ?></a>
                        on <?= Funciones::dateFormat($post[0]['fecha'], 'M d, Y') ?>
                    </span>
                    <a href="<?= RutaCtrl::url() ?>" class="btn btn-primary">volver</a>
                </p>

            </div>
        </div>
    </div>
</article>