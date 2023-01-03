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
<?php
/**
 * Episode 7 -> Associative Arrays
 */

$books = [
  [
    'name' => 'Do androids dream of electric sheep',
    'author' => 'Phillip K. Dick',
    'purchaseUrl' => 'https://example.com'
  ],
  [
    'name' => 'The Langoliers',
    'author' => 'Andy Weir',
    'purchaseUrl' => 'https://example.com'
  ]
]
?>
<ul>
  <?php foreach ($books as $book) : ?>
    <li>
      <a href="<?= $book['purchaseUrl'] ?>">
        <?= $book['name']; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
</body>
</html>