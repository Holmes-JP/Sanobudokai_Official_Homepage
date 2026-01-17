<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会の説明 - 神心無想流居合道・剣道のご紹介">
    <title>佐野武道会の説明 | 佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">About Sano Budokai</p>
        <h1 class="page-title animate-on-scroll delay-1">佐野武道会の説明</h1>
        <p class="page-subtitle animate-on-scroll delay-2">居合道・剣道・試斬について</p>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <!-- 佐野武道会とは -->
        <section id="budokai" class="section">
            <div class="container">
                <div class="content-block">
                    <div class="content-text animate-on-scroll">
                        <span class="label">About</span>
                        <h2 class="heading-md">佐野武道会とは</h2>
                        <p>
                            佐野武道会は平成6年に設立し、栃木県佐野市に拠点を置く居合道の道場です。
                            神影流の一門である神心無想流居合道と剣道を指導し、技術はもちろん礼儀作法や精神面も重視しています。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            2ヶ月に一度、真剣を使った試斬も行っています。初心者から上級者まで幅広く歓迎しています。
                        </p>
                        
                        <div style="margin-top: var(--space-md);">
                            <div class="info-box">
                                <div class="info-box-icon">📅</div>
                                <div class="info-box-content">
                                    <h4>設立</h4>
                                    <p>平成6年（1994年）</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box-icon">🌏</div>
                                <div class="info-box-content">
                                    <h4>海外支部</h4>
                                    <p>オーストラリア・イギリス</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-image animate-on-scroll delay-2">
                        <span>画像準備中</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 神心無想流居合 -->
        <section id="iaido" class="section" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="content-block reverse">
                    <div class="content-text animate-on-scroll">
                        <span class="label">Iaido</span>
                        <h2 class="heading-md">神心無想流居合とは</h2>
                        <p>
                            <strong style="color: var(--color-accent);">神心無想流</strong>は、神影流二十四世・中島将弼（号・勝雲）が編み出した居合の流派です。
                            神影流剣術をはじめ、合気道・薙刀術・杖術・弓術・空手などを修業し、1942年に実践的居合として体系化されました。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            当道場では初心者から真剣を用いた稽古を行い、実戦的な技術と精神の鍛錬を重視しています。
                        </p>
                        
                        <div class="glass-card" style="margin-top: var(--space-md); padding: var(--space-md);">
                            <div style="display: flex; gap: var(--space-md); flex-wrap: wrap;">
                                <div>
                                    <p style="color: var(--color-accent); font-weight: 600;">平成6年</p>
                                    <p style="color: var(--color-text-secondary);">佐野武道会設立</p>
                                </div>
                                <div>
                                    <p style="color: var(--color-accent); font-weight: 600;">現在</p>
                                    <p style="color: var(--color-text-secondary);">国内外で普及活動を展開</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-image animate-on-scroll delay-2">
                        <span>画像準備中</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 試斬 -->
        <section id="tameshigiri" class="section">
            <div class="container">
                <div class="content-block">
                    <div class="content-text animate-on-scroll">
                        <span class="label">Tameshigiri</span>
                        <h2 class="heading-md">試斬（しざん）</h2>
                        <p>
                            当道場では2ヶ月に一度ほど、真剣での青竹の試斬りを行います。
                            日々の鍛錬の成果や正しい刀法を確認するためであり、剣道の門下生も参加できます。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            竹刀では得にくい刃筋や物打の感覚を学び、安全管理のもとで実施します。
                        </p>
                        
                        <div class="features" style="margin-top: var(--space-md); grid-template-columns: repeat(2, 1fr); gap: var(--space-sm);">
                            <div class="glass-card" style="padding: var(--space-sm); text-align: center;">
                                <p style="font-weight: 600;">真剣使用</p>
                            </div>
                            <div class="glass-card" style="padding: var(--space-sm); text-align: center;">
                                <p style="font-weight: 600;">刃筋確認</p>
                            </div>
                            <div class="glass-card" style="padding: var(--space-sm); text-align: center;">
                                <p style="font-weight: 600;">安全管理</p>
                            </div>
                            <div class="glass-card" style="padding: var(--space-sm); text-align: center;">
                                <p style="font-weight: 600;">定期開催</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-image animate-on-scroll delay-2">
                        <span>画像準備中</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section" style="background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(212, 168, 75, 0.05) 100%);">
            <div class="container text-center">
                <div class="animate-on-scroll">
                    <h2 class="heading-md" style="margin-bottom: var(--space-sm);">見学・体験のご案内</h2>
                    <p class="body-lg" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto var(--space-md);">
                        興味をお持ちの方はお気軽にお問い合わせください。
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
