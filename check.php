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

  if ($nickname == '' || $email == '' || $goiken == '') {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  } else {
    print '<form method="post" action="thanks.php">';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
  }
  ?>
</body>

</html>