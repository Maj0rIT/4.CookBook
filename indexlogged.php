<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Android -->
    <link rel="icon" sizes="192x192" href="ico/cookbook.ico">
    <!-- iOS -->
    <link rel="apple-touch-icon" sizes="180x180" href="ico/cookbook.ico">
    <link rel="shortcut icon" href="ico/cookbook.ico">
    <link rel="stylesheet" href="css/index.css">
    <title>CookBook</title>
</head>
<body>
    <img src="ico/cookbook.ico" width="100" height="100" alt="logo">
    <nav>
      <ul>
        <li><a href="indexlogged.php" class="menu-link">Strona główna</a></li>
        <li><a href="aboutme.html" class="menu-link">O mnie</a></li>
        <li><a href="categories.php" class="menu-link">Kategorie</a></li>
        <li><a href="kontakt.html" class="menu-link">Kontakt</a></li>
        <li><a href="add_recipe.php" class="menu-link">Dodaj Przepis</a></li>
        <li><a href="logout.php" class="menu-link">Wyloguj się</a></li>
      </ul>
    </nav>

    <main>
      <?php
      $fileList = scandir('przepisy'); 

      foreach ($fileList as $file) {
          if ($file !== '.' && $file !== '..') {
              echo "<p><a href='przepisy/$file'>$file</a></p>"; 
          }
      }
      ?>

    </main>

</body>
</html>