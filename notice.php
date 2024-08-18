<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/notice.css">
</head>

<body>
    <? include("./header.php"); ?>

    <main class="main__container">
        <div class="container__left">

            <div class="container__intro">
                <h1 class="h1">Plantilla para noticia</h1>
                <p class="texto__intro">Aca va un texto para la plantilla</p>
                <div class="badge"><a href="#">6 min lect</a></div>
            </div>

            <div class="container__gallery">
                <div class="container__imgLeft">
                    <div class="img img__item1"><img src="./assets/img/brain.png" alt=""></div>
                </div>
                <div class="container__imgRight">
                    <div class="img img__item2"><img src="./assets/img/brain.png" alt=""></div>
                    <div class="img img__item3"><img src="./assets/img/brain.png" alt=""></div>
                    <div class="img img__item4"><img src="./assets/img/brain.png" alt=""></div>
                    <div class="img img__item5"><img src="./assets/img/brain.png" alt=""></div>
                </div>
            </div>
            <p class="texto__gallery">Un texto bacano</p>

            <h2 class="subtitle">Descripcion del articulo</h2>
            <div class="tags__container">
                <div class="tag">Tag es mas grande</div>
                <div class="tag">Tag esta es mucho mas grande</div>
                <div class="tag">Tag esta tag es muchu mucho mas grande</div>
                <div class="tag">Tag</div>
                <div class="tag">Tag</div>
                <div class="tag">Tag</div>
            </div>

            <div class="container__text">
                <h2>Un titulo que este bacano</h2>
                <p>Un texto que este bien bacano</p>
            </div>
            <div class="container__text">
                <h2>Un titulo que este bacano</h2>
                <p>Un texto que este bien bacano</p>
            </div>
            <div class="container__text">
                <h2>Un titulo que este bacano</h2>
                <p>Un texto que este bien bacano</p>
            </div>

            <div class="container__conversacion">
                <label class="title_conversacion" title="mensaje">Comenzar conversacion</label>
                <textarea name="" id="" class="comenzar__conversacion"></textarea>
            </div>

            <h2 class="subtitle">Mas informacion</h2>

            <div class="container_cards">
                <div class="card_text__left">
                    <p class="card_text--tag" >tag</p>
                    <h1 class="card_text--titulo">Titulo</h1>
                    <p class="card_text--des">descripcion</p>
                    <button class="btn__noticie">Leer</button>
                </div>
                <div class="card_text__right">
                    <div class="card_img">
                        <img src="./assets/img/image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container_right">
            <h1>Noticias actuales</h1>
            <div class="cards">
                <div class="cards__text">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </div>

                <div class="cards__container--img">
                    <div class="cards_img">
                       <!-- <img src="./assets/img/image.png" alt=""> -->
                    </div>
                </div>

            </div>
        </div>
    </main>

    <? include("./footer.php"); ?>
</body>

</html>