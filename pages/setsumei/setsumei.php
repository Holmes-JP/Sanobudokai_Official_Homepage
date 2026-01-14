<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会の説明 - 神心無想流居合道・剣道のご紹介">
    <title>佐野武道会の説明 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/setsumei.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- タイトルバー -->
    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>佐野武道会の説明</h1>
            <p>Organization Explanation</p>
            <nav class="breadcrumb">
                <a href="../../index.php">HOME</a>
                <span>佐野武道会の説明</span>
            </nav>
        </div>
    </div>

    <!-- メインコンテンツ -->
    <main>
        <div class="wrapper">
            <!-- 道場訓 -->
            <section class="content-section dojokun-section">
                <h2 class="section-title">道場訓</h2>
                <img src="<?= $basePath ?>/img/setsumei/dojokun.jpg" alt="道場訓" class="dojokun-image">
            </section>

            <!-- 佐野武道会とは -->
            <section id="budokai" class="content-section explanation-section">
                <article class="explanation-item">
                    <div class="explanation-image">
                        <img src="<?= $basePath ?>/img/setsumei/setsumei_1.png" alt="佐野武道会">
                    </div>
                    <div class="explanation-content">
                        <h2 class="explanation-title">佐野武道会とは</h2>
                        <div class="explanation-text">
                            <p>佐野武道会は平成6年に設立し、栃木県佐野市に拠点を置く神影流道場です。</p>
                            <p>神影流の一門である神心無想流居合道と剣道を指導し、技術はもちろん礼儀作法や精神面も重視しています。</p>
                            <p>2ヶ月に一度、真剣を使った試斬も行っています。初心者から上級者まで幅広く歓迎しています。</p>
                        </div>
                        <ul class="feature-list">
                            <li>平成6年設立</li>
                            <li>神心無想流居合道と剣道を指導</li>
                            <li>礼節・所作を重視した指導</li>
                            <li>真剣での試斬を定期実施</li>
                            <li>オーストラリア・イギリスに支部</li>
                            <li>初心者歓迎</li>
                        </ul>
                    </div>
                </article>
            </section>

            <!-- 神心無想流居合 -->
            <section id="iaido" class="content-section explanation-section">
                <article class="explanation-item reverse">
                    <div class="explanation-image">
                        <img src="<?= $basePath ?>/img/setsumei/iaido.jpg" alt="神心無想流居合道">
                    </div>
                    <div class="explanation-content">
                        <h2 class="explanation-title">神心無想流居合とは</h2>
                        <div class="explanation-text">
                            <p><strong>神心無想流</strong>は、神影流二十四世・中島将弼（号・勝雲）が編み出した居合の流派です。</p>
                            <p>神影流剣術をはじめ、合気道・薙刀術・杖術・弓術・空手などを修業し、1942年に実践的居合として体系化されました。</p>
                            <p>当道場では初心者から真剣を用いた稽古を行い、実戦的な技術と精神の鍛錬を重視しています。</p>
                        </div>
                        <div class="history-timeline">
                            <div class="history-item">
                                <p class="history-year">平成6年</p>
                                <p class="history-description">佐野武道会設立</p>
                            </div>
                            <div class="history-item">
                                <p class="history-year">現在</p>
                                <p class="history-description">国内外で普及活動を展開</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <!-- 試斬 -->
            <section id="tameshigiri" class="content-section explanation-section">
                <article class="explanation-item">
                    <div class="explanation-image">
                        <img src="<?= $basePath ?>/img/setsumei/tameshigiri.jpg" alt="試斬">
                    </div>
                    <div class="explanation-content">
                        <h2 class="explanation-title">試斬（たましぎり）</h2>
                        <div class="explanation-text">
                            <p>当道場では2ヶ月に一度ほど、真剣での青竹の試斬りを行います。</p>
                            <p>日々の鍛錬の成果や正しい刀法を確認するためであり、剣道の門下生も参加できます。</p>
                            <p>竹刀では得にくい刃筋や物打の感覚を学び、安全管理のもとで実施します。</p>
                        </div>
                        <ul class="feature-list">
                            <li>真剣を使用した実践稽古</li>
                            <li>巻藁や竹を対象に実施</li>
                            <li>刃筋・物打の確認に最適</li>
                            <li>安全管理を徹底</li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
