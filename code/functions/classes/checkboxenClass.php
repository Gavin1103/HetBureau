<?php
// include '../../core/databaseConnection.php';
// include '../../functions/showForm.php';
class checkboxen
{
    private $formID;
    public function getCheckboxenForm1($checkboxen_input = [])
    {
        if (isset($_GET['formNumber'])) {

            $this->formID = $_GET['formNumber'];
            $db = new Database();
            $checkboxenQRY = mysqli_query($db->con, " SELECT checkboxen.label, checkboxen.type ,checkboxen.name ,checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = '$this->formID';");
            while ($checkboxen = mysqli_fetch_array($checkboxenQRY)) {
                // echo '<li>';
                echo "<input id=" . 'c' . $checkboxen['id'] . " name=" . 'checkbox_vakken[' . $checkboxen["id"] . ']' . " class='circle' type=" . $checkboxen["type"];

                if (isset($checkboxen_input) && in_array($checkboxen["id"], $checkboxen_input)) {
                    echo " checked";
                }
                echo ">";
                echo "<label for=" . 'c' . $checkboxen["id"] . ">" . $checkboxen["label"] . "</label>";
                // echo '</li>';
                echo '<br>';
                echo '<br>';
            }
        } else {
            echo 'er gaat iets fout bij de checkboxen';
        }
    }
}
// SELECT checkboxen.label, checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = 'form1';