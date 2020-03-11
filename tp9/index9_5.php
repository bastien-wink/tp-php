<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>
<?php

if (isset($_POST['newLang'])) {
    setcookie('cookieLang', $_POST['newLang']);
    echo $_POST['newLang'];
} elseif (isset($_COOKIE['cookieLang'])) {
    echo $_COOKIE['cookieLang'];
} else {
    echo "pas de langue";
}
?>

<form method="post">
    <label>
        Changer de langue :
        <select name="newLang">
            <option value="fr">Francais</option>
            <option value="en">Anglais</option>
        </select>
        <input type="submit">
    </label>
</form>

</body>
</html>