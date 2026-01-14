<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-logo">
            <img src="<?= $basePath ?>/img/common/logo.png" alt="佐野武道会ロゴ">
            <span class="footer-logo-text">神影流山本派-佐野武道会</span>
        </div>
        <div class="footer-nav">
            <div>
                <p class="footer-nav-title">サイトメニュー</p>
                <ul class="footer-nav-list">
                    <li><a href="<?= $basePath ?>/index.php">HOME</a></li>
                    <li><a href="<?= $basePath ?>/pages/setsumei/setsumei.php">佐野武道会の説明</a></li>
                    <li><a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php">道場案内</a></li>
                </ul>
            </div>
            <div>
                <p class="footer-nav-title">コンテンツ</p>
                <ul class="footer-nav-list">
                    <li><a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php">活動記録</a></li>
                    <li><a href="<?= $basePath ?>/pages/yakuinshokai/yakuinshokai.php">役員紹介</a></li>
                    <li><a href="<?= $basePath ?>/pages/access/access.php">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="copyright">&copy; 2024 佐野武道会 All Rights Reserved.</p>
    </div>
</footer>
<button id="pageTop" aria-label="ページトップへ">↑</button>
