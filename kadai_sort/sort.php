<!DOCTYPE html>
<html lang="ja">

<head>
  <meta cherset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

    function sort_2way($array, $order)
    {
      $nums = [15, 4, 18, 23, 10];

      if ($order) {
        echo '昇順にソートします。<br>';
        sort($array);
        foreach ($array as $ary) {
          echo $ary . '<br>';
        }
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
        foreach ($array as $ary) {
          echo $ary . '<br>';
        }
      }
    }
    $nums = [15, 4, 18, 23, 10];
    sort_2way($nums, true);
    sort_2way($nums, false);

    ?>
  </p>
</body>

</html>