<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width, initial=1.0" />
    <meta charset="utf-8" />
    <title>タイトル</title>
    <meta name="”description”" content="”説明が入ります”" />
    <meta name="”keywords”" content="”キーワードを挿入,カンマまで区切れます”" />
    <link rel="icon" href="favicon/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
      rel="stylesheet"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/272a1c6b44.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap"
      rel="stylesheet"
    />

    <!-- ツイッターカード設定 -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Twitteridが入ります" />
    <!--id-->
    <meta property="og:url" content="urlが入ります" />
    <!--URL-->
    <meta property="og:title" content="タイトルが入ります" />
    <!--タイトル-->
    <meta property="og:description" content="説明が入ります" />
    <meta property="og:image" content="https://URL.com/img/画像" />
    <!-- フェイスブック -->
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="IDが入ります" />
  </head>
  <?php wp_head(); ?>
  <body>
    <header class="header">
      <a class="header-logo" href="#">
        <img src="img/logo-color.svg" alt="ロゴ" />
      </a>
      <div class="header-btn">
        <a href="#">
          <span class="header-btn__top"></span>
          <span class="header-btn__center"></span>
          <span class="header-btn__bottom"></span>
        </a>
      </div>
      <nav class="header-nav">
        <ul class="header-nav-list tac">
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">top</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">about</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">menu</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">blog</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">voice</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">news</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">access</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link" href="#">contact</a>
          </li>
          <li class="header-nav-list__item">
            <a class="header-nav-list__item__link__btn pale" href="#">ご予約</a>
          </li>
        </ul>
      </nav>
    </header>