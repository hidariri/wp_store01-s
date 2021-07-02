<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
</head>
    <main>
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <div class="fv-title center-xy">
            <p class="fv-title__text">お客様にあわせた<br />技術あるケアを</p>
            <p class="fv-title__subtext">
              あなたの笑顔がみたくて。<br />あなたのほっとした顔がみたくて。
            </p>
          </div>
        </div>
      </section>

      <section id="logo" class="logo">
        <div class="logo__wrap sub-bc">
          <div class="logo-image main-bc">
            <img class="logo-image__img" src="img/logo-white.svg" alt="ロゴ" />
          </div>
          <div class="logo-about sub-bc">
            <h2 class="logo-about__title">about</h2>
            <h3 class="logo-about__heading">Relaxation Lila</h3>
            <p class="logo-about__text">
              デモテキストデモテキストデモテキストデモテキスト<br />デモテキストデモテキスト
            </p>
            <a class="logo-about__btn filled" herf="#">サロンについて</a>
          </div>
        </div>
      </section>

      <!-- コンテンツ１ -->
      <section id="recommend" class="wrap">
        <div class="inner-wrap">
          <div class="recommend">
            <h2 class="recommend__title">recommend menu</h2>
            <h3 class="recommend__heading">おすすめメニュー</h3>
            <div class="recommend-contents">
              <div class="recommend-contents__item">
                <div class="recommend-content">
                  <h4 class="recommend-content__title">
                    全身疲労ケア 90分<br />ヘッドマッサージ付き
                  </h4>
                  <p class="recommend-content__text tal">
                    首の付け根、肩甲骨～全身ゴリゴリ疲れも眼精疲労も歪みも癒しもリラにお任せ。ヘッドマッサー…
                  </p>
                </div>
                <div class="recommend-contents__item__image">
                  <img
                    class="recommend-contents__item__img"
                    src="img/recommend-menu1.png"
                    alt="全身疲労ケア画像"
                  />
                  <a href="#" class="recommend-contents__item__link tal"
                    >店長おすすめ</a
                  >
                </div>
              </div>
              <div class="recommend-contents__item">
                <div class="recommend-content">
                  <h4 class="recommend-content__title">
                    全身ケア＋美容矯正<br />コース 60分
                  </h4>
                  <p class="recommend-content__text tal">
                    全身ケア＋硬い頭皮、額、頬、顎を丁寧に解します。左右のバランスを整え小顔リフトアップを目…
                  </p>
                </div>
                <div class="recommend-contents__item__image">
                  <img
                    class="recommend-contents__item__img"
                    src="img/recommend-menu2.png"
                    alt="全身ケア美容矯正コース画像"
                  />
                  <a href="#" class="recommend-contents__item__link tal"
                    >店長おすすめ</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- コンテンツ２ -->
      <section id="menu" class="sub-bc">
        <div class="inner-wrap">
          <div class="menu">
            <h2 class="menu__title">menu</h2>
            <h3 class="menu__heading">
              あなたの疲れや体調に合わせた<br />こだわりのメニュー
            </h3>
            <p class="menu__text">
              デモテキストデモテキストデモテキストデモテキスト<br />デモテキストデモテキストデモテキスト
            </p>
            <div class="menu-contents">
              <div class="menu-item">
                <a href="#" class="menu-item__link">
                  <img
                    class="menu-item__img"
                    src="img/menu-1.png"
                    alt="head care"
                  />
                </a>
                <p class="menu-item__cover-text">head care</p>
              </div>
              <div class="menu-item">
                <a href="#" class="menu-item__link">
                  <img
                    class="menu-item__img"
                    src="img/menu-2.png"
                    alt="foot care"
                  />
                </a>
                <p class="menu-item__cover-text">foot care</p>
              </div>
              <div class="menu-item">
                <a href="#" class="menu-item__link">
                  <img
                    class="menu-item__img"
                    src="img/menu-3.png"
                    alt="body care"
                  />
                </a>
                <p class="menu-item__cover-text">body care</p>
              </div>
            </div>
            <a class="menu__btn filled" herf="#">メニューを見る</a>
          </div>
        </div>
      </section>

      <!-- コンテンツ3 -->
      <section id="news" class="main-bc">
        <div class="inner-wrap">
          <div class="news">
            <h2 class="news__title">news</h2>
            <h3 class="news__heading">お知らせ</h3>
            <ul class="news-list tal">
              <li class="news-list__item">
                <a href="#">
                  <time class="news-list__date">2021/1/1</time>
                  <p class="news-list__title">
                    WEBサイト新規オープンのお知らせ
                  </p>
                </a>
              </li>
              <li class="news-list__item">
                <a href="#">
                  <time class="news-list__date">2021/1/1</time>
                  <p class="news-list__title">
                    WEBサイト新規オープンのお知らせ
                  </p>
                </a>
              </li>
              <li class="news-list__item">
                <a href="#">
                  <time class="news-list__date">2021/1/1</time>
                  <p class="news-list__title">
                    WEBサイト新規オープンのお知らせ
                  </p>
                </a>
              </li>
            </ul>
            <a class="news__btn filled" href="#">お知らせ一覧</a>
          </div>
        </div>
      </section>

      <!-- コンテンツ4 -->
      <section id="info" class="info">
        <div class="info__wrap sub-bc">
          <div class="info-contents">
            <h2 class="info-contents__title">information・access</h2>
            <h3 class="info-contents__heading">サロン案内・アクセス</h3>
            <p class="info-contents__address">
              Relaxation Lila<br />〒963-0534<br />福島県郡山市日和田町千峯坦１０８<br />サンロード二番館
              102
            </p>
            <a class="info-contents__btn filled" href="#">詳しく見る</a>
          </div>
          <div class="info-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.8176425108163!2d140.38287941561887!3d37.44141247982144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60206d095a3ec33d%3A0xcba0c1201442f80!2z44Oq44Op44Kv44K844O844K344On44Oz44Oq44Op!5e0!3m2!1sja!2sjp!4v1615459232634!5m2!1sja!2sjp"
              width="720"
              height="498"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              class="info-map__iframe"
            ></iframe>
          </div>
        </div>
      </section>

      <!-- コンテンツ5 -->
      <section id="contact" class="wrap">
        <div class="inner-wrap">
          <div class="contact">
            <h2 class="contact__title">contact</h2>
            <h3 class="contact__heading">お問い合わせ・ご予約</h3>
            <p class="contact__text">
              お電話、またはLINEにて<br class="sp" />ご予約を承っております。
            </p>
            <div class="contact__tel">TEL:024-958-5239</div>
            <a class="contact__btn" href="#">
              <div class="contact__line pale">
                <img
                  src="img/LINE_icon 1.png"
                  alt="line-icon"
                  class="contact__line-icon"
                />
                <p class="contact__line-text">LINEで予約・お問い合わせ</p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- コンテンツ6 -->
      <section id="sns" class="main-bc">
        <div class="inner-wrap">
          <div class="sns">
            <h2 class="sns__title">SNS</h2>
            <h3 class="sns__heading">
              デモテキストデモテキストデモテキストデモテキスト<br />デモテキストデモテキストデモテキスト
            </h3>
            <div class="sns-contents">
              <a class="sns-contents__btn filled" href="#">
                <i class="fab fa-instagram sns-contents__icon"></i>
                <p class="sns-contents__text">Instagram</p>
              </a>
              <a class="sns-contents__btn filled" href="#">
                <i class="fab fa-facebook sns-contents__icon"></i>
                <p class="sns-contents__text">Facebook</p>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>