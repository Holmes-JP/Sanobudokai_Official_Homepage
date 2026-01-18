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

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">Chairman</p>
        <h1 class="page-title animate-on-scroll delay-1">会長</h1>
        <p class="page-subtitle animate-on-scroll delay-2">神影流山本派初代宗家</p>
    </header>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="container">
            
            <!-- プロフィールセクション -->
            <section class="section">
                <div class="officer-profile glass-card fade-in">
                    <div class="officer-profile-image-wrapper">
                        <div class="officer-profile-image">
                            <img src="<?= $basePath ?>/img/yakuinshokai/kaicho.jpg" alt="会長 山本吉男">
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
                                昭和19年栃木県佐野市に生まれる。
                            </p>
                            <p>
                                昭和60年、神影流二十五世宗家-豊島一虎 号-勝峰の元に入門し剣道・居合道を修業。平成6年に神影流一門佐野武道会を栃木県佐野市に設立する。
                            </p>
                            <p>
                                現在は佐野武道館、佐野小学校体育館、福祉コミュニティセンターで週4日で稽古をしている。豊島一虎師匠の指導方針「武道を通して地域社会に貢献しよう」をモットーに佐野武道会は高齢者施設、デイサービスセンター、特別支援施設などへ武道の演武会の慰問活動を永年続けている。
                            </p>
                            <p>
                                平成25年、オーストラリア支部をブリスベン市に設立し現在指導者3名、門下生13名が居合道の修業に励んでいます。近年ではイギリスのケンブリッジにも支部を設立。
                            </p>
                            <p>
                                日本の伝統文化である「武道」の体験、見学はいつでも歓迎いたしております。ご興味のある方は是非一度お越しください。
                            </p>
                            <p>
                                また、気になることがございましたら<a href="<?= $basePath ?>/pages/contact/contact.php">こちらのページ</a>からお気軽にお問い合わせください。
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
