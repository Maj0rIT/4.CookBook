<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_recipe = $_POST['name_recipe'];
    $description = $_POST['description'];
    $time = $_POST['time'];
    $difficulty = $_POST['difficulty'];

    // Proste walidacje
    if (empty($name_recipe) || empty($description) || empty($time) || empty($difficulty)) {
        echo 'Wszystkie pola formularza są wymagane.'. "<br><a href='add_recipe.php'>Powrót</a>";}
     else {
        // Tworzenie nazwy pliku na podstawie tytułu przepisu
        $fileName = 'przepis-' . strtolower(str_replace(' ', '-', $name_recipe)) . '.php';

        // Tworzenie zawartości strony przepisu
        $content = "
            <!DOCTYPE html>
            <html>
            <head>
                <title>$name_recipe</title>
            </head>
            <body>
                <h1>$name_recipe</h1>
                <h2>Opis:</h2>
                <p>$description</p>
                <h2>Czas:</h2>
                <p>$time</p>
                <h2>Trudność:</h2>
                <p>$difficulty</p>
            </body>
            </html>
        ";

        // Zapisywanie zawartości do pliku
        if (file_put_contents($fileName, $content)) {
            echo 'Przepis został dodany i strona przepisu została utworzona!' . "<br><a href='indexlogged.php'>Powrót</a>";
        } else {
            echo 'Wystąpił problem podczas zapisu pliku.';
        }
    }
}
?>
