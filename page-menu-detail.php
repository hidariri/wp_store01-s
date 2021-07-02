<?php get_header(); ?>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu-detail.css" />
</head>
    <main>
      <!-- fv -->
      <section id="fv" class="fv">
        <div class="fv__wrap">
          <h1 class="fv__heading">recommend menu</h1>
        </div>
      </section>

      <!-- コンテンツ -->
      <section id="menu-detail" class="wrap">
        <div class="inner-wrap">
          <div class="menu-detail-header">
            <h2 class="menu-detail-header__title">recommend menu</h2>
            <h3 class="menu-detail-header__heading">おすすめメニュー</h3>
          </div>
          <div class="menu-detail-content tac">
            <div class="menu-detail__heading tal">
              <h2 class="menu-detail__title">全身疲労ケア 90分ヘッドマッサージ付き</h2>
            </div>
            <div class="menu-detail__image">
              <img src="img/fv-image.png" alt="記事画像">
            </div>
            <div class="menu-detail__text ">
              <p class="menu-detail__text__item tal">
                体内の熱は人間にとって不可欠なものです。冷えは病気を治しませんが、冷を改善し体を温めると抵抗力が向上します。 インキュアは高周波を使い体内に熱を発生させ、その温熱作用により深部加温を行います。<br>
                <br>
                緊張して凝り固まってしまった筋肉は血行不良で酸欠状態になっています。インキュアを行う事でしっかり酸素がいきわたり、固くなった筋膜や筋肉も緩みやすくなり、その後のマッサージ効果が何倍も何十倍も上がります。<br>
                <br>
                また、痩せたい部分にあてる事で、脂肪をやわらかくしながら代謝を活発にして脂肪を燃焼させる効果も期待できます。身体組織まで深く浸透し、血管拡張させ血行を促進、高周波で体を芯から温め、内側からほかほかします。続けることにより基礎代謝量がアップし、冷えなどの体質改善、むくみ解消、免疫力アップが期待できます。マッサージとの相乗効果で痩身効果も高まります。<br>
                <br>
                おすすめ：冷え性 かたこり 頑固なセルライト 代謝が悪い お腹の余分な脂肪 太りやすい 疲れ むくみ 肌のハリ・弾力
              </p>
            </div>
          </div>
        </div>
        <a class="menu-detail__btn filled" herf="#">他のメニューを見る</a>

      </section>
      <section id="contact">
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