<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bloglist.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">blog</h1>
        </div>
      </section>

      <!-- コンテンツ -->
      <section id="bloglist" class="wrap">
        <div class="inner-wrap">
          <div class="bloglist">
            <h2 class="bloglist__title">blog</h2>
            <h3 class="bloglist__heading">ブログ一覧</h3>
          </div>
          <div class="bloglist-contents inner-wrap tac">
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image1.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image2.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image3.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image4.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image5.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image6.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image3.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image1.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
            <div class="bloglist-contents__item">
              <a href="#">
                  <img src="./img/blog-image2.png" alt="記事画像" class="bloglist-contents__item__img">
                <time class="bloglist-contents__item__date tal">2021/01/01</time>
                <h4 class="bloglist-contents__item__title tal">ブログタイトルが入ります。ブログタイトルが入ります。</h4>
              </a>
            </div>
          </div>
          <div id="pagenation">
            <nav class="page">
              <ul class="page-content">
                <li class="page__item">
                  <a class="page-next page-numbers" href="前のページ">
                    <i class="fa fa-chevron-left"></i>
                  </a>
                </li>
                <li class="page__item page__number this">
                  <span aria-current="page" class="page-numbers page-current"
                    >1</span
                  >
                </li>
                <li class="page__item page__number">
                  <a class="page-numbers" href="#">2</a>
                </li>
                <li class="page__item page__number">
                  <a class="page-numbers" href="#">3</a>
                </li>
                <li class="page__item page__number">
                  <a class="page-numbers" href="#">4</a>
                </li>
                <li class="page__item">
                  <a class="page-next page-numbers" href="次のページ">
                    <i class="fa fa-chevron-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>