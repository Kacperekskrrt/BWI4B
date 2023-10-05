<!DOCTYPE html>
<html lang="pl">
<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Kontakt</title>

</head>
<body>

<nav>
    <ul>
      <li><a href="index.php">Strona główna</a></li>
      <li><a href="about-us.php">O nas</a></li>
      <li><a href="contact.php">Kontakt</a></li>
    </ul>
</nav>

<h1>Kontakt</h1>

<form>

<label for="name">Imię i nazwisko:</label>
<input type="text" id="name" name="name" required>
<br><br>
    
<label for="email">Adres email:</label>
<input type="email" id="email" name="email" required>
<br><br>
    
<label for="message">Wiadomość:</label>
<br>
<textarea id="message" name="message" rows="4" cols="50" required></textarea>
<br><br>

<input type="submit" value="Wyślij">

</form>

<footer>

<p>&copy; <?php echo date("Y"); ?> Copyright</p>

</footer>

</body>

</html>