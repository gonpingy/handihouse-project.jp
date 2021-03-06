<?php
/*
 * Template Name: トップページ
 */
get_header();
?>

  <div id="hhwrapper" class="top">
    <div class="nav_mv sp">
      <div id="nav_drawer" class="sp">
        <input id="nav_input2" type="checkbox" class="nav_unshown">
        <label class="nav_open" for="nav_input2"><span></span><span></span><span></span></label>
        <div id="nav_content2">
          <ul>
            <li><a href="<?= URL_VISION ?>">VISION</a></li>
            <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
            <li><a href="<?= URL_COLLABORATION_PROJECTS ?>">- COLLABORATION PROJECT</a></li>
            <li><a href="<?= URL_INDEPENDENT_PROJECTS ?>">- INDEPENDENT PROJECT</a></li>
            <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
            <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
            <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
            <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="firstview" class="pc">
      <div id="top_a">

        <div class="slide-top logo_a01"><img class="" src="<?= DIR_IMG ?>/alogo_01.png" alt="HandiHouse project"></div>
        <div class="logo_a02"><img src="<?= DIR_IMG ?>/alogo_02.png" alt="HandiHouse project"></div>
        <div><span class="slide-right_top topcover"></span></div>
      </div>
    </div>

    <div id="secondview">
      <div id="header_w" class="pc">
        <h1><a href="<? URL_TOP ?>"><img src="<?= DIR_IMG ?>/hh_logo_w.png" alt="HandiHouse"></a></h1>
        <ul id="g_nav" class="pc">
          <li><a href="<?= URL_VISION ?>">VISION</a></li>
          <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
          <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
          <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
          <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
          <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a></li>
          <li><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
        </ul>
      </div>
      <video loop autoplay muted id="varea" class="pc"><source src="<?= DIR_IMG ?>/hhmovie_s.mp4" type="video/mp4"><p>videoタグをサポートした最新のブラウザで閲覧してください。</p></video>
      <a href="javascript:void(0);" id="sound_button" class="sound_off btn_b pc_i"><i class="fas fa-volume-off"> </i><i class="fas fa-times"> </i></a>
      <div id="btn_area"><a href="#section_one"><img src="<?= DIR_IMG ?>/arrow.gif" alt="scroll"></a></div>

      <div id="slide" class="sp">
        <img src="<?= DIR_IMG ?>/sp_top_a2.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a3.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a4.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a5.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a1.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a6.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a7.jpg" alt="" />
        <img src="<?= DIR_IMG ?>/sp_top_a8.jpg" alt="" />
      </div>

      <div id="btn_area">SCROLL<br><a href="#section_one"><img src="<?= DIR_IMG ?>/arrow.gif" alt="scroll"></a></div>
    </div>

    <div id="header_top" class="">
      <h1><a href="<?= URL_TOP ?>"><img src="<?= DIR_IMG ?>/hh_logo.png" alt="HandiHouse"></a></h1>
      <ul id="g_nav" class="pc">
        <li><a href="<?= URL_VISION ?>">VISION</a></li>
        <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
        <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
        <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
        <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact.png" alt="CONTACT"></a></li>
        <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb.png" alt="HandiHouse facebook"></a></li>
        <li><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <div id="nav_drawer" class="sp">
        <input id="nav_input" type="checkbox" class="nav_unshown">
        <label class="nav_open sp" for="nav_input"><span></span><span></span><span></span></label>
        <div id="nav_content" class="sp">
          <ul>
            <li><a href="<?= URL_VISION ?>">VISION</a></li>
            <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
            <li><a href="<?= URL_COLLABORATION_PROJECTS ?>">- COLLABORATION PROJECT</a></li>
            <li><a href="<?= URL_INDEPENDENT_PROJECTS ?>">- INDEPENDENT PROJECT</a></li>
            <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
            <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
            <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
            <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a> <a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="section_one">
      <div id="" class="timg sp"><img src="<?= DIR_IMG ?>/top_img01_sp.jpg" alt="img01"></div>
      <h2>妄想から打ち上げまで</h2>
      <div id="copy">
        <p>家づくりというライブを楽しみ尽くせ！</p>
      </div>
      <div id="msg">
        <p>
          「どんな家にしようか」という妄想から始まって、それを実現する方法をとことん話し合い、共に作業をして、家をつくり上げる。施主も、設計士も、職人も。家づくりに関わるみんなが同じステージに立ち、みんなのセッションから生み出される「世界にひとつだけの家」。ぶつかり合いながら、笑い合いながら、大変な思いも一緒に味わって、完成の喜びまで共に分かち合いたい。家づくりというライブを、一緒に楽しみ尽くす。その先には、住むほどに愛が育つ家があるはずだから。<span class="pc_i"><br></span>それが、HandiHouse
          projectの「家づくり」です。</p>
      </div>
      <a href="<?= URL_VISION ?>" class="btn_a">VISION</a>
    </div>

    <div class="top_bgvisual tv01 pc"></div>
    <div id="" class="timg sp"><img src="<?= DIR_IMG ?>/top_img02_sp.jpg" alt="img01"></div>

    <div id="section_two">
      <div id="member">
        <h2>MEMBER</h2>
        <img src="<?= DIR_IMG ?>/top_img02_1.jpg" alt="HandiHouseproject members" class="rimg">
      </div>
      <a href="<?= URL_COMPANY_MEMBER ?>" class="btn_a">VIEW MORE</a>
    </div>

    <div id="" class="timg sp"><img src="<?= DIR_IMG ?>/top_img04_sp.jpg" alt="img01"></div>
    <div class="top_bgvisual tv02 pc"></div>

    <div id="section_three" class="">

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
