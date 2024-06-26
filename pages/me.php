<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/script.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body style="background: #000;">
    <?php include("../modules/header.php")?>
    <main>
        <section class="me_desktop">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-6">
                        <img src="../img/man.png" class="img_man" alt="">
                    </div>
                    <div class="col-6">
                        <p class="catalog_fz">Наша история</p>
                        <p>Мы - команда энтузиастов, объединённых одной страстью - музыкой. Наша компания была основана в 2017 году, и с тех пор мы привносим радость и гармонию в жизнь музыкантов со всего мира</p>
                        <p class="catalog_fz">Команда</p>
                        <p>Наш коллегтив состоит из опытных музыкантов и профессионалов в области инструментов. Мы разделяем вашу страсть к музыке и стремимся помочь вам найти вашу гитару</p>
                    </div>
                    <div class="col-6 size_text_me">
                        <p class="catalog_fz">Ценности и миссия</p>
                        <p>Наша миссия заключается в предоставлении качественных инструментов для каждого музыканта.<br>
                        Мы верим в силу музыки, и наша цель - обогатить жизни людей через неё</p>
                    </div>
                    <div class="col-6 size_text_me">
                        <p class="catalog_fz">Следите за нами</p>
                        <p>Следите за нами в социальных сетях, чтобы быть в курсе новых поступлений и акций.<br>
                        Спасибо, что выбрали нас!</p>
                    </div>
                    <div class="col-12 mt-3 back_img">
                        <p class="catalog_fz">Наши стенды</p>
                        <div class="grid">
                            <div class="grid__body">
                                <div class="grid__item grid__item_1"><img src="../img/stand1.png" alt=""></div>
                                <div class="grid__item grid__item_2"><img src="../img/stand2.png" alt=""></div>
                                <div class="grid__item grid__item_3"><img src="../img/stand3.png" alt=""></div>
                                <div class="grid__item grid__item_4"><img src="../img/stand4.png" alt=""></div>
                                <div class="grid__item grid__item_5"><img src="../img/stand5.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="me_mobile">
            <div class="img_mobile">
                <div class="mobile_text">
                    <h2 class="text-center">Наша история</h2>
                    <p>Мы - команда энтузиастов, объединённых одной страстью - музыкой. Наша компания была основана в 2017 году, и с тех пор мы привносим радость и гармонию в жизнь музыкантов со всего мира</p>
                    <p class="catalog_fz">Команда</p>
                    <p>Наш коллегтив состоит из опытных музыкантов и профессионалов в области инструментов. Мы разделяем вашу страсть к музыке и стремимся помочь вам найти вашу гитару</p>
                    <p class="catalog_fz">Ценности и миссия</p>
                    <p>Наша миссия заключается в предоставлении качественных инструментов для каждого музыканта.<br>
                    Мы верим в силу музыки, и наша цель - обогатить жизни людей через неё</p>
                    <p class="catalog_fz">Следите за нами</p>
                    <p>Следите за нами в социальных сетях, чтобы быть в курсе новых поступлений и акций<br></p>
                </div>
            </div>
            <!-- Слайдер -->
            <div id="carouselExampleCaptions" class="carousel slide mb-3">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carousel_stand">
                    <div class="carousel-item active">
                        <img src="../img/stand1_mobile.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/stand2_mobile.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/stand3_mobile.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>