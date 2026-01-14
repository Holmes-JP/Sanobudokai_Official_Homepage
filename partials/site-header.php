<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<header class="site-header">
    <div class="header-inner">
        <a href="<?= $basePath ?>/index.php" class="logo">
            <img src="<?= $basePath ?>/img/common/logo.png" alt="佐野武道会ロゴ">
            <span class="logo-text">佐野武道会</span>
        </a>
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="main-nav" id="mainNav">
            <div class="nav-item">
                <a href="<?= $basePath ?>/index.php" class="nav-link">HOME</a>
            </div>
            <div class="nav-item">
                <a href="<?= $basePath ?>/pages/setsumei/setsumei.php" class="nav-link">佐野武道会の説明</a>
                <div class="dropdown">
                    <a href="<?= $basePath ?>/pages/setsumei/setsumei.php#budokai" class="dropdown-link">佐野武道会とは</a>
                    <a href="<?= $basePath ?>/pages/setsumei/setsumei.php#iaido" class="dropdown-link">神心無想流居合</a>
                    <a href="<?= $basePath ?>/pages/setsumei/setsumei.php#tameshigiri" class="dropdown-link">試斬</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php" class="nav-link">道場案内</a>
            </div>
            <div class="nav-item">
                <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="nav-link">活動記録</a>
            </div>
            <div class="nav-item">
                <a href="<?= $basePath ?>/pages/yakuinshokai/yakuinshokai.php" class="nav-link">役員紹介</a>
                <div class="dropdown">
                    <a href="<?= $basePath ?>/pages/yakuinshokai/kaicho/kaicho.php" class="dropdown-link">会長</a>
                    <a href="<?= $basePath ?>/pages/yakuinshokai/fukukaicho/fukukaicho.php" class="dropdown-link">副会長</a>
                    <a href="<?= $basePath ?>/pages/yakuinshokai/sodanyaku/sodanyaku.php" class="dropdown-link">相談役</a>
                    <a href="<?= $basePath ?>/pages/yakuinshokai/shidosha/shidosha.php" class="dropdown-link">指導者</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="<?= $basePath ?>/pages/access/access.php" class="nav-link">お問い合わせ</a>
            </div>
        </nav>
    </div>
</header>
