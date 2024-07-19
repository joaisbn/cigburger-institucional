<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

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

<?= $this->endSection() ?>