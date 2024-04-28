<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent post</h6>
            <a href="<?= RutaCtrl::url('posts') ?>">Show All</a>
        </div>
        <?php
        include ('views/partials/table-posts.view.php');
        ?>
    </div>
</div>
<!-- Recent Sales End -->