<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h1>Recommended books</h1>
<?php
/**
 * Episode 6 -> Arrays
 */

$books = [
  "Do androids dream of electric sheep",
  "The Langoliers",
  "Hail Mary"
];
?>
<ul>
  <?php foreach ($books as $book) : ?>
    <li><?= $book ?></li>
  <?php endforeach; ?>
</ul>

</body>
</html>