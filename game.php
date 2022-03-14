<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Happy Cards</title>
    <link rel="icon" href="img/logo_plus.png" />

    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">

    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require './vendor/autoload.php';

    if (isset($_POST['email'])){

        $mail = new PHPMailer();

        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $email=$_POST['email'];

        //print_r($nome.' '.$cognome.' '.$email.' '.$note."<br>");


        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = "happyworkcard@gmail.com";
            $mail->Password   = 'Happy2022';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom("happyworkcard@gmail.com", "HappyCard");
            $mail->addAddress("happyworkcard@gmail.com");
            $mail->addCC('francesco.desiderio@dieffe.tech');
            //$mail->addCC('matteo.maiocchi99@gmail.com');
            $mail->SMTPDebug = false;
            $mail->do_debug = 0;
            $mail->isHTML(true);
            $mail->Subject = 'Nuovo contatto da HappyCards';
            $mail->Body    = "<b>$nome $cognome</b>, $email";

            $mail->send();

            ?>
            <div class='box_conferma'>Mail inviata con successo</div>
    <?php

        } catch (Exception $err) {
            echo "Errore. Il messaggio non può essere inviato.<br> Mailer error:{$mail->ErrorInfo} <br>";
        }
    }


    $random_number_array = range(0, 21);
    shuffle($random_number_array);
    $random_number_array = array_slice($random_number_array, 0, 22);

        //print_r($random_number_array);

    $text_array = [
        0 => 'Qual è la mia strada?- Come posso canalizzare la mia energia?- Verso quale cambiamento è bene che mi orienti?',
        1 => 'Quale nuovo inizio posso progettare?- Quali sono le mie potenzialità?- Quali risorse posso mettere a disposizione del cambiamento?',
        2 => 'Che cosa devo studiare?- Quali nuove competenze mi sono necessarie per realizzare il mio proposito?- Quali nuove esperienze posso fare?',
        3 => 'Come posso utilizzare la mia creatività?- Qual è la mia visione?- Quali nuove strategie posso elaborare?',
        4 => 'In che rapporti sono col mio Capo?- Che Capo sono per i miei collaboratori?- Che cosa mi richiede coraggio per concretizzare la mia strategia?',
        5 => 'È un buon momento per richiedere l\'aiuto di un Mentore?- Sto trasmettendo qualcosa a qualcuno?- Sono un efficace comunicatore?',
        6 => 'Quali scelte devo operare?- In quale relazione, o relazioni, sono attualmente coinvolto?- Che cosa mi piace fare?',
        7 => 'Dove vado e da dove vengo?-  Per quale traguardo sto investendo le mie energie?- Come posso restituire il successo che ho conquistato?',
        8 => 'Che cosa devo riequilibrare o armonizzare?- Da quale cosa inutile devo liberami?- Quale è la mia idea di perfezione? ',
        9 => 'Che cosa dice la mia saggezza?- Qual è la fonte della mia crisi?- Qual è l\'opportunità che posso cogliere in questa situazione?',
        10 => 'Che cosa devo cambiare, quale ciclo si è concluso?- Quali sono le mie opportunità?- Che cosa mi aiuta?',
        11 => 'Qual è la mia forza, dove si colloca?- Quali sono i miei desideri?- Come posso rigenerare le mie energie?',
        12 => 'Che cosa devo fermare?- Con quali altri punti di vista posso guardare ciò che sto vivendo?- Verso quale punto dovrò dirigere la mia ricerca interiore?',
        13 => 'Che cosa devo lasciar andare?- Che cosa si sta trasformando dentro di me?- Che cosa mi preoccupa o mi irrita?',
        14 => 'Che cosa mi protegge?- Che cosa non devo sprecare?- Come posso favorire la mia concentrazione?',
        15 => 'Da che cosa sono tentato?- Quali illusioni o bugie offuscano la mia visione?- In che cosa potrei osare?',
        16 => 'Come sto alimentando il mio proposito?- Come posso utilizzare i miei doni?- In che modo posso contribuire nel rendere il mio luogo di lavoro più felice?',
        17 => 'In che modo posso mettermi al servizio degli altri?- Come vivo il mio ruolo?- Qual è il mio posto nel mondo?',
        18 => 'Quali buone abitudini ho ereditato?- Quali modelli positivi posso promuovere?- Quali modelli e credenze sono benefici nel mio ambiente di lavoro?',
        19 => 'Che cosa mi dà energia, piacere, successo?- Costruisco qualcosa di nuovo?- Come nutro le mie relazioni?',
        20 => 'Che cosa si sta risvegliando in me?- Che cosa rappresenterebbe per me una crescita personale e professionale?- Che cosa stiamo creando insieme?',
        21 => 'Qual è la mia realizzazione mentale?- Qual è la mia realizzazione emozionale?- Qual è la mia realizzazione creativa?- Qual è la mia realizzazione materiale? '
    ];


    ?>


</head>
<body class="body">

<div class="description">

    <img src="img/logo_plus.png" alt="logo" class="logo logo__small logo__smallest" onclick="window.location.href='index.php'">
    <div class="testo">
        <div class="title title__smallest">
            PER GIOCARE:
        </div>
        <p class="paragraph-read">
            <b>Scegli almeno 1 carta, meglio se 3, leggi le domande e guarda alle onde felici </b>che si prospettano
            davanti a te. Un momento per rivedere scelte o programmi, per interrogarsi sui prossimi passi da compiere o
            ri-considerare decisioni prese.
        </p>
    </div>

</div>

<div class="container">
    
    <!--RIGA 1-->

    <?php
    for ($i=0; $i<22; $i++) { ?>

        <div class="card card--<?=$i?> <?=($i<14) ? 'card__shift' : ''?>">
            <div class="card__side card__side--front card__side--front-<?=$i?>">
                <img src="img/CARTE%20-%20draft%20(1)/1.png" alt="back" class="img">
            </div>
            <div class="card__side card__side--back card__side--back-<?=$i?>">
                <img src="img/CARTE%20-%20draft%20(1)/<?=$random_number_array[$i]+2?>.png" alt="card" class="img">
            </div>
        </div>

        <?php
    }
    ?>

    <img src="img/CARTE%20-%20draft%20(1)/1.png" alt="dorso" class="img__close" onclick="">



    <div class="details">
        <a href="#" class="popup__close" onclick="$('.img__close').trigger('click')" style="top: -2rem; left: 2rem; display: none">&times;</a>
        <?php
        for ($i=0; $i<22; $i++){
            ?>

            <div class="text text-<?=$i?>">
                <div>
                    <?php
                    $n = $random_number_array[$i];

                    $parts = explode("-", $text_array[$n]);

                    $j = 0;

                    while ($j<count($parts)) {
                        ?>
                        <div class="row">
                            <img src="img/logo_plus.png" alt="logo" class="logo_list">
                            <div>
                                <?= $parts[$j] ?>
                            </div>
                        </div>
                        <?php
                        $j++;
                    }

                    ?>
                </div>
            </div>

            <?php
        }
        ?>


        <div class="info">
            <div class="title title__small" style="display: inline; margin-right: 3rem">
                <b>Se vuoi approfondire clicca qui</b>
            </div>
            <button class="btn_ btn_-yellow" onclick="window.location.href='#popup';">
                INFO
            </button>
        </div>

        <img src="img/three_circles.svg" alt="circles" class="circles-details">
    </div>
</div>


<div class="popup" id="popup">
    <div class="popup__content">
        <a href="#" class="popup__close">&times;</a>

        <form action="game.php" method="POST" class="form">
            <div class="form__text">
                Se sei interessato ad approfondire lascia i tuoi dati:
            </div>
            <div class="form__fields">
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Nome" id="name" required name="nome">
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Cognome" id="surname" required name="cognome">
                </div>
                <div class="form__group">
                    <input type="email" class="form__input" placeholder="Email" id="email" required name="email">
                </div>
                <input type="submit" name="invia_mail" value="Invia" id="submit" style="display: none"/>
                <div id="captcha" class="g-recaptcha" data-sitekey="6Lcap88eAAAAAMUNr8UKxdegexK4OcdNVQG_EKvC"></div>
            </div>
            <div class="form__group form__btn" >
                <button class="btn_ btn_-yellow" onclick="$('#submit').trigger('click')">SUBMIT</button>
            </div>
        </form>

    </div>
</div>


</body>
<script>

    $(document).ready(function (){

        $(".form").on('submit', function (event){
            var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha==="") {
                event.preventDefault();
                alert("Please check reCaptcha");
            }
        })

        $(".box_conferma").fadeOut(3000)

        var delay = 800 //delay in ms
        var n = 1;



        ///////////BTN CLOSE///////////////
        $(".img__close").click(function (){
            $(".popup__close").css('display', 'none')
            $(".info").css('display', 'none')
            $(".card").css('display', 'inline-block')
            $(".img").css('transform', 'scale(1)')
            $(".card").css('transform', 'scale(1) translateY(0)')
            $(".details").css('visibility', 'hidden')
            $(".card__side--front").css('visibility', 'visible')
            $(".text").css('display', 'none')
            $(".img__close").css('visibility', 'hidden')
            $(".description").css('display', 'flex')


            if (window.innerWidth<768){
                //$(".img").css('max-height', '40vh')
                //$(".card__shift").css('transform', 'translateY(-55%)')
                $(".container").css('grid-template-columns', 'repeat(3, 1fr)')
                $(".container").css('grid-template-row', 'repeat(8, 40vh)')
                $(".img").css('transform', 'scale(1)')
                $(".card").css('transform', 'scale(1)')
                $(".card__shift").css('transform','translate(0, -55%)')

                $(".card--0").css('grid-column', '1 / 2')
                $(".card--0").css('grid-row', '2 / 3')
                $(".card--1").css('grid-column', '1 / 2')
                $(".card--1").css('grid-row', '3 / 4')
                $(".card--2").css('grid-column', '1 / 2')
                $(".card--2").css('grid-row', '4 / 5')
                $(".card--3").css('grid-column', '1 / 2')
                $(".card--3").css('grid-row', '5 / 6')
                $(".card--4").css('grid-column', '1 / 2')
                $(".card--4").css('grid-row', '6 / 7')
                $(".card--5").css('grid-column', '1 / 2')
                $(".card--5").css('grid-row', '7 / 8')
                $(".card--6").css('grid-column', '1 / 2')
                $(".card--6").css('grid-row', '8 / 9')

                $(".card--7").css('grid-column', '2 / 3')
                $(".card--7").css('grid-row', '2 / 3')
                $(".card--8").css('grid-column', '2 / 3')
                $(".card--8").css('grid-row', '3 / 4')
                $(".card--9").css('grid-column', '2 / 3')
                $(".card--9").css('grid-row', '4 / 5')
                $(".card--10").css('grid-column', '2 / 3')
                $(".card--10").css('grid-row', '5 / 6')
                $(".card--11").css('grid-column', '2 / 3')
                $(".card--11").css('grid-row', '6 / 7')
                $(".card--12").css('grid-column', '2 / 3')
                $(".card--12").css('grid-row', '7 / 8')
                $(".card--13").css('grid-column', '2 / 3')
                $(".card--13").css('grid-row', '8 / 9')

                $(".card--14").css('grid-column', '3 / 4')
                $(".card--14").css('grid-row', '1 / 2')
                $(".card--15").css('grid-column', '3 / 4')
                $(".card--15").css('grid-row', '2 / 3')
                $(".card--16").css('grid-column', '3 / 4')
                $(".card--16").css('grid-row', '3 / 4')
                $(".card--17").css('grid-column', '3 / 4')
                $(".card--17").css('grid-row', '4 / 5')
                $(".card--18").css('grid-column', '3 / 4')
                $(".card--18").css('grid-row', '5 / 6')
                $(".card--19").css('grid-column', '3 / 4')
                $(".card--19").css('grid-row', '6 / 7')
                $(".card--20").css('grid-column', '3 / 4')
                $(".card--20").css('grid-row', '7 / 8')
                $(".card--21").css('grid-column', '3 / 4')
                $(".card--21").css('grid-row', '8 / 9')


            } else {
                //$(".body").css('overflow','hidden')
                $(".container").css('grid-template-columns', 'repeat(8, 1fr)')
                $(".card__shift").css('transform', 'translateX(-55%)')

                $(".img").css('max-height', '26vh')
                $(".img").css('max-width', '18.2vh')
                $(".card").css('max-height', '26vh')
                $(".card").css('max-width', '18.2vh')

                $(".card--0").css('grid-column', '2 / 3')
                $(".card--0").css('grid-row', '1 / 2')
                $(".card--1").css('grid-column', '3 / 4')
                $(".card--1").css('grid-row', '1 / 2')
                $(".card--2").css('grid-column', '4 / 5')
                $(".card--2").css('grid-row', '1 / 2')
                $(".card--3").css('grid-column', '5 / 6')
                $(".card--3").css('grid-row', '1 / 2')
                $(".card--4").css('grid-column', '6 / 7')
                $(".card--4").css('grid-row', '1 / 2')
                $(".card--5").css('grid-column', '7 / 8')
                $(".card--5").css('grid-row', '1 / 2')
                $(".card--6").css('grid-column', '8 / 9')
                $(".card--6").css('grid-row', '1 / 2')

                $(".card--7").css('grid-column', '2 / 3')
                $(".card--7").css('grid-row', '2 / 3')
                $(".card--8").css('grid-column', '3 / 4')
                $(".card--8").css('grid-row', '2 / 3')
                $(".card--9").css('grid-column', '4 / 5')
                $(".card--9").css('grid-row', '2 / 3')
                $(".card--10").css('grid-column', '5 / 6')
                $(".card--10").css('grid-row', '2 / 3')
                $(".card--11").css('grid-column', '6 / 7')
                $(".card--11").css('grid-row', '2 / 3')
                $(".card--12").css('grid-column', '7 / 8')
                $(".card--12").css('grid-row', '2 / 3')
                $(".card--13").css('grid-column', '8 / 9')
                $(".card--13").css('grid-row', '2 / 3')

                $(".card--14").css('grid-column', '1 / 2')
                $(".card--14").css('grid-row', '3 / 4')
                $(".card--15").css('grid-column', '2 / 3')
                $(".card--15").css('grid-row', '3 / 4')
                $(".card--16").css('grid-column', '3 / 4')
                $(".card--16").css('grid-row', '3 / 4')
                $(".card--17").css('grid-column', '4 / 5')
                $(".card--17").css('grid-row', '3 / 4')
                $(".card--18").css('grid-column', '5 / 6')
                $(".card--18").css('grid-row', '3 / 4')
                $(".card--19").css('grid-column', '6 / 7')
                $(".card--19").css('grid-row', '3 / 4')
                $(".card--20").css('grid-column', '7 / 8')
                $(".card--20").css('grid-row', '3 / 4')
                $(".card--21").css('grid-column', '8 / 9')
                $(".card--21").css('grid-row', '3 / 4')
            }

            for (n = 0; n<22; n++) {
                $(".card__side--front-"+n).css('transform', 'rotateY(0deg)')
                $(".card__side--back-"+n).css('transform', 'rotateY(180deg)')
            }
        })

        /////////////////////////////////FOR ALL////////////////////////////////////////

        $(".card__side--front").click(function (){
            $(".card__side--front").css('visibility', 'hidden')
            //$(".details").css('z-index', '11111')
            //$(".card__side--front").css('z-index', '11110')
            setTimeout(function(){
                $(".card__shift").css('transform', 'translateX(0)')
                $(".details").css('visibility', 'visible')
                $(".popup__close").css('display', 'block')
                $(".img__close").css('visibility', 'visible')
                $(".info").css('display', 'block')
                $(".description").css('display', 'none')}, delay)
            if (window.innerWidth>768){
                //$(".body").css('overflow','scroll')
                setTimeout(function(){
                    $(".container").css('grid-template-columns', 'repeat(8, 1fr)')
                    $(".img").css('transform', 'scale(1.3)')
                    $(".card").css('transform', 'scale(1.3) translate(30%, 20%)')

                }, delay)
            } else {
                setTimeout(function(){
                    $(".container").css('grid-template-columns', 'repeat(4, 1fr)')
                    $(".container").css('grid-template-row', 'repeat(3, 1fr)')
                    //$(".container").css('width', '100%')
                    $(".img").css('transform', 'scale(1.1)')
                    $(".card").css('transform', 'scale(1.1)')
                }, delay)
            }
        })


        /////////////////////////////////FIRST ROW////////////////////////////////////////

        $(".card__side--front-0").click(function (){
            $(".card__side--front-0").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-0").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-0").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--0").css('display', 'inline-block')
                $(".card--0").css('grid-row', '2 / 3')}, delay)

            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--0").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--0").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-1").click(function (){
            $(".card__side--front-1").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-1").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-1").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--1").css('display', 'inline-block')
                $(".card--1").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--1").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--1").css('grid-column', '5 / 7')}, delay)

            }
        })

        //////////////
        $(".card__side--front-2").click(function (){
            $(".card__side--front-2").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-2").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-2").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--2").css('display', 'inline-block')
                $(".card--2").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--2").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--2").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-3").click(function (){
            $(".card__side--front-3").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-3").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-3").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--3").css('display', 'inline-block')
                $(".card--3").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--3").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--3").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-4").click(function (){
            $(".card__side--front-4").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-4").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-4").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--4").css('display', 'inline-block')
                $(".card--4").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--4").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--4").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-5").click(function (){
            $(".card__side--front-5").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-5").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-5").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--5").css('display', 'inline-block')
                $(".card--5").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--5").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--5").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-6").click(function (){
            $(".card__side--front-6").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-6").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-6").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--6").css('display', 'inline-block')
                $(".card--6").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--6").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--6").css('grid-column', '5 / 7')}, delay)
            }
        })

        /////////////////////////////////SECOND ROW////////////////////////////////////////

        $(".card__side--front-7").click(function (){
            $(".card__side--front-7").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-7").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-7").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--7").css('display', 'inline-block')
                $(".card--7").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--7").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--7").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-8").click(function (){
            $(".card__side--front-8").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-8").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-8").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--8").css('display', 'inline-block')
                $(".card--8").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--8").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--8").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-9").click(function (){
            $(".card__side--front-9").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-9").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-9").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--9").css('display', 'inline-block')
                $(".card--9").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--9").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--9").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-10").click(function (){
            $(".card__side--front-10").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-10").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-10").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--10").css('display', 'inline-block')
                $(".card--10").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--10").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--10").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-11").click(function (){
            $(".card__side--front-11").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-11").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-11").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--11").css('display', 'inline-block')
                $(".card--11").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--11").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--11").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-12").click(function (){
            $(".card__side--front-12").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-12").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-12").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--12").css('display', 'inline-block')
                $(".card--12").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--12").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--12").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-13").click(function (){
            $(".card__side--front-13").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-13").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-13").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--13").css('display', 'inline-block')
                $(".card--13").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--13").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--13").css('grid-column', '5 / 7')}, delay)
            }
        })

        /////////////////////////////////THIRD ROW////////////////////////////////////////

        $(".card__side--front-14").click(function (){
            $(".card__side--front-14").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-14").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-14").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--14").css('display', 'inline-block')
                $(".card--14").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--14").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--14").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-15").click(function (){
            $(".card__side--front-15").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-15").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-15").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--15").css('display', 'inline-block')
                $(".card--15").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--15").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--15").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-16").click(function (){
            $(".card__side--front-16").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-16").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-16").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--16").css('display', 'inline-block')
                $(".card--16").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--16").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--16").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-17").click(function (){
            $(".card__side--front-17").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-17").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-17").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--17").css('display', 'inline-block')
                $(".card--17").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--17").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--17").css('grid-column', '5 / 7')}, delay)
            }
        })

        //////////////
        $(".card__side--front-18").click(function (){
            $(".card__side--front-18").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-18").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-18").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--18").css('display', 'inline-block')
                $(".card--18").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--18").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--18").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-19").click(function (){
            $(".card__side--front-19").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-19").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-19").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--19").css('display', 'inline-block')
                $(".card--19").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--19").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--19").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-20").click(function (){
            $(".card__side--front-20").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-20").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-20").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--20").css('display', 'inline-block')
                $(".card--20").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--20").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function(){ $(".card--20").css('grid-column', '5 / 7')}, delay)
            }
        })
        //////////////
        $(".card__side--front-21").click(function (){
            $(".card__side--front-21").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-21").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-21").css('display', 'block')
                $(".card").css('display', 'none')
                $(".card--21").css('display', 'inline-block')
                $(".card--21").css('grid-row', '2 / 3')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--21").css('grid-column', '3 / 5')}, delay)
            } else {
                setTimeout(function () { $(".card--21").css('grid-column', '5 / 7')}, delay)
            }
        })
    });
</script>
</html>
