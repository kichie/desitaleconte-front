<?php include('./inc/head.php'); ?>

<body>
  <main class="p-upload">
    <div class="p-upload_container">
      <h1 class="p-upload_title">サンプル動画アップロード</h1>
      <form class="p-upload_form">
        <dl class="p-upload_form_item">
          <dt class="p-upload_form_item_name">画像アップロード</dt>
          <dd class="p-upload_form_item_input">
            <div class="p-upload_form_item_input_file">
              <input type="file" name="example" accept="image/jpeg, image/png" class="p-upload_form_item_input_file_upload">
            </div>
          </dd>
        </dl>
        <dl class="p-upload_form_item">
          <dt class="p-upload_form_item_name">タイトル</dt>
          <dd class="p-upload_form_item_input">
            <input type="text" name="" value="" class="p-upload_form_item_input_text">
          </dd>
        </dl>
        <div class="p-upload_form_radio">
          <div class="p-upload_form_radio_item">
            <input type="radio" name="radio" value="秒数" id="radio_01" class="p-upload_form_radio_item_input">
            <label for="radio_01" class="p-upload_form_radio_item_label">秒数</label>
          </div>
          <div class="p-upload_form_radio_item">
            <input type="radio" name="radio" value="カラグレ" id="radio_02" class="p-upload_form_radio_item_input">
            <label for="radio_02" class="p-upload_form_radio_item_label">カラグレ</label>
          </div>
          <div class="p-upload_form_radio_item">
            <input type="radio" name="radio" value="テロップ" id="radio_03" class="p-upload_form_radio_item_input">
            <label for="radio_03" class="p-upload_form_radio_item_label">テロップ</label>
          </div>
        </div>
        <input type="submit" name="" value="登録" class="p-upload_form_submit">
      </form>

      <div class="p-upload_sample">
        <ul class="p-upload_sample_lists">
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
          <li class="p-upload_sample_lists_item">
            <a href="#" class="p-upload_sample_lists_item_img">
              <img src="./img/upload_sample_img.png" alt="">
            </a>
            <div class="p-upload_sample_lists_item_flex">
              <a href="#" class="p-upload_sample_lists_item_flex_name">サンプル１</a>
              <div class="p-upload_sample_lists_item_flex_cancel">
                <img src="./img/upload_cancel.svg" alt="">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </main>
  <div class="modal_confirm">
    <div class="modal_confirmbox">
      <div class="modal_confirm_back"></div>
      <div class="modal_confirm_upload">
        <p class="modal_confirm_upload_text">サンプル１を本当に削除しますか？</p>
        <div class="modal_confirm_upload_ok">OK</div>
      </div>
    </div>
  </div>

</body>

</html>
