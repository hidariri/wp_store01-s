<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/access.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">access</h1>
        </div>
      </section>

      <!-- コンテンツ1 -->
      <section id="info" class="wrap">
        <div class="inner-wrap">
          <div class="info">
            <h2 class="info__title">information</h2>
            <h3 class="info__heading">サロン案内</h3>
            <div class="info__cover">
              <div class="info__cover__bg">
                <img src="img/logo-white.svg" alt="ロゴ" class="info__logo" />
                <div class="info__content">
                  <h4 class="info__tit">Relaxation Lila</h4>
                  <p class="info__text">
                    営業時間:10:00~18:00（最終受付）<br />
                    ※時間外要相談/完全予約制
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- コンテンツ2 -->
      <section id="access" class="access">
        <div class="access__wrap sub-bc">
          <div class="access-contents">
            <h2 class="access-contents__title">access</h2>
            <h3 class="access-contents__heading">アクセス</h3>
            <p class="access-contents__address">
              Relaxation Lila<br />〒963-0534<br />福島県郡山市日和田町千峯坦１０８<br />サンロード二番館
              102
            </p>
          </div>
          <div class="access-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.8176425108163!2d140.38287941561887!3d37.44141247982144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60206d095a3ec33d%3A0xcba0c1201442f80!2z44Oq44Op44Kv44K844O844K344On44Oz44Oq44Op!5e0!3m2!1sja!2sjp!4v1615459232634!5m2!1sja!2sjp"
              width="720"
              height="498"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              class="access-map__iframe"
            ></iframe>
          </div>
        </div>
      </section>

      <!-- コンテンツ3 -->
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
    </main>
<?php get_footer(); ?>