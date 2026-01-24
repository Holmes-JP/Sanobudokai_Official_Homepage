<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 副会長の紹介">
    <title>副会長 | 神影流山本派-佐野武道会</title>
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
            <h1 class="page-hero-title" data-text="副会長">副会長</h1>
            <p class="page-hero-subtitle">Vice Chairman</p>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="container">
            
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">VICE CHAIRMAN</span>
                    <h2 class="section-title">副会長のご紹介</h2>
                </div>
                
                <div class="officer-duo-grid">
                    <!-- 新井 潤 -->
                    <div class="officer-profile glass-card fade-in">
                        <div class="officer-profile-image-wrapper">
                            <div class="officer-profile-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho1.jpg" alt="副会長 新井潤">
                            </div>
                            <div class="officer-profile-badge">
                                <span class="officer-badge officer-badge-vice">副会長</span>
                            </div>
                        </div>
                        <div class="officer-profile-content">
                            <h2 class="officer-profile-name">新井 潤</h2>
                            <p class="officer-profile-title">剣道 五段</p>
                            <div class="officer-profile-divider"></div>
                            <div class="officer-profile-bio">
                                <p>
                                    佐野武道会の副会長として、会の運営と後進の指導に尽力。
                                    剣道五段の腕前を持ち、剣道部門の指導を担当している。
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 江原 茂夫 -->
                    <div class="officer-profile glass-card fade-in">
                        <div class="officer-profile-image-wrapper">
                            <div class="officer-profile-image">
                                <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho2.jpg" alt="副会長 江原茂夫">
                            </div>
                            <div class="officer-profile-badge">
                                <span class="officer-badge officer-badge-vice">副会長</span>
                            </div>
                        </div>
                        <div class="officer-profile-content">
                            <h2 class="officer-profile-name">江原 茂夫</h2>
                            <p class="officer-profile-title">剣道 五段</p>
                            <div class="officer-profile-divider"></div>
                            <div class="officer-profile-bio">
                                <p>
                                    佐野武道会の副会長として、会の運営と後進の指導に尽力。
                                    剣道五段の腕前を持ち、剣道部門の指導を担当している。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 戻るリンク -->
            <section class="section" style="text-align: center;">
                <a href="<?= $basePath ?>/yakuinshokai" class="btn btn-outline">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    <span>役員紹介に戻る</span>
                </a>
            </section>

        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>
    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
