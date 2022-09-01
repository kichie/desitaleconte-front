<?php include('./inc/head.php'); ?>

<body>
  <?php include('./inc/header.php'); ?>

  <main class="p-login">
    <div class="p-login_container">
      <p class="c-message">おかえりなさい！</p>
      <form class="p-login_form" action="" method="post">
        <div class="p-login_form_text">
          <p class="p-login_form_text_title">ユーザー名</p>
          <input type="text" name="user" value="" class="input_text">
        </div>
        <div class="p-login_form_text">
          <p class="p-login_form_text_title">パスワード</p>
          <input type="text" name="password" value="" class="input_text">
        </div>
        <label class="p-login_form_save">
          <input type="checkbox" name="パスワードを保存する" value="パスワードを保存する" class="p-login_form_save_check">
          <span class="p-login_form_save_text">パスワードを保存する</span>
        </label>
        <input type="submit" name="" value="ログイン" class="p-login_form_login">
      </form>
    </div>
  </main>
</body>

</html>
