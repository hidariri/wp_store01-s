<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">news</h1>
        </div>
      </section>

      <!-- コンテンツ -->
      <section id="news" class="wrap">
        <div class="inner-wrap">
          <div class="news">
            <h2 class="news__title">news</h2>
            <h3 class="news__heading">お知らせ一覧</h3>
          </div>
          <ul class="news-list tal">
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <time class="news-list__date">2021/1/1</time>
                <p class="news-list__title">WEBサイト新規オープンのお知らせ</p>
              </a>
            </li>
          </ul>

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