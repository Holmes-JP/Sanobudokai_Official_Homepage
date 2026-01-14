<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会の活動記録。演武会や試斬稽古、体験会の様子をご紹介します。">
    <title>活動記録 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/katsudokiroku.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>活動記録</h1>
            <p>Activity Records</p>
            <nav class="breadcrumb">
                <a href="../../index.php">HOME</a>
                <span>活動記録</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <div class="record-layout">
                <div class="record-main">
                    <div class="record-list">
                        <article class="record-item" data-category="稽古">
                            <div class="record-thumbnail">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record1.jpg" alt="新年稽古会">
                            </div>
                            <div class="record-content">
                                <div class="record-meta">
                                    <span class="record-date">2024/01/15</span>
                                    <span class="record-category 稽古">稽古</span>
                                </div>
                                <h3 class="record-title">新年稽古会を開催しました</h3>
                                <p class="record-description">新年のご挨拶と基本動作の確認から始め、今年の目標を共有しました。参加者全員で新たな気持ちで稽古に励みました。</p>
                            </div>
                        </article>

                        <article class="record-item" data-category="演武">
                            <div class="record-thumbnail">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record2.jpg" alt="年末演武会">
                            </div>
                            <div class="record-content">
                                <div class="record-meta">
                                    <span class="record-date">2023/12/20</span>
                                    <span class="record-category 演武">演武</span>
                                </div>
                                <h3 class="record-title">年末演武会を実施</h3>
                                <p class="record-description">一年間の成果を披露する演武会を開催しました。多くの方にご来場いただき、日頃の稽古の成果を見ていただきました。</p>
                            </div>
                        </article>

                        <article class="record-item" data-category="体験">
                            <div class="record-thumbnail">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record3.jpg" alt="体験会の様子">
                            </div>
                            <div class="record-content">
                                <div class="record-meta">
                                    <span class="record-date">2023/11/10</span>
                                    <span class="record-category 体験">体験</span>
                                </div>
                                <h3 class="record-title">秋の体験会のご報告</h3>
                                <p class="record-description">秋の体験会を開催し、居合道と剣道の基本動作や礼法を体験していただきました。武道の魅力を感じていただける機会となりました。</p>
                            </div>
                        </article>
                    </div>

                    <div class="pagination" id="pagination">
                        <button class="page-btn active" onclick="showPage(1)">1</button>
                    </div>
                </div>

                <aside class="record-sidebar">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">最近の投稿</h3>
                        <div class="recent-posts-list">
                            <div class="recent-post-item">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record1.jpg" alt="" class="recent-post-thumb">
                                <div class="recent-post-info">
                                    <p class="recent-post-date">2024/01/15</p>
                                    <p class="recent-post-title">新年稽古会を開催しました</p>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record2.jpg" alt="" class="recent-post-thumb">
                                <div class="recent-post-info">
                                    <p class="recent-post-date">2023/12/20</p>
                                    <p class="recent-post-title">年末演武会を実施</p>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <img src="<?= $basePath ?>/img/katsudokiroku/record3.jpg" alt="" class="recent-post-thumb">
                                <div class="recent-post-info">
                                    <p class="recent-post-date">2023/11/10</p>
                                    <p class="recent-post-title">秋の体験会のご報告</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="widget-title">カテゴリー</h3>
                        <div class="category-list">
                            <button class="category-btn active" data-category="all" onclick="filterByCategory('all')">
                                <span>すべて</span>
                                <span class="category-count">3</span>
                            </button>
                            <button class="category-btn" data-category="演武" onclick="filterByCategory('演武')">
                                <span>演武</span>
                                <span class="category-count">1</span>
                            </button>
                            <button class="category-btn" data-category="体験" onclick="filterByCategory('体験')">
                                <span>体験</span>
                                <span class="category-count">1</span>
                            </button>
                            <button class="category-btn" data-category="稽古" onclick="filterByCategory('稽古')">
                                <span>稽古</span>
                                <span class="category-count">1</span>
                            </button>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="widget-title">アーカイブ</h3>
                        <div class="archive-list">
                            <div class="archive-year">2024年</div>
                            <div class="archive-months">
                                <div class="archive-month">1月 (1)</div>
                            </div>
                            <div class="archive-year">2023年</div>
                            <div class="archive-months">
                                <div class="archive-month">12月 (1)</div>
                                <div class="archive-month">11月 (1)</div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
