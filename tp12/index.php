<?php

try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tpMovies', 'root', null, $options);
} catch (PDOException $e) {
    echo "There is some problem in connection: ".$e->getMessage();
}

if (isset($_POST['title']) && isset($_POST['rating'])) {
    $sql = "INSERT INTO movie (title,rating,creationDate) VALUES (:varTitle, :varRating, :varCreationDate)";
    $preparedQuery = $pdo->prepare($sql);
    $preparedQuery->bindValue(':varTitle', $_POST['title']);
    $preparedQuery->bindValue(':varRating', $_POST['rating']);
    $dateNow = new DateTime('now');
    $preparedQuery->bindValue(':varCreationDate', $dateNow->format('Y-m-d H:i:s'));
    $insertionSuccess = $preparedQuery->execute();
}

$query = $pdo->query('select * from movie');
$movies = $query->fetchAll();

?><!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Mes films</title>
</head>
<hr>

<h1>Mes films</h1>

<?php

if (isset($insertionSuccess) && $insertionSuccess === true) {
    echo "<div>Insertion réussie</div>";
}

?>

<?php
var_dump($movies);
?>

<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Note</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>

    <?php

    foreach ($movies as $movie) {
        echo '<tr>
                <td>'.$movie['title'].'</td>
                <td>'.$movie['rating'].'</td>
                <td>'.$movie['creationDate'].'</td>
              </tr>';
    }

    ?>

    </tbody>
</table>

<hr>

<form method="post">
    <h2>Ajouter</h2>

    <div>
        <label>
            Nom du film : <input type="text" name="title">
        </label>
    </div>

    <div>
        <label>
            Note: <input type="number" step="0.01" min="0" max="10" name="rating">
        </label>
    </div>

    <div>
        <input type="submit" value="Envoyer">
    </div>

</form>


</body>
</html>