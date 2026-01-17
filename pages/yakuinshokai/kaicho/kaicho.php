<?php
require_once __DIR__ . '/../../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 会長 山本吉男の紹介">
    <title>会長 | 神影流山本派-佐野武道会</title>
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
            <h1 class="page-hero-title" data-text="会長">会長</h1>
            <p class="page-hero-subtitle">Chairman</p>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="container">
            
            <!-- プロフィールセクション -->
            <section class="section">
                <div class="officer-profile glass-card fade-in">
                    <div class="officer-profile-image-wrapper">
                        <div class="officer-profile-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/kaicho/kaicho.jpg" alt="会長 山本吉男">
                        </div>
                        <div class="officer-profile-badge">
                            <span class="officer-badge officer-badge-chairman">会長</span>
                        </div>
                    </div>
                    <div class="officer-profile-content">
                        <h2 class="officer-profile-name">
                            山本 吉男
                            <span class="officer-profile-gou">（号・影舟）</span>
                        </h2>
                        <p class="officer-profile-title">神影流山本派初代宗家・佐野武道会会長</p>
                        
                        <div class="officer-profile-divider"></div>
                        
                        <div class="officer-profile-bio">
                            <p>
                                昭和19年栃木県佐野市に生まれる。昭和60年、神影流二十五世宗家・豊島一虎（号・勝峰）のもとに入門し剣道・居合道を修業。平成6年に神影流一門として佐野武道会を設立し、佐野市を拠点に指導を続けている。
                            </p>
                            <p>
                                師の教え「武道を通して地域社会に貢献しよう」をモットーに、高齢者施設や支援施設への演武会など社会貢献活動を継続。平成25年にはオーストラリア支部（ブリスベン）を設立し、イギリス・ケンブリッジにも支部を展開。国内外で日本武道の普及に努めている。
                            </p>
                            <p>
                                稽古は佐野武道館、佐野小学校体育館、福祉コミュニティセンターで週4日実施。
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 経歴・活動 -->
            <section class="section">
                <div class="section-header">
                    <span class="section-subtitle">ACTIVITIES</span>
                    <h2 class="section-title">活動・功績</h2>
                </div>
                
                <div class="timeline">
                    <div class="timeline-item glass-card fade-in">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">昭和60年</span>
                            <h3 class="timeline-title">入門</h3>
                            <p>神影流二十五世宗家・豊島一虎のもとに入門</p>
                        </div>
                    </div>
                    <div class="timeline-item glass-card fade-in">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">平成6年</span>
                            <h3 class="timeline-title">佐野武道会設立</h3>
                            <p>神影流一門として佐野武道会を設立</p>
                        </div>
                    </div>
                    <div class="timeline-item glass-card fade-in">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">平成25年</span>
                            <h3 class="timeline-title">海外展開</h3>
                            <p>オーストラリア支部（ブリスベン）を設立、その後イギリス・ケンブリッジにも支部を展開</p>
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
