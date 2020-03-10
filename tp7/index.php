<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<?php

// TP 7.1 et 7.2
//Créez un tableau associatif contenant les informations d’identité d'une personne : Prenom, Nom, Age, Lieu de naissance
//Afficher ces informations dans une liste HTML (exemple)

//$fiches = [
//    [
//        'firstname' => 'Bastien',
//        'lastname' => 'THOMAS',
//        'age' => 31,
//        'birthPlace' => 'Rouen',
//    ],
//    [
//        'firstname' => 'Bastien2',
//        'lastname' => 'THOMAS2',
//        'age' => 32,
//        'birthPlace' => 'Rouen2',
//    ]
//];
////var_dump($fiche);
//
//foreach ($fiches as $fiche) {
//    echo "<ul>
//    <li>Prenom : ".$fiche['firstname']." </li>
//    <li>Nom :  ".$fiche['lastname']." </li>
//    <li>Age : ".$fiche['age']." </li>
//    <li>Lieu de naissance : ".$fiche['birthPlace']." </li>
//</ul>";
//
//}

?>


<!--
<ul>
    <li>Prenom : <?php echo $ficheBastien['firstname'] ?></li>
    <li>Nom : <?php echo $ficheBastien['lastname'] ?></li>
    <li>Age : <?php echo $ficheBastien['age'] ?></li>
    <li>Lieu de naissance : <?php echo $ficheBastien['birthPlace'] ?></li>
</ul>
-->























<?php

// TP 7.3 : Faire une boucle pour compter parmi ces nombres combien sont supérieurs à 10



//$randomNumbers = [25, 37, 39, 19, 13, 21, 9, 37, 32, 3, 3, 32, 14, 9, 16, 14, 42, 41, 38, 35, 26, 11, 11, 40, 18, 21, 28, 7, 42, 1, 42, 20, 36, 36, 13, 13, 13, 42, 33, 27, 39, 24, 35, 5, 8, 4, 13, 36, 39, 7, 39, 9, 39, 36, 26, 26, 5, 13, 26, 25, 23, 32, 7, 40, 41, 34, 15, 26, 19, 20, 2, 8, 3, 16, 35, 28, 28, 20, 36, 20, 6, 20, 20, 9, 5, 28, 18, 24, 35, 19, 12, 13, 39, 4, 10, 28, 39, 7, 1, 3,];
//
//$result = 0;
//
//foreach($randomNumbers as $number){
//    if($number > 10){
//        $result++;
//    }
//}
//
//echo $result ;


$notes = ['Adonis' => 18, 'Afro' => 8, 'Archibald' => 10, 'Babe' => 4, 'Bacon' => 9, 'Baloo' => 9, 'Banjo' => 3, 'Barney' => 20, 'Beaker' => 8, 'Beast' => 13, 'Bender' => 7, 'Big Guy' => 19, 'Big Red' => 5, 'Bilbo' => 11, 'Bimmer' => 9, 'Bingo' => 18, 'Biscuit' => 16, 'Boi' => 10, 'Bond' => 15, 'Bones' => 10, 'Boss' => 18, 'Brain' => 20, 'Brewski' => 16, 'Brownie' => 6];

$bestNote = 0;
$bestStudents = [];

foreach ($notes as $studentName => $note){

    if($note > $bestNote){
        $bestNote = $note ;
    }
}

foreach ($notes as $studentName => $note){
    if($note === $bestNote){
        $bestStudents[] = $studentName;
    }
}

echo $bestNote . "<br>";
echo "Bravo " . implode(', ', $bestStudents);








?>














</body>
</html>