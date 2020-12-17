<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                        <a href="/komik/<?= $k['slug']; ?>" class="button primary-button btn btn-success">Detail</a>
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