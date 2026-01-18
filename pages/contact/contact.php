<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会へのお問い合わせ。見学・体験・入会のご相談はお気軽にどうぞ。">
    <title>お問い合わせ | 佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- ページヘッダー -->
    <header class="page-header">
        <p class="hero-subtitle animate-on-scroll">Contact Us</p>
        <h1 class="page-title animate-on-scroll delay-1">お問い合わせ</h1>
        <p class="page-subtitle animate-on-scroll delay-2">見学・体験・入会のご相談</p>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <section class="section">
            <div class="container">
                <div class="content-block" style="gap: var(--space-lg);">
                    <!-- お問い合わせフォーム -->
                    <div class="animate-on-scroll">
                        <h2 class="heading-md" style="margin-bottom: var(--space-md);">お問い合わせフォーム</h2>
                        <form class="contact-form" action="#" method="POST">
                            <div class="form-group">
                                <label for="name" class="form-label">お名前 <span style="color: var(--color-accent);">*</span></label>
                                <input type="text" id="name" name="name" class="form-input" required placeholder="山田 太郎">
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label">メールアドレス <span style="color: var(--color-accent);">*</span></label>
                                <input type="email" id="email" name="email" class="form-input" required placeholder="example@email.com">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone" class="form-label">電話番号</label>
                                <input type="tel" id="phone" name="phone" class="form-input" placeholder="090-1234-5678">
                            </div>
                            
                            <div class="form-group">
                                <label for="subject" class="form-label">お問い合わせ種別 <span style="color: var(--color-accent);">*</span></label>
                                <select id="subject" name="subject" class="form-input" required>
                                    <option value="">選択してください</option>
                                    <option value="見学">見学について</option>
                                    <option value="体験">体験について</option>
                                    <option value="入会">入会について</option>
                                    <option value="その他">その他</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">お問い合わせ内容 <span style="color: var(--color-accent);">*</span></label>
                                <textarea id="message" name="message" class="form-textarea" required placeholder="お問い合わせ内容をご記入ください"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                送信する
                            </button>
                        </form>
                    </div>
                    
                    <!-- 連絡先情報 -->
                    <div class="animate-on-scroll delay-2">
                        <h2 class="heading-md" style="margin-bottom: var(--space-md);">連絡先</h2>
                        
                        <div class="glass-card" style="margin-bottom: var(--space-md);">
                            <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">お電話でのお問い合わせ</h3>
                            <p style="font-size: 1.5rem; font-weight: 600; margin-bottom: var(--space-xs);">
                                <a href="tel:090-2457-9592" style="color: var(--color-text-primary);">090-2457-9592</a>
                            </p>
                            <p class="body-sm">お気軽にお電話ください</p>
                        </div>
                        
                        <div class="glass-card" style="margin-bottom: var(--space-md);">
                            <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">稽古場所</h3>
                            <div style="margin-bottom: var(--space-sm);">
                                <p style="font-weight: 600;">佐野小学校体育館</p>
                                <p class="body-sm">〒327-0025 栃木県佐野市金屋下町10</p>
                            </div>
                            <div style="margin-bottom: var(--space-sm);">
                                <p style="font-weight: 600;">佐野市武道館</p>
                                <p class="body-sm">〒327-0843 栃木県佐野市堀米町167-1</p>
                            </div>
                            <a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php" class="btn btn-ghost" style="margin-top: var(--space-sm);">
                                道場案内を見る →
                            </a>
                        </div>
                        
                        <div class="glass-card">
                            <h3 class="heading-sm" style="color: var(--color-accent); margin-bottom: var(--space-sm);">稽古スケジュール</h3>
                            <div style="margin-bottom: var(--space-sm);">
                                <p style="font-weight: 600; margin-bottom: 0.3rem;">居合道</p>
                                <p class="body-sm" style="color: var(--color-text-secondary);">土曜 16:00〜18:00（佐野市武道館）</p>
                            </div>
                            <div>
                                <p style="font-weight: 600; margin-bottom: 0.3rem;">剣道</p>
                                <p class="body-sm" style="color: var(--color-text-secondary);">木曜 19:00〜21:00（佐野市武道館）</p>
                                <p class="body-sm" style="color: var(--color-text-secondary);">金曜 20:00〜21:30（佐野小学校体育館）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- よくある質問 -->
        <section class="section" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="text-center animate-on-scroll">
                    <h2 class="heading-lg section-title">よくある質問</h2>
                </div>
                
                <div style="max-width: 800px; margin: var(--space-lg) auto 0;">
                    <div class="glass-card animate-on-scroll delay-1" style="margin-bottom: var(--space-sm);">
                        <h3 style="color: var(--color-accent); margin-bottom: var(--space-xs);">Q. 初心者でも大丈夫ですか？</h3>
                        <p style="color: var(--color-text-secondary);">
                            はい、初心者の方も大歓迎です。基礎から丁寧に指導いたします。見学や体験も随時受け付けておりますので、まずはお気軽にお問い合わせください。
                        </p>
                    </div>
                    
                    <div class="glass-card animate-on-scroll delay-2" style="margin-bottom: var(--space-sm);">
                        <h3 style="color: var(--color-accent); margin-bottom: var(--space-xs);">Q. 道具は必要ですか？</h3>
                        <p style="color: var(--color-text-secondary);">
                            最初は動きやすい服装だけで大丈夫です。道具は道場でお貸しします。入会後、徐々に揃えていただければ問題ありません。
                        </p>
                    </div>
                    
                    <div class="glass-card animate-on-scroll delay-3" style="margin-bottom: var(--space-sm);">
                        <h3 style="color: var(--color-accent); margin-bottom: var(--space-xs);">Q. 年齢制限はありますか？</h3>
                        <p style="color: var(--color-text-secondary);">
                            特に年齢制限はありません。お子様から大人まで、幅広い年齢層の方が稽古に参加されています。
                        </p>
                    </div>
                    
                    <div class="glass-card animate-on-scroll delay-4">
                        <h3 style="color: var(--color-accent); margin-bottom: var(--space-xs);">Q. 見学・体験の予約は必要ですか？</h3>
                        <p style="color: var(--color-text-secondary);">
                            事前にお電話またはお問い合わせフォームからご連絡いただけると、スムーズにご案内できます。
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <button class="scroll-top" id="scroll-top" aria-label="ページトップへ戻る">↑</button>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
