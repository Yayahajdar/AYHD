<?php  
define("DBHOST", "127.0.0.1");
define("DBUSER", "root");
define("DBNAME", "yportef");
define("DBPASS", "");
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
try{
    $db = new PDO($dsn, DBUSER, DBPASS);
    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
}
catch(PDOException $e)
    {
        die("Errer de lecture la base de donneés".$e->getMessage());
    }

?>