<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Daftar Penyedia</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pencarian" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Bentuk Usaha</th>
                        <th scope="col">NPWP</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Kabupaten/Kota</th>
                        <th scope="col">Provinsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (3 * ($currentPage - 1)); ?>
                    <?php foreach ($penyedia as $pe) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $pe['nama']; ?></td>
                            <td><?= $pe['alamat']; ?></td>
                            <td><?= $pe['bentuk_usaha']; ?></td>
                            <td><?= $pe['npwp']; ?></td>
                            <td><?= $pe['email']; ?></td>
                            <td><?= $pe['no_hp']; ?></td>
                            <td><?= $pe['kab_kota']; ?></td>
                            <td><?= $pe['provinsi']; ?></td>
                            <td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('penyedia', 'penyedia_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>