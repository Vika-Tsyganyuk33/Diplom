<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <script defer src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="./js/script.js"></script>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body style="background: #000;">
    <?php include("modules/header.php")?>
    <main>

    
        <section class="container start text-white">
            <div class="container">
                <div class="row align-items-center main_guitar">
                    <div class="col">
                    <img src="./img/guitar.png" alt=""> 
                    </div>
                    <div class="col menu_block">
                        <p class="text_menu">СОЗДАВАЙ<br>
                        <span class="yellow my">СВОЮ</span><br>
                        МУЗЫКУ</p>
                    </div>
                </div>
                <div class="main_guitar-size">
                    <img src="./img/guitar2.png" alt="">
                    <p class="text_menu-size">СОЗДАВАЙ<br>
                        <span class="yellow my-size">СВОЮ</span><br>
                        МУЗЫКУ</p>
                </div>
            </div>   
        </section>
        <section>
            <hr size="18px" class="beige">
        </section>
        <section class="block_me">
            <div>
                <div class="row container align-items-center">
                    <div class="col-xs-12 col-md-6 block_one grey text-center">
                        <div class="border_yellow">
                            <p>Почему<br>выбирают<br>нас</p>
                            <p class="border_yellow_text text-center">Почему выбирают нас</p>
                        </div>
                    </div>
                    <div class="col block_two">
                        <div>
                            <img src="../img/icon/plus1.svg" alt=""><p>ГАРАНТИЯ КАЧЕСТВА</p>
                        </div>
                        <div>
                            <img src="../img/icon/plus2.svg" alt=""><p>БЫСТРАЯ ДОСТАВКА</p>
                        </div>
                        <div>
                            <img src="../img/icon/plus3.svg" alt=""><p>ШИРОКИЙ АССОРТИМЕНТ</p>
                        </div>
                        <div>
                            <img src="../img/icon/plus4.svg" alt=""><p class="hyphenate">КОМПЕТЕНТНЫЙ ПЕРСОНАЛ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <hr size="18px" class="beige">
        </section>
        <section>
            <div class="row container align-items-center text-center">
                <div class="col-xs-12 col-sm-6">
                    <div class="stock_one" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        <img src="./img/img_color.png" alt="">
                        <div class="yellow_block">
                            <p>Большой выбор цветов</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="stock_two">
                        <img src="./img/img_count.png" alt="">
                        <div class="yellow_block">
                            <p>Вдвоём выгоднее</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="causes">
            <h2 class="text-center">Причины научиться играть на гитаре:</h2>
            <div class="row container align-items-center mt-4 block_number">
                <div class="col">
                    <div class="col-12">
                        <div class="radius text-center"><p>1</p></div>
                        <p class="causes_p">Игра улучшает память и концентрацию</p>
                    </div>
                    <div class="col-12">
                        <div class="radius text-center"><p>2</p></div>
                        <p class="causes_p">Гитара прокачивает многозадачность</p>
                    </div>
                </div>
                <div class="col">
                    <div class="col-12">
                        <div class="radius text-center"><p>3</p></div>
                        <p class="causes_p">Развивают математические способности</p>
                    </div>
                    <div class="col-12">
                        <div class="radius text-center"><p>4</p></div>
                        <p class="causes_p">Гитара развивает творческие способности</p>
                    </div>
                </div>
                <div class="col-12 text-center div_yellow_five">
                    <div class="radius"><p>5</p></div>
                    <p>Музыка позволяет <span class="yellow">стать частью</span> чего-то большего</p>
                </div>
            </div>
            <div class="row container align-items-center mt-4 block_number2">
                <div class="col-12">
                    <div class="col-12 inform_table">
                        <div class="radius text-center"><p>1</p></div>
                        <p class="causes_p">Игра улучшает память и концентрацию</p>
                    </div>
                    <div class="col-12 inform_table">
                        <div class="radius text-center"><p>2</p></div>
                        <p class="causes_p">Гитара прокачивает многозадачность</p>
                    </div>
                </div>
                <div class="col-12 colon_2">
                    <div class="col-12 inform_table">
                        <div class="radius text-center"><p>3</p></div>
                        <p class="causes_p">Развивают математические способности</p>
                    </div>
                    <div class="col-12 inform_table">
                        <div class="radius text-center"><p>4</p></div>
                        <p class="causes_p">Гитара развивает творческие способности</p>
                    </div>
                </div>
                <div class="col-12 div_yellow_five text-center colon_2 inform_table">
                    <div class="radius text-center"><p>5</p></div>
                    <p class="causes_p">Музыка позволяет <span class="yellow">стать частью</span> чего-то большего</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include("modules/footer.php")?>
    </footer>
</body>
</html>