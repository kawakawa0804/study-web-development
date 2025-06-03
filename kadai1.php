<?php
$hours = 24;
$minutes = 60;
$seconds = 60;
$seconds_in_a_day = $hours * $minutes * $seconds;
$formula = "{$hours} × {$minutes} × {$seconds} = {$seconds_in_a_day}";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>1日の秒数を計算</title>
</head>
<body>
    <h1>1日は何秒？</h1>
    <p>計算式：<?= $formula ?></p>
    <p>結果：1日は <strong><?= $seconds_in_a_day ?> 秒</strong> です！</p>
</body>
</html>
