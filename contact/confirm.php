<!-- データの取得を行いたいのでphpを使っている。 -->

<?php
//$_POST["name"]の値が空だったらLocationで指定しているファイルに強制移動（リダイレクト）させる
if(!(isset($_POST['name']))){
  header('Location:index.html');
  exit;
}
$name=htmlspecialchars($_POST["name"], ENT_QUOTES);
$name02=htmlspecialchars($_POST["name02"], ENT_QUOTES);
$email=htmlspecialchars($_POST["email"], ENT_QUOTES);
$email02=htmlspecialchars($_POST["email02"], ENT_QUOTES);
$item=$_POST["item"];
$message=htmlspecialchars($_POST["message"], ENT_QUOTES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="120文字くらいのサイト説明文">
  <meta name="keyword" content="3〜5ワードくらいのキーワードを入れる">
  <title>株式会社STEP|確認ページ</title>
  <link rel="stylesheet" href="/step/css/style.css">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="/step/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" sizes="192x192" href="/step/img/touch_icon.png">
</head>
<body>

<header>
</header>

<main class="contact-page">
  <article class="contact">
    <h3>CONTACT<br><span>お問い合わせ＆お見積り依頼</span></h3>
    <div class="contact-container">
      <ul class="step">
        <li><p>入力</p></li>
        <li class="current"><p>確認</p></li>
        <li><p>完了</p></li>
      </ul>
      <form id="g-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfAN1KE9wewrMNTJdiwZfJvjzegWsJ2RkCDLMIUYPNwr59sXg/formResponse" method="post">
        <dl>
          <dt><span>※</span>お問い合わせ項目</dt>
          <small>この項目は記入必須です。</small>
          <dd><p><?php echo $item; ?></p></dd>
        </dl>
        <div class="name-container">          
          <dl class="name-wrapper">
            <dt><span>※</span>お名前</dt>
            <dd><p><?php echo $name; ?></p></dd>
          </dl>
          <div class="name-wrapper-conf">
            <dt><span>※</span>お名前(カナ)</dt>
            <dd><p><?php echo $name02; ?></p></dd>
          </div>
        </div>
        <div class="mail-container">
          <dl class="mail-wrapper">
            <dt><span>※</span>メールアドレス</dt>
            <dd><p><?php echo $email; ?></p></dd>
          </dl>
          <dl class="mail-wrapper-conf">
            <dt><span>※</span>メールアドレス再入力</dt>
            <dd><p><?php echo $email02; ?></p></dd>
          </dl>
        </div>
        <dl>
          <dt><span>※</span>お問い合わせ内容</dt>
          <dd><p class="textarea"><?php echo $message; ?></p></dd>
        </dl>

        <!-- googleFormに送る値を設定 -->
        <input type="hidden" name="entry.845472719" value="<?php echo $item; ?>">
        <input type="hidden" name="entry.558785602" value="<?php echo $name; ?>">
        <input type="hidden" name="entry.1076166231" value="<?php echo $name02; ?>">
        <input type="hidden" name="entry.196756271" value="<?php echo $email; ?>">
        <input type="hidden" name="entry.291888899" value="<?php echo $email02; ?>">
        <input type="hidden" name="entry.1747969934" value="<?php echo $message; ?>">

        <p class="confirm-txt">お問い合わせ内容に問題がなければ送信ボタンをクリックして下さい。</p>
  
        <div class="form-btn">
          <input type="submit" value="入力内容を送信">
          <input type="button" value="入力画面に戻る" onclick="history.back();">
        </div>
        
      </form>
    </div>
  </article>
</main>

  <footer>
    <img src="/step/img/top-pc/logo-footer.png" alt="株式会社STEPロゴ画像">
    <p>株式会社 STEP</p>
    <a href="https://www.google.co.jp/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%95%E3%82%A1%E3%82%A6%E3%83%B3%E3%83%87%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%95%E3%82%A7%E3%83%AA%E3%82%ABTA/@35.7259364,139.7117068,17z/data=!3m2!4b1!5s0x60188d69a1bdee07:0xf93a9b8d9839c72a!4m5!3m4!1s0x60188d6b8b0de7dd:0xd184e022fc8bf0e6!8m2!3d35.7259321!4d139.7138955?hl=ja" target="_blank" rel="noopener noreferrer">
      <img src="/step/img/top-pc/map.png" alt="マップの記号">
      <p>〒171-0022<br class="br-sp"> 東京都豊島区南池袋2-12-9 ＫＫビル４Ｆ</p>
    </a>
    <p class="copy">&copy;STEP Inc.</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(function(){
    $('#g-form').submit(function (event) {
    var formData = $('#g-form').serialize();
    $.ajax({
      url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfAN1KE9wewrMNTJdiwZfJvjzegWsJ2RkCDLMIUYPNwr59sXg/formResponse",
      data: formData,
      type: "POST",
      dataType: "xml",
      statusCode: {
        0: function(){
          window.location.href = "thanks.html";
          },
        200: function(){
        //失敗したときの処理
          }
        }
      });
    //googleformへのページ遷移をキャンセル
    event.preventDefault();
    });
    });
  </script>
  <script src="js/script.js"></script>

</body>
</html>