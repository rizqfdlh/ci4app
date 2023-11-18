<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Komik/create" class="btn btn-primary my-3">Tambah Data</a>
            <?php if (session()->has('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session('pesan') ?>
                </div>
            <?php endif; ?>
            <h1>Tabel Komik</h1>

            <table class="table">
                <caption>List of komik</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?= $i = 1; ?> -->
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="sampul" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>