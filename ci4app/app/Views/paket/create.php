<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Paket</h2>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Terjadi Kesalahan !</strong>
                    <br>
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiis="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <form action="/paket/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="paket" class="col-sm-2 col-form-label">Nama Paket</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="paket" name="paket" autofocus value="<?= old('paket') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_paket" class="col-sm-2 col-form-label">Kode Paket</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode_paket" name="kode_paket" value="<?= old('kode_paket') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="satker" class="col-sm-2 col-form-label">Satuan Kerja</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="satker" name="satker" value="<?= old('satker') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_kontrak" class="col-sm-2 col-form-label">Nilai Kontrak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nilai_kontrak" name="nilai_kontrak" value="<?= old('nilai_kontrak') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun_anggaran" class="col-sm-2 col-form-label">Tahun Anggaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tahun_anggaran" name="tahun_anggaran" value="<?= old('tahun_anggaran') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="metode" class="col-sm-2 col-form-label">Metode Pengadaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="metode" name="metode" value="<?= old('metode') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pemenang" class="col-sm-2 col-form-label">Pemenang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pemenang" name="pemenang" value="<?= old('pemenang') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= old('npwp') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="personil" class="col-sm-2 col-form-label">Personil</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="personil" name="personil" value="<?= old('personil') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_kontrak" class="col-sm-2 col-form-label">Nomor Kontrak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" value="<?= old('no_kontrak') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ppk" class="col-sm-2 col-form-label">PPK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ppk" name="ppk" value="<?= old('ppk') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ulasan" class="col-sm-2 col-form-label">Ulasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ulasan" name="ulasan" value="<?= old('ulasan') ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>