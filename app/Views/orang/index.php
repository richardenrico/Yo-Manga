<?= $this->extend('admin/layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control bg-dark text-light" placeholder="Insert user name..." aria-label="Masukkan keyword pencarian.." aria-describedby="button-addon2" name="keyword">
                    <button class="button primary-button btn ml-3" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h1 class="title mt-2">List User</h1>
        </div>
    </div>
    <div class="row mt-5 ">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['email']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>