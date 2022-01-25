<!-- verbinding maken met database -->
<?php
require_once "../../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();
class Database{
   // private $host;
   // private $db_name;
   // private $username;
   // private $password;
   public $con;

   public function __construct(){
      // var_dump($_ENV);


    $this->getConnection($_ENV["host"],$_ENV["username"],$_ENV["password"],$_ENV["db"]);
   }
   
   public function getConnection($host,$username,$password,$db_name){
      $this->con = null;
      // echo "je bent verbonden met de database";
      // echo "<br>";
      try{
         $this->con = new mysqli($host, $username, $password, $db_name);
         
      }
      catch(Exception $e)
      {
         echo "Fout tijdens verbinden: " . $e->getMessage();
      }
      echo $con;
      return $this->con;
   }
}

$db = new Database();
// $con = $db->getConnection();

?>
