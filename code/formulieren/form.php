<?php
require "./get_formulier.php";
$getForm = new GetFormFunction();
$form_data = $getForm->get_formulieren(1);

echo "<pre>";
// var_dump($form_data->student->vraagen);
// $kaas = json_decode($form_data);

foreach ($form_data->student->vraagen  as $key => $form) {
    // var_dump($form);
    echo $form->vraag;
    echo "<br/>";
    foreach ($form->antwoorden as $key => $antwoord){
        echo "<label>{$antwoord->label}?</label>";
        echo "<input name='{$form->vraag} placeholder='{$form->vraag}'/>";
    }
    // echo "<input name='{$form->vraag} placeholder='{$form->vraag}'/>";

    echo "<br/>";
    echo "<br/>";

}

// foreach ($form_data as $key => $form) {

//     echo $form->titel;

 
 
// }


// foreach ($form_data->student["vraagen"]  as $key => $form) {

//     echo $form->titel;
 
// }






