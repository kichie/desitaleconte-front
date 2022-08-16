<?php include('./inc/head.php'); ?>

<body>
  <?php include('./inc/header.php'); ?>

  <main class="p-register">
    <div class="p-register_container">
      <form class="p-register_form" action="" method="post">
        <div class="p-register_form_text">
          <p class="p-register_form_text_title">ユーザー名</p>
          <input type="text" name="user" value="" class="input_text">
        </div>
        <div class="p-register_form_text">
          <p class="p-register_form_text_title">パスワード</p>
          <input type="text" name="password" value="" class="input_text">
        </div>
        <input type="submit" name="" value="登録" class="p-register_form_submit">
      </form>
    </div>
  </main>
</body>

</html>
