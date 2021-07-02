<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/about.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">about</h1>
        </div>
      </section>

      <!-- コンテンツ1 -->
      <section id="about">
        <div class="about sub-bc">
          <h2 class="about__title">about</h2>
          <h3 class="about__heading">Relaxation Lila</h3>
          <p class="about__text">
            デモテキストデモテキストデモテキストデモテキスト<br />デモテキストデモテキスト<br />デモテキストデモテキストデモテキストデモテキスト<br />デモテキストデモテキスト
          </p>
        </div>
      </section>

      <!-- コンテンツ2 -->
      <section id="staff" class="wrap">
        <div class="staff">
          <h2 class="staff__title">staff</h2>
          <h3 class="staff__heading">スタッフ</h3>
        </div>
        <div class="staff-contents">
          <div class="staff-contents__item">
            <img
              src="img/staff1.png"
              alt="スタッフ画像"
              class="staff-contents__img"
            />
            <h4 class="staff-contents__name">苗字 名前</h4>
            <p class="staff-contents__text">
              説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明説明文が入ります。3行まで
            </p>
          </div>
          <div class="staff-contents__item">
            <img
              src="img/staff2.png"
              alt="スタッフ画像"
              class="staff-contents__img"
            />
            <h4 class="staff-contents__name">苗字 名前</h4>
            <p class="staff-contents__text">
              説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明説明文が入ります。3行まで
            </p>
          </div>
          <div class="staff-contents__item">
            <img
              src="img/staff3.png"
              alt="スタッフ画像"
              class="staff-contents__img"
            />
            <h4 class="staff-contents__name">苗字 名前</h4>
            <p class="staff-contents__text">
              説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明説明文が入ります。3行まで
            </p>
          </div>
          <div class="staff-contents__item">
            <img
              src="img/staff2.png"
              alt="スタッフ画像"
              class="staff-contents__img"
            />
            <h4 class="staff-contents__name">苗字 名前</h4>
            <p class="staff-contents__text">
              説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明説明文が入ります。3行まで
            </p>
          </div>
          <div class="staff-contents__item">
            <img
              src="img/staff3.png"
              alt="スタッフ画像"
              class="staff-contents__img"
            />
            <h4 class="staff-contents__name">苗字 名前</h4>
            <p class="staff-contents__text">
              説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明文が入ります説明説明文が入ります。3行まで
            </p>
          </div>
        </div>
      </section>

      <!-- コンテンツ3 -->
      <section id="contact" class="sub-bc">
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