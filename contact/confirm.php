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
  <meta name="description" content="株式会社STEP(ステップ)は、東京都にあるweb制作会社です。webサイト制作、コンサルティング、web運営サポートなど、インターネットの力を使ってあなたのビジネスをサポート致します。確認画面。">
  <meta name="keyword" content="サイト制作会社,webサイト制作,コンサルティング,web運用サポート,料金">
  <title>株式会社STEP|確認ページ</title>
  <link rel="stylesheet" href="/step/css/style.css">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="/step/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" sizes="192x192" href="/step/img/touch_icon.png">
</head>
<body>

<header>
<h1><a href="/step/index.html">株式会社STEP</a></h1>
    <div id="g-nav-btn">
      <div class="hamburger"><span></span></div><!-- .hamburger -->
      <p>MENU</p>
    </div><!-- #g-nav-btn -->
    <nav id="g-nav">
      <ul>
        <li><a href="/step/index.html"><span>HOME</span></a></li>
        <li><a href="#"><span>CONCEPT</span></a></li>
        <li><a href="#"><span>WORKS</span></a></li>
        <li><a href="/step/about-us/index.html"><span>ABOUT</span></a></li>
        <li><a href="/step/contact/index.html"><span>CONTACT</span></a></li>
      </ul>
    </nav><!-- .g-nav -->
    <div class="contact-btn">
      <a href="#"><img src="/step/img/top-pc/mail.png" alt=""></a>
    </div><!-- .contact-btn -->
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
      <h4>内容確認</h4>
      <form id="g-form" action="/step/contact/thanks.html" method="post">
        <dl>
          <dt><span>※</span>お問い合わせ項目</dt>
          <p class="check-item"><?php echo $item; ?></p>
        </dl>
        <div class="name-container">
          <dl class="name-wrapper">
            <dt><span>※</span>お名前</dt>
            <p class="check-item"><?php echo $name; ?> <?php echo $name02; ?> 様</p>
          </dl>
        </div>
        <div class="mail-container">
          <dl class="mail-wrapper">
            <dt><span>※</span>メールアドレス</dt>
            <p class="check-item"><?php echo $email02; ?></p>
          </dl>
        </div>
        <dl>
          <dt><span>※</span>お問い合わせ内容</dt>
          <p class="check-item"><?php echo $message; ?></p>
        </dl>
        <p class="confirm-txt">よろしければ、「送信」ボタンを押してください。</p>
        <div class="form-btn">
          <input type="submit" value="送信">
          <input type="button" value="←入力画面に戻る" onclick="history.back();">
        </div>
      </form>
    </div>
  </article>
</main>

<div id="scroll" class="scroll">
  <a id ="to-top" href="#">TOP</a>
  <span id="bar1" class="bar1"></span>
</div>

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
  <script src="/step/js/inoue-script.js"></script>

</body>
</html>