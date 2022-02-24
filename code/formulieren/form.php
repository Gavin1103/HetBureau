<form method="POST" action="./generatepdf.php">
    <?php
    require "./get_formulier.php";
    $getForm = new GetFormFunction();
    $form_data = $getForm->get_formulieren(1);
    echo "<pre>";
    // var_dump($form_data->student->vraagen);
    // $kaas = json_decode($form_data);
    foreach ($form_data as $key => $form) {
        echo "<h1>$form->titel</h1>";
        echo "<br/>";
        echo $form->beschrijving;
        echo "<br/>";
        echo $form->subtitel_A;
        echo "<br/>";
        echo $form->subtitel_A_info;
        echo "<br/>";
    }
    foreach ($form_data->formulier->deel_A  as $key => $form) {
        // var_dump($form);
        // echo $form->vraag;
        echo "<br/>";
        foreach ($form->antwoorden as $key => $antwoord) {
            echo "<label>{$antwoord->label}</label>";
            echo "<input type='{$antwoord->type}' name='{$antwoord->name}'/>";
        }
        // echo "<input name='{$form->vraag} placeholder='{$form->vraag}'/>";
        echo "<br/>";
        echo "<br/>";
    }
    foreach ($form_data as $key => $form) {
        echo "<h2>$form->subtitel_B</h2>";
        echo "<br/>";
        echo $form->subtitel_B_info;
        echo "<br/>";
    }
    foreach ($form_data->formulier->deel_B  as $key => $form) {
        // var_dump($form);
        // echo $form->vraag;
        echo "<br/>";
        foreach ($form->antwoorden as $key => $antwoord) {
            echo "<label>{$antwoord->label}</label>";
            echo "<input type='{$antwoord->type}' name='{$antwoord->name}'/>";
        }
        // echo "<input name='{$form->vraag} placeholder='{$form->vraag}'/>";
        echo "<br/>";
        echo "<br/>";
    }
    foreach ($form_data as $key => $form) {
        echo "<h2>$form->subtitel_C</h2>";
        echo "<br/>";
    }

    foreach ($form_data->formulier->deel_C  as $key => $form) {
        // var_dump($form);
        // echo $form->vraag;

        echo "<br/>";
        foreach ($form->antwoorden as $key => $antwoord) {
            echo "<label>{$antwoord->label}</label>";
            echo "<input type='{$antwoord->type}' name='{$antwoord->name}'/>";
        }
        // echo "<input name='{$form->vraag} placeholder='{$form->vraag}'/>";
        echo "<br/>";
        echo "<br/>";
    }
    ?>
    <input type="submit" />
</form>