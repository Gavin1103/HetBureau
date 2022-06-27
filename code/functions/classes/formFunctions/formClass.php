<?php

class Formulieren
{

    private $_id;
    private $_student;
    private $_leerlingnummer;
    private $_coach;
    private $_klas;
    private $_datum;
    private $_checkboxen;
    private $_vormgeven_veld;
    private $_techniek_veld;
    private $_ondernemend_veld;
    private $_AVO_veld;
    private $_softskills;
    private $_evtKwaliteiten_veld;

    // melding als student al een formulier heeft in die fase
    public function errorMelding()
    {
        if (isset($_GET["error"])) {
            echo "gebruiker heeft al een formulier in deze fase.";
        }
    }
}


?>


