<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link rel="icon" href="/logo.ico" type="image/gif">

    <link rel="stylesheet" href="/css/style.css">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding-top: 5rem;
            font-family: 'Audiowide', cursive;
            margin: 0%;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            background-color: #121212;
            color: #121212;
        }
    </style>
    
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div class="copyright text-center">
                    <p>copyright©2020. <br> all rights reserved by 
                        <a href="https://github.com/richardenrico">
                        richardenrico
                        </a>
                    </p> 
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
