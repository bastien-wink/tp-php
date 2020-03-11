<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<form method="get">
    <label for="pet-select">Choose a pet:</label>
    <select name="pets" id="pet-select">
        <option value="">--Please choose an option--</option>
        <option value="dog">Mon chien :) héhé</option>
        <option value="cat">Cat</option>
        <option value="hamster">Hamster</option>
        <option value="parrot">Parrot</option>
        <option value="spider">Spider</option>
        <option value="goldfish">Goldfish</option>
    </select>
    <input type="submit">
</form>


<?php

if (!empty($_GET['pets'])) {
    echo $_GET['pets'];
}

?>

<hr/>


<form method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <input type="checkbox" id="accept" name="accept">
        <label for="accept">J'accepte de recevoir la newsletter</label>
    </div>

    <input type="submit">
</form>

<?php


if (!empty($_POST['email']) && !empty($_POST['accept'])) {

    $pos = strpos($_POST['email'], "@");
    // S'il n'y pas de @, il est à FALSE

    //if ($pos >= 0) {
    //if ($pos !== FALSE) {
    if (is_int($pos)) {
        echo "<span style='color:green'>Enregistrement réussi<span>";
    } else {
        // Attention, pour tester un email, on utilisera plutôt une regex (plus tard dans le cours)
        echo "<span style='color:red'>Ce n'est pas un email</span>";
    }


} elseif (!empty($_POST['email']) && empty($_POST['accept'])) {
    echo "<span style='color:red'>Vous devez accepter la newsletter</span>";
}

?>


</body>
</html>