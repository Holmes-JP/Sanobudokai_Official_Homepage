<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会へのお問い合わせ。見学・入会・体験のご連絡はこちらから。">
    <title>お問い合わせ | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/access.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>お問い合わせ</h1>
            <p>Contact</p>
            <nav class="breadcrumb">
                <a href="../../index.php">HOME</a>
                <span>お問い合わせ</span>
            </nav>
        </div>
    </div>

    <main>
        <div class="wrapper">
            <section class="content-section contact-info-section">
                <h2 class="section-title">連絡先</h2>
                <p>見学・入会に関するお問い合わせは、お電話またはメールフォームからお願いします。</p>

                <div class="contact-info-grid">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">TEL</div>
                        <p class="contact-info-label">お電話でのお問い合わせ</p>
                        <p class="contact-info-value phone">
                            <a href="tel:090-2457-9592">090-2457-9592</a>
                        </p>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">MAIL</div>
                        <p class="contact-info-label">メールでのお問い合わせ</p>
                        <p class="contact-info-value">下記フォームよりご連絡ください</p>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">TIME</div>
                        <p class="contact-info-label">受付時間</p>
                        <p class="contact-info-value">9:00〜21:00</p>
                    </div>
                </div>
            </section>

            <section class="content-section contact-form-section">
                <h2 class="section-title">お問い合わせフォーム</h2>

                <form class="contact-form" id="contactForm" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="name">お名前 <span class="required">必須</span></label>
                            <input type="text" id="name" name="name" class="form-input" required placeholder="山田 太郎">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kana">フリガナ <span class="optional">任意</span></label>
                            <input type="text" id="kana" name="kana" class="form-input" placeholder="ヤマダ タロウ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">メールアドレス <span class="required">必須</span></label>
                        <input type="email" id="email" name="email" class="form-input" required placeholder="example@email.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">電話番号 <span class="optional">任意</span></label>
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="090-0000-0000">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="subject">お問い合わせ種別 <span class="required">必須</span></label>
                        <select id="subject" name="subject" class="form-select" required>
                            <option value="">選択してください</option>
                            <option value="見学">見学について</option>
                            <option value="入会">入会について</option>
                            <option value="体験">体験・見学会について</option>
                            <option value="その他">その他のお問い合わせ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">お問い合わせ内容 <span class="required">必須</span></label>
                        <textarea id="message" name="message" class="form-textarea" required placeholder="お問い合わせ内容をご記入ください"></textarea>
                    </div>

                    <div class="form-checkbox">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        <label for="privacy">
                            個人情報の取り扱いに同意します。<br>
                            <small>ご記入いただいた個人情報は、お問い合わせへの回答のみに使用します。</small>
                        </label>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="submit-btn">送信する</button>
                    </div>

                    <div class="contact-notice">
                        <p class="contact-notice-title">お問い合わせに関する注意事項</p>
                        <ul>
                            <li>返信は通常2営業日以内に行います。</li>
                            <li>お急ぎの場合はお電話でのご連絡をおすすめします。</li>
                            <li>迷惑メール設定により返信が届かない場合があります。ドメイン受信設定をご確認ください。</li>
                        </ul>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
