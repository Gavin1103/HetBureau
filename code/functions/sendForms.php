<?php

class sendForms
{
    private $student;
    private $leerlingNummer;
    private $coach;
    private $datum;
    private $vormgeven;
    private $techniek;
    private $ondernemend;
    private $softskills;
    private $AVO;
    private $evt_kwaliteiten;
    // checkkboxen
    private $startportfolio_checkbox;
    private $challenge1_checkbox;
    private $webtechniek_checkbox;


    public function sendForm_AF1()
    {
        if (isset($_POST["submit_form_AF1"])) {
            if (!empty($_POST["student_name_af1"]) && !empty($_POST["coach_name_af1"]) && !empty($_POST["leerlingnummer_name_af1"])) {
                echo "Formulier is opgeslagen";

          
                $this->student = $_POST["student_name_af1"];
                $this->coach = $_POST["coach_name_af1"];
                $this->leerlingNummer = $_POST["leerlingnummer_name_af1"];
                $this->datum = $_POST["datum_name_af1"];

                $this->vormgeven = $_POST["vormgeven_name_af1"];
                $this->techniek = $_POST["techniek_name_af1"];
                $this->ondernemend = $_POST["ondernemend_name_af1"];
                $this->softskills = $_POST["softskills_name_af1"];
                $this->AVO = $_POST["avo_name_af1"];
                $this->evt_kwaliteiten = $_POST["evt_name_af1"];

                $this->startportfolio_checkbox = $_POST["startportfolio_name"];
                $this->challenge1_checkbox = $_POST["challenge_1_name"];
                $this->webtechniek_checkbox = $_POST["webtechniek_name"];
                
                echo $this->webtechniek_checkbox;
                echo $this->startportfolio_checkbox;
                echo $this->challenge1_checkbox;
         
              
        





                
            } else {
                echo "niet alles met een ster ingevuld";
            }
        }
    }
}
