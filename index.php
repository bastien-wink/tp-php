<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<?php

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new Pdo('mysql:host=127.0.0.1;dbname=mySchool', 'root', null, $options);
} catch (PDOException $e) {
    echo "Erreur de connection";
}

//try {
//    $pdo->exec("CREATE TABLE `student` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname`VARCHAR(40) NOT NULL , `lastname` VARCHAR(40) NOT NULL , `email` VARCHAR(40)NOT NULL , PRIMARY KEY (`id`))");
//} catch (PDOException $e) {
//    echo "Erreur de création ".$e->getMessage();
//}
//
//try {
//    $pdo->exec("INSERT INTO student (firstname,lastname,email) VALUES ('Sam', 'Smith', 'sam@wink-dev.com')");
//} catch (PDOException $e) {
//    echo "Erreur  ".$e->getMessage();
//}
//
//


//$query = 'SELECT * FROM student where id = 4';
//$queryResult = $pdo->query($query)->fetch();
//var_dump($queryResult);


$myId = '3 ; drop table student;';

$query = "SELECT * FROM student where id = $myId";
$queryResult = $pdo->query($query)->fetch();

$query = 'SELECT * FROM student where firstname = :searchId and id = :variable2';
$prep = $pdo->prepare($query);
$prep->bindValue(':searchId', $myId);
$prep->bindValue(':variable2', 1);
$prep->execute();
$queryResult = $prep->fetch();

echo $queryResult['id']." ".$queryResult['email'];


?>

</body>
</html>