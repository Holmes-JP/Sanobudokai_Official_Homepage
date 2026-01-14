<?php
require_once __DIR__ . '/../../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 副会長の紹介">
    <title>副会長 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/yakuinshokai.css">
</head>
<body>
    <?php include __DIR__ . '/../../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>副会長</h1>
            <p>Vice Chairman</p>
            <nav class="breadcrumb">
                <a href="../../../index.php">HOME</a>
                <a href="../yakuinshokai.php">役員紹介</a>
                <span>副会長</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section officer-detail">
                <div class="officer-detail-card">
                    <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho1.jpg" alt="新井 潤" class="officer-detail-image">
                    <div class="officer-detail-text">
                        <h2>新井 潤</h2>
                        <p class="officer-role">副会長 / 剣道 五段</p>
                    </div>
                </div>

                <div class="officer-detail-card">
                    <img src="<?= $basePath ?>/img/yakuinshokai/fukukaicho/fukukaicho2.jpg" alt="江原 茂夫" class="officer-detail-image">
                    <div class="officer-detail-text">
                        <h2>江原 茂夫</h2>
                        <p class="officer-role">副会長 / 剣道 五段</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
