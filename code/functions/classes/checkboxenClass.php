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
            $checkboxenQRY = $db->con->prepare(" SELECT checkboxen.label, checkboxen.type ,checkboxen.name ,checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = '$this->formID';");
            if ($checkboxenQRY->execute()) {
                $getResult = $checkboxenQRY->get_result();
                while ($result = $getResult->fetch_assoc()) {
                    // echo '<li>';
                    echo "<label for=" . 'c' . $result["id"] . ">";
                    echo "<input id=" . 'c' . $result['id'] . " name=" . 'checkbox_vakken[' . $result["id"] . ']' . " class='checkBox' type=" . $result["type"];

                    if (isset($checkboxen_input) && in_array($result["id"], $checkboxen_input)) {
                        echo " checked";
                    }
                    echo ">";
                    echo "<span class='checkmark'></span>";
                    echo $result["label"] . "</label>";
                    // echo '</li>';
                    echo '<br>';
                    echo '<br>';
                }
            }
        } else {
            echo 'er gaat iets fout bij de checkboxen';
        }
    }
}
// SELECT checkboxen.label, checkboxen_koppeling.checkboxen_id, checkboxen.id , checkboxen_koppeling.id FROM `checkboxen` INNER JOIN checkboxen_koppeling on checkboxen_koppeling.checkboxen_id = checkboxen.id WHERE checkboxen_koppeling.formulier_id = 'form1';