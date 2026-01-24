<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<header class="navbar" id="navbar">
    <div class="navbar-container">
        <a href="<?= $basePath ?>/" class="navbar-brand">
            <img src="<?= $basePath ?>/img/common/logo.png" alt="神影流山本派・佐野武道会" class="navbar-logo">
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar-nav">
            <a href="<?= $basePath ?>/" class="nav-link">ホーム</a>
            <a href="<?= $basePath ?>/setsumei" class="nav-link">佐野武道会の説明</a>
            <a href="<?= $basePath ?>/dojoannai" class="nav-link">道場案内</a>
            <a href="<?= $basePath ?>/yakuinshokai" class="nav-link">役員紹介</a>
            <a href="<?= $basePath ?>/katsudokiroku" class="nav-link">活動記録</a>
            <a href="<?= $basePath ?>/contact" class="nav-link">お問い合わせ</a>
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
        <a href="<?= $basePath ?>/" class="mobile-nav-link">ホーム</a>
        <a href="<?= $basePath ?>/setsumei" class="mobile-nav-link">佐野武道会の説明</a>
        <a href="<?= $basePath ?>/dojoannai" class="mobile-nav-link">道場案内</a>
        <a href="<?= $basePath ?>/yakuinshokai" class="mobile-nav-link">役員紹介</a>
        <a href="<?= $basePath ?>/katsudokiroku" class="mobile-nav-link">活動記録</a>
        <a href="<?= $basePath ?>/contact" class="mobile-nav-link">お問い合わせ</a>
    </div>
</nav>
