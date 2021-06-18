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
<?php 

$id = $_REQUEST['id'];
$memos = $db->prepare('SELECT * FROM practice where id=?');
$memos->execute(array($id));
$memo = $memos->fetch();
?>

<main>
<h2>編集</h2>

<a href="index.php">メモ一覧へ</a>
 |
<a href="memo.php?id=<?php print($id) ?>">メモ詳細へ</a>



<form action="update_do.php" method="POST">
    <input type="hidden" name='id' value="<?php print($id) ?>">
    <textarea name="memo" cols="50" rows="10"><?php print($memo['memo']) ?></textarea><br>
    <button type="submit">登録</button>


</form>
</main>
</body>    
</html>