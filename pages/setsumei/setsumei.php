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
        <!-- 道場訓 -->
        <section class="section">
            <div class="container">
                <img src="<?= $basePath ?>/img/setsumei/JP-Dojokun.jpg" alt="道場訓" style="max-width: 500px; width: 100%; height: auto; display: block; margin: 0 auto;">
            </div>
        </section>

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
                        <img src="<?= $basePath ?>/img/index/Logo.png" alt="佐野武道会ロゴ">
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
                            <strong style="color: var(--color-accent);">神心無想流</strong>とは、神影流二十四世-中島将弼 号-勝雲が編み出した居合の流派。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            中島将弼は家伝の神影流剣術のほか、合気道や薙刀術、杖術、弓術、空手など様々な武術を修業し、1942年（昭和17年）神影流剣術より神心無想流居合を編み出した。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            神心無想流居合とは、一般的な居合の型より一歩進んだ実践的居合であり精神力の動きを表すものとしてご理解いただきたいと存じます。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            また我らの師、神影流二十五世宗家-豊島一虎 号-勝峰の教え通り、当道場では稽古に初心者より真剣を用いる結果、進歩は著しい速さを示します。
                        </p>
                        <p style="margin-top: var(--space-md);">
                            埼玉県越谷市で活動している神影流本部道場のURLはこちらになります。<br>
                            <a href="https://shinkageryu.jp/" target="_blank" rel="noopener noreferrer" class="btn btn-ghost" style="margin-top: var(--space-sm);">
                                神影流本部道場 →
                            </a>
                        </p>
                    </div>
                    <div class="content-image animate-on-scroll delay-2">
                        <img src="<?= $basePath ?>/img/setsumei/iaido.jpg" alt="豊島一虎 号-勝峰 神影流二十五世宗家">
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
                        <h2 class="heading-md">試斬</h2>
                        <p>
                            当道場では数カ月に一度ほど、真剣での青竹の試斬りを行います。
                            日々の鍛錬の成果や正しい刀法を確認するためであり、剣道の門下生も参加できます。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            竹刀では得にくい刃筋や物打の感覚を学び、安全管理のもとで実施します。
                        </p>
                    </div>
                    <div class="content-image animate-on-scroll delay-2">
                        <img src="<?= $basePath ?>/img/setsumei/setsumei_3.JPG" alt="試斬の様子">
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
