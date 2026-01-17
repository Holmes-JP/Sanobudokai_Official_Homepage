<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<header class="navbar" id="navbar">
    <div class="navbar-container">
        <a href="<?= $basePath ?>/index.php" class="navbar-brand">
            <img src="<?= $basePath ?>/img/common/logo.png" alt="神影流山本派・佐野武道会" class="navbar-logo">
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar-nav">
            <a href="<?= $basePath ?>/index.php" class="nav-link">ホーム</a>
            <a href="<?= $basePath ?>/pages/setsumei/setsumei.php" class="nav-link">佐野武道会の説明</a>
            <a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php" class="nav-link">道場案内</a>
            <a href="<?= $basePath ?>/pages/yakuinshokai/yakuinshokai.php" class="nav-link">役員紹介</a>
            <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="nav-link">活動記録</a>
            <a href="<?= $basePath ?>/pages/contact/contact.php" class="nav-link">お問い合わせ</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="menu-toggle" id="menu-toggle" aria-label="メニューを開く">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

<!-- Mobile Menu -->
<nav class="mobile-menu" id="mobile-menu">
    <div class="mobile-nav">
        <a href="<?= $basePath ?>/index.php" class="mobile-nav-link">ホーム</a>
        <a href="<?= $basePath ?>/pages/setsumei/setsumei.php" class="mobile-nav-link">佐野武道会の説明</a>
        <a href="<?= $basePath ?>/pages/dojoannai/dojoannai.php" class="mobile-nav-link">道場案内</a>
        <a href="<?= $basePath ?>/pages/yakuinshokai/yakuinshokai.php" class="mobile-nav-link">役員紹介</a>
        <a href="<?= $basePath ?>/pages/katsudokiroku/katsudokiroku.php" class="mobile-nav-link">活動記録</a>
        <a href="<?= $basePath ?>/pages/contact/contact.php" class="mobile-nav-link">お問い合わせ</a>
    </div>
</nav>
