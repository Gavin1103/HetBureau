<!-- verbinding maken met database -->
<?php

// define("BASEURL","http://localhost/programming/HetBureau/code/");
define("BASEURL","http://localhost/programming/HetBureau/code/");

//  verbinding maken met database 
// require_once ("C:/xampp/htdocs/HetBureau/vendor/autoload.php");
require_once(dirname(__File__) . '/../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__File__) . "/../../");
$dotenv->load();
class Database
{
   public $con;

   public function __construct()
   {
      $this->getConnection($_ENV["host"], $_ENV["username"], $_ENV["password"], $_ENV["db"]);
   }

   public function getConnection($host, $username, $password, $db_name)
   {
      $this->con = null;
      try {
         $this->con = new mysqli($host, $username, $password, $db_name);
      } catch (Exception $e) {
         echo "Fout tijdens verbinden: " . $e->getMessage();
      }
      // echo $con;
      return $this->con;
   }
}

$db = new Database();
// $con = $db->getConnection();

?>