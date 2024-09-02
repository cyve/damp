<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>DAMP</title>
	</head>
	<body>
		<h1>Docker Apache MySQL PHP</h1>
        <code>PHP <?= \PHP_VERSION ?></code>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet risus nullam eget felis eget nunc lobortis. Vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor. Tristique senectus et netus et malesuada fames ac turpis egestas. Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Quisque id diam vel quam elementum pulvinar etiam. Odio euismod lacinia at quis. Sit amet mattis vulputate enim nulla. Dignissim suspendisse in est ante in nibh mauris cursus mattis. Amet porttitor eget dolor morbi non arcu risus quis varius.</p>
        <h4>Books</h4>
        <ul>
        <?php foreach (include '../src/books.php' as $book): ?>
            <li>#<?= $book->id ?> - <?= $book->title ?> (<?= $book->author ?>)</li>
        <?php endforeach; ?>
        </ul>
    </body>
</html>
