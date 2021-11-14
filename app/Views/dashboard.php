<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<h3>Dashboard</h3>
<p class="list-data">List Data Barang</p>


<ul class="list-group list-group-horizontal justify-content-center">
    <?php foreach ($result_barang as $rs) : ?>
        <li class="mx-3">

            <div class="card" style="width: 200px;">
                <img src="img/<?= $rs['image']; ?>" class="card-img-top card-img-size" alt="...">
                <div class="card-body">

                    <span class="d-flex justify-content-between">
                        <h5 class="card-title fs-6 my-2"><?= $rs['nama_table']; ?></h5>
                        <h5 class="fs-6 my-2">20</h5>
                    </span>
                    <a href="/<?= $rs['slug']; ?>" class="btn btn-outline-primary button-size">View More</a>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<p class="list-data mt-5">List Data User</p>
<ul class="list-group list-group-horizontal justify-content-center">
    <?php foreach ($result_user as $ru) : ?>
        <li class="mx-3">

            <div class="card" style="width: 200px;">
                <img src="img/kursi.png<?= $ru['image']; ?>" class="card-img-top card-img-size" alt="...">
                <div class="card-body">
                    <span class="d-flex justify-content-between">
                        <h5 class="card-title fs-6 my-2"><?= $ru['nama_table']; ?></h5>
                        <h5 class="fs-6 my-2">20</h5>
                    </span>

                    <a href="#" class="btn btn-outline-primary button-size">View More</a>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection(); ?>