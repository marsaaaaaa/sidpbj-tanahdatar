<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Paket</h2>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $paket['paket']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $paket['kode_paket']; ?></h6>
                    <li class="list-group-item"><b>Satuan Kerja : </b><?= $paket['satker']; ?></li>
                    <li class="list-group-item"><b>Nilai Kontrak : </b><?= $paket['nilai_kontrak']; ?></li>
                    <li class="list-group-item"><b>Metode Pengadaan : </b><?= $paket['metode']; ?></li>
                    <li class="list-group-item"><b>Tahun Anggaran : </b><?= $paket['tahun_anggaran']; ?></li>
                    <li class="list-group-item"><b>Pemenang : </b><?= $paket['pemenang']; ?></li>
                    <li class="list-group-item"><b>NPWP : </b><?= $paket['npwp']; ?></li>
                    <li class="list-group-item"><b>Personil : </b><?= $paket['personil']; ?></li>
                    <li class="list-group-item"><b>Nomor Kontrak : </b><?= $paket['no_kontrak']; ?></li>
                    <li class="list-group-item"><b>PPK : </b><?= $paket['ppk']; ?></li>
                    <p class="card-text"><b>Ulasan : </b><?= $paket['ulasan']; ?></p>



                    <a href="/paket/edit/<?= $paket['slug']; ?>" class="btn btn-warning">Edit</a>

                    <form action="/paket/<?= $paket['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                    </form>

                    <br><br>
                    <a href="/paket">Kembali ke Daftar Paket</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>