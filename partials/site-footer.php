<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>佐野武道会</h4>
                <p>
                    栃木県佐野市を拠点とする居合道の道場。<br>
                    神心無想流居合道と剣道の稽古を通じて、<br>
                    技術と精神を磨きます。
                </p>
            </div>
            
            <div class="footer-section">
                <h4>サイトマップ</h4>
                <ul>
                    <li><a href="<?= $basePath ?>/">ホーム</a></li>
                    <li><a href="<?= $basePath ?>/setsumei">佐野武道会の説明</a></li>
                    <li><a href="<?= $basePath ?>/dojoannai">道場案内</a></li>
                    <li><a href="<?= $basePath ?>/katsudokiroku">活動記録</a></li>
                    <li><a href="<?= $basePath ?>/contact">お問い合わせ</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>お問い合わせ</h4>
                <p>
                    見学・体験のお申し込みは<br>
                    お気軽にご連絡ください。
                </p>
                <a href="<?= $basePath ?>/contact" class="btn btn-ghost" style="margin-top: var(--space-sm); padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                    お問い合わせ →
                </a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?= date("Y") ?> 佐野武道会 All Rights Reserved.</p>
        </div>
    </div>
</footer>
