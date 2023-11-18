<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-8">
                <h2 class="my-3">Ubah Data Komik</h2>
                <?php if (session()->has('salah')) : ?>
                    <div class="alert alert-success">
                        <?= session('salah') ?>
                    </div>
                <?php endif; ?>
                <form action="/Komik/update/<?= $komik['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $komik['judul']; ?>" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $komik['penulis']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $komik['penerbit']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $komik['sampul']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>