<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" xmlns:fb="http://ogp.me/ns/fb#"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
  $ua=$_SERVER['HTTP_USER_AGENT'];
  if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)){
    echo '<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />';
  }else{
    echo '<meta name="viewport" content="width=1366">';
  }
?>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>[クライアント名]さま</title>
<link href="./common/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="./common/css/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
  <body>

  <h1>[クライアント名]さま デザイン確認ページ</h1>
  <article>
    <div class="txt-box">
      <p class="concept">デザインコンセプト</p>
      <h2>[ここにコンセプトコピー文]</h2>
      <p>[ここにコンセプトリード文]</p>
    </div>
    <section>
      <div class="navi-wrap">
        <div class="line-box">
          <div class="an-a inner">
            <div class="img-box">
              <img src="//placehold.jp/750x1624.png" alt="">
            </div>
            <div class="dcon">
              <h3>スマートフォンデザイン</h3>
              <div class="links">
                <div class="sp">
                  <div class="box new">
                    <a href="/_design/190000/sp/sample.php" target="_blank" rel="noopener" class="qr">[ページ名]</a>
                    <span class="update new">2019/00/00</span>
                  </div>
                </div>
              </div>
              <p class="attent">
                スマホから上記QRコードを読み取っていただくことで、実機でも確認できます。<br>
                実機でご確認いただいたほうがイメージはしやすいかと思いますので、可能であればご確認いただければ幸いです。
              </p>
            </div>
            <div class="dcon">
              <h3>PCデザイン</h3>
              <div class="links">
                <a href="/_design/190000/pc/sample.php" target="_blank" rel="noopener">
                  [ページ名]
                  <span class="update new">2019/00/00</span>
                </a>
              </div>
              <h4>デザイン意図</h4>
              <h5>[ページ名]</h5>
              <p>[リード文]</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript" defer></script>
  <script src="common/js/qr.js" defer></script>
</body>
</html>
