<?php
// include "../core/databaseConnection.php";
class showForm
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

    public function showFormF1()
    {
        if (isset($_GET["leerlingNummer"])) {

            $this->_leerlingnummer = $_GET["leerlingNummer"];
            // echo "p".$this->_leerlingnummer;
        } else {
            header("location: ../admin/");
        }
        $db = new Database();
        // Query
        $selectQuery = $db->con->prepare("SELECT `id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld` FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->_leerlingnummer' LIMIT 1;");
        if ($selectQuery === false) {
            echo mysqli_error($db->con);
        }
        if ($selectQuery->execute()) {
            $selectQueryResult = $selectQuery->get_result();
            // Loop 
            while ($results = $selectQueryResult->fetch_assoc()) {
                // echo $selectQueryRow['my_column'];
                // var_dump($results);
                $formF1_array = [
                    "id" => $results["id"],
                    "student" => $results["student"],
                    "leerlingnummer" => $results["leerlingnummer"],
                    "coach" => $results["coach"],
                    "klas" => $results["klas"],
                    "datum" => $results["datum"],
                    "checkboxen" => $results["checkboxen"],
                    "vormgeven_veld" => $results["vormgeven_veld"],
                    "techniek_veld" => $results["techniek_veld"],
                    "ondernemend_veld" => $results["ondernemend_veld"],
                    "AVO_veld" => $results["AVO_veld"],
                    "softskills_veld" => $results["softskills_veld"],
                    "evtKwaliteiten_veld" => $results["evtKwaliteiten_veld"],
                ];
                // var_dump($formF1_array);
                return $formF1_array;
            }
        } else {
            echo mysqli_error($db->con);
            echo 'asdfsafdsaf';
        }
    }
}
class CheckIfFormExist extends showForm
{
    public function CheckFormF1()
    {
        if (isset($_GET["leerlingNummer"])) {
            $db = new Database();
            echo $this->_leerlingnummer = $_GET["leerlingNummer"];
            echo "<a href='../forms/fulledInForm_F1.php?formNumber=form1&leerlingNummer={$this->_leerlingnummer}'>Form fase 1</a>";
        } else {
            header("location: ../admin/?error=geenstudentNummer");
        }
    }
}

 // echo "<p>Bekijk formulier fase 1 van deze persoon</p>";
               
