<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<h3 class="text-center">Detail</h3>

<p class="list-data text-center"><?= $result['nama_barang']; ?></p>
<div class="card mx-auto" style="width: 25rem;">
    <img src="/img/<?= $result['image']; ?>" class="card-img-top" alt="..." style="height: 280px;">
    <div class="card-body">
        <p class="fs-6">Nama Barang : <?= $result['nama_barang']; ?></p>
        <p class="fs-6">Spesifikasi : <?= $result['spesifikasi']; ?></p>
        <p class="fs-6">Lokasi : <?= $result['lokasi']; ?></p>
        <p class="fs-6">Kondisi : <?= $result['kondisi']; ?></p>
        <p class="fs-6">Jumlah Barang: <?= $result['jumlah_barang']; ?></p>
        <p class="fs-6">Sumber Dana : <?= $result['sumber_dana']; ?></p>
        <a href="/barang" class="btn btn-secondary" style="width: 20%;">
            Back
        </a>
    </div>

</div>
<?= $this->endSection(); ?>