<?php
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐野武道会 道場案内 - 稽古場所・料金・スケジュールのご案内">
    <title>道場案内 | 神影流山本派-佐野武道会</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/common.css">
    <link rel="stylesheet" href="<?= $basePath ?>/css/dojoannai.css">
</head>
<body>
    <?php include __DIR__ . '/../../partials/site-header.php'; ?>

    <!-- タイトルバー -->
    <div class="titlebar">
        <div class="titlebar-inner">
            <h1>道場案内</h1>
            <p>Dojo Information</p>
            <nav class="breadcrumb">
                <a href="../../index.php">HOME</a>
                <span>道場案内</span>
            </nav>
        </div>
    </div>

    <!-- メインコンテンツ -->
    <main>
        <div class="wrapper">
            <!-- 料金表 -->
            <section class="content-section fee-section">
                <h2 class="section-title">月謝・入会金</h2>
                <div class="fee-table-container">
                    <table class="fee-table">
                        <thead>
                            <tr>
                                <th>コース</th>
                                <th>入会金</th>
                                <th>月謝</th>
                                <th>その他</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>居合道</td>
                                <td class="fee-amount">¥20,000</td>
                                <td class="fee-amount">¥5,000</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>剣道</td>
                                <td class="fee-amount">¥5,000</td>
                                <td class="fee-amount">¥3,000</td>
                                <td>運営費 ¥300/月</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fee-note">
                    <strong>※ 注意事項</strong><br>
                    ・入会金は初回のみお支払いください。<br>
                    ・月謝は毎月月初にお支払いください。<br>
                    ・体験や見学は無料です（事前にご連絡ください）。
                </div>
            </section>

            <!-- 稽古スケジュール -->
            <section class="content-section schedule-section">
                <h2 class="section-title">稽古スケジュール</h2>
                <h3 class="schedule-subtitle">居合道</h3>
                <div class="schedule-grid">
                    <div class="schedule-card">
                        <p class="schedule-day">水曜日</p>
                        <p class="schedule-time">18:00〜20:30</p>
                        <p class="schedule-content">居合道</p>
                        <p class="schedule-location">佐野市隣保館</p>
                    </div>
                    <div class="schedule-card">
                        <p class="schedule-day">土曜日</p>
                        <p class="schedule-time">16:00〜18:00</p>
                        <p class="schedule-content">居合道</p>
                        <p class="schedule-location">佐野市武道館</p>
                    </div>
                </div>

                <h3 class="schedule-subtitle">剣道</h3>
                <div class="schedule-grid">
                    <div class="schedule-card">
                        <p class="schedule-day">木曜日</p>
                        <p class="schedule-time">19:00〜21:00</p>
                        <p class="schedule-content">剣道</p>
                        <p class="schedule-location">佐野市武道館</p>
                    </div>
                    <div class="schedule-card">
                        <p class="schedule-day">金曜日</p>
                        <p class="schedule-time">19:00〜22:00</p>
                        <p class="schedule-content">剣道</p>
                        <p class="schedule-location">佐野小学校体育館</p>
                    </div>
                    <div class="schedule-card">
                        <p class="schedule-day">土曜日</p>
                        <p class="schedule-time">15:00〜16:00</p>
                        <p class="schedule-content">剣道</p>
                        <p class="schedule-location">佐野市武道館</p>
                    </div>
                </div>

                <h3 class="schedule-subtitle">試斬稽古</h3>
                <div class="schedule-grid">
                    <div class="schedule-card">
                        <p class="schedule-day">不定期</p>
                        <p class="schedule-time">2ヶ月に1度程度</p>
                        <p class="schedule-content">真剣を使った試斬</p>
                    </div>
                </div>
            </section>

            <!-- 持ち物 -->
            <section class="content-section equipment-section">
                <h2 class="section-title">稽古に必要なもの</h2>
                <p>初回は動きやすい服装でお越しください。道具は道場でお貸しします。</p>
                <div class="equipment-list">
                    <div class="equipment-item">
                        <div class="equipment-icon">1</div>
                        <span>動きやすい服装</span>
                    </div>
                    <div class="equipment-item">
                        <div class="equipment-icon">2</div>
                        <span>タオル</span>
                    </div>
                    <div class="equipment-item">
                        <div class="equipment-icon">3</div>
                        <span>水分補給用の飲料</span>
                    </div>
                    <div class="equipment-item">
                        <div class="equipment-icon">4</div>
                        <span>着替え（必要に応じて）</span>
                    </div>
                </div>
                <p class="mt-20">
                    <strong>入会後に必要なもの</strong><br>
                    居合道着・袴・帯、木刀や模造刀（真剣は上達後）。防具類は入門後にご相談ください。
                </p>
            </section>

            <!-- 道場所在地 -->
            <section class="content-section dojo-locations">
                <h2 class="section-title">稽古場所</h2>

                <!-- 佐野市隣保館 -->
                <div class="location-card">
                    <div class="location-header">
                        <h3 class="location-name">佐野市隣保館</h3>
                    </div>
                    <div class="location-body">
                        <div class="location-info">
                            <div class="location-info-item">
                                <span class="location-info-label">住所</span>
                                <span class="location-info-value">〒327-0004 栃木県佐野市赤坂町958-18</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">稽古日</span>
                                <span class="location-info-value">水曜日 18:00〜20:30（居合道）</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">駐車場</span>
                                <span class="location-info-value">あり（無料）</span>
                            </div>
                        </div>
                        <div class="location-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1104.4149650255454!2d139.5652191182721!3d36.305266593543756!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb72dc54382d7182b!2z5L2Q6YeO5biCIOmao-S_nemkqA!5e0!3m2!1sja!2sjp!4v1612365425608!5m2!1sja!2sjp"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- 佐野市武道館 -->
                <div class="location-card">
                    <div class="location-header">
                        <h3 class="location-name">佐野市武道館</h3>
                    </div>
                    <div class="location-body">
                        <div class="location-info">
                            <div class="location-info-item">
                                <span class="location-info-label">住所</span>
                                <span class="location-info-value">〒327-0843 栃木県佐野市堀米町167-1</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">稽古日</span>
                                <span class="location-info-value">土曜 15:00〜16:00（剣道）／16:00〜18:00（居合道）<br>木曜 19:00〜21:00（剣道）</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">駐車場</span>
                                <span class="location-info-value">あり（無料）</span>
                            </div>
                        </div>
                        <div class="location-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780.7800232088082!2d139.58195645839797!3d36.32116989194503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f3bbc6960dd3f%3A0xd6d43ab605659ae1!2z5L2Q6YeO5biC5q2m6YGT6aSo!5e0!3m2!1sja!2sjp!4v1612365696172!5m2!1sja!2sjp"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- 佐野小学校体育館 -->
                <div class="location-card">
                    <div class="location-header">
                        <h3 class="location-name">佐野小学校体育館</h3>
                    </div>
                    <div class="location-body">
                        <div class="location-info">
                            <div class="location-info-item">
                                <span class="location-info-label">住所</span>
                                <span class="location-info-value">〒327-0025 栃木県佐野市金屋下町10</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">稽古日</span>
                                <span class="location-info-value">金曜 19:00〜22:00（剣道）</span>
                            </div>
                            <div class="location-info-item">
                                <span class="location-info-label">駐車場</span>
                                <span class="location-info-value">あり（無料）</span>
                            </div>
                        </div>
                        <div class="location-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.5349755968632!2d139.57995280078293!3d36.31061049999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f3bb1895d705b%3A0xb8976804cb6eb0ef!2z44CSMzI3LTAwMjUg5qCD5pyo55yM5L2Q6YeO5biC6YeR5bGL5LiL55S677yS77yU77yV77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1612365882349!5m2!1sja!2sjp"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 注意事項 -->
            <section class="content-section notice-section">
                <h2 class="section-title">稽古参加の注意事項</h2>
                <ul class="notice-list">
                    <li>初めての方は事前にご連絡ください。</li>
                    <li>稽古開始10分前には到着をお願いします。</li>
                    <li>体調不良の際は無理をせずお休みください。</li>
                    <li>貴重品の管理は各自でお願いします。</li>
                    <li>道場内での撮影は事前許可がある場合のみ可能です。</li>
                    <li>お子様の見学は保護者同伴でお願いします。</li>
                </ul>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
