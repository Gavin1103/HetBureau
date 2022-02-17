<?php 
require "./get_formulier.php";
$getForm = new GetFormFunction();
$form_data = $getForm->get_formulieren(1);


echo "<pre>";

foreach($form_data as $key => $value) {
    echo $value->vraag;
    echo "<br/>";
    foreach($value->antwoorden as $key2 => $value2) {
        echo $value2->label;
        echo "<br/>";
        echo "<br>";    
    }


}

