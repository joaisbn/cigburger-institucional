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
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurger Logo" class="logo">
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/where_we_are') ?>">Onde estamos?</a></div>
            </div>
        </div>
    </nav>

    <!-- main -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our room">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Paris</p>
                <p class="where-we-are-subtitle">Rua des hamburgers, 123 Paris</p>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati distinctio reprehenderit optio? Praesentium odio dicta optio explicabo, nisi corrupti eveniet repellat. Vel pariatur facere laboriosam modi iste corporis repellendus nulla.</p>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                    <p class="where-we-are-title ms-3 mb-0">
                        <a class="nav-link" href="tel:+552122345678">+55 21 2234-5678</a>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="E-mail">
                    <p class="where-we-are-title ms-3 mb-0">
                        <a class="nav-link" href="mailto:contato@cigburger.com">contato@cigburger.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Map">
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