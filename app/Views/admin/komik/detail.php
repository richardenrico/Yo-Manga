<?= $this->extend('admin/layout/templates'); ?>


<?= $this->section('content'); ?>

<div class="container detail">
    <div class="row mt-4">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/komik">Comic</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $komik['judul']; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h1 class="title mt-2"><?= $komik['judul']; ?></h1>
        </div>
    </div>
    <div class="row detail-content mt-4">
        <div class="col-lg-4">
            <img src="/img/<?= $komik['sampul']; ?>" class="mx-auto d-block" alt="..." style="width: 215px; height: 300px">
        </div>
        <div class="col-lg-8">
            <div class="card text-whitesmoke bg-dark mb-3" style="width: 45.6rem;">
                <div class="card-header text-uppercase py-3" style="color: #555555; text-align: center; background-color: #D0CD3F;">
                    Information
                </div>
                <div class="card-body pt-4 pb-3">
                    <div class="row">
                        <div class="col-4 title">
                            <p style="color: #D0CD3F;">
                                Title
                            </p>
                        </div>
                        <div class="col-8 content">
                            <?= $komik['judul']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 title">
                            <p style="color: #D0CD3F;">
                                Author
                            </p>
                        </div>
                        <div class="col-8 content">
                            <?= $komik['penulis']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 title">
                            <p style="color: #D0CD3F;">
                                Publisher
                            </p>
                        </div>
                        <div class="col-8 content">
                            <?= $komik['penerbit']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 title">
                            <p style="color: #D0CD3F;">
                                Created At
                            </p>
                        </div>
                        <div class="col-8 content">
                            <?= $komik['created_at']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 title">
                            <p style="color: #D0CD3F;">
                                Updated At
                            </p>
                        </div>
                        <div class="col-8 content">
                            <?= $komik['updated_at']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card text-whitesmoke bg-dark mb-3" style="width: 100%;">
                <div class="card-header text-uppercase py-3" style="color: #555555; text-align: center; background-color: #D0CD3F;">
                    Synopsis
                </div>
                <div class="card-body pt-4 pb-3">
                    <div class="row">
                        <div class="col">
                            <p>
                                <?= $komik['sinopsis']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col ml-auto">
            <div class="float-end">
                <a href="/admin/komik/edit/<?= $komik['slug']; ?>" class="button edit-button btn btn-warning">Edit</a>
            
                <form action="/admin/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="button delete-button  btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>