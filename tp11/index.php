<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<?php

//setlocale(LC_TIME, "fr_FR");
//phpinfo();
//strftime()

$actualTime = new DateTime('now');
echo $actualTime->format('Y-m-d H:i:s')."<br/>";

$birthDate = new DateTime('1988-11-05 10:10:10');
echo $birthDate->format('l d à H\hi')."<br/>";

$interval = $birthDate->diff($actualTime);
$age = $interval->format('%y');
if ($age >= 18) {
    echo "Majeur"."<hr/>";
} else {
    echo "Mineur"."<hr/>";
}


$date2 = new DateTime('2017-12-25');
echo $date2->format('l')."<hr/>";


//1er Mai des années comprises entre 2018 et 2037

for ($year = 2018; $year <= 2037; $year++) {
    echo "<strong>$year</strong> : ";

    $date = new DateTime("$year-05-01");
//    if($date->format('N') == 6 || $date->format('N') == 7){
    if ((int)$date->format('N') >= 6) {
        echo "Désolé !(WEEKEND)";
    } else if ((int)$date->format('N') == 1 || (int)$date->format('N') == 5) {
        echo "Week-end prolongé !";
    } else {
        echo "En semaine !";
    }

    echo "<br>";
}


?>

</body>
</html>