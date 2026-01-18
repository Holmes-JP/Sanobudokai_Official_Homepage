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
                <img src="<?= $basePath ?>/img/setsumei/JP-Dojokun.jpg" alt="道場訓" style="max-width: 400px; width: 100%; height: auto; display: block; margin: 0 auto;">
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
                            佐野武道会は平成6年に設立し、栃木県佐野市に拠点を置く神影流道場です。
                            佐野武道会では主に神影流の一門である神心無想流居合道と剣道を指導しております。
                            また実技だけで無く、武道を志すために必要な礼儀や作法、所作なども念入りに指導いたしております。
                            老若男女問わず幅広い層の方々に楽しんで稽古に励んでいただけます。
                            ご興味のある方は道場案内またはお問い合わせをご覧ください。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            なお、当道場では真剣を使った試斬の稽古も行っています。初心者から上級者まで幅広く歓迎しています。
                        </p>
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
                            神心無想流とは、神影流第二十四世・中島将弼（号・勝雲）が編み出した居合の流派である。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            中中島将弼は、家伝の神影流剣術をはじめ、合気道、薙刀術、杖術、弓術、空手など、さまざまな武術を修業し、1942年（昭和17年）、神影流剣術を基として神心無想流居合を創始した。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            神心無想流居合は、一般的な居合の型にとどまらず、より実践性を重視した居合であり、精神力の働きや心の動きを表現するものとして理解されたい。
                        </p>
                        <p style="margin-top: var(--space-sm);">
                            また、我らが師である神影流第二十五世宗家・豊島一虎（号・勝峰）の教えに従い、当道場では初心者であっても稽古に真剣を用いる。その結果、修行者の進歩はきわめて速いものとなっている。
                        </p>
                        <p style="margin-top: var(--space-md);">
                            埼玉県越谷市で活動している神影流本部道場のホームページへは以下のボタンからアクセスできますので、ぜひご覧ください。<br>
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
                            当道場では演武の前や数カ月に一度ほど、真剣での青竹の試斬りを行います。
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

        <!-- 海外支部 -->
        <section id="overseas" class="section" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-md" style="margin-bottom: var(--space-md);">海外支部</h2>
                    <p style="color: var(--color-text-secondary); max-width: 700px; margin: 0 auto var(--space-lg);">
                        佐野武道会では現在、イギリスとオーストラリアに支部があります。<br>
                        来日し、当道場で学んだ門下生が教えています。
                    </p>
                </div>

                <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-md);">
                    <div class="glass-card animate-on-scroll delay-1" style="padding: 0; overflow: hidden;">
                        <img src="<?= $basePath ?>/img/setsumei/1-768x556.jpg" alt="ケンブリッジ武道会" style="width: 100%; height: auto; display: block;">
                        <div style="padding: var(--space-md);">
                            <h3 style="color: var(--color-accent); margin-bottom: var(--space-sm);">ケンブリッジ武道会</h3>
                            <p style="color: var(--color-text-secondary); margin-bottom: var(--space-xs);">指導者：ニコラス・パパニコラウ</p>
                            <p style="color: var(--color-text-secondary); font-size: 0.85rem; margin-bottom: var(--space-xs);">住所：パンピスフォード・ビレッジホール、3 チャーチレーン、パンピスフォード、ケンブリッジシャー CB22 3ET</p>
                            <a href="https://www.cambridge-budokai.org/" target="_blank" rel="noopener noreferrer" class="btn btn-ghost" style="margin-top: var(--space-sm);">
                                Webサイトへ →
                            </a>
                        </div>
                    </div>

                    <div class="glass-card animate-on-scroll delay-2" style="padding: 0; overflow: hidden;">
                        <img src="<?= $basePath ?>/img/setsumei/0-768x556.jpg" alt="農心館道場" style="width: 100%; height: auto; display: block;">
                        <div style="padding: var(--space-md);">
                            <h3 style="color: var(--color-accent); margin-bottom: var(--space-sm);">農心館道場</h3>
                            <p style="color: var(--color-text-secondary); margin-bottom: var(--space-xs);">指導者：ダニエル・イースト</p>
                            <p style="color: var(--color-text-secondary); font-size: 0.85rem; margin-bottom: var(--space-xs);">住所：ポールファームハウス、レイスターズ、ヘレフォードシャー HR6 0HP</p>
                            <a href="https://www.noushinkan.com/" target="_blank" rel="noopener noreferrer" class="btn btn-ghost" style="margin-top: var(--space-sm);">
                                Webサイトへ →
                            </a>
                        </div>
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
