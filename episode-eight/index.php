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
 * Episode 8 -> Functions and filters
 */
$books = [
  [
    'name' => 'Do androids dream of electric sheep',
    'author' => 'Phillip K. Dick',
    'releaseYear' => 1968,
    'purchaseUrl' => 'https://example.com'
  ],
  [
    'name' => 'The Langoliers',
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseUrl' => 'https://example.com'
  ],
  [
    'name' => 'The Martian',
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseUrl' => 'https://example.com'
  ]
];
function filterByAuthor($books, $author): array {
  $filteredBooks = [];
  foreach ($books as $book) {
    if ($book['author'] === $author) {
      $filteredBooks[] = $book;
    }
  }
  return $filteredBooks;
}

?>
<ul>
  <?php foreach (filterByAuthor($books, 'Phillip K. Dick') as $book) : ?>
    <li>
      <a href="<?= $book['purchaseUrl'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
</body>
</html>