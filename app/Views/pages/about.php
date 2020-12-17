<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col mt-4">
            <h1>About Me</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <div class="div">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas cumque ab quis officiis vel reiciendis quos tenetur voluptatum. Maxime voluptatem eius neque rerum? Enim sequi adipisci obcaecati, deserunt fugiat dolor.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore quasi delectus, harum magnam possimus sint nulla perspiciatis, ipsum eos similique cumque, et nihil dicta odit voluptatum reprehenderit porro iusto.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis a labore iusto. Enim, tempora. Autem laudantium adipisci laborum totam. Nihil, pariatur a. Rem, ipsam sunt? Voluptates animi maiores quae ipsa.
            </p>
            </div>
            <div>
                <div class="col-lg-12 text-center">
                    <p>follow me on.</p>
                </div>
            </div>
            <div class="social text-center">
                <a href="https://www.facebook.com/richard.enrico.5">
                    <i class="fab fa-facebook mr-2"></i>
                </a>
                <a href="https://www.instagram.com/richardenrico/">
                    <i class="fab fa-instagram mr-2"></i>
                </a>
                <a href="https://github.com/richardenrico">
                    <i class="fab fa-github mr-2"></i>
                </a>
            </div>
            
        </div>
    </div>
</div>

<?= $this->endSection(); ?>