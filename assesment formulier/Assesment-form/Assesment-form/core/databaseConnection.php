<!-- verbinding maken met database -->
<?php
class Database{
   private $host = "localhost";
   private $db_name = "assesment_formulieren";
   private $username = "root";
   private $password = "";
   public $con;

   public function __construct(){
    $this->getConnection();
   }
   
   public function getConnection(){
      $this->con = null;
      // echo "je bent verbonden met de database";
      // echo "<br>";
      try{
         $this->con = new mysqli($this->host, $this->username, $this->password, $this->db_name);
         
      }
      catch(Exception $e)
      {
         echo "Fout tijdens verbinden: " . $e->getMessage();
      }
      return $this->con;
   }
}

// $db = new Database();
// $con = $db->getConnection();

?>
