<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Cards</title>

<<<<<<< HEAD
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

    <?php

    $random_number_array = range(0, 21);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,22);

    //print_r($random_number_array);

    $text_array = [
            0 => 'Qual è la mia strada? Come posso canalizzare la mia energia? Verso quale cambiamento è bene che mi orienti?',
            1 => 'Quale nuovo inizio posso progettare? Quali sono le mie potenzialità? Quali risorse posso mettere a disposizione del cambiamento?',
            2 => 'Che cosa devo studiare? Quali nuove competenze mi sono necessarie per realizzare il mio proposito? Quali nuove esperienze posso fare?',
            3 => 'Come posso utilizzare la mia creatività? Qual è la mia visione? Quali nuove strategie posso elaborare?',
            4 => 'In che rapporti sono col mio Capo? Che Capo sono per i miei collaboratori? Che cosa mi richiede coraggio per concretizzare la mia strategia?',
            5 => 'È un buon momento per richiedere l\'aiuto di un Mentore? Sto trasmettendo qualcosa a qualcuno? Sono un efficace comunicatore?',
            6 => 'Quali scelte devo operare? In quale relazione, o relazioni, sono attualmente coinvolto? Che cosa mi piace fare?',
            7 => 'Dove vado e da dove vengo?  Per quale traguardo sto investendo le mie energie? Come posso restituire il successo che ho conquistato?',
            8 => 'Che cosa devo riequilibrare o armonizzare? Da quale cosa inutile devo liberami? Quale è la mia idea di perfezione? ',
            9 => 'Che cosa dice la mia saggezza? Qual è la fonte della mia crisi? Qual è l\'opportunità che posso cogliere in questa situazione?',
            10 => 'Che cosa devo cambiare, quale ciclo si è concluso? Quali sono le mie opportunità? Che cosa mi aiuta?',
            11 => 'Qual è la mia forza, dove si colloca? Quali sono i miei desideri? Come posso rigenerare le mie energie?',
            12 => 'Che cosa devo fermare? Con quali altri punti di vista posso guardare ciò che sto vivendo? Verso quale punto dovrò dirigere la mia ricerca interiore?',
            13 => 'Che cosa devo lasciar andare? Che cosa si sta trasformando dentro di me? Che cosa mi preoccupa o mi irrita?',
            14 => 'Che cosa mi protegge? Che cosa non devo sprecare? Come posso favorire la mia concentrazione?',
            15 => 'Da che cosa sono tentato? Quali illusioni o bugie offuscano la mia visione? In che cosa potrei osare?',
            16 => 'Come sto alimentando il mio proposito? Come posso utilizzare i miei doni? In che modo posso contribuire nel rendere il mio luogo di lavoro più felice?',
            17 => 'In che modo posso mettermi al servizio degli altri? Come vivo il mio ruolo? Qual è il mio posto nel mondo?',
            18 => 'Quali buone abitudini ho ereditato? Quali modelli positivi posso promuovere? Quali modelli e credenze sono benefici nel mio ambiente di lavoro?',
            19 => 'Che cosa mi dà energia, piacere, successo? Costruisco qualcosa di nuovo? Come nutro le mie relazioni?',
            20 => 'Che cosa si sta risvegliando in me? Che cosa rappresenterebbe per me una crescita personale e professionale? Che cosa stiamo creando insieme?',
            21 => 'Qual è la mia realizzazione mentale? Qual è la mia realizzazione emozionale? Qual è la mia realizzazione creativa? Qual è la mia realizzazione materiale? '
    ]

    ?>



</head>
<body class="body">

<div class="bg">
    <img src="img/img_sfondo.png" alt=" " class="bg">
</div>

<div class="container">

    <button class="btn btn__close">
        Chiudi
    </button>

    <!--RIGA 1-->

    <?php
    for ($i=0; $i<22; $i++) { ?>

        <div class="card card--<?=$i?> <?=($i<14) ? 'card__shift' : ''?>">
            <div class="card__side card__side--front card__side--front-<?=$i?>">
                <img src="img/CARTE%20-%20draft%20(4)/dorso.png" alt="back" class="img">
            </div>
            <div class="card__side card__side--back card__side--back-<?=$i?>">
                <img src="img/CARTE%20-%20draft%20(4)/<?=$random_number_array[$i]?>.png" alt="consulente" class="img">
            </div>
        </div>

    <?php
    }
    ?>


    <div class="details">

        <?php
        for ($i=0; $i<22; $i++){
        ?>

            <div class="text text-<?=$i?>">
                <?php
                $n = $random_number_array[$i];
                    echo $text_array[$n];
                ?>
            </div>

        <?php
        }
        ?>

        <form action="#" class="form">
            <div class="form__text">
                Se sei interessato ad approfondire lascia i tuoi dati:
            </div>
            <div class="form__fields">
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Nome" id="name" required>
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Cognome" id="surname" required>
                </div>
                <div class="form__group">
                    <input type="email" class="form__input" placeholder="Email" id="email" required>
                </div>
                <text class="form__group">
                    <textarea class="form__input" placeholder="Note" id="note" required></textarea>
                </text>
            </div>
            <div class="form__group form__btn">
                <button class="btn">SUBMIT</button>
            </div>
        </form>

    </div>

    <!--<a href="javascript:void(0)" class="button button--white button-open">IL GIOCO</a>-->
    <button  onclick="window.location.href='javascript:void(0)'" class="button button--white button-open">IL GIOCO</button>

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <button class="popup__btn btn" onclick="window.location.href='#'">INIZIA</button>
                <img src="img/CARTE%20-%20draft%20(4)/dorso.png" alt="Dorso della carta" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#" class="popup__close">&times;</a>
                <div class="popup__text">
                    <div class=WordSection1>

                        <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=it>HAPPY
CARDS<o:p></o:p></span></b></p>

                        <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:
normal'><span lang=it>Esplorare la felicità al lavoro divertendosi<o:p></o:p></span></i></b></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>Chi non ha desiderato almeno una volta nella
vita interrogare l’universo per capire cosa aveva in serbo per il futuro?
Cercare risposte a domande complesse o raccogliere indicazioni prima di una
scelta importante, soprattutto al lavoro…</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=it>Spesso
nel corso di un’esperienza professionale ci si trova di fronte a grandi dilemmi
o decisioni difficili</span></b><span lang=it>. Abbiamo creato uno <b
                                        style='mso-bidi-font-weight:normal'>strumento potente e un po’ magico, per
cogliere i messaggi che l’universo custodisce per ciascuno di noi</b>.</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal style='background:white'><span lang=it style='color:#222222'>Spesso
nel corso di un’esperienza professionale ci si trova di fronte a grandi dilemmi
o decisioni difficili. Abbiamo creato uno strumento potente e un po’ magico,
ispirato ai principi della scienza della felicità e delle organizzazioni
positive, per cogliere i messaggi che l’universo custodisce per ciascuno di
noi.<o:p></o:p></span></p>

                        <p class=MsoNormal style='background:white'><span lang=it style='color:#222222'><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal style='background:white'><span lang=it style='color:#222222'>&quot;Happy&quot;
<span class=SpellE>Cards</span> <span class=SpellE>perchè</span> la scienza ha
dimostrato che la felicità è una competenza e come tale può essere allenata.
Essere felici quindi è possibile, anche al lavoro. Coltivare la propria
felicità personale e professionale così come costruire luoghi di lavoro felici
è una scelta intenzionale che richiede però la disponibilità ad intraprendere
un viaggio dentro <span class=GramE>se</span> stessi, alla scoperta dei
meccanismi che ci consentono di rispondere alle situazioni esterne in maniera
più efficace.<o:p></o:p></span></p>

                        <p class=MsoNormal style='background:white'><span lang=it style='color:#222222'>Un
viaggio divertente, perché la scienza ha anche dimostrato che il gioco è una
tra le pratiche più efficaci per coltivare la felicità e stare meglio insieme.<o:p></o:p></span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>22 carte felici, da interrogare per capire,
così come si fa con i tarocchi. Strumento antico e sapiente per comprendere
situazioni, vie da intraprendere e futuri preferibili.</span></p>

                        <p class=MsoNormal><span lang=it>Uno strumento alternativo, leggero ma serio al
tempo stesso per valutare, riflettere ed esplorare sorridendo. Un viaggio
speciale alla ricerca del sorprendente e di un destino più felice.</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>Ciascuno di noi tesse la tela del proprio
futuro, professionale e <span class=GramE>non</span>, vivendo nel qui ed ora.
Ci sono passaggi obbligati ma la via per raggiungerli possiamo sceglierla noi,
attraverso le scelte che facciamo e anche attraverso quelle che non facciamo.</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>Perché quindi consultare le carte? Perché
interrogarle? Le nostre carte, così come i tarocchi tradizionali, aiutano a
fermarsi e ad analizzare ogni situazione da prospettive inedite e sorprendenti.
Ci aiutano ad ampliare lo spettro della riflessione e ad aggiungere variabili. </span></p>

                        <p class=MsoNormal><span lang=it>Le carte mostrano <span class=GramE>opzioni
alternative</span>.</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>Come consultare una mappa diversa da quelle
abituali può offrire nuovi sentieri da esplorare, così gli Arcani maggiori e le
HAPPY CARD mostrano tratti di viaggio (il nostro) che naturalmente sta a noi
accogliere o meno. <br>
Le nostre carte possono mostrare più chiaramente ciò che già sappiamo oppure
rivelare aspetti nuovi, diversi. Possono stimolare un pensiero profondamente
nuovo o confermare ipotesi già evidenti. E soprattutto, possono regalarci un
momento di break, giocoso, divertente da dedicarsi. Perché la felicità è anche
questo… concedersi “attimi di dimenticanza” (come diceva Totò) esplorando
mondi, possibilità e futuri sorridendo.</span></p>

                        <p class=MsoNormal><span lang=it;mso-highlight:yellow'><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span lang=it>Siete
pronti a scoprire cosa vi sta dicendo l’universo?<o:p></o:p></span></i></p>

                        <p class=MsoNormal><span lang=it>Scegliete almeno una carta, meglio se tre, e
guardate alle onde felici che si prospettano davanti a voi. Un momento per
rivedere scelte o programmi, per interrogarsi sui prossimi passi da compiere o <span
                                        class=SpellE>ri</span>-considerare decisioni prese.</span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><span lang=it>Ogni ecosistema organizzativo ha bisogno di
leader positivi, consapevoli di sé e delle scelte che fanno. La felicità è
un’occasione da non perdere! </span></p>

                        <p class=MsoNormal><span lang=it><o:p>&nbsp;</o:p></span></p>

                        <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=it>Chiedi
alle nostre Happy <span class=SpellE>Cards</span> cosa ti sussurra l’universo</span></b><span
                                    lang=it>.</span></p>

                    </div>
                    <button class="popup__btn-text popup__btn btn" onclick="window.location.href='#'">INIZIA</button>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
<script>


    $(document).ready(function (){

        var delay = 800 //delay in ms
        var n = 1;

        $('.button-open').on('click',function(){
            window.location.hash = 'popup';
        });
        $('.button-open').trigger('click');

        ///////////BTN CLOSE///////////////
        $(".btn__close").click(function (){
            $(".details").css('z-index', '-1')
            $(".details").css('visibility', 'hidden')
            $(".card__side--front").css('visibility', 'visible')
            $(".text").css('display', 'none')
            $(".btn__close").css('visibility', 'hidden')
            setTimeout(function(){ $(".card__shift").css('transform', 'translateX(-50%)')}, 1)
            $(".button-open").css('display', 'inline-block')


            if (window.innerWidth<768){
                $(".img").css('max-height', '40vh')

                setTimeout(function(){ $(".card--0").css('grid-column', '1 / 2')
                    $(".card--0").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--1").css('grid-column', '1 / 2')
                    $(".card--1").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--2").css('grid-column', '1 / 2')
                    $(".card--2").css('grid-row', '4 / 5')}, delay)
                setTimeout(function(){ $(".card--3").css('grid-column', '1 / 2')
                    $(".card--3").css('grid-row', '5 / 6')}, delay)
                setTimeout(function(){ $(".card--4").css('grid-column', '1 / 2')
                    $(".card--4").css('grid-row', '6 / 7')}, delay)
                setTimeout(function(){ $(".card--5").css('grid-column', '1 / 2')
                    $(".card--5").css('grid-row', '7 / 8')}, delay)
                setTimeout(function(){ $(".card--6").css('grid-column', '1 / 2')
                    $(".card--6").css('grid-row', '8 / 9')}, delay)

                setTimeout(function(){ $(".card--7").css('grid-column', '2 / 3')
                    $(".card--7").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--8").css('grid-column', '2 / 3')
                    $(".card--8").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--9").css('grid-column', '2 / 3')
                    $(".card--9").css('grid-row', '4 / 5')}, delay)
                setTimeout(function(){ $(".card--10").css('grid-column', '2 / 3')
                    $(".card--10").css('grid-row', '5 / 6')}, delay)
                setTimeout(function(){ $(".card--11").css('grid-column', '2 / 3')
                    $(".card--11").css('grid-row', '6 / 7')}, delay)
                setTimeout(function(){ $(".card--12").css('grid-column', '2 / 3')
                    $(".card--12").css('grid-row', '7 / 8')}, delay)
                setTimeout(function(){ $(".card--13").css('grid-column', '2 / 3')
                    $(".card--13").css('grid-row', '8 / 9')}, delay)

                setTimeout(function(){ $(".card--14").css('grid-column', '3 / 4')
                    $(".card--14").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--15").css('grid-column', '3 / 4')
                    $(".card--15").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--16").css('grid-column', '3 / 4')
                    $(".card--16").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--17").css('grid-column', '3 / 4')
                    $(".card--17").css('grid-row', '4 / 5')}, delay)
                setTimeout(function(){ $(".card--18").css('grid-column', '3 / 4')
                    $(".card--18").css('grid-row', '5 / 6')}, delay)
                setTimeout(function(){ $(".card--19").css('grid-column', '3 / 4')
                    $(".card--19").css('grid-row', '6 / 7')}, delay)
                setTimeout(function(){ $(".card--20").css('grid-column', '3 / 4')
                    $(".card--20").css('grid-row', '7 / 8')}, delay)
                setTimeout(function(){ $(".card--21").css('grid-column', '3 / 4')
                    $(".card--21").css('grid-row', '8 / 9')}, delay)


            } else {
                //$(".body").css('overflow','hidden')
                $(".container").css('grid-template-columns', 'repeat(8, 1fr)')
                $(".img").css('max-height', '32vh')

                setTimeout(function(){ $(".card--0").css('grid-column', '2 / 3')
                    $(".card--0").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--1").css('grid-column', '3 / 4')
                    $(".card--1").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--2").css('grid-column', '4 / 5')
                    $(".card--2").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--3").css('grid-column', '5 / 6')
                    $(".card--3").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--4").css('grid-column', '6 / 7')
                    $(".card--4").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--5").css('grid-column', '7 / 8')
                    $(".card--5").css('grid-row', '1 / 2')}, delay)
                setTimeout(function(){ $(".card--6").css('grid-column', '8 / 9')
                    $(".card--6").css('grid-row', '1 / 2')}, delay)

                setTimeout(function(){ $(".card--7").css('grid-column', '2 / 3')
                    $(".card--7").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--8").css('grid-column', '3 / 4')
                    $(".card--8").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--9").css('grid-column', '4 / 5')
                    $(".card--9").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--10").css('grid-column', '5 / 6')
                    $(".card--10").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--11").css('grid-column', '6 / 7')
                    $(".card--11").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--12").css('grid-column', '7 / 8')
                    $(".card--12").css('grid-row', '2 / 3')}, delay)
                setTimeout(function(){ $(".card--13").css('grid-column', '8 / 9')
                    $(".card--13").css('grid-row', '2 / 3')}, delay)

                setTimeout(function(){ $(".card--14").css('grid-column', '1 / 2')
                    $(".card--14").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--15").css('grid-column', '2 / 3')
                    $(".card--15").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--16").css('grid-column', '3 / 4')
                    $(".card--16").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--17").css('grid-column', '4 / 5')
                    $(".card--17").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--18").css('grid-column', '5 / 6')
                    $(".card--18").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--19").css('grid-column', '6 / 7')
                    $(".card--19").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--20").css('grid-column', '7 / 8')
                    $(".card--20").css('grid-row', '3 / 4')}, delay)
                setTimeout(function(){ $(".card--21").css('grid-column', '8 / 9')
                    $(".card--21").css('grid-row', '3 / 4')}, delay)
            }

            for (n = 0; n<22; n++) {
                $(".card__side--front-"+n).css('transform', 'rotateY(0deg)')
                $(".card__side--back-"+n).css('transform', 'rotateY(180deg)')
            }
        })

        /////////////////////////////////FOR ALL////////////////////////////////////////

        $(".card__side--front").click(function (){
            $(".button-open").css('display', 'none')
            $(".card__side--front").css('visibility', 'hidden')
            $(".details").css('z-index', '11111')
            $(".card__side--front").css('z-index', '11110')
            setTimeout(function(){
                $(".card__shift").css('transform', 'translateX(0)')
                $(".details").css('visibility', 'visible')
                $(".btn__close").css('visibility', 'visible')}, delay)
            if (window.innerWidth>768){
                //$(".body").css('overflow','scroll')
                setTimeout(function(){
                    $(".container").css('grid-template-columns', '1fr 4fr')
                    $(".img").css('max-height', '50vh')}, delay)
            }
        })


        /////////////////////////////////FIRST ROW////////////////////////////////////////

        $(".card__side--front-0").click(function (){
            $(".card__side--front-0").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-0").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-0").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--0").css('grid-column', '2 / 3')
                    $(".card--0").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--0").css('grid-column', '1 / 2')
                    $(".card--0").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-1").click(function (){
            $(".card__side--front-1").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-1").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-1").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--1").css('grid-column', '2 / 3')
                    $(".card--1").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--1").css('grid-column', '1 / 2')
                    $(".card--1").css('grid-row', '2 / 3')}, delay)

            }
        })

        //////////////
        $(".card__side--front-2").click(function (){
            $(".card__side--front-2").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-2").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-2").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--2").css('grid-column', '2 / 3')
                    $(".card--2").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--2").css('grid-column', '1 / 2')
                    $(".card--2").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-3").click(function (){
            $(".card__side--front-3").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-3").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-3").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--3").css('grid-column', '2 / 3')
                    $(".card--3").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--3").css('grid-column', '1 / 2')
                    $(".card--3").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-4").click(function (){
            $(".card__side--front-4").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-4").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-4").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--4").css('grid-column', '2 / 3')
                    $(".card--4").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--4").css('grid-column', '1 / 2')
                    $(".card--4").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-5").click(function (){
            $(".card__side--front-5").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-5").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-5").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--5").css('grid-column', '2 / 3')
                    $(".card--5").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--5").css('grid-column', '1 / 2')
                    $(".card--5").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-6").click(function (){
            $(".card__side--front-6").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-6").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-6").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--6").css('grid-column', '2 / 3')
                    $(".card--6").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--6").css('grid-column', '1 / 2')
                    $(".card--6").css('grid-row', '2 / 3')}, delay)
            }
        })

        /////////////////////////////////SECOND ROW////////////////////////////////////////

        $(".card__side--front-7").click(function (){
            $(".card__side--front-7").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-7").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-7").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--7").css('grid-column', '2 / 3')
                    $(".card--7").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--7").css('grid-column', '1 / 2')
                    $(".card--7").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-8").click(function (){
            $(".card__side--front-8").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-8").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-8").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--8").css('grid-column', '2 / 3')
                    $(".card--8").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--8").css('grid-column', '1 / 2')
                    $(".card--8").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-9").click(function (){
            $(".card__side--front-9").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-9").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-9").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--9").css('grid-column', '2 / 3')
                    $(".card--9").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--9").css('grid-column', '1 / 2')
                    $(".card--9").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-10").click(function (){
            $(".card__side--front-10").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-10").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-10").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--10").css('grid-column', '2 / 3')
                    $(".card--10").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--10").css('grid-column', '1 / 2')
                    $(".card--10").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-11").click(function (){
            $(".card__side--front-11").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-11").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-11").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--11").css('grid-column', '2 / 3')
                    $(".card--11").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--11").css('grid-column', '1 / 2')
                    $(".card--11").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-12").click(function (){
            $(".card__side--front-12").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-12").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-12").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--12").css('grid-column', '2 / 3')
                    $(".card--12").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--12").css('grid-column', '1 / 2')
                    $(".card--12").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-13").click(function (){
            $(".card__side--front-13").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-13").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-13").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--13").css('grid-column', '2 / 3')
                    $(".card--13").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--13").css('grid-column', '1 / 2')
                    $(".card--13").css('grid-row', '2 / 3')}, delay)
            }
        })

        /////////////////////////////////THIRD ROW////////////////////////////////////////

        $(".card__side--front-14").click(function (){
            $(".card__side--front-14").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-14").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-14").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--14").css('grid-column', '2 / 3')
                    $(".card--14").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--14").css('grid-column', '1 / 2')
                    $(".card--14").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-15").click(function (){
            $(".card__side--front-15").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-15").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-15").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--15").css('grid-column', '2 / 3')
                    $(".card--15").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--15").css('grid-column', '1 / 2')
                    $(".card--15").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-16").click(function (){
            $(".card__side--front-16").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-16").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-16").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--16").css('grid-column', '2 / 3')
                    $(".card--16").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--16").css('grid-column', '1 / 2')
                    $(".card--16").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-17").click(function (){
            $(".card__side--front-17").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-17").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-17").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--17").css('grid-column', '2 / 3')
                    $(".card--17").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--17").css('grid-column', '1 / 2')
                    $(".card--17").css('grid-row', '2 / 3')}, delay)
            }
        })

        //////////////
        $(".card__side--front-18").click(function (){
            $(".card__side--front-18").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-18").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-18").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--18").css('grid-column', '2 / 3')
                    $(".card--18").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--18").css('grid-column', '1 / 2')
                    $(".card--18").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-19").click(function (){
            $(".card__side--front-19").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-19").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-19").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--19").css('grid-column', '2 / 3')
                    $(".card--19").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--19").css('grid-column', '1 / 2')
                    $(".card--19").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-20").click(function (){
            $(".card__side--front-20").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-20").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-20").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--20").css('grid-column', '2 / 3')
                    $(".card--20").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function(){ $(".card--20").css('grid-column', '1 / 2')
                    $(".card--20").css('grid-row', '2 / 3')}, delay)
            }
        })
        //////////////
        $(".card__side--front-21").click(function (){
            $(".card__side--front-21").css('transform', 'rotateY(-180deg)')
            $(".card__side--back-21").css('transform', 'rotateY(0deg)')
            setTimeout(function(){$(".text-21").css('display', 'block')}, delay)
            if (window.innerWidth<768){
                setTimeout(function(){ $(".card--21").css('grid-column', '2 / 3')
                    $(".card--21").css('grid-row', '1 / 2')}, delay)
            } else {
                setTimeout(function () {
                    $(".card--21").css('grid-column', '1 / 2')
                    $(".card--21").css('grid-row', '2 / 3')
                }, delay)
            }
        })
    });
</script>
</html>
=======
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

</head>
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
                Chi non ha desiderato almeno una volta nella vita interrogare l’universo per capire cosa aveva in serbo per il futuro? Cercare risposte a domande complesse o raccogliere indicazioni prima di una scelta importante, soprattutto al lavoro…
            </p>

            <p class="paragraph-read paragraph__bold">
                Spesso nel corso di un’esperienza professionale ci si trova di fronte a grandi dilemmi o decisioni difficili. Abbiamo creato uno strumento potente e un po’ magico, per cogliere i messaggi che l’universo custodisce per ciascuno di noi.
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
            <img src="img/img/CARTE%20-%20draft%20(4)/dorso.png" alt="dorso" class="dorso">
        </div>
    </div>




</div>




</body>


</html>
>>>>>>> a38ae8d (version 2 finita)
