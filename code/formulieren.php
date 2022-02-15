<?php
include("./core/databaseConnection.php");
include("./functions/function.php");

$database = new Database();
$db = $database->getConnection();

$getForm = new retrieveFormFase1($db);
$executeForm = $getForm->getFormFase1();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>assesment formulieren</title>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
</head>

<body id="body">

    <div id="container">
        <!-- voor alle formulieren -->
        <button id="kies_fase_1" onclick="kiesFase1()">Fase 1</button>
        <button id="kies_fase_2" onclick="kiesFase2()">Fase 2</button>
        <button id="kies_fase_3" onclick="kiesFase3()">Fase 3</button>
        <button id="kies_fase_4" onclick="kiesFase4()">Fase 4</button>
        
        <div id="form-container">
            <p>tekst komt hier</p>
            <h1><?php echo $executeForm["checklist_titel"]; ?></h1>
            <label for="naam">Naam:</label>
            <input type="text" name="" id="naam">
            <br>
            <br>
            <label for="coach">Coach:</label>
            <input type="text" name="" id="coach">
            <br>
            <br>
            <label for="datum">Datum:</label>
            <input type="text" name="" id="datum">
            <br>
            <br>

            <!-- alles voor fase 1 -->
            <div id="fase_1_container">
                <input type="checkbox" id="checkbox1">
                <label for="checkbox1">bahakjhsajhfkdj</label><br>
                <input type="checkbox" id="checkbox2">
                <label for="checkbox2">fdsgfhgfjhger</label><br>
                <input type="checkbox" id="checkbox3">
                <label for="checkbox3">dghfjjgdgh</label><br>
                <input type="checkbox" id="checkbox4">
                <label for="checkbox4">dghfjjgdgh</label><br>
                <input type="checkbox" id="checkbox4">
                <label for="checkbox4">dghfjjgdgh</label><br>
                <input type="checkbox" id="checkbox5">
                <label for="checkbox5">dghfjjgdgh</label><br>
                <input type="checkbox" id="checkbox6">
                <label for="checkbox6">dghfjjgdgh</label><br>

                <h2>Review Fase 1</h2>

                <p>tekst</p>

                <label for="review_fase1_vormgeven">vormgeven:</label><br>
                <input type="text">
                <br>
                <label for="techniek">Techniek:</label><br>
                <input type="text" id="techniek">
                <br>
                <label for="ondernemend">vormgeven:</label><br>
                <input type="text" id="ondernemend">
                <br>
                <label for="softskills">softskills:</label><br>
                <input type="text" id="softskills">
                <br>
                <label for="avo">AVO:</label><br>
                <input type="text" id="avo">
                <br>
                <label for="evt">EVT.:</label><br>
                <input type="text" id="evt">

                <h2>Terugkoppeling fase 1</h2>

                <label for="terugKoppelingFase_1">Je hebt jezelf voorgesteld en het is duidelijk wat je ambities
                    zijn.</label>
                <br>
                <input type="text" id="terugKoppelingFase_1">
                <br>
                <br>
                <label for="terugKoppelingFase_1">Je hebt inzicht in de medestudenten, docenten, opleiding en vakgebied.
                </label>
                <br>
                <input type="text" id="terugKoppelingFase_1">
                <br>
                <br>
                <label for="terugKoppelingFase_1">Je hebt laten zien welke skills je kan toepassen en beheerst.
                </label>
                <br>
                <input type="text" id="terugKoppelingFase_1">
                <br>
                <br>
                <label for="terugKoppelingFase_1">Doorgroei advies</label>
                <br>
                <input type="text" id="terugKoppelingFase_1">
                <br>
                <br>
            </div>

            <!-- alles voor fase 2 container -->
            <div id="fase_2_container">
                <h2>Checklist Samen met coach invullen(deel A)</h2>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Ontwikkelportfolio<br>&nbsp; &nbsp; &nbsp;(Het ontwikkelportfolio dient als
                        kapstok waar de opgedane kennis en ervaring zichtbaar wordt.<br>&nbsp; &nbsp; &nbsp; Het
                        portfolio moet een overzicht geven van jou als aankomend webdesigner.)</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Eigen project</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Groepsopdracht</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Challenge 2 (Magazine)</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Loopbaan reflectie 1,2</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Burgerschap 1,2</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Prototyping, XD</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Tools (Photoshop, Illustrator)</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">App design</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Vormgeven</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Webtechnieken</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Reviews van de desbetreffende docenten</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Keuzedeel 1 (ondernemend gedrag)</span>
                </label><br>

                <h2>Review Fase 2 (Deel B)</h2>

                <div class="box1">
                    <p>VORMGEVEN
                        <br><input type="text" name="Name">
                    </p>
                    <p>TECHNIEK
                        <br><input type="text" name="Name">
                    </p>
                    <p>TOOLS
                        <br><input type="text" name="Name">
                    </p>
                    <p>SOFTSKILLS
                        <br><input type="text" name="Name">
                    </p>
                    <p>AVO:(nederlands, engels, rekenen)
                        <br><input type="text" name="Name">
                    </p>

                    <p class="kwaliteiten">Bijzondere kwaliteiten: Het vragen van feedback, het toepassen en terug
                        koppelen</p>
                    <br><input type="text" name="Name">
                </div>

                <div class="box1">
                    <h2>Terugkoppeling fase 2 (deel C)</h2>
                    <p>Je hebt een beeld van het profiel webdesigner.
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je weet waar je staat t.o.v. het beeld van een webdesigner.
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je bent op het niveau van een beginnend webdesigner.
                        <br><input type="text" name="Name">
                    </p>
                </div>

                <h2>Doorgroei Advies:</h2>
                <input type="text" name="Name">
            </div>

            <!-- alles voor fase 3 -->

            <div id="fase_3_container">
                <h2>Checklist Samen met coach invullen(deel A)</h2>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Ontwikkelportfolio<br>&nbsp; &nbsp; &nbsp;(Het ontwikkelportfolio dient als
                        kapstok waar de opgedane kennis en ervaring zichtbaar wordt.<br>&nbsp; &nbsp; &nbsp; Het
                        portfolio moet een overzicht geven van jou als aankomend webdesigner.)</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Projectplan & Eigen project</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Groepschallenge + evaluatie</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Externe opdracht</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Loopbaan reflectie 1,2,3,4</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Burgerschap 1,2,3,4</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Keuzedeel 2</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Ondernemen</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Reviews van de desbetreffende docenten en klanten:</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Vormgeven, User-Interface, User-Experience, Fotografie & Concept</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Webtechnieken</span>
                </label><br>
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark">Ondernemend gedrag</span>
                </label>

                <h2>Review Fase 3 (Deel B)</h2>
                <p>In te vullen door vakdocent
                    <br><input type="text" name="Name">
                </p>


                <div class="box1">
                    <p>VORMGEVEN
                        <br><input type="text" name="Name">
                    </p>
                    <p>TECHNIEK
                        <br><input type="text" name="Name">
                    </p>
                    <p>ONDERNEMEN
                        <br><input type="text" name="Name">
                    </p>
                    <p>SOFTSKILLS
                        <br><input type="text" name="Name">
                    </p>
                    <p>AVO:(nederlands, engels, rekenen)
                        <br><input type="text" name="Name">
                    </p>

                    <p class="kwaliteiten">EVT. bijzondere kwaliteiten: Je bent gedreven en kan jezelf opdrachten geven.
                        Ik zie een<br>flinke dossis leergeerigheid. De wijze hoe je in de techniek duikt vinden we zeer
                        goed.<br> Je neem de toeschouwer op een goede manier mee in je filmpje, pas wel op dat het <br>
                        geen insider verhaal wordt en blijf jezelf.</p>
                    <br><input type="text" name="Name">
                </div>

                <div class="box1">
                    <h2>Terugkoppeling fase 3 (deel C)</h2>
                    <p>Je hebt aangetoond dat je klaar bent voor klanten te werken.
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je weet waar je kwaliteiten en je ontwikkelpunten liggen.
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je kunt dit vertalen naar leerdoelen.
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je kan met collega's samenwerken aan een product
                        <br><input type="text" name="Name">
                    </p>
                    <p>Je kan professioneel handelen, en weet wanneer je welke tool in kan zetten.
                        <br><input type="text" name="Name">
                    </p>
                </div>

                <h2>Doorgroei Advies:</h2>
                <input type="text" name="Name">
            </div>

            <!-- alles voor fase 4 container -->

            <div id="fase_4_container">
                <h2>Checklist Samen met coach invullen(deel A)</h2>
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Ontwikkelportfolio<br />&nbsp; &nbsp; &nbsp;(Het ontwikkelportfolio
                        dient als kapstok waar de opgedane kennis en ervaring zichtbaar
                        wordt.<br />&nbsp; &nbsp; &nbsp; Het portfolio moet een overzicht
                        geven van jou als aankomend webdesigner.)</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Eigen project</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Groepsopdracht</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Challenge 2 (Magazine)</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Loopbaan reflectie 1,2</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Burgerschap 1,2</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Prototyping, XD</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Tools (Photoshop, Illustrator)</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">App design</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Vormgeven</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Webtechnieken</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Reviews van de desbetreffende docenten</span> </label><br />
                <label class="container">
                    <input type="checkbox" />
                    <span class="checkmark">Keuzedeel 1 (ondernemend gedrag)</span> </label><br />

                <h2>Review Fase 4 (Deel B)</h2>

                <div class="box1">
                    <p>VORMGEVEN <br /><input type="text" /></p>
                    <p>TECHNIEK <br /><input type="text" /></p>
                    <p>TOOLS <br /><input type="text" /></p>
                    <p>SOFTSKILLS <br /><input type="text" /></p>
                    <p>
                        AVO:(nederlands, engels, rekenen) <br /><input type="text" />
                    </p>

                    <p class="kwaliteiten">
                        Bijzondere kwaliteiten: Het vragen van feedback, het toepassen en
                        terug koppelen
                    </p>
                    <br /><input type="text" />
                </div>

                <div class="box1">
                    <h2>Terugkoppeling fase 4 (deel C)</h2>
                    <p>
                        Je hebt een beeld van het profiel webdesigner. <br /><input type="text" />
                    </p>
                    <p>
                        Je weet waar je staat t.o.v. het beeld van een webdesigner.
                        <br /><input type="text" />
                    </p>
                    <p>
                        Je bent op het niveau van een beginnend webdesigner. <br /><input type="text" />
                    </p>
                </div>

                <h2>Doorgroei Advies:</h2>
                <input type="text" />
            </div>
        </div>
    </div>

    <footer>
        <button onclick="generatePDF()" id="download">Download</button>
        <button>Opslaan</button>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>