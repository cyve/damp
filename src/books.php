<?php

$dsn = sprintf('mysql:host=%s;port=%s;dbname=%s', $_ENV['MYSQL_HOST'], $_ENV['MYSQL_PORT'], $_ENV['MYSQL_DATABASE']);
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];

$pdo = new PDO($dsn, $user, $password);

$query = $pdo->query('SELECT id,title,author FROM book');
$books = $query->fetchAll(\Pdo::FETCH_OBJ);

return $books;
