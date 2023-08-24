<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tworzenie Postów</title>
  <link rel="stylesheet" href="css/add_recipe.css">
  <script type="text/javascript" src="js/add_recipe.js"></script>
</head>
<body>
  <div class="container">
    <h1>Tworzenie Postów</h1>
    <form action="recipe_add.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name_recipe">Nazwa Przpisu:</label>
        <input type="text" id="name_recipe" name="name_recipe" >
      </div>
      <div class="form-group">
        <label for="content">Opis:</label>
        <textarea id="content" name="description"></textarea>
      </div>
      <div>
        <label for="time">Czas:</label>
        <input type="time" id="time" name="time">
      </div>
      <div>
        <label for="difficulty">Trudność:</label>
        <select name="difficulty" id="difficulty">
          <option value="easy" name="easy">Łatwy</option>
          <option value="medium" name="medium">Średni</option>
          <option value="hard" name="hard">Trudny</option>

        </select>
      </div>
      <button type="submit">Dodaj Przepis</button>
    </form>
  </div>
</body>
</html>
