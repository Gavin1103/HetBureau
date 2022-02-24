<?php
require "./get_formulier.php";
$getForm = new GetFormFunction();
$form_data = $getForm->get_formulieren(1);

echo "<pre>";
var_dump($form_data->coach);

foreach ($form_data  as $key => $form) {
    
    echo $form->titel;
 
}

// foreach ($form_data as $key => $form) {

//     echo $form->titel;

 
 
// }


// foreach ($form_data->student["vraagen"]  as $key => $form) {

//     echo $form->titel;
 
// }






