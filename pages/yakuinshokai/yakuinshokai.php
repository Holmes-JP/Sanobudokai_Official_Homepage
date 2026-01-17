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

    <!-- ヒーローセクション -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <h1 class="page-hero-title" data-text="役員紹介">役員紹介</h1>
            <p class="page-hero-subtitle">Officer Introduction</p>
            <p class="page-hero-description">佐野武道会の役員・指導者をご紹介します</p>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="container">
            
            <!-- セクション紹介 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">MEMBERS</span>
                    <h2 class="section-title">役員一覧</h2>
                </div>
                <p class="text-center" style="max-width: 600px; margin: 0 auto 3rem; opacity: 0.8;">
                    佐野武道会の運営を支える役員・指導者をご紹介いたします。<br>
                    各役員の詳細は、それぞれのカードをクリックしてご覧ください。
                </p>
            </section>

            <!-- 会長 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">CHAIRMAN</span>
                    <h2 class="section-title">会長</h2>
                </div>
                
                <div class="officer-featured glass-card fade-in">
                    <div class="officer-featured-image">
                        <img src="<?= $basePath ?>/img/yakuinshokai/kaicho/kaicho.jpg" alt="会長 山本吉男">
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
            </section>

            <!-- 副会長 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">VICE CHAIRMAN</span>
                    <h2 class="section-title">副会長</h2>
                </div>
                
                <div class="officer-grid">
                    <!-- 新井 潤 -->
                    <div class="glass-card officer-card fade-in">
                        <div class="officer-card-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho1.jpg" alt="副会長 新井潤">
                            <div class="officer-card-overlay">
                                <a href="<?= $basePath ?>/pages/yakuinshokai/fukukaicho/fukukaicho.php" class="btn btn-outline btn-sm">詳しく見る</a>
                            </div>
                        </div>
                        <div class="officer-card-content">
                            <span class="officer-badge officer-badge-vice">副会長</span>
                            <h3 class="officer-card-name">新井 潤</h3>
                            <p class="officer-card-title">剣道 五段</p>
                        </div>
                    </div>

                    <!-- 江原 茂夫 -->
                    <div class="glass-card officer-card fade-in">
                        <div class="officer-card-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho2.jpg" alt="副会長 江原茂夫">
                            <div class="officer-card-overlay">
                                <a href="<?= $basePath ?>/pages/yakuinshokai/fukukaicho/fukukaicho.php" class="btn btn-outline btn-sm">詳しく見る</a>
                            </div>
                        </div>
                        <div class="officer-card-content">
                            <span class="officer-badge officer-badge-vice">副会長</span>
                            <h3 class="officer-card-name">江原 茂夫</h3>
                            <p class="officer-card-title">剣道 五段</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 相談役 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">ADVISOR</span>
                    <h2 class="section-title">相談役</h2>
                </div>
                
                <div class="officer-grid">
                    <!-- 豊島 一虎 -->
                    <div class="glass-card officer-card fade-in">
                        <div class="officer-card-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku1.jpg" alt="相談役 豊島一虎">
                            <div class="officer-card-overlay">
                                <a href="<?= $basePath ?>/pages/yakuinshokai/sodanyaku/sodanyaku.php" class="btn btn-outline btn-sm">詳しく見る</a>
                            </div>
                        </div>
                        <div class="officer-card-content">
                            <span class="officer-badge officer-badge-advisor">相談役</span>
                            <h3 class="officer-card-name">豊島 一虎<span class="officer-gou">（号・勝峰）</span></h3>
                            <p class="officer-card-title">神影流二十五世宗家 / 神心無想流二世</p>
                        </div>
                    </div>

                    <!-- 小出 智男 -->
                    <div class="glass-card officer-card fade-in">
                        <div class="officer-card-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku2.jpg" alt="相談役 小出智男">
                            <div class="officer-card-overlay">
                                <a href="<?= $basePath ?>/pages/yakuinshokai/sodanyaku/sodanyaku.php" class="btn btn-outline btn-sm">詳しく見る</a>
                            </div>
                        </div>
                        <div class="officer-card-content">
                            <span class="officer-badge officer-badge-advisor">相談役</span>
                            <h3 class="officer-card-name">小出 智男</h3>
                            <p class="officer-card-title">心身錬成道場 大義塾 理事長 / 神影流 範士 八段</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 指導者セクション -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">INSTRUCTORS</span>
                    <h2 class="section-title">指導者</h2>
                </div>
                
                <div class="glass-card" style="padding: 2rem; text-align: center;">
                    <p style="margin-bottom: 1.5rem; opacity: 0.9;">
                        佐野武道会の指導者一覧はこちらからご覧いただけます。
                    </p>
                    <a href="<?= $basePath ?>/pages/yakuinshokai/shidosha/shidosha.php" class="btn btn-primary">
                        <span>指導者一覧を見る</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </section>

        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>
    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
