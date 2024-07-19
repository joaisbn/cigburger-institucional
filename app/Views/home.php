<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGBurger</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!-- app.css -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <a href="<?= site_url('/') ?>">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurger Logo" class="logo">
                </a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/where_we_are') ?>">Onde estamos?</a></div>
            </div>
        </div>
    </nav>

    <!-- main -->
    <section class="container-fluid bg-color-02">
        <div class="row">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/images/main_burger_01.png') ?>" alt="The best in the world!">
                </div>
                <div class="text-center">
                    <h3 class="mb-5">Deliciosos e com grandes descontos</h3>
                    <a class="btn-products" href="<?= site_url('products') ?>">Produtos</a>
                </div>
            </div>
            <div class="col text-center p-5">
                <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="The best in the world!">
            </div>
        </div>
    </section>

    <!-- social networks -->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#" target="_blank"><img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram" class="social-network"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#" target="_blank"><img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook" class="social-network"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#" target="_blank"><img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="Whatsapp" class="social-network"></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="row mt-4">
        <div class="col text-center">
            <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>