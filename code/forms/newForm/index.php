<?php
include("../../core/databaseConnection.php");
include '../../functions/classes/checkboxenClass.php';
$getCheckboxFunction = new checkboxen();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>

<body>


    <div id="container">
        <form action="">
            <div class="innerContainer" id="innerContainerIntro">
                <div class="spacing"></div>
                <div class="content">
                    <div class="contentInner">
                        <h1>Assesment Formulier Fase 1</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis harum vel dolores assumenda, velit totam. Mollitia at quaerat magnam corporis quo fugiat aperiam veniam ea voluptates. Exercitationem pariatur eos quos? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, unde illo sequi id suscipit, quam, repudiandae inventore enim dicta ratione quo dolorum voluptatem. Voluptatum consectetur delectus ipsa pariatur nulla modi.</p>
                    </div>
                </div>
            </div>
            <div class="innerContainer" id="innerContainer1">
                <div class="spacing">
                    <figure>1.</figure>
                </div>
                <div class="content">

                    <div class="contentInner">
                        <div class="inputWrapper">
                            <label for="">Voornaam</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="inputWrapper">
                            <label for="">Achternaam</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>

                    <div class="contentInner">
                        <div class="inputWrapper">
                            <label for="">Leerlingnummer</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="inputWrapper">
                            <label for="">Datum</label>
                            <input type="date" name="" id="">
                        </div>
                    </div>
                    <!-- <div class="contentP">
                        <p>Checklist</p>
                    </div> -->
                </div>
            </div>
            <div class="innerContainer" id="innerContainer2">
                <div class="spacing">
                    <figure>2.</figure>
                </div>
                <div class="content">
                    <div class="contentInner">
                        <h2>Verplichte onderdelen</h2>
                        <p>Vink alles aan wat compleet is.</p>
                        <br>
                        <?php
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1();
                        ?>
                    </div>
                </div>
            </div>
            <div class="innerContainer" id="innerContainer3">
                <div class="spacing">
                    <figure>3.</figure>
                </div>
                <div class="content">
                    <div class="contentInner">
                        <h2>Prestaties</h2>
                        <p>Geef aan wat van toepassing is.</p>
                        <div class="ratingContainer">
                            <div class="ratingContent">
                                <div class="leftContainer">
                                    <p>*Vormgeven</p>
                                </div>
                                <div class="rightContainer">
                                    <input type="checkbox">
                                </div>
                            </div>
                            <div class="ratingContent">
                                <div class="leftContainer">
                                    <p>*Techniek</p>
                                </div>
                                <div class="rightContainer">
                                    <input type="checkbox">
                                </div>
                            </div>
                            <div class="ratingContent">
                                <div class="leftContainer">
                                    <p>*Tools</p>
                                </div>
                                <div class="rightContainer">
                                    <input type="checkbox">
                                </div>
                            </div>
                            <div class="ratingContent">
                                <div class="leftContainer">
                                    <p>*Gedrag</p>
                                </div>
                                <div class="rightContainer">
                                    <input type="checkbox">
                                </div>
                            </div>
                            <div class="ratingContent">
                                <div class="leftContainer">
                                    <p>*Kwaliteiten</p>
                                </div>
                                <div class="rightContainer">
                                    <input type="checkbox">
                                </div>
                            </div>

                            <input type="text">

                        </div>
                    </div>
                </div>
            </div>
            <div class="innerContainer" id="innerContainer4">
                <div class="spacing">
                    <figure>4.</figure>
                </div>
                <div class="content"></div>
            </div>
            <div class="innerContainer" id="innerContainer5">
                <div class="spacing">
                    <figure>5.</figure>
                </div>
                <div class="content"></div>
            </div>
        </form>
    </div>
</body>

</html>