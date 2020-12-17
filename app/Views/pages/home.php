<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container home">
    <div class="row mt-4">
        <div class="col mt-5">
            <span class="align-middle">
                <img class="mt-5 mx-auto d-block" src="/img/logo/logo_1.jpg" alt="">
            </span>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-8 mx-auto">
        <form action="/komik/" method="get">
                <div class="input-group">
                    <input type="text" class="form-control bg-dark text-light" placeholder="Nama Komik" aria-label="Masukkan keyword pencarian.." aria-describedby="button-addon2" name="keyword">
                    <button class="button primary-button btn ml-3" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>