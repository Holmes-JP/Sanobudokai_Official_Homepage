<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会は栃木県佐野市に拠点を置く居合道の道場です。神心無想流居合道と剣道の稽古を通じて、技術と精神を磨きます。初心者歓迎。">
    <meta name="keywords" content="佐野武道会,居合道,剣道,武道,栃木県,佐野市,神心無想流,試斬">
    <title>佐野武道会 | 栃木県佐野市の居合道道場</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
    <?php include __DIR__ . '/partials/site-header.php'; ?>

    <!-- ヒーローセクション -->
    <section class="hero">
        <div class="hero-decoration left"></div>
        <div class="hero-decoration right"></div>
        
        <div class="hero-content">
            <p class="hero-subtitle animate-on-scroll">Sano Budokai</p>
            <h1 class="hero-title">
                <span class="main-title animate-on-scroll delay-1">佐野武道会</span>
                <span class="sub-title animate-on-scroll delay-2">神影流山本派</span>
            </h1>
            <p class="hero-description animate-on-scroll delay-3">
                心技一妙。一閃の刃に込められた精神。<br>
                私たちは伝統の技と心を次世代へ繋ぎます。
            </p>
            <div class="hero-cta animate-on-scroll delay-4">
                <a href="<?= $basePath ?>/pages/setsumei/setsumei.php" class="btn btn-primary">
                    佐野武道会を知る
                </a>
                <a href="<?= $basePath ?>/pages/contact/contact.php" class="btn btn-outline">
                    お問い合わせ
                </a>
            </div>
        </div>
    </section>

    <!-- 特徴セクション -->
    <section class="section">
        <div class="container">
            <div class="text-center animate-on-scroll">
                <h2 class="heading-lg section-title">佐野武道会の特色</h2>
                <p class="body-lg" style="color: var(--color-text-secondary); max-width: 700px; margin: var(--space-md) auto;">
                    平成6年設立以来、伝統を重んじた稽古を通じて<br class="hide-mobile">
                    多くの門下生と共に武道の道を歩んでまいりました。
                </p>
            </div>

            <!-- 画像カルーセル (Swiper) -->
            <div class="carousel-section" style="margin-top: var(--space-lg);">
                <div class="swiper carousel-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?= $basePath ?>/img/index/sride/1.jpg" alt="稽古風景1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $basePath ?>/img/index/sride/2.jpg" alt="稽古風景2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $basePath ?>/img/index/sride/3.jpg" alt="稽古風景3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 佐野武道会について -->
    <section class="section" style="background: rgba(0,0,0,0.2);">
        <div class="container">
            <div class="content-block">
                <div class="content-text animate-on-scroll">
                    <span class="label">About Us</span>
                    <h3>佐野武道会とは</h3>
                    <p>
                        佐野武道会は平成6年（1994年）に設立された、栃木県佐野市を拠点とする居合道・剣道の道場です。
                        神心無想流居合道と剣道の稽古を通じて、技術向上だけでなく、礼節と精神を大切にした指導を行っています。
                    </p>
                    <p style="margin-top: var(--space-sm);">
                        初心者から経験者まで、武道に興味のある方はぜひお気軽にお問い合わせください。
                        見学・体験は随時歓迎しております。
                    </p>
                    <a href="<?= $basePath ?>/pages/setsumei/setsumei.php" class="btn btn-ghost" style="margin-top: var(--space-md);">
                        詳しく見る →
                    </a>
                </div>
                <div class="content-image animate-on-scroll delay-2">
                    <img src="<?= $basePath ?>/img/index/Logo.png" alt="佐野武道会ロゴ">
                </div>
            </div>
        </div>
    </section>

    <!-- 稽古案内 -->
    <section class="section">
        <div class="container">
            <div class="content-block reverse">
                <div class="content-text animate-on-scroll">
                    <span class="label">Training</span>
                    <h3>稽古案内</h3>
                    <p>
                        稽古は栃木県佐野市内の道場にて定期的に開催しております。
                        基礎から応用まで、個々のレベルに合わせた丁寧な指導を心がけています。
                    </p>
                    
                    <div style="margin-top: var(--space-md);">
                        <div class="info-box">
                            <div class="info-box-icon">📅</div>
                            <div class="info-box-content">
                                <h4>稽古日</h4>
                                <p>詳細は道場案内ページをご確認ください</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box-icon">📍</div>
                            <div class="info-box-content">
                                <h4>場所</h4>
                                <p>栃木県佐野市内</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php" class="btn btn-ghost" style="margin-top: var(--space-md);">
                        道場案内を見る →
                    </a>
                </div>
                <div class="content-image animate-on-scroll delay-2">
                    <img src="<?= $basePath ?>/img/index/Logo.png" alt="佐野武道会ロゴ">
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせCTA -->
    <section class="section" style="background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(212, 168, 75, 0.05) 100%);">
        <div class="container text-center">
            <div class="animate-on-scroll">
                <h2 class="heading-md" style="margin-bottom: var(--space-sm);">見学・体験のご案内</h2>
                <p class="body-lg" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto var(--space-md);">
                    武道に興味をお持ちの方、居合道を始めてみたい方、<br class="hide-mobile">
                    まずはお気軽にお問い合わせください。
                </p>
                <a href="<?= $basePath ?>/pages/contact/contact.php" class="btn btn-primary">
                    お問い合わせはこちら
                </a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/partials/site-footer.php'; ?>

    <button class="scroll-top" id="scroll-top" aria-label="ページトップへ戻る">
        ↑
    </button>

    <script src="<?= $basePath ?>/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.carousel-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'slide',
            speed: 600,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            grabCursor: true,
        });
    </script>
</body>
</html>
