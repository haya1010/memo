<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../php/css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<!-- <h2>作成されたメモ</h2> -->
<pre>

<?php

$statement = $db->prepare('INSERT INTO practice SET memo=?, created_at=Now()');
$statement->execute(array($_POST['memo']));
print($_POST['memo']);

?>
<br>
<?php
echo 'メモが作成されました';
?>

</pre>
<a href="index.php">メモ一覧へ</a>
</main>
</body>    
</html>