 <?php
class DBConnection {
   
   private $host = "";
   private $user = "";
   private $pass = "";
   private $dbname = "";
   private $conn = null;
  
   function __construct() {
       $this->setHost( "51.79.72.47" );
       $this->setUser( "hostdeprojetos_lumiere" );
       $this->setPass( "%empr3esa" );
       $this->setDbname("hostdeprojetos_maryebru");
       $this->setConn( mysqli_connect($this->host, $this->user, $this->pass, $this->dbname) );
       // Check connection
       if (!$this->conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
   }
  
   public function query($sqlCommand){
    $result = $this->getConn()->query($sqlCommand);
    return ($result);
   }

   public function getHost(){
       return $this->host;
   }

   public function setHost($host){
       $this->host = $host;
   }

   public function getUser(){
       return $this->user;
   }

   public function setUser($user){
       $this->user = $user;
   }

   public function getPass(){
       return $this->pass;
   }

   public function setPass($pass){
       $this->pass = $pass;
   }

   public function getConn(){
       return $this->conn;
   }

   public function setConn($conn){
       $this->conn = $conn;
   }

   public function getDbname(){
      return $this->dbname;
   }

   public function setDbname($dbname){
      $this->dbname = $dbname;

      return $this;
   }
}

?>
