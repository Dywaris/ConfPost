<?php
/**
 $db="conf_post";
 $dbhost="localhost";
 $dbport=3307;
 $dbuser="root";
 $dbpasswd="";
 */
$db="conf_post";
$dbhost="localhost";
$dbport=3306;
$dbuser="julien";
$dbpasswd="root";
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
 $pdo->exec("SET CHARACTER SET utf8");

 $stmt = $pdo->prepare("SELECT * FROM hellotable WHERE libelle='Hello world'");
 $stmt->execute();

 $res = $stmt->fetch();
echo $res['libelle'];
$pdo = null;




?>



