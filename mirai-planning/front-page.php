<?php get_header(); ?>
<div class="header-top-margin"></div>
<article>
    <section id="top" class="main-visual__area">
        <h1 class="main-visual__message-area">
            <p class="main-visual__title font-corinthia">
                Create<br>
                &nbsp;&nbsp;Feature
            </p>
            <p class="main-visual__message font-noto-serif-jp">
                確かな技術と知識で<br>
                健やかに生きる幸せな未来を創造する
            </p>
        </h1>
        <div class="slideBox">
            <img class="slide" src="<?= get_template_directory_uri(); ?>/img/slide1.png" width="785" height="544" alt="main-visual1">
            <img class="slide" src="<?= get_template_directory_uri(); ?>/img/slide2.png" width="785" height="544" alt="main-visual2">
            <img class="slide" src="<?= get_template_directory_uri(); ?>/img/slide3.png" width="785" height="544" alt="main-visual3">
            <img class="slide" src="<?= get_template_directory_uri(); ?>/img/slide4.png" width="785" height="544" alt="main-visual4">
        </div>
    </section>
    <section class="top-news__area">
        <div class="top-news__wrapper font-noto-sans-jp">
            <?php $posts_per_page = 1;?> <!--最新の1投稿分を取得-->
            <?php $args = [
                'post_type' => 'post', // 投稿タイプ
                'posts_per_page' => $posts_per_page, // 取得する投稿数
                'order' => 'DESC', // 投稿の並び順（DESC: 降順）
                'orderby' => 'date' // 投稿の並び順の基準（date: 日付）
            ];?>
            <?php $query = new WP_Query($args);?>
            <div class="top-news__article">
                <?php if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <span class="top-news__post-date theme-color"><?php the_time('Y.m.d'); ?></span><br>
                                <span class="top-news__post-title"><?php the_title(); ?></span>
                            </a>
                        </article>
                    <?php endwhile;?>
                    <!-- // 投稿のリセット-->
                    <?php wp_reset_postdata();?>
                <?php else :?>
                    <p>
                        <?php _e('最新の投稿はありません。'); ?>
                    </p>
                <?php endif;?>
            </div>
            <div class="top-news__list-link">
                <a href="<?php echo home_url('/news'); ?>"><p>ニュース一覧へ ＞</p></a>
            </div>
        </div>
    </section>
    <section id="message" class="message__area">
        <h2 class="message__title">
            <p class="font-corinthia">Message</p>
            <p class="message__sub-title font-noto-serif-jp">メッセージ</p>
        </h2>
        <p class="message-text font-noto-sans-jp">
            私たちは、からだの内側と外側からアプローチすることで、あなたの健康と豊かさをサポートします。<br>
            薬剤師、漢方アドバイザー、作業療法士、柔道整復師などの専門家が、薬剤の知識を基に選定した漢方商品やオーダーメイドの整体を提供します。<br>
            これにより、画一的な施術では満足できない方々にも、セルフケアの力を育て、安心して健康と豊かさを手に入れるお手伝いをいたします。
        </p>
        <div class="btn">
            <a href="<?php echo home_url('/aboutus'); ?>">
                <p class="btn-text font-cormorant"> About Us</p>
            </a>
        </div>
    </section>
    <section id="service" class="service__area font-noto-sans-jp">
        <div class="service__wrapper">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/service1-PC.png" media="(min-width: 769px)" width="775" height="425" alt = "service1">
                <img src="<?= get_template_directory_uri(); ?>/img/service1-SP.png" width="472" height="426" alt = "Service1">
            </picture>
            <div class="service-text-area">
                <div class="service-text-wrapper">
                    <p class="service-text-title">
                        セレクトショップ運営
                    </p>
                    <p class="service-text">
                        薬剤師兼漢方アドバイザーの専門家が、一人一人の状態をきちんと把握した上でお客さまの健康や自ら体を整える生活習慣を提案します。
                    </p>
                </div>        
            </div>
        </div>
        <div class="service__wrapper">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/service2-PC.png" media="(min-width: 769px)" width="775" height="425" alt = "service2">
                <img src="<?= get_template_directory_uri(); ?>/img/service2-SP.png" width="472" height="426" alt = "Service2">
            </picture>
            <div class="service-text-area">
            <div class="service-text-wrapper">
                    <p class="service-text-title">
                        整体事業
                    </p>
                    <p class="service-text">
                        リハビリ専門病院、パーソナルトレーナーの経験があるスタッフとカイロプラクティックや骨格改善が得意なスタッフが、お客様のお悩みを根本から改善していくお手伝いをさせていただきます。
                    </p>
                </div>        
            </div>
        </div>
        <div class="service__wrapper">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/service3-PC.png" media="(min-width: 769px)" width="775" height="425" alt = "service3">
                <img src="<?= get_template_directory_uri(); ?>/img/service3-SP.png" width="472" height="426" alt = "Service3">
            </picture>
            <div class="service-text-area">
            <div class="service-text-wrapper">
                    <p class="service-text-title">
                        キャリア支援
                    </p>
                    <p class="service-text">
                        育んだ人間関係や身につけた営業力の結果、転職やフリーランス転向などのキャリア支援なども行っております。
                    </p>
                </div>        
            </div>
        </div>
        <div class="service__wrapper">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/service4-PC.png" media="(min-width: 769px)" width="775" height="425" alt = "service4">
                <img src="<?= get_template_directory_uri(); ?>/img/service4-SP.png" width="472" height="426" alt = "Service4">
            </picture>
            <div class="service-text-area">
            <div class="service-text-wrapper">
                    <p class="service-text-title">
                        営業代行事業
                    </p>
                    <p class="service-text">
                        企画運営事業で培った繋がり・ノウハウ・営業力を活かし、営業支援や営業代行を行っております。
                    </p>
                </div>        
            </div>
        </div>
    </section>
    <section id="shop" class="shop__area">
        <h2 class="shop__title">
            <p class="font-corinthia">Shop information</p>
            <p class="shop__sub-title font-noto-serif-jp">店舗紹介</p>
        </h2>
        <div class="shop-wrapper font-noto-sans-jp">
            <div class="shop-img-area">
                <img src="<?= get_template_directory_uri(); ?>/img/shop1-img.png" width="590" height="380" alt = "Shop information">
            </div>
            <div class="shop-text-area">
                <p class="shop-text-title">
                    セレクトショップ MART
                </p>
                <p class="shop-text">
                    MARTでは、体に良い原料や品質にこだわった、漢方茶、スキンケア、フード、日用雑貨等の販売を通じて、お客さまの健康や自ら体を整える生活習慣を提案しています。<br>
                    その他、薬剤師兼漢方アドバイザーによる無料お悩み相談を受け付けています。一人ひとりの状態をきちんと把握した上であなたのためだけのアドバイス、提案であなたをサポートします。
                </p>
            </div>
        </div>
        <div class="shop-wrapper font-noto-sans-jp">
            <div class="shop-img-area">
                <img src="<?= get_template_directory_uri(); ?>/img/shop2-img.png" width="590" height="380" alt = "Shop information">
            </div>
            <div class="shop-text-area">
                <p class="shop-text-title">
                    おおもり整体院
                </p>
                <p class="shop-text">
                    おおもり整体院は、大森駅から徒歩8分のセレクトショップ『MART』と併設しています。<br>
                    当院は、有国家資格者が、カウンセリングを重視した、人それぞれに違った歪みや根本原因からその方に合った最適な施術計画を提案し、完全予約制のフルオーダー施術により、痛みや悩みのない健康的な身体へ導きます。
                </p>
            </div>
        </div>
    </section>
    <section id="contact" class="contact__area">
        <h2 class="contact__title">
            <p class="font-corinthia">Contact</p>
            <p class="contact__sub-title font-noto-serif-jp">お問い合わせ</p>
        </h2>
        <div class="form-area font-noto-sans-jp">
            <!-- 以下コンタクトフォームのショートコードの変更必要 -->
            <?= do_shortcode('[contact-form-7 id="e6305d6" title="コンタクトフォーム 1"]'); ?>
        </div>            
    </section>
</article>
<?php get_footer(); ?>
