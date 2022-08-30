
  <header class="l-header">
    <h1 class="l-header_title">爆速納品</h1>
    <div class="l-header_inner">
      <?php
        $url = $_SERVER['REQUEST_URI'];
        if(!strstr($url,'login')==true && !strstr($url,'register')==true):
      ?>
      <div class="l-header_inner_login">
        <p class="l-header_info"><span class="name">アジズ</span>さん、こんにちは</p>
        <a href="#" class="l-header_logout">ログアウト</a>
      </div>
    <?php else: ?>
      <a class="nav-link" href="#">
        <p class="l-header_info">ログイン</p>
      </a>
      <?php endif; ?>
    </div>

  </header>
