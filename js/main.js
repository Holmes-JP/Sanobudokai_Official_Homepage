/**
 * 佐野武道会 - メインJavaScript
 * ネオ和風スタイル対応
 */

document.addEventListener('DOMContentLoaded', () => {
    // ===================================
    // ナビゲーション
    // ===================================
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

    // スクロール時のナビゲーションスタイル変更
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // モバイルメニューの開閉
    if (menuToggle && mobileMenu && mobileMenuOverlay) {
        const toggleMenu = () => {
            menuToggle.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            mobileMenuOverlay.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        };

        menuToggle.addEventListener('click', toggleMenu);
        mobileMenuOverlay.addEventListener('click', toggleMenu);

        // メニューリンクをクリックしたらメニューを閉じる
        const mobileNavLinks = mobileMenu.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu();
            });
        });
    }

    // ===================================
    // スクロールアニメーション
    // ===================================
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach(element => {
        observer.observe(element);
    });

    // ===================================
    // スクロールトップボタン
    // ===================================
    const scrollTopBtn = document.getElementById('scroll-top');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ===================================
    // 活動記録ページのフィルタリング
    // ===================================
    const categoryFilter = document.getElementById('category-filter');
    const recordList = document.getElementById('record-list');

    if (categoryFilter && recordList) {
        const filterButtons = categoryFilter.querySelectorAll('.tab-btn');
        const recordItems = recordList.querySelectorAll('.record-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;

                // アクティブボタンの切り替え
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // 記事のフィルタリング
                recordItems.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.style.display = 'block';
                        // アニメーションをリセット
                        item.classList.remove('visible');
                        setTimeout(() => {
                            item.classList.add('visible');
                        }, 50);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // ===================================
    // スムーススクロール
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const navbarHeight = navbar ? navbar.offsetHeight : 0;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===================================
    // フォームバリデーション
    // ===================================
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // 簡易的なバリデーション
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = 'var(--color-accent)';
                } else {
                    field.style.borderColor = 'var(--color-border)';
                }
            });
            
            if (isValid) {
                // ここに送信処理を追加
                alert('お問い合わせありがとうございます。\n送信が完了しました。');
                this.reset();
            } else {
                alert('必須項目を入力してください。');
            }
        });

        // フォーカス時のスタイル
        const formInputs = contactForm.querySelectorAll('.form-input, .form-textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--color-accent)';
            });
            input.addEventListener('blur', function() {
                if (!this.value.trim() && this.hasAttribute('required')) {
                    this.style.borderColor = 'var(--color-accent)';
                } else {
                    this.style.borderColor = 'var(--color-border)';
                }
            });
        });
    }

    // ===================================
    // ページローディング完了時
    // ===================================
    document.body.classList.add('loaded');
});