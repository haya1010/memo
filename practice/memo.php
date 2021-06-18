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
<h2>詳細</h2>


<a href="input.html">新規作成</a>
 |
<a href="index.php">メモ一覧へ</a>

<pre>

<?php

$id = $_REQUEST['id'];
// print($id);
$memos = $db->prepare('SELECT * FROM practice WHERE id=?');
$memos->execute(array($id));
$memo = $memos->fetch();

print($memo['memo']);
?>
<br>
作成日
<?php
print($memo['created_at']);

?>
</pre>
<a href="update.php?id=<?php print($memo['id']) ?>">編集</a>
 |
<a href="delete.php?id=<?php print($memo['id']) ?>">削除</a>

</main>
</body>    
</html>