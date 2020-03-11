<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>


<!--Écrire un formulaire « Calculatrice » : 2 cases pour la saisie des opérandes, un groupe de 4 cases à cocher (ou une liste déroulante) pour le choix de l'opération, et affichage du résultat de l'opération.-->

<h1>Calculatrice</h1>

<form method="post">
    <input type="number" step="any" name="number1"
           value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : '' ?>">
    <div>
        <label>
            <input type="radio" name="operator" value="+"
                <?php echo (isset($_POST['operator']) && $_POST['operator'] === "+") ? 'checked' : '' ?>
            />
            + <br/>
        </label>
        <label>
            <input type="radio" name="operator" value="-"
                <?php echo (isset($_POST['operator']) && $_POST['operator'] === "-") ? 'checked' : '' ?>
            />
            - <br/>
        </label>
        <label>
            <input type="radio" name="operator" value="*"
                <?php echo (isset($_POST['operator']) && $_POST['operator'] === "*") ? 'checked' : '' ?>
            />
            * <br/>
        </label>
        <label>
            <input type="radio" name="operator" value="/"
                <?php echo (isset($_POST['operator']) && $_POST['operator'] === "/") ? 'checked' : '' ?>
            />
            / <br/>
        </label>
    </div>

    <input type="number" step="any" name="number2"
           value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : '' ?>">

    <input type="submit">
</form>

<?php

if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])) {

    if ($_POST['operator'] === "+") {
        echo $_POST['number1'] + $_POST['number2'];
    } elseif ($_POST['operator'] === "-") {
        echo $_POST['number1'] - $_POST['number2'];
    } elseif ($_POST['operator'] === "*") {
        echo $_POST['number1'] * $_POST['number2'];
    } elseif ($_POST['operator'] === "/" && ($_POST['number1'] == 0 || $_POST['number2'] == 0)) {
        echo 'Division par zero impossible';
    } elseif ($_POST['operator'] === "/") {
        echo $_POST['number1'] / $_POST['number2'];
    }

}

?>


</body>
</html>