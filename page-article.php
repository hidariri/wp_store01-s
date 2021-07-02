<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/article.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">news</h1>
        </div>
      </section>

      <!-- コンテンツ -->
      <section id="article" class="wrap">
        <div class="inner-wrap">
          <div class="article-header">
            <h2 class="article-header__title">news</h2>
            <h3 class="article-header__heading">お知らせ</h3>
          </div>
          <div class="article-content tac">
            <div class="article__heading tal">
              <time class="article__date">2021/01/01</time>
              <h2 class="article__title">WEBサイト新規オープンのお知らせ</h2>
            </div>
            <div class="article__image">
              <img src="img/grayimg_article.png" alt="記事画像">
            </div>
            <div class="article__text ">
              <p class="article__text__item tal">
                お知らせ内容が入ります。<br>
                お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。<br>
                お知らせ内容が入ります。<br>
                <br>
                お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。お知らせ内容が入ります。<br>
                <a href="#">リンクの設置</a><br>
                <br>
                お知らせ内容が入ります。
              </p>
            </div>
          </div>
        </div>
        <a class="article__btn filled" herf="#">一覧に戻る</a>
      </section>
    </main>
<?php get_footer(); ?>