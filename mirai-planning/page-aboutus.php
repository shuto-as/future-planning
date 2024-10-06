<?php
/*
Template Name: About us
*/
get_header(); ?>
<div class="header-top-margin"></div>
<div class="aboutus">
    <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/img/aboutus-PC.png" media="(min-width: 769px)" width="619" height="332" alt = "About us">
        <img src="<?= get_template_directory_uri(); ?>/img/aboutus-SP.png" width="391" height="208" alt = "About us">
    </picture>
    <h1 class="aboutus-title-area">
        <p class="font-corinthia">About us</p>
        <p class="aboutus-subtitle font-noto-serif-jp">会社概要</p>
    </h1>
    <div class="font-noto-serif-jp">
        <div class="misson-area">
            <h2 class="theme-color misson-title">
                Misson
            </h2>
            <p class="mission-text">
                人の豊かさと健康を探求し続ける
            </p>
        </div>
        <div class="vision-area">
            <h2 class="theme-color vision-title">
                Vision
            </h2>
            <p class="vision-text">
                人々の豊かさと健康に貢献し、<br>
                健やかに生きる幸せな未来を創造します。
            </p>
        </div>
    </div>
    <table class="company-info font-noto-sans-jp">
        <tr>
            <th>会社名</th>
            <td>株式会社ミライ企画</td>
        </tr>
        <tr>
            <th>所在地</th>
            <td>東京都文京区本郷3－20－10</td>
        </tr>
        <tr>
            <th>設立年月</th>
            <td>2017年12月</td>
        </tr>
        <tr>
            <th>代表者名</th>
            <td>小野　由衣子</td>
        </tr>
        <tr>
            <th>主要取引銀行</th>
            <td>みずほ銀行、楽天銀行</td>
        </tr>
        <tr>
            <th>主要取引先</th>
            <td>
                株式会社生活の木<br>
                株式会社フィールドベース<br>
                株式会社ボディプラスインターナショナル<br>
                大木ヘルスケアホールディングス<br>
                株式会社サイレントエナジー株式会社
            </td>
        </tr>
    </table>
</div>
<?php get_footer(); ?>