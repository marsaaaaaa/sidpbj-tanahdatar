<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/paket/create" class="btn btn-primary mt-3">Tambah Data Paket</a>
            <h1 class="mt-2">Daftar Paket</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Paket</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Satuan Kerja</th>
                        <th scope="col">Nilai Kontrak</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($paket as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['kode_paket']; ?></td>
                            <td><?= $p['paket']; ?></td>
                            <td><?= $p['satker']; ?></td>
                            <td><?= $p['nilai_kontrak']; ?></td>
                            <td>
                                <a href="/paket/<?= $p['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>