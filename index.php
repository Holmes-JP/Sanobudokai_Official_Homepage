<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="こちらは神影流山本派-佐野武道会の公式ホームページです。佐野武道会は栃木県佐野市に拠点を置く神影流道場で、主に剣道・神心無想流居合道をご指導しています。見学・体験は随時歓迎しています。">
    <meta name="keywords" content="佐野武道会,神影流,山本派,居合道,剣道,武道,栃木県,佐野市,神心無想流,試斬">
    <title>神影流山本派-佐野武道会 | 公式ホームページ</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/index.css">
</head>
<body>
    <?php include __DIR__ . '/partials/site-header.php'; ?>

    <!-- ヒーローセクション -->
    <section class="hero">
        <img src="<?= $basePath ?>/img/index/hero.jpg" alt="神影流山本派-佐野武道会" class="hero-image">
    </section>

    <!-- メインコンテンツ -->
    <main>
        <div class="home-layout">
            <div class="home-main">
                <!-- ウェルカムセクション -->
                <section class="content-section welcome-section">
                    <h2 class="welcome-title">ようこそ神影流山本派-佐野武道会へ</h2>
                    <p class="welcome-text">
                        佐野武道会は平成6年に設立された栃木県佐野市の神影流道場です。<br>
                        神心無想流居合道と剣道の稽古を通じて、技術向上だけでなく礼節と精神を大切にしています。<br>
                        2ヶ月に一度は真剣での試斬も実施しています。<br>
                        初心者から経験者まで、武道に興味のある方はぜひお気軽にお問い合わせください。
                    </p>
                </section>

                <!-- 画像スライダー -->
                <section class="content-section slider-section">
                    <h2 class="section-title">道場の様子</h2>
                    <div class="slider-container">
                        <div class="slider" id="slider">
                            <div class="slide">
                                <img src="<?= $basePath ?>/img/index/dojo1.jpg" alt="道場の様子 稽古風景">
                                <div class="slide-caption">稽古風景</div>
                            </div>
                            <div class="slide">
                                <img src="<?= $basePath ?>/img/index/dojo2.jpg" alt="居合道 演武">
                                <div class="slide-caption">居合道演武</div>
                            </div>
                            <div class="slide">
                                <img src="<?= $basePath ?>/img/index/dojo3.jpg" alt="試斬の様子">
                                <div class="slide-caption">試斬の様子</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav" id="sliderNav">
                        <div class="slider-dot active" data-index="0"></div>
                        <div class="slider-dot" data-index="1"></div>
                        <div class="slider-dot" data-index="2"></div>
                    </div>
                    <div class="slider-arrows">
                        <button class="slider-arrow" onclick="prevSlide()">&#10094;</button>
                        <button class="slider-arrow" onclick="nextSlide()">&#10095;</button>
                    </div>
                </section>

                <!-- YouTube動画 -->
                <section class="content-section video-section">
                    <h2 class="section-title">動画紹介</h2>
                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/WFWO-HVRyzI"
                            title="神影流山本派-佐野武道会 紹介動画"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </section>

                <!-- 会長紹介 -->
                <section class="content-section intro-section">
                    <h2 class="section-title">会長紹介</h2>
                    <div class="intro-content">
                        <div class="intro-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/kaicho/kaicho.jpg" alt="山本吉男会長">
                        </div>
                        <div class="intro-text">
                            <h3 class="intro-title">山本 吉男</h3>
                            <p class="intro-subtitle">号・影舟（かげふね）<br>神影流山本派初代宗家・佐野武道会会長</p>
                            <p class="intro-description">
                                昭和19年栃木県佐野市生まれ。昭和60年に入門し、平成6年に佐野武道会を設立。<br><br>
                                神心無想流居合道と剣道の指導を行い、技術の向上だけでなく礼儀作法や精神面の鍛錬にも力を入れています。<br><br>
                                オーストラリア（ブリスベン）・イギリス（ケンブリッジ）にも支部を設立し、日本の伝統武道を世界に広める活動を続けています。
                            </p>
                        </div>
                    </div>
                </section>

                <!-- お問い合わせセクション -->
                <section class="contact-section">
                    <h2 class="contact-title">見学・入会・お問い合わせ</h2>
                    <p class="contact-phone">
                        <a href="tel:090-2457-9592">090-2457-9592</a>
                    </p>
                    <p class="mb-20">お気軽にお電話ください</p>
                    <a href="<?= $basePath ?>/pages/access/access.php" class="btn btn-primary">メールでのお問い合わせ</a>
                </section>
            </div>

            <!-- サイドバー -->
            <aside class="home-sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">最近の投稿</h3>
                    <article class="recent-post">
                        <img src="<?= $basePath ?>/img/katsudokiroku/post1.jpg" alt="最近の投稿1" class="recent-post-image">
                        <div class="recent-post-content">
                            <p class="recent-post-date">2024/01/15</p>
                            <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="recent-post-title">新年稽古会を開催しました</a>
                        </div>
                    </article>
                    <article class="recent-post">
                        <img src="<?= $basePath ?>/img/katsudokiroku/post2.jpg" alt="最近の投稿2" class="recent-post-image">
                        <div class="recent-post-content">
                            <p class="recent-post-date">2023/12/20</p>
                            <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="recent-post-title">年末演武会を実施</a>
                        </div>
                    </article>
                    <article class="recent-post">
                        <img src="<?= $basePath ?>/img/katsudokiroku/post3.jpg" alt="最近の投稿3" class="recent-post-image">
                        <div class="recent-post-content">
                            <p class="recent-post-date">2023/11/10</p>
                            <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="recent-post-title">体験会のご報告</a>
                        </div>
                    </article>
                </div>
            </aside>
        </div>
    </main>

    <?php include __DIR__ . '/partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
