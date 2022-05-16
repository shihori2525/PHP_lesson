<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP演習</title>
</head>

<body>

  <?php
  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $goiken = $_POST['goiken'];

  if ($nickname == '') {
    print 'ニックネームが入力されていません。<br/>';
  } else {
    print 'ようこそ';
    print $nickname;
    print '様';
    print '<br/>';
  }

  if ($email == '') {
    print 'メールアドレスが登録されていません。<br/>';
  } else {
    print 'メールアドレス';
    print $email;
    print '<br/>';
  }

  if ($goiken == '') {
    print 'ご意見が入力されていません。<br/>';
  } else {
    print 'ご意見<br/>';
    print $goiken;
    print '<br>';
  }

  print '<a href="index.html">戻る</a>';
  ?>
</body>

</html>