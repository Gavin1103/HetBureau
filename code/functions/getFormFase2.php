<?php
class retrieveFormFase2
{
    public $con;
    function __construct($db = null)
    {
        $this->con = $db;
    }
    public function getFormFase2()
    {
        $selectForm1_QRY = $this->con->prepare("

        
        ");

        if ($selectForm1_QRY === false) {
            echo mysqli_error($this->con);
        } else {
            $selectForm1_QRY->bind_result(

// 
               
            );

            if ($selectForm1_QRY->execute()) {
                $selectForm1_QRY->store_result();
                while ($selectForm1_QRY->fetch()) {
                    $array = [
                       
                    ];
                }
                return $array;
            }
            $selectForm1_QRY->close();
        }
    }
}
$getForm = new retrieveFormFase2();
