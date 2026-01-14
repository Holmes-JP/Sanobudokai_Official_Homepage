/**
 * 菴宣㍽豁ｦ驕謎ｼ・蜈ｬ蠑上・繝ｼ繝繝壹・繧ｸ - 繝｡繧､繝ｳJavaScript
 */

// ===================================
// 繝上Φ繝舌・繧ｬ繝ｼ繝｡繝九Η繝ｼ
// ===================================
function toggleMenu() {
    const nav = document.getElementById('mainNav');
    nav.classList.toggle('active');
}

// 繝｡繝九Η繝ｼ螟悶け繝ｪ繝・け縺ｧ髢峨§繧・document.addEventListener('click', function(e) {
    const nav = document.getElementById('mainNav');
    const hamburger = document.querySelector('.hamburger');

    if (nav && hamburger && !nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove('active');
    }
});

// ===================================
// 逕ｻ蜒上せ繝ｩ繧､繝繝ｼ
// ===================================
let currentSlide = 0;
let slideInterval;
const autoSlideDelay = 4000;

function initSlider() {
    const slider = document.getElementById('slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.slide');
    if (slides.length === 0) return;

    // 閾ｪ蜍輔せ繝ｩ繧､繝蛾幕蟋・    startAutoSlide();

    // 繝峨ャ繝医リ繝薙ご繝ｼ繧ｷ繝ｧ繝ｳ縺ｫ繧､繝吶Φ繝郁ｿｽ蜉
    const dots = document.querySelectorAll('.slider-dot');
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            goToSlide(parseInt(this.dataset.index));
            resetAutoSlide();
        });
    });
}

function goToSlide(index) {
    const slider = document.getElementById('slider');
    const slides = slider.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');

    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;

    currentSlide = index;
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;

    // 繝峨ャ繝医・迥ｶ諷区峩譁ｰ
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

function nextSlide() {
    goToSlide(currentSlide + 1);
    resetAutoSlide();
}

function prevSlide() {
    goToSlide(currentSlide - 1);
    resetAutoSlide();
}

function startAutoSlide() {
    slideInterval = setInterval(() => {
        goToSlide(currentSlide + 1);
    }, autoSlideDelay);
}

function resetAutoSlide() {
    clearInterval(slideInterval);
    startAutoSlide();
}

// ===================================
// 繧ｹ繝繝ｼ繧ｹ繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ
// ===================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ===================================
// 繝輔か繝ｼ繝繝舌Μ繝・・繧ｷ繝ｧ繝ｳ
// ===================================
function initFormValidation() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('error');
            } else {
                field.classList.remove('error');
            }
        });

        // 繝｡繝ｼ繝ｫ繧｢繝峨Ξ繧ｹ縺ｮ蠖｢蠑上メ繧ｧ繝・け
        const emailField = form.querySelector('input[type="email"]');
        if (emailField && emailField.value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailField.value)) {
                isValid = false;
                emailField.classList.add('error');
            }
        }

        if (!isValid) {
            e.preventDefault();
            alert('蠢・磯・岼繧貞・蜉帙＠縺ｦ縺上□縺輔＞縲・);
        }
    });
}

// ===================================
// 豢ｻ蜍戊ｨ倬鹸縺ｮ繝輔ぅ繝ｫ繧ｿ繝ｼ讖溯・
// ===================================
function filterByCategory(category) {
    const articles = document.querySelectorAll('.record-item');

    articles.forEach(article => {
        if (category === 'all') {
            article.style.display = 'flex';
        } else {
            const articleCategory = article.dataset.category;
            article.style.display = articleCategory === category ? 'flex' : 'none';
        }
    });

    // 繝懊ち繝ｳ縺ｮ繧｢繧ｯ繝・ぅ繝也憾諷九ｒ譖ｴ譁ｰ
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.category === category);
    });
}

// ===================================
// 繝壹・繧ｸ繝阪・繧ｷ繝ｧ繝ｳ
// ===================================
let currentPage = 1;
const itemsPerPage = 5;

function initPagination() {
    const items = document.querySelectorAll('.record-item');
    if (items.length === 0) return;

    showPage(1);
    createPaginationButtons(items.length);
}

function showPage(page) {
    const items = document.querySelectorAll('.record-item');
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    items.forEach((item, index) => {
        item.style.display = (index >= start && index < end) ? 'flex' : 'none';
    });

    currentPage = page;
    updatePaginationButtons();
}

function createPaginationButtons(totalItems) {
    const container = document.getElementById('pagination');
    if (!container) return;

    const totalPages = Math.ceil(totalItems / itemsPerPage);
    container.innerHTML = '';

    // 譛蛻昴∈繝懊ち繝ｳ
    const firstBtn = document.createElement('button');
    firstBtn.textContent = '譛蛻・;
    firstBtn.onclick = () => showPage(1);
    container.appendChild(firstBtn);

    // 繝壹・繧ｸ逡ｪ蜿ｷ繝懊ち繝ｳ
    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement('button');
        btn.textContent = i;
        btn.classList.add('page-btn');
        if (i === 1) btn.classList.add('active');
        btn.onclick = () => showPage(i);
        container.appendChild(btn);
    }

    // 譛蠕後∈繝懊ち繝ｳ
    const lastBtn = document.createElement('button');
    lastBtn.textContent = '譛蠕・;
    lastBtn.onclick = () => showPage(totalPages);
    container.appendChild(lastBtn);
}

function updatePaginationButtons() {
    document.querySelectorAll('.page-btn').forEach((btn, index) => {
        btn.classList.toggle('active', index + 1 === currentPage);
    });
}

// ===================================
// Google Map埋め込み用（iframe利用のため現状処理なし）
// ===================================
function initMaps() {
    // 必要に応じてGoogle Maps APIを利用する場合ここに追加
}

// ===================================
// スクロールアニメーション
// ===================================
function initScrollAnimation() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// ===================================
// ページトップボタン
// ===================================
function initPageTopButton() {
    const btn = document.getElementById('pageTop');
    if (!btn) return;

    const toggleVisibility = () => {
        if (window.scrollY > 200) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    };

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', toggleVisibility);
    toggleVisibility();
}

// ===================================
// 初期化
// ===================================
window.addEventListener('DOMContentLoaded', () => {
    initSlider();
    initSmoothScroll();
    initFormValidation();
    initPagination();
    initScrollAnimation();
    initPageTopButton();
});


