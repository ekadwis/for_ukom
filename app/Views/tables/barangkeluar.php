<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<h3>Data Barang</h3>

<p class="list-data">Barang Keluar</p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No. </th>
            <th scope="col">ID Barang</th>
            <th scope="col">Tanggal Keluar</th>
            <th scope="col">Jumlah Keluar</th>
            <th scope="col">Supplier</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($result as $results) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $results['id_barang']; ?></td>
                <td><?= $results['tgl_keluar']; ?></td>
                <td><?= $results['jml_keluar']; ?></td>
                <td><?= $results['supplier']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $pager->links('barang', 'barang_pager'); ?>


<?= $this->endSection(); ?>
<?= $this->include('layouts/footer'); ?>