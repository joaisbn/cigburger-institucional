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
    <section class="container">
        <div class="col">
            <!-- burger 01 -->
            <div class="row mt-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burger 1">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 01</h1>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam similique, sed dignissimos aspernatur, non quis ex eius culpa, officia placeat rerum delectus labore temporibus reprehenderit fugit? Quo maiores aliquam sunt?
                        Quisquam numquam, quos, possimus sit hic modi tempore libero saepe accusantium nostrum dolor sint molestias nam vero corporis, facere dolores enim quaerat quod? Veniam cumque iure dolores, consequatur ea magnam?</p>
                    <h2 class="mt-3 product-text-color">R$ 15,00</h2>
                </div>
            </div>
            <!-- burger 02 -->
            <div class="row mt-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 02</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam mollitia laboriosam veniam, amet est ex beatae repellat, iste alias tempore voluptates officia, dolores explicabo error ipsum culpa impedit? Repellat, modi!</p>
                    <h2 class="mt-3 product-text-color">R$ 14,00</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burger 2">
                </div>
            </div>
            <!-- burger 03 -->
            <div class="row mt-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burger 3">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 03</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur expedita dolorem libero placeat illo, tenetur consequatur consequuntur, soluta eveniet quis laudantium amet temporibus tempora aliquam dolore eaque eligendi, doloremque enim.</p>
                    <h2 class="mt-3 product-text-color">R$ 12,00</h2>
                </div>
            </div>
            <!-- burger 04 -->
            <div class="row mt-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 04</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis at ullam, animi vitae autem, consequatur dolorum rem iure distinctio impedit reiciendis sequi dolores minus voluptates accusamus nisi quaerat ducimus?2.5</p>
                    <h2 class="mt-3 product-text-color">R$ 9,00</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burger 4">
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