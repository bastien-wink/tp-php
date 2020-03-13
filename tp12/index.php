<?php

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tpMovies', 'root', null, $options);
} catch (PDOException $e) {
    echo "There is some problem in connection: ".$e->getMessage();
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
<body>

<h1>Mes films</h1>

<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Le parrain</td>
        <td>9.2</td>
    </tr>


    <?php

    foreach ($movies as $movie) {
        echo '<tr>
                <td>'.$movie['title'].'</td>
                <td>'.$movie['rating'].'</td>
              </tr>';
    }

    ?>


    </tbody>
</table>

</body>
</html>