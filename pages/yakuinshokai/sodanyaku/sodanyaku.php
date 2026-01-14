<?php
require_once __DIR__ . '/../../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 相談役の紹介">
    <title>相談役 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/yakuinshokai.css">
</head>
<body>
    <?php include __DIR__ . '/../../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>相談役</h1>
            <p>Advisor</p>
            <nav class="breadcrumb">
                <a href="../../../index.php">HOME</a>
                <a href="../yakuinshokai.php">役員紹介</a>
                <span>相談役</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section officer-detail">
                <div class="officer-detail-card">
                    <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku1.jpg" alt="豊島 一虎" class="officer-detail-image">
                    <div class="officer-detail-text">
                        <h2>豊島 一虎（号・勝峰）</h2>
                        <p class="officer-role">神影流二十五世宗家 / 神心無想流二世 / 柳心流体術四世</p>
                        <p>埼玉県越谷市の本部道場で活動。詳細は本部道場サイトをご覧ください。</p>
                    </div>
                </div>

                <div class="officer-detail-card">
                    <img src="<?= $basePath ?>/img/yakuinshokai/sodanyaku/sodanyaku2.jpg" alt="小出 智男" class="officer-detail-image">
                    <div class="officer-detail-text">
                        <h2>小出 智男</h2>
                        <p class="officer-role">心身錬成道場 大義塾 理事長 / 神影流 範士 八段</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
