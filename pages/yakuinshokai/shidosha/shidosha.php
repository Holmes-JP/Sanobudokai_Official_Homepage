<?php
require_once __DIR__ . '/../../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 指導者の紹介">
    <title>指導者 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/../../../partials/site-header.php'; ?>

    <!-- ヒーローセクション -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <h1 class="page-hero-title" data-text="指導者">指導者</h1>
            <p class="page-hero-subtitle">Instructors</p>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="container">
            
            <!-- 居合道部 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">IAIDO</span>
                    <h2 class="section-title">居合道部</h2>
                </div>
                
                <div class="instructor-grid">
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">河原 清</h3>
                            <p class="instructor-rank">神心夢想流居合道 錬士 六段</p>
                            <span class="instructor-badge instructor-badge-iaido">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">デイビッド・ハランデル</h3>
                            <p class="instructor-rank">神心夢想流居合道 二段</p>
                            <span class="instructor-badge instructor-badge-overseas">海外指導員</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 剣道部 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">KENDO</span>
                    <h2 class="section-title">剣道部</h2>
                </div>
                
                <div class="instructor-grid">
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">久保 雄輝</h3>
                            <p class="instructor-rank">剣道 三段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">横田 美南</h3>
                            <p class="instructor-rank">剣道 三段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">田村 瑞</h3>
                            <p class="instructor-rank">剣道 三段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">田中 公彦</h3>
                            <p class="instructor-rank">剣道 二段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">小倉 涼真</h3>
                            <p class="instructor-rank">剣道 三段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                    
                    <div class="glass-card instructor-card fade-in">
                        <div class="instructor-card-content">
                            <h3 class="instructor-name">豊島 翔生</h3>
                            <p class="instructor-rank">剣道 三段</p>
                            <span class="instructor-badge instructor-badge-kendo">指導員</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 戻るリンク -->
            <section class="section" style="text-align: center;">
                <a href="<?= $basePath ?>/pages/yakuinshokai/yakuinshokai.php" class="btn btn-outline">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    <span>役員紹介に戻る</span>
                </a>
            </section>

        </div>
    </main>

    <?php include __DIR__ . '/../../../partials/site-footer.php'; ?>
    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
