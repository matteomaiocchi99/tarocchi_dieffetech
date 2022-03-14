<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Happy Cards</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

</head>

<div class="dieffetech">
    <b>Powered by
        <a href="https://www.dieffe.tech/" target="_blank" class="linksito">www.dieffe.tech</a>
        – La Software House della FELICITÀ
    </b>
</div>
<body>

<div class="index">
    <img src="img/three_circles.svg" alt="circles" class="circles-index">

    <div class="introEimg">
        <img src="img/logo_plus.png" alt="logo" class="logo">
        <div class="intro">
            <h1 class="title">
                HAPPY CARDS <br>
                Esplorare la felicità al lavoro divertendosi
            </h1>

            <p class="paragraph-read">
                Chi non ha desiderato almeno una volta nella vita interrogare l’universo per capire cosa aveva in serbo
                per il futuro? Cercare risposte a domande complesse o raccogliere indicazioni prima di una scelta
                importante, soprattutto al lavoro…
            </p>

            <p class="paragraph-read paragraph__bold">
                Spesso nel corso di un’esperienza professionale ci si trova di fronte a grandi dilemmi o decisioni
                difficili. Abbiamo creato uno strumento potente e un po’ magico, per cogliere i messaggi che l’universo
                custodisce per ciascuno di noi.
            </p>

            <h2 class="title title__small">
                Chiedi alle nostre Happy Cards cosa ti sussurra l’universo.
            </h2>
        </div>
    </div>


    <div class="buttonEimg">
        <div class="button_">
            <button class="btn_ btn_-yellow" onclick="window.location.href='read.php'" style="margin-right: 3rem">
                LEGGI
            </button>

            <button class="btn_ btn_-white" onclick="window.location.href='game.php'">
                GIOCA
            </button>
        </div>
        <div class="images">
            <img src="img/dots.svg" alt="dots" class="dots">
            <img src="img/CARTE%20-%20draft%20(1)/1.png" alt="dorso" class="dorso">
        </div>
    </div>
</div>
</body>
</html>
