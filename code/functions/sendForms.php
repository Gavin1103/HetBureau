<?php
// include '../core/databaseConnection.php';
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
    private $checkboxen;
    private $checkboxen_json;
    private $addFormQRY;
    public function sendForm_AF1()
    {
        if (isset($_POST["submit_form_AF1"])) {
            if (!empty($_POST["student_name_af1"]) && !empty($_POST["coach_name_af1"]) && !empty($_POST["leerlingnummer_name_af1"])) {
                // echo "Formulier is opgeslagen";
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

                $this->checkboxen = $_POST["checkbox_vakken"];
                $this->checkboxen_json = json_encode($this->checkboxen);

                $db = new Database();

                $this->addFormQRY = mysqli_query($db->con, "INSERT INTO `opgeslagen_form_af1`(`student`, `leerlingnummer`, `coach`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`) VALUES ('$this->student','$this->leerlingNummer','$this->coach','$this->datum','$this->checkboxen_json','$this->vormgeven','$this->techniek','$this->ondernemend','$this->AVO','$this->softskills','$this->evt_kwaliteiten')");
                if($this->addFormQRY){
                    echo "Formulier opgeslagen";
                }
                // echo '<pre>';
                // var_dump($this->checkboxen_json);
            } else {
                echo "niet alles met een ster ingevuld";
            }
        }
    }
}
