<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="contact-area">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-dark">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <h1 class="mt-4 pb-5">Contact Us.</h1>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="circle">
                            <span><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <h5>Address</h5>
                        <p>Somewhere in Indonesia</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="circle">
                            <span><i class="fas fa-envelope"></i></span>
                        </div>
                        <h5>Email</h5>
                        <p>richardenrico02@gmail.com</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                        <div class="circle">
                            <span><i class="fas fa-phone"></i></span>
                        </div>
                        <h5>Phone</h5>
                        <p>+6234567890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 mx-auto pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="">
                            <input type="text" class="form-control bg-light mb-3" placeholder="Name">
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <input type="text" class="form-control bg-light mb-3" placeholder="Email">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea name="" id="" cols="30" rows="10" class="form-control bg-light" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="site-button">
                    <div class="d-flex flex-row flex-wrap">
                        <button type="button" class="ml-auto btn button primary-button mt-5 text-uppercase">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>