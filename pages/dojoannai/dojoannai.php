<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 道場案内 - 稽古場所・料金・スケジュールのご案内">
    <title>道場案内 | 佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">Dojo Information</p>
        <h1 class="page-title animate-on-scroll delay-1">道場案内</h1>
        <p class="page-subtitle animate-on-scroll delay-2">稽古場所・料金・スケジュール</p>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <!-- 料金表 -->
        <section class="section">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-lg section-title">月謝・入会金</h2>
                </div>
                
                <div class="table-wrapper" style="max-width: 800px; margin: var(--space-md) auto;">
                    <table class="info-table animate-on-scroll delay-1">
                        <thead>
                            <tr style="border-bottom: 1px solid var(--color-accent);">
                                <th>コース</th>
                                <th>入会金</th>
                                <th>月謝</th>
                                <th>その他</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: var(--color-text-primary); font-weight: 500;">居合道</td>
                                <td>¥20,000</td>
                                <td>¥5,000</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="color: var(--color-text-primary); font-weight: 500;">剣道</td>
                                <td>¥5,000</td>
                                <td>¥3,000</td>
                                <td>運営費 ¥300/月</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="text-center animate-on-scroll delay-2" style="margin-top: var(--space-sm);">
                    <p class="body-sm">※ 入会金は初回のみ、月謝は毎月月初にお支払いください。</p>
                    <p class="body-sm">※ 体験や見学は無料です（事前にご連絡ください）。</p>
                </div>
            </div>
        </section>

        <!-- 稽古スケジュール -->
        <section class="section" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-lg section-title">稽古スケジュール</h2>
                </div>
                
                <!-- 居合道 -->
                <div style="margin-top: var(--space-lg);">
                    <h3 class="heading-sm animate-on-scroll" style="margin-bottom: var(--space-sm); color: var(--color-accent);">居合道</h3>
                    <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                        <div class="glass-card animate-on-scroll delay-1" style="text-align: center;">
                            <p style="font-weight: 600; font-size: 1.25rem;">水曜日</p>
                            <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">18:00〜20:30</p>
                            <p class="body-sm">佐野市隣保館</p>
                        </div>
                        <div class="glass-card animate-on-scroll delay-2" style="text-align: center;">
                            <p style="font-weight: 600; font-size: 1.25rem;">土曜日</p>
                            <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">16:00〜18:00</p>
                            <p class="body-sm">佐野市武道館</p>
                        </div>
                    </div>
                </div>
                
                <!-- 剣道 -->
                <div style="margin-top: var(--space-md);">
                    <h3 class="heading-sm animate-on-scroll" style="margin-bottom: var(--space-sm); color: var(--color-accent);">剣道</h3>
                    <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                        <div class="glass-card animate-on-scroll delay-1" style="text-align: center;">
                            <p style="font-weight: 600; font-size: 1.25rem;">木曜日</p>
                            <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">19:00〜21:00</p>
                            <p class="body-sm">佐野市武道館</p>
                        </div>
                        <div class="glass-card animate-on-scroll delay-2" style="text-align: center;">
                            <p style="font-weight: 600; font-size: 1.25rem;">金曜日</p>
                            <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">19:00〜22:00</p>
                            <p class="body-sm">佐野小学校体育館</p>
                        </div>
                        <div class="glass-card animate-on-scroll delay-3" style="text-align: center;">
                            <p style="font-weight: 600; font-size: 1.25rem;">土曜日</p>
                            <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">15:00〜16:00</p>
                            <p class="body-sm">佐野市武道館</p>
                        </div>
                    </div>
                </div>
                
                <!-- 試斬稽古 -->
                <div style="margin-top: var(--space-md);">
                    <h3 class="heading-sm animate-on-scroll" style="margin-bottom: var(--space-sm); color: var(--color-accent);">試斬稽古</h3>
                    <div class="glass-card animate-on-scroll delay-1" style="text-align: center; max-width: 400px; margin: 0 auto;">
                        <p style="font-weight: 600; font-size: 1.25rem;">不定期</p>
                        <p style="color: var(--color-accent); font-size: 1.5rem; font-weight: 600; margin: var(--space-xs) 0;">2ヶ月に1度程度</p>
                        <p class="body-sm">真剣を使った試斬</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 持ち物 -->
        <section class="section">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-lg section-title">稽古に必要なもの</h2>
                    <p class="body-lg" style="color: var(--color-text-secondary); margin-top: var(--space-sm);">
                        初回は動きやすい服装でお越しください。道具は道場でお貸しします。
                    </p>
                </div>
                
                <div class="features" style="margin-top: var(--space-md); grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));">
                    <div class="glass-card animate-on-scroll delay-1" style="text-align: center;">
                        <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: var(--space-xs);">①</div>
                        <p>動きやすい服装</p>
                    </div>
                    <div class="glass-card animate-on-scroll delay-2" style="text-align: center;">
                        <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: var(--space-xs);">②</div>
                        <p>タオル</p>
                    </div>
                    <div class="glass-card animate-on-scroll delay-3" style="text-align: center;">
                        <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: var(--space-xs);">③</div>
                        <p>飲料</p>
                    </div>
                    <div class="glass-card animate-on-scroll delay-4" style="text-align: center;">
                        <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: var(--space-xs);">④</div>
                        <p>着替え</p>
                    </div>
                </div>
                
                <div class="glass-card animate-on-scroll" style="max-width: 700px; margin: var(--space-md) auto 0; text-align: center;">
                    <p class="body-sm">
                        <strong style="color: var(--color-text-primary);">入会後に必要なもの:</strong> 
                        居合道着・袴・帯、木刀や模造刀（真剣は上達後）。防具類は入門後にご相談ください。
                    </p>
                </div>
            </div>
        </section>

        <!-- 道場所在地 -->
        <section class="section" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-lg section-title">稽古場所</h2>
                </div>
                
                <div style="margin-top: var(--space-lg);">
                    <!-- 佐野市隣保館 -->
                    <div class="glass-card animate-on-scroll" style="margin-bottom: var(--space-md); overflow: hidden; padding: 0;">
                        <div style="display: grid; grid-template-columns: 1fr; gap: 0;">
                            <div style="padding: var(--space-md);">
                                <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">佐野市隣保館</h3>
                                <p><strong>住所:</strong> 〒327-0004 栃木県佐野市赤坂町958-18</p>
                                <p><strong>稽古日:</strong> 水曜日 18:00〜20:30（居合道）</p>
                                <p><strong>駐車場:</strong> あり（無料）</p>
                            </div>
                            <div class="map-container" style="border-radius: 0;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1104.4149650255454!2d139.5652191182721!3d36.305266593543756!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb72dc54382d7182b!2z5L2Q6YeO5biCIOmao-S_nemkqA!5e0!3m2!1sja!2sjp!4v1612365425608!5m2!1sja!2sjp" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- 佐野市武道館 -->
                    <div class="glass-card animate-on-scroll delay-1" style="margin-bottom: var(--space-md); overflow: hidden; padding: 0;">
                        <div style="display: grid; grid-template-columns: 1fr; gap: 0;">
                            <div style="padding: var(--space-md);">
                                <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">佐野市武道館</h3>
                                <p><strong>住所:</strong> 〒327-0843 栃木県佐野市堀米町167-1</p>
                                <p><strong>稽古日:</strong> 土曜 15:00〜18:00, 木曜 19:00〜21:00</p>
                                <p><strong>駐車場:</strong> あり（無料）</p>
                            </div>
                            <div class="map-container" style="border-radius: 0;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780.7800232088082!2d139.58195645839797!3d36.32116989194503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f3bbc6960dd3f%3A0xd6d43ab605659ae1!2z5L2Q6YeO5biC5q2m6YGT6aSo!5e0!3m2!1sja!2sjp!4v1612365696172!5m2!1sja!2sjp" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- 佐野小学校体育館 -->
                    <div class="glass-card animate-on-scroll delay-2" style="overflow: hidden; padding: 0;">
                        <div style="display: grid; grid-template-columns: 1fr; gap: 0;">
                            <div style="padding: var(--space-md);">
                                <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">佐野小学校体育館</h3>
                                <p><strong>住所:</strong> 〒327-0025 栃木県佐野市金屋下町10</p>
                                <p><strong>稽古日:</strong> 金曜 19:00〜22:00（剣道）</p>
                                <p><strong>駐車場:</strong> あり（無料）</p>
                            </div>
                            <div class="map-container" style="border-radius: 0;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.5349755968632!2d139.57995280078293!3d36.31061049999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f3bb1895d705b%3A0xb8976804cb6eb0ef!2z44CSMzI3LTAwMjUg5qCD5pyo55yM5L2Q6YeO5biC6YeR5bGL5LiL55S677yS77yU77yV77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1612365882349!5m2!1sja!2sjp" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section" style="background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(212, 168, 75, 0.05) 100%);">
            <div class="container text-center">
                <div class="animate-on-scroll">
                    <h2 class="heading-md" style="margin-bottom: var(--space-sm);">見学・体験のお申し込み</h2>
                    <p class="body-lg" style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto var(--space-md);">
                        見学・体験は無料です。お気軽にお問い合わせください。
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
