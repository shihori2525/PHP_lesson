<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP演習</title>
</head>

<body>

  <?php
  $nickname = $_POST['nickname'];
  if ($nickname == '') {
    print 'ニックネームが入力されていません。';
  } else {
    print 'ようこそ';
    print $nickname;
    print '様';
  }
  ?>
</body>

</html>