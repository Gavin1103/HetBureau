<?php
require "./get_formulier.php";
$getForm = new GetFormFunction();
$form_data = $getForm->get_formulieren(1);

echo "<pre>";
foreach ($form_data as $key => $form) {
    echo $form->titel;
    echo "<br/>";
    foreach ($form->info as $key2 => $infoForm) {
        echo $infoForm->beschrijving;
        echo "<br/>";
    }
    foreach ($form->info as $key2 => $infoForm) {
        echo $infoForm->element;
        echo "<br/>";
    }
}

echo "<br>";

foreach ($form_data as $key => $form) {
    echo $form->titelChecklist;
    echo "<br/>";
    foreach ($form->infoChecklist as $key2 => $infoForm) {
        echo $infoForm->beschrijvingChecklist;
        echo "<br/>";
    }
}




