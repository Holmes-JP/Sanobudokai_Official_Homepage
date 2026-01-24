<?php
require_once __DIR__ . '/../config.php';
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              'serif-jp': ['"Noto Serif JP"', 'serif'],
            },
            colors: {
              'neon-blue': '#22D3EE',
              'neon-purple': '#A78BFA',
              'dark-bg': '#111827',
            },
            boxShadow: {
              'neon-blue': '0 0 5px #22D3EE, 0 0 10px #22D3EE, 0 0 20px #22D3EE',
              'neon-purple': '0 0 5px #A78BFA, 0 0 10px #A78BFA, 0 0 20px #A78BFA',
            }
          }
        }
      }
    </script>
</head>
<body class="bg-dark-bg text-white font-serif-jp">
    <?php include __DIR__ . '/../partials/site-header.php'; ?>

    <!-- タイトルバー -->
    <div class="relative h-64 flex items-center justify-center">
        <img src="<?= $basePath ?>/img/setsumei/setsumei_2.jpg" alt="お問い合わせ" class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative z-10 text-center">
            <h1 class="text-5xl font-bold" style="text-shadow: 0 0 15px rgba(167, 139, 250, 0.8);">お問い合わせ</h1>
            <p class="text-xl" style="text-shadow: 0 0 10px rgba(34, 211, 238, 0.8);">Contact</p>
        </div>
    </div>

    <!-- メインコンテンツ -->
    <main class="container mx-auto p-4 md:p-8">

        <!-- 連絡先 -->
        <section class="my-16 animate-on-scroll">
            <h2 class="text-4xl font-bold text-center mb-8 text-neon-purple">連絡先</h2>
            <p class="text-center max-w-2xl mx-auto mb-12">見学・入会に関するお問い合わせは、お電話またはメールフォームからお願いします。</p>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-gray-900/50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-neon-blue">お電話</h3>
                    <p class="text-3xl my-4 font-bold"><a href="tel:090-2457-9592" class="hover:text-neon-blue">090-2457-9592</a></p>
                </div>
                <div class="bg-gray-900/50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-neon-blue">メール</h3>
                    <p class="text-lg my-4">下記フォームよりご連絡ください</p>
                </div>
                <div class="bg-gray-900/50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-neon-blue">受付時間</h3>
                    <p class="text-3xl my-4 font-bold">9:00〜21:00</p>
                </div>
            </div>
        </section>

        <!-- お問い合わせフォーム -->
        <section class="my-16 animate-on-scroll">
            <h2 class="text-4xl font-bold text-center mb-8 text-neon-purple">お問い合わせフォーム</h2>
            <form class="max-w-3xl mx-auto bg-gray-900/50 p-8 rounded-lg" id="contactForm" action="#" method="post">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label class="block mb-2" for="name">お名前 <span class="text-neon-purple">必須</span></label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple" required>
                    </div>
                    <div class="form-group">
                        <label class="block mb-2" for="kana">フリガナ</label>
                        <input type="text" id="kana" name="kana" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple">
                    </div>
                </div>
                <div class="mt-6">
                    <label class="block mb-2" for="email">メールアドレス <span class="text-neon-purple">必須</span></label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple" required>
                </div>
                <div class="mt-6">
                    <label class="block mb-2" for="phone">電話番号</label>
                    <input type="tel" id="phone" name="phone" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple">
                </div>
                <div class="mt-6">
                    <label class="block mb-2" for="subject">お問い合わせ種別 <span class="text-neon-purple">必須</span></label>
                    <select id="subject" name="subject" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple" required>
                        <option value="">選択してください</option>
                        <option value="見学">見学について</option>
                        <option value="入会">入会について</option>
                        <option value="体験">体験・見学会について</option>
                        <option value="その他">その他のお問い合わせ</option>
                    </select>
                </div>
                <div class="mt-6">
                    <label class="block mb-2" for="message">お問い合わせ内容 <span class="text-neon-purple">必須</span></label>
                    <textarea id="message" name="message" rows="5" class="w-full bg-gray-800 border border-gray-700 rounded py-2 px-3 focus:outline-none focus:border-neon-purple" required></textarea>
                </div>
                <div class="mt-6">
                    <label class="flex items-center">
                        <input type="checkbox" id="privacy" name="privacy" class="form-checkbox h-5 w-5 text-neon-purple bg-gray-800 border-gray-700 rounded focus:ring-neon-purple" required>
                        <span class="ml-2">個人情報の取り扱いに同意します。</span>
                    </label>
                </div>
                <div class="mt-8 text-center">
                    <button type="submit" class="bg-neon-purple text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:text-neon-purple transition-all duration-300 shadow-lg shadow-neon-purple/30">
                        送信する
                    </button>
                </div>
            </form>
        </section>

    </main>

    <?php include __DIR__ . '/../partials/site-footer.php'; ?>

    <script src="<?= $basePath ?>/js/main.js"></script>
</body>
</html>
