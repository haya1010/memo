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
<h2>メモ一覧</h2>


    <a href="input.html">新規作成</a>


    <?php
    
    $memos = $db->query('SELECT * FROM practice ORDER BY id DESC');

    ?>

<article>
    <?php while ($memo=$memos->fetch()): ?>
        <p><a href="memo.php?id=<?php print($memo['id']) ?>"><?php print($memo['memo'] . "\n"); ?></a></p>
    <?php endwhile; ?>
</article>


</main>
</body>    
</html>