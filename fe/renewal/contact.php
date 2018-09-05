<?php
/*
 * Template Name: CONTACT
 */
get_header();
?>

  <div id="hhwrapper">
    <div id="header">
      <h1><a href="index.html"><img src="<?= DIR_IMG ?>/hh_logo.png" alt="HandiHouse"></a></h1>
      <ul id="g_nav" class="pc">
        <li><a href="vision.html">VISION</a></li>
        <li><a href="project.html">PROJECT</a></li>
        <li><a href="media.html">MEDIA</a></li>
        <li><a href="company.html">COMPANY</a></li>
        <li><a href="contact.html"><img src="<?= DIR_IMG ?>/i_contact.png" alt="CONTACT"></a></li>
        <li><a href="https://www.facebook.com/HandiHouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_fb.png" alt="HandiHouse facebook"></a></li>
        <li><a href="https://www.instagram.com/handihouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_insta.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <div class="nav_drawer sp">
        <input id="nav_input" type="checkbox" class="nav_unshown">
        <label class="nav_open" for="nav_input"><span></span><span></span><span></span></label>
        <div id="nav_content">
          <ul>
            <li><a href="vision.html">VISION</a></li>
            <li><a href="project.html">PROJECT</a></li>
            <li><a href="project_c_top.html">- COLLABORATION PROJECT</a></li>
            <li><a href="project_i_top.html">- INDEPENDENT PROJECT</a></li>
            <li><a href="media.html">MEDIA</a></li>
            <li><a href="company.html">COMPANY</a></li>
            <li><a href="contact.html"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
            <li><a href="https://www.facebook.com/HandiHouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a> <a href="https://www.instagram.com/handihouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="pan">
      <a href="index.html">HOME</a>　>　CONTACT
    </div>

    <div class="contents_wrapper">
      <div id="contact" class="contents_area">
        <h2>CONTACT</h2>
        <form　method="post" name="contact_form" action="">
          <p>お仕事のご依頼、ご相談、取材等の<span class="sp_i"><br></span>お問い合わせは下記フォームより<span class="sp_i"><br></span>ご連絡下さい。</p>

          <p><label for="contact_name">お名前　<span class="require">必須</span></label><br>
            <input type="text" name="contact_name" id="contact_name" size="50"></p>

          <p><label for="contact_company">御社名（法人の方）</label><br>
            <input type="text" name="contact_company" id="contact_company" size="50"></p>

          <p><label for="contact_mail">メールアドレス</label>　<span class="require">必須</span><br>
            <input type="text" name="contact_mail" id="contact_mail" size="120"></p>

          <p><label for="contact_phone">お電話番号</label>　<span class="require">必須</span><br>
            <input type="text" name="contact_phone" id="contact_phone" size="50"></p>

          <p><label for="contact_text">お問い合わせ内容</label>　<span class="require">必須</span><br>
            <small>※お仕事をご依頼のお客様へ<br>物件情報（住所、面積、構造）やご予算などお分りになる範囲でご記入下さい。</small>
            <textarea name="contact_text" id="contact_text" rows="10" cols="50"></textarea></p>
          <p><a href="javascript:contact_form.submit()" class="btn_a nouse">送信</a></p>
          </form>
          <p>
            土日祝日のお問い合わせに関しましては、翌平日営業日以降のご返信となります。<br> また、お問い合わせ内容により、お返事に数日頂く場合がございます。あらかじめご了承ください。
            <br> 弊社より送信するお客様への電子メールは、お客様個人宛にお客様のお問い合わせにお答えさせていただく目的でお送りするものです。
          </p>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
