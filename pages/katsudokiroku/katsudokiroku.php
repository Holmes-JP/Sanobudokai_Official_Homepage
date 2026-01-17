<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会の活動記録。演武会や試斬稽古、体験会の様子をご紹介します。">
    <title>活動記録 | 佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">Activity Records</p>
        <h1 class="page-title animate-on-scroll delay-1">活動記録</h1>
        <p class="page-subtitle animate-on-scroll delay-2">演武会・稽古・体験会の記録</p>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <section class="section">
            <div class="container">
                <!-- カテゴリーフィルター -->
                <div class="tabs animate-on-scroll" id="category-filter">
                    <button class="tab-btn active" data-category="all">すべて</button>
                    <button class="tab-btn" data-category="稽古">稽古</button>
                    <button class="tab-btn" data-category="演武">演武</button>
                    <button class="tab-btn" data-category="体験">体験</button>
                </div>

                <!-- 活動記録リスト -->
                <div class="records-grid" id="record-list">
                    <article class="card record-item animate-on-scroll" data-category="稽古">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2024/01/15</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">稽古</span>
                            </div>
                            <h3 class="card-title">新年稽古会を開催しました</h3>
                            <p class="card-description">新年のご挨拶と基本動作の確認から始め、今年の目標を共有しました...</p>
                        </div>
                    </article>

                    <article class="card record-item animate-on-scroll delay-1" data-category="演武">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2023/12/20</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">演武</span>
                            </div>
                            <h3 class="card-title">年末演武会を実施</h3>
                            <p class="card-description">一年間の成果を披露する演武会を開催しました。多くの方にご来場いただきました...</p>
                        </div>
                    </article>

                    <article class="card record-item animate-on-scroll delay-2" data-category="体験">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2023/11/10</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">体験</span>
                            </div>
                            <h3 class="card-title">秋の体験会のご報告</h3>
                            <p class="card-description">秋の体験会を開催し、居合道と剣道の基本動作や礼法を体験していただきました...</p>
                        </div>
                    </article>

                    <article class="card record-item animate-on-scroll delay-3" data-category="稽古">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2023/10/05</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">稽古</span>
                            </div>
                            <h3 class="card-title">試斬稽古を実施</h3>
                            <p class="card-description">真剣を用いた試斬稽古を行いました。刃筋の確認と実践的な技術向上に取り組みました...</p>
                        </div>
                    </article>

                    <article class="card record-item animate-on-scroll delay-4" data-category="演武">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2023/09/15</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">演武</span>
                            </div>
                            <h3 class="card-title">地域イベントで演武披露</h3>
                            <p class="card-description">佐野市の地域イベントにて居合道の演武を披露しました。多くの方に武道の魅力を...</p>
                        </div>
                    </article>

                    <article class="card record-item animate-on-scroll delay-4" data-category="体験">
                        <div class="card-image">
                            <span>画像準備中</span>
                        </div>
                        <div class="card-content">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xs);">
                                <span class="body-sm">2023/08/20</span>
                                <span class="tab-btn" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">体験</span>
                            </div>
                            <h3 class="card-title">夏季体験会開催</h3>
                            <p class="card-description">夏季休暇を利用した体験会を開催。学生や社会人の方々に武道の基礎を体験していただきました...</p>
                        </div>
                    </article>
                </div>

                <!-- ページネーション -->
                <div class="tabs" id="pagination" style="margin-top: var(--space-lg);">
                    <!-- Pagination buttons will be generated by JavaScript -->
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section" style="background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(212, 168, 75, 0.05) 100%);">
            <div class="container text-center">
                <div class="animate-on-scroll">
                    <h2 class="heading-md" style="margin-bottom: var(--space-sm);">活動に参加してみませんか？</h2>
                    <p class="body-lg" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto var(--space-md);">
                        見学・体験は随時受け付けております。
                    </p>
                    <a href="<?= $basePath ?>/pages/contact/contact.php" class="btn btn-primary">
                        お問い合わせはこちら
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <button class="scroll-top" id="scroll-top" aria-label="ページトップへ戻る">↑</button>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
