  <section class="office">
    <div class="office__wrap">
      <div class="office__main">
        <h2 class="c-headline">
          <span class="c-headline__ja">事業所情報</span>
          <span class="c-headline__en">Office</span>
        </h2>
        <p class="office__illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/illust02.png" alt=""></p>
        <dl class="office__define">
          <dt class="office__term">定休日</dt>
          <dd class="office__details">〒901-0315 沖縄県糸満市照屋765番地<br>ローソン2F 丸正ビル 203号</dd>
        </dl>
        <dl class="office__define">
          <dt class="office__term">TEL</dt>
          <dd class="office__details">098-996-9583</dd>
        </dl>
        <dl class="office__define">
          <dt class="office__term">営業日</dt>
          <dd class="office__details">月～土曜 ［09:45～17:45］</dd>
        </dl>
        <dl class="office__define">
          <dt class="office__term">定休日</dt>
          <dd class="office__details">日曜祝日、年末年始</dd>
        </dl>
      </div>
      <p class="office__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/office_map.png" alt=""></p>
      <p class="office__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/office_image.jpg" alt=""></p>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="contact__wrap">
      <div class="contact__top">
        <h2 class="c-headline">
          <span class="c-headline__ja">お問い合わせ</span>
          <span class="c-headline__en">Contact</span>
        </h2>
        <p class="contact__text">お問い合わせフォームまたは、<br class="sp">公式LINEからお気軽に<br class="sp">ご連絡ください。</p>
      </div>
      <div class="contact__form">
        <?php echo do_shortcode('[contact-form-7 id="841616b" title="お問い合わせ"]') ?>
      </div>
    </div>
    <a href="https://lin.ee/WY4dYiP" target="_blank" class="contact__line">公式LINEから問い合わせせる</a>
    <p class="contact__deco01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco05.png" alt=""></p>
  </section>

  <footer class="footer">
    <small class="copyright">Copyright© ️2023 ココロおき楽 All Rights Reserved.</small>

  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
