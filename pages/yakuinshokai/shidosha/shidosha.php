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
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/yakuinshokai.css">
</head>
<body>
    <?php include __DIR__ . '/../../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>指導者</h1>
            <p>Instructors</p>
            <nav class="breadcrumb">
                <a href="../../../index.php">HOME</a>
                <a href="../yakuinshokai.php">役員紹介</a>
                <span>指導者</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section">
                <h2 class="section-title">居合道部</h2>
                <div class="officer-grid">
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">河原 清</h3>
                            <p class="officer-card-description">神心夢想流居合道 錬士 六段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">海外指導員</span>
                            <h3 class="officer-card-name">デイビッド・ハランデル</h3>
                            <p class="officer-card-description">神心夢想流居合道 二段</p>
                        </div>
                    </div>
                </div>

                <h2 class="section-title">剣道部</h2>
                <div class="officer-grid">
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">久保 雄輝</h3>
                            <p class="officer-card-description">剣道 三段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">横田 美南</h3>
                            <p class="officer-card-description">剣道 三段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">田村 瑞</h3>
                            <p class="officer-card-description">剣道 三段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">田中 公彦</h3>
                            <p class="officer-card-description">剣道 二段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">小倉 涼真</h3>
                            <p class="officer-card-description">剣道 三段</p>
                        </div>
                    </div>
                    <div class="officer-card">
                        <div class="officer-card-content">
                            <span class="officer-card-position">指導員</span>
                            <h3 class="officer-card-name">小倉 利幸</h3>
                            <p class="officer-card-description">剣道 三段</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
