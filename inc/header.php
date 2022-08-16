
  <header class="l-header">
    <h1 class="l-header_title">爆速納品</h1>
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if(!strstr($url,'login')==true && !strstr($url,'register')==true):
    ?>
    <p class="l-header_info"><span class="name">アジズ</span>さん、こんにちは</p>
    <?php endif; ?>
  </header>
