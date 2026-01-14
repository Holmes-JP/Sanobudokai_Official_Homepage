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
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/yakuinshokai.css">
</head>
<body>
    <?php include __DIR__ . '/../../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>会長</h1>
            <p>Chairman</p>
            <nav class="breadcrumb">
                <a href="../../../index.php">HOME</a>
                <a href="../yakuinshokai.php">役員紹介</a>
                <span>会長</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section intro-section">
                <div class="intro-content">
                    <div class="intro-image">
                        <img src="<?= $basePath ?>/img/yakuinshokai/kaicho/kaicho.jpg" alt="山本吉男 会長">
                    </div>
                    <div class="intro-text">
                        <h2 class="intro-title">山本 吉男（号・影舟）</h2>
                        <p class="intro-subtitle">神影流山本派初代宗家・佐野武道会会長</p>
                        <p class="intro-description">
                            昭和19年栃木県佐野市に生まれる。昭和60年、神影流二十五世宗家・豊島一虎（号・勝峰）のもとに入門し剣道・居合道を修業。平成6年に神影流一門として佐野武道会を設立し、佐野市を拠点に指導を続けている。
                        </p>
                        <p class="intro-description">
                            師の教え「武道を通して地域社会に貢献しよう」をモットーに、高齢者施設や支援施設への演武会など社会貢献活動を継続。平成25年にはオーストラリア支部（ブリスベン）を設立し、イギリス・ケンブリッジにも支部を展開。国内外で日本武道の普及に努めている。
                        </p>
                        <p class="intro-description">稽古は佐野武道館、佐野小学校体育館、福祉コミュニティセンターで週4日実施。</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
