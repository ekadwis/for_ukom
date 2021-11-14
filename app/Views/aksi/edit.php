<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<form class="row mx-auto" action="/save" method="POST" enctype="multipart/form-data" style="width: 40%;">
    <h3 class="mb-4">Form Edit</h3>
    <div class="col-md-6">
        <label for="id_barang" class="form-label">ID Barang</label>
        <input type="text" class="form-control" id="id_barang" value="<?= $result['id_barang']; ?>" readonly name="id_barang">
    </div>
    <div class="col-md-6">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" value="<?= $result['nama_barang']; ?>" name="nama_barang">
    </div>
    <div class="col-md-6 my-2">
        <label for="spesifikasi" class="form-label">Spesifikasi</label>
        <input type="text" class="form-control" id="spesifikasi" value="<?= $result['spesifikasi']; ?>" name="spesifikasi">
    </div>
    <div class="col-md-6 my-2">
        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
        <input type="text" class="form-control" id="jumlah_barang" value="<?= $result['jumlah_barang']; ?>" name="jumlah_barang">
    </div>
    <div class="col-12">
        <label for="kondisi" class="form-label">Kondisi</label>
        <select class="form-select" aria-label="Default select example" name="kondisi">
            <option selected value="<?= $result['kondisi']; ?>"><?= $result['kondisi']; ?></option>
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
        </select>
    </div>
    <div class="col-12">
        <label for="lokasi" class="form-label">Lokasi</label>
        <select class="form-select" aria-label="Default select example" name="lokasi">
            <option selected value="<?= $result['lokasi']; ?>"><?= $result['lokasi']; ?></option>
            <option value="R001">Lab RPL 1</option>
            <option value="R002">Lab RPL 2</option>
            <option value="R003">Lab TKJ 1</option>
            <option value="R004">Lab TKJ 2</option>
            <option value="R005">Lab Multimedia</option>
        </select>
    </div>
    <div class="col-12">
        <label for="sumber_dana" class="form-label">Sumber Dana</label>
        <select class="form-select" aria-label="Default select example" name="sumber_dana">
            <option selected value="<?= $result['sumber_dana']; ?>"><?= $result['sumber_dana']; ?></option>
            <option value="S001">Komite 07/09</option>
            <option value="S002">Komite 13</option>
            <option value="S003">Sed t-vet</option>
            <option value="S004">BOPD 2020</option>
            <option value="S005">BOSDA 2018</option>
        </select>
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
    </div>
    <div class="mt-3 text-end">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</form>
<?= $this->endSection(); ?>