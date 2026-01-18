<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="役員紹介 - 会長、副会長、相談役、指導者のご案内">
    <title>役員紹介 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">Officer Introduction</p>
        <h1 class="page-title animate-on-scroll delay-1">役員紹介</h1>
        <p class="page-subtitle animate-on-scroll delay-2">佐野武道会の役員・指導者をご紹介します</p>
    </header>

    <!-- メインコンテンツ -->
    <main>

            <!-- 会長 -->
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-subtitle">CHAIRMAN</span>
                        <h2 class="section-title">会長</h2>
                    </div>

                    <div class="officer-featured glass-card fade-in">
                    <div class="officer-featured-image">
                        <img src="<?= $basePath ?>/img/yakuinshokai/kaicho.jpg" alt="会長 山本吉男">
                        <div class="officer-featured-overlay"></div>
                    </div>
                    <div class="officer-featured-content">
                        <span class="officer-badge officer-badge-chairman">会長</span>
                        <h3 class="officer-featured-name">山本 吉男<span class="officer-gou">（号・影舟）</span></h3>
                        <p class="officer-featured-title">神影流山本派初代宗家</p>
                        <p class="officer-featured-desc">
                            昭和19年栃木県佐野市に生まれる。昭和60年、神影流二十五世宗家・豊島一虎のもとに入門し剣道・居合道を修業。
                            平成6年に神影流一門として佐野武道会を設立し、佐野市を拠点に指導を続けている。
                        </p>
                        <a href="<?= $basePath ?>/pages/yakuinshokai/kaicho/kaicho.php" class="btn btn-primary">
                            <span>詳しく見る</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            </section>

            <!-- 副会長 -->
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-subtitle">VICE CHAIRMAN</span>
                        <h2 class="section-title">副会長</h2>
                    </div>

                    <div class="officer-list">
                        <!-- 新井 潤 -->
                        <div class="officer-list-item fade-in">
                            <div class="officer-list-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho1.jpg" alt="副会長 新井潤">
                            </div>
                            <div class="officer-list-info">
                                <h3 class="officer-list-name">新井 潤</h3>
                                <p class="officer-list-title">剣道 五段</p>
                            </div>
                        </div>

                        <!-- 江原 茂夫 -->
                        <div class="officer-list-item fade-in">
                            <div class="officer-list-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho2.jpg" alt="副会長 江原茂夫">
                            </div>
                            <div class="officer-list-info">
                                <h3 class="officer-list-name">江原 茂夫</h3>
                                <p class="officer-list-title">剣道 五段</p>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

            <!-- 相談役 -->
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-subtitle">ADVISOR</span>
                        <h2 class="section-title">相談役</h2>
                    </div>

                    <div class="officer-list">
                        <!-- 豊島 一虎 -->
                        <div class="officer-list-item fade-in">
                            <div class="officer-list-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku1.jpg" alt="相談役 豊島一虎">
                            </div>
                            <div class="officer-list-info">
                                <h3 class="officer-list-name">豊島 一虎<span class="officer-gou">（号・勝峰）</span></h3>
                                <p class="officer-list-title">神影流二十五世宗家 / 神心無想流二世</p>
                                <p class="officer-list-desc">現在、神影流の二十五世宗家として埼玉県越谷市宮本町の本部道場にて活動中。<br>詳しくは、本部道場のホームページを御覧ください。</p>
                                <a href="https://shinkageryu.jp/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">本部道場</a>
                            </div>
                        </div>

                        <!-- 小出 智男 -->
                        <div class="officer-list-item fade-in">
                            <div class="officer-list-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku2.jpg" alt="相談役 小出智男">
                            </div>
                            <div class="officer-list-info">
                                <h3 class="officer-list-name">小出 智男</h3>
                                <p class="officer-list-title">心身錬成道場 大義塾 理事長 / 神影流 範士 八段</p>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

            <!-- 指導者セクション -->
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-subtitle">INSTRUCTORS</span>
                        <h2 class="section-title">指導者</h2>
                    </div>

                    <div class="instructor-cta fade-in">
                        <p class="instructor-cta-text">佐野武道会の指導者一覧はこちらからご覧いただけます。</p>
                        <a href="<?= $basePath ?>/pages/yakuinshokai/shidosha/shidosha.php" class="btn btn-primary">
                            <span>指導者一覧を見る</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>
    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
