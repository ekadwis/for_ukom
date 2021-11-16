<?= $this->extend('layouts/template'); ?>

<?php $this->section('content') ?>
<h3>Data Barang</h3>

<!-- Modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
</button>

<!-- Tambah Data Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/tambahbarang" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">ID Barang</label>
                        <input type="text" class="form-control" id="id_barang" aria-describedby="emailHelp" name="id_barang" value="<?= $newkodebarang; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" name="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="spesifikasi" class="form-label">Spesifikasi</label>
                        <input type="text" class="form-control" id="spesifikasi" aria-describedby="emailHelp" name="spesifikasi">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <select class="form-select" aria-label="Default select example" name="lokasi">
                            <option selected value="R001">Lab RPL 1</option>
                            <option value="R002">Lab RPL 2</option>
                            <option value="R003">Lab TKJ 1</option>
                            <option value="R004">Lab TKJ 2</option>
                            <option value="R005">Lab Multimedia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <select class="form-select" aria-label="Default select example" name="kondisi">
                            <option selected value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah_barang" aria-describedby="emailHelp" name="jumlah_barang">
                    </div>
                    <div class="mb-3">
                        <label for="sumber_dana" class="form-label">Sumber Dana</label>
                        <select class="form-select" aria-label="Default select example" name="sumber_dana">
                            <option selected value="S001">Komite 07/09</option>
                            <option value="S002">Komite 13</option>
                            <option value="S003">Sed t-vet</option>
                            <option value="S004">BOPD 2020</option>
                            <option value="S005">BOSDA 2018</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="container pt-4">
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>
<p class="list-data">Barang</p>


<div class="card-group justify-content-start mb-3">
    <?php foreach ($result as $results) : ?>
        <div class="row">
            <div class="col-sm-3">
                <div class="card mx-2 my-2" style="width: 17rem;">
                    <img src="img/<?= $results['image']; ?>" class="card-img-top" style="height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title fs-5" style="height: 50px;"><?= $results['nama_barang']; ?> </h5>
                        <span class="justify-content-center">
                            <a href="/detail/<?= $results['id_barang']; ?>" class="btn btn-outline-primary" style="width: 60%;">Detail</a>
                            <a href="/edit/<?= $results['id_barang']; ?>" class="btn btn-secondary" title="Edit"><i class=" fas fa-edit"></i></a>
                            <a href="/delete/<?= $results['id_barang']; ?>" class="btn btn-secondary" title="Hapus"><i class="fas fa-trash"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?= $pager->links('barang', 'barang_pager'); ?>

<?= $this->endSection(); ?>