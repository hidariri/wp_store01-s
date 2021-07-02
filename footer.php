    <footer class="footer tac">
      <h4 class="footer__text">
        Relaxation Lila <br />
        All Rights Reserved
        <a
          href="https://urof.co.jp/hinagata/"
          target="_blank"
          class="footer__link"
          >Created By
          <img
            class="footer__link__logo-hinagata"
            src="img/logo-hinagata.svg"
          />
        </a>
      </h4>
    </footer>
    <script>
      $(function () {
        var headNav = $("header");
        //scrollだけだと読み込み時困るのでloadも追加
        $(window).on("load scroll", function () {
          //現在の位置が500px以上かつ、クラスfixedが付与されていない時
          if (
            $(this).scrollTop() > 500 &&
            headNav.hasClass("header--fixed") == false
          ) {
            //headerの高さ分上に設定
            headNav.css({ top: "-100px" });
            //クラスfixedを付与
            headNav.addClass("header--fixed");
            //位置を0に設定し、アニメーションのスピードを指定
            headNav.animate({ top: 0 }, 600);
          }
          //現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
          else if (
            $(this).scrollTop() < 300 &&
            headNav.hasClass("header--fixed") == true
          ) {
            headNav.removeClass("header--fixed");
          }
        });
      });
      // ハンバーガーメニューのjquery
      $(
        (function () {
          $(".header-btn").on("click", function () {
            $(".header-btn").toggleClass("is-active");
            $(".header-nav").fadeToggle("slow");
            $("html").removeClass("is-fixed");
          });
        })()
      );
      $(
        (function () {
          $(".header-nav-list__item").on("click", function () {
            $(".header-btn").toggleClass("is-active");
            $(".header-nav").fadeToggle("slow");
          });
        })()
      );
    </script>
    <?php wp_footer(); ?>
  </body>
</html>