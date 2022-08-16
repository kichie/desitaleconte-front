<?php include('./inc/head.php'); ?>

<body>

  <main class="p-schedule">
    <div class="p-schedule_container">
      <h1 class="p-schedule_title">お打ち合わせ日程調整</h1>
      <form class="p-schedule_main" action="index.html" method="post">
        <div class="p-schedule_main_text">
          <p class="p-schedule_main_text_name">電話番号</p>
          <input type="tel" name="tel" value="" class="p-schedule_main_text_input">
        </div>
        <div class="p-schedule_main_text">
          <p class="p-schedule_main_text_name">メールアドレス</p>
          <input type="email" name="email" value="" class="p-schedule_main_text_input">
        </div>
        <div class="p-schedule_main_radio">
          <div class="p-schedule_main_radio_box">
            <div class="p-schedule_main_radio_item">
              <input type="radio" name="date" value="4月10日" id="radio_01" class="p-schedule_main_radio_item_input">
              <label for="radio_01" class="p-schedule_main_radio_item_label">4月10日</label>
            </div>
            <div class="p-schedule_main_radio_box_inner">
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0410" value="10:00" id="radio_01_01" class="p-schedule_main_radio_item_input">
                <label for="radio_01_01" class="p-schedule_main_radio_item_label">10:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0410" value="11:00" id="radio_01_02" class="p-schedule_main_radio_item_input">
                <label for="radio_01_02" class="p-schedule_main_radio_item_label">11:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0410" value="12:00" id="radio_01_03" class="p-schedule_main_radio_item_input">
                <label for="radio_01_03" class="p-schedule_main_radio_item_label">12:00</label>
              </div>
            </div>
          </div>
          <div class="p-schedule_main_radio_box">
            <div class="p-schedule_main_radio_item">
              <input type="radio" name="date" value="4月11日" id="radio_02" class="p-schedule_main_radio_item_input">
              <label for="radio_02" class="p-schedule_main_radio_item_label">4月11日</label>
            </div>
            <div class="p-schedule_main_radio_box_inner">
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0411" value="10:00" id="radio_02_01" class="p-schedule_main_radio_item_input">
                <label for="radio_02_01" class="p-schedule_main_radio_item_label">10:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0411" value="11:00" id="radio_02_02" class="p-schedule_main_radio_item_input">
                <label for="radio_02_02" class="p-schedule_main_radio_item_label">11:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0411" value="12:00" id="radio_02_03" class="p-schedule_main_radio_item_input">
                <label for="radio_02_03" class="p-schedule_main_radio_item_label">12:00</label>
              </div>
            </div>
          </div>
          <div class="p-schedule_main_radio_box">
            <div class="p-schedule_main_radio_item">
              <input type="radio" name="date" value="4月12日" id="radio_03" class="p-schedule_main_radio_item_input">
              <label for="radio_03" class="p-schedule_main_radio_item_label">4月12日</label>
            </div>
            <div class="p-schedule_main_radio_box_inner">
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0412" value="10:00" id="radio_03_01" class="p-schedule_main_radio_item_input">
                <label for="radio_03_01" class="p-schedule_main_radio_item_label">10:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0412" value="11:00" id="radio_03_02" class="p-schedule_main_radio_item_input">
                <label for="radio_03_02" class="p-schedule_main_radio_item_label">11:00</label>
              </div>
              <div class="p-schedule_main_radio_item">
                <input type="radio" name="time0412" value="12:00" id="radio_03_03" class="p-schedule_main_radio_item_input">
                <label for="radio_03_03" class="p-schedule_main_radio_item_label">12:00</label>
              </div>
            </div>
          </div>
        </div>
        <div class="p-schedule_main_text area">
          <p class="p-schedule_main_text_name">この動画に関する想いを教えてください。
            私たちが想いを反映させます！</p>
          <textarea name="name" class="p-schedule_main_text_area"></textarea>
        </div>
        <input type="submit" name="" value="送信" class="p-schedule_main_submit">
      </form>
    </div>
  </main>
</body>

</html>
