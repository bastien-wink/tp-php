<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<form method="post">
    <div>
        <label>
            Prénom : <input type="text" name="firstname">
        </label>
    </div>
    <div>
        <label>
            Age : <input type="number" name="age" value="18">
        </label>
    </div>
    <div>
        <input type="submit" value="Inscription">
    </div>
</form>


<?php

//var_dump($_POST);

// !empty c'est comme : (isset($_POST['firstname']) && $_POST['firstname'] !== '' && $_POST['firstname'] !== null && $_POST['firstname'] !== 0 && $_POST['firstname'] !== [])

if (!empty($_POST['firstname']) && !empty($_POST['age'])) {
    echo "Bienvenu ".$_POST['firstname'].", vous avez ".$_POST['age']." ans.";
}else{
    echo "Bienvenu.";
}

?>
</body>
</html>