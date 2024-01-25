<?php
require_once __DIR__ . '/models/Movie.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="bg-info text-center p-3">
        <h1>Movies</h1>
    </header>
    <main>
        <section class="d-flex p-3 ">
            <p class="card m-4 p-2">
                <?php
                $hungover = new Movie('Una notte da leoni', 'Hungover', 'Comedy', 1.40, 'Todd Phillips');
                echo "Titolo in Italiano: " . $hungover->getItalianTitle() . "<br>";
                echo "Titolo in lingua originale: " . $hungover->getOriginalTitle() . "<br>";
                echo "Genere del film: " . $hungover->getGenreMovie() . "<br>";
                echo "Durata del film: " . $hungover->getDurationMovie() . "<br>";
                echo "Regista: " . $hungover->getDirectorOfTheMovie() . "<br>";

                ?>
            </p>
            <p class="card  m-4 p-2">
                <?php
                $matrix = new Movie('Matrix', 'Matrix', 'Action', 2.16, ' Lana Wachowski and Lilly Wachowski');
                echo "Titolo in Italiano: " . $matrix->getItalianTitle() . "<br>";
                echo "Titolo in lingua originale: " . $matrix->getOriginalTitle() . "<br>";
                echo "Genere del film: " . $matrix->getGenreMovie() . "<br>";
                echo "Durata del film: " . $matrix->getDurationMovie() . "<br>";
                echo "Regista: " . $matrix->getDirectorOfTheMovie() . "<br>";
                ?>
            </p>
        </section>
    </main>





</body>

</html>