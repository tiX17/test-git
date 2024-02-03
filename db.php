<?php
$host = 'localhost';
$user = "root";
$password = "";
$dbname = "GSTOCK";

try
{
        $dsn = "mysql:host=".$host . ";dbname=" .$dbname;
        $pdo = new PDO($dsn , $user , $password );
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        echo la connexion kiasy;

}
catch(PDOException $e)
{
        echo "tsy mandeh ay";
}
?>