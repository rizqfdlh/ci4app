<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-3">Detail Komik</h1>
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="/img/<?= $komik['sampul']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam vitae libero eos? Commodi culpa sapiente quam sequi. Quod blanditiis consequuntur quo ad vitae mollitia beatae iusto, accusamus nam magni quos!</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Penulis :</b><?= $komik['penulis']; ?></li>
                    <li class="list-group-item"><b>Penerbit :</b><?= $komik['penerbit']; ?></li>
                </ul>
                <div class="card-body">
                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="card-link btn btn-warning">Update</a>
                    <a href="/Komik/delete/<?= $komik['id']; ?>" class="card-link btn btn-danger">Delet</a>
                    <a href="/Komik/" class="card-link btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>