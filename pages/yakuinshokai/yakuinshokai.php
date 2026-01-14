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
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/yakuinshokai.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>役員紹介</h1>
            <p>Officer Introduction</p>
            <nav class="breadcrumb">
                <a href="../../index.php">HOME</a>
                <span>役員紹介</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section">
                <h2 class="section-title">役員一覧</h2>
                <p class="mb-30">佐野武道会の役員・指導員をご紹介します。</p>

                <div class="officer-grid">
                    <div class="officer-card">
                        <img src="<?= $basePath ?>/img/yakuinshokai/kaicho/kaicho.jpg" alt="会長 山本吉男" class="officer-card-image">
                        <div class="officer-card-content">
                            <span class="officer-card-position">会長</span>
                            <h3 class="officer-card-name">山本 吉男</h3>
                            <p class="officer-card-description">神影流山本派初代宗家。昭和19年栃木県佐野市生まれ。平成6年に佐野武道会を設立。</p>
                            <a href="kaicho/kaicho.php" class="officer-card-link">詳しく見る</a>
                        </div>
                    </div>

                    <div class="officer-card">
                        <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho1.jpg" alt="副会長 新井 潤" class="officer-card-image">
                        <div class="officer-card-content">
                            <span class="officer-card-position">副会長</span>
                            <h3 class="officer-card-name">新井 潤</h3>
                            <p class="officer-card-description">剣道 五段。</p>
                            <a href="fukukaicho/fukukaicho.php" class="officer-card-link">詳しく見る</a>
                        </div>
                    </div>

                    <div class="officer-card">
                        <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho2.jpg" alt="副会長 江原 茂夫" class="officer-card-image">
                        <div class="officer-card-content">
                            <span class="officer-card-position">副会長</span>
                            <h3 class="officer-card-name">江原 茂夫</h3>
                            <p class="officer-card-description">剣道 五段。</p>
                            <a href="fukukaicho/fukukaicho.php" class="officer-card-link">詳しく見る</a>
                        </div>
                    </div>

                    <div class="officer-card">
                        <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku1.jpg" alt="相談役 豊島 一虎" class="officer-card-image">
                        <div class="officer-card-content">
                            <span class="officer-card-position">相談役</span>
                            <h3 class="officer-card-name">豊島 一虎</h3>
                            <p class="officer-card-description">神影流二十五世宗家。神心無想流二世。柳心流体術四世。</p>
                            <a href="sodanyaku/sodanyaku.php" class="officer-card-link">詳しく見る</a>
                        </div>
                    </div>

                    <div class="officer-card">
                        <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku2.jpg" alt="相談役 小出 智男" class="officer-card-image">
                        <div class="officer-card-content">
                            <span class="officer-card-position">相談役</span>
                            <h3 class="officer-card-name">小出 智男</h3>
                            <p class="officer-card-description">心身錬成道場 大義塾 理事長。神影流 範士 八段。</p>
                            <a href="sodanyaku/sodanyaku.php" class="officer-card-link">詳しく見る</a>
                        </div>
                    </div>
                </div>

                <div class="officer-nav">
                    <a href="kaicho/kaicho.php" class="officer-nav-link">会長</a>
                    <a href="fukukaicho/fukukaicho.php" class="officer-nav-link">副会長</a>
                    <a href="sodanyaku/sodanyaku.php" class="officer-nav-link">相談役</a>
                    <a href="shidosha/shidosha.php" class="officer-nav-link">指導者</a>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
