<?php
class getAccountInfo
{

    public $con;
    private $leerlingNummer;
    public $naam;
    private $afkorting_admin;

    function getStudentAccount()
    {
        $db = new Database();
        $this->leerlingNummer = $_GET["studentNumber"];

        if (!isset($_GET["studentNumber"])) {
            echo "fout";
            header("location: ../index.php?error=fout22");
        }

        $getUserInfo_qry = mysqli_query($db->con, "SELECT id, leerlingnummer, naam, achternaam, wachtwoord, email, klas FROM `studenten` WHERE leerlingnummer = '$this->leerlingNummer'");
        $results = mysqli_fetch_assoc($getUserInfo_qry);
        $result_array = [
            "id" => $results["id"],
            "leerling nummer" => $results["leerlingnummer"],
            "naam" => $results["naam"],
            "achternaam" => $results["achternaam"],
            "wachtwoord" => $results["wachtwoord"],
            "email" => $results["email"],
            "klas" => $results["klas"]
        ];
        return $result_array;
    }


    function getAdminAccount()
    {

        $db = new Database();

        // $this->afkorting_admin = $_GET["afkorting_admin"];
        // if (!isset($_GET["admin"])) {
        $this->afkorting_admin = $_SESSION["afkorting_admin"];

        if (!isset($this->afkorting_admin)) {
            echo "fout";
            session_destroy();
            header("location: ../index.php?error=fout99");
        }

        $getAdminInfo_sql = mysqli_query($db->con, "SELECT `id`, `naam`, `achternaam`, `email`,
        `wachtwoord`, `functie`, `afkorting` FROM `admin_docent` WHERE afkorting = '$this->afkorting_admin'");
        $results = mysqli_fetch_assoc($getAdminInfo_sql);
        $result_array = [
            "naam" => $results["naam"],
            "afkorting" => $results["afkorting"],
            "achternaam" => $results["achternaam"],
            "email" => $results["email"],
            "wachtwoord" => $results["wachtwoord"],
            "functie" => $results["functie"],
            "id" => $results["id"],
        ];
        return $result_array;
    }


    public function searchStudent()
    {
        if (isset($_POST["studentNumber"])) {
            $this->_leerlingNummer = $_POST["studentNumber"];
            $db = new Database();
            // Query
            $selectQuery = $db->con->prepare("SELECT `id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum` FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->_leerlingNummer' LIMIT 1;");
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
}
