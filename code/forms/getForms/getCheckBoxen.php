<?php
// include '../../core/databaseConnection.php';
class checkboxen
{

    private $formID;

    public function getCheckboxenForm1()
    {

        if (isset($_GET['formNumber'])) {

            $this->formID = $_GET['formNumber'];
            $db = new Database();
            $checkboxenQRY = mysqli_query($db->con, " SELECT checkboxen.label, checkboxen.type ,checkboxen.name ,checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = '$this->formID';");
            while ($checkboxen = mysqli_fetch_array($checkboxenQRY)) {
                // echo '<li>';
                echo "<input value='1' name=".$checkboxen["name"]." class='circle' type=".$checkboxen["type"].">";
                echo "<label>" . $checkboxen["label"] . "</label>";
                // echo '</li>';
                echo '<br>';
                echo '<br>';
            }
        } else {
            echo 'fout';
        }
    }
}


// SELECT checkboxen.label, checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = 'form1';