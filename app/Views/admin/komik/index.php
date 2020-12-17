<?= $this->extend('admin/layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comic</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control bg-dark text-light" placeholder="Nama Komik" aria-label="Masukkan keyword pencarian.." aria-describedby="button-addon2" name="keyword">
                    <button class="button primary-button btn ml-3" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h1 class="title mt-2">Comic List</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($komik as $k) : ?>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="hovereffect">
                    <img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul">
                    <div class="overlay">
                        <h2><?= $k['judul']; ?></h2>
                        <a href="/admin/komik/<?= $k['slug']; ?>" class="button primary-button btn btn-success">Detail</a>
                        <a href="/admin/komik/edit/<?= $k['slug']; ?>" class="button edit-button btn btn-warning">Edit</a>
                        <form action="/admin/komik/<?= $k['id']; ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="button delete-button btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col mx-auto mt-5">
            <?= $pager->links('komik', 'orang_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>