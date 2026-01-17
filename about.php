<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حول Snaptiks - معرفة المزيد عن خدمتنا | About Snaptiks</title>
    <meta name="description" content="تعرف على المزيد عن Snaptiks وكيفية عمل خدمتنا لتحميل فيديوهات TikTok - Learn more about Snaptiks and how our TikTok video downloader works">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #ff0050;
            --secondary-color: #00f2ea;
            --bg-dark: #0f0c29;
            --bg-mid: #302b63;
            --bg-light: #24243e;
            --text-white: #ffffff;
            --text-gray: #b8b8b8;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Tajawal', 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-dark) 0%, var(--bg-mid) 50%, var(--bg-light) 100%);
            min-height: 100vh;
            color: var(--text-white);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-white);
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-white);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--secondary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a.active {
            color: var(--secondary-color);
        }

        .nav-links a.active::after {
            width: 100%;
        }

        /* Language Switcher */
        .lang-switcher {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .lang-btn {
            background: transparent;
            border: 1px solid var(--glass-border);
            color: var(--text-white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .lang-btn:hover,
        .lang-btn.active {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--bg-dark);
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .mobile-menu span {
            width: 25px;
            height: 3px;
            background: var(--text-white);
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Page Header */
        .page-header {
            margin-top: 80px;
            padding: 4rem 2rem 2rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.02);
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .content-section {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 3rem;
            margin: 2rem 0;
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .content-section h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .content-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .content-section ul {
            list-style: none;
            padding-right: 1rem;
        }

        .content-section ul li {
            margin-bottom: 1rem;
            padding-right: 1.5rem;
            position: relative;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .content-section ul li::before {
            content: '✓';
            position: absolute;
            right: 0;
            color: var(--secondary-color);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        /* How it Works */
        .how-it-works {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .step-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            border: 1px solid var(--glass-border);
            position: relative;
            transition: all 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.5rem;
            font-weight: 800;
        }

        .step-card h3 {
            font-size: 1.3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .step-card p {
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 3rem 2rem 2rem;
            margin-top: 4rem;
            border-top: 1px solid var(--glass-border);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--text-white);
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--secondary-color);
        }

        .footer-bottom {
            border-top: 1px solid var(--glass-border);
            padding-top: 2rem;
            margin-top: 2rem;
            opacity: 0.6;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                height: calc(100vh - 80px);
                background: rgba(15, 12, 41, 0.95);
                backdrop-filter: blur(20px);
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                padding-top: 2rem;
                z-index: 999;
                overflow-y: auto;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .nav-links.active {
                display: flex;
                transform: translateX(0);
            }

            .nav-links li {
                width: 100%;
                text-align: center;
                margin: 0;
            }

            .nav-links a {
                display: block;
                padding: 1rem 2rem;
                font-size: 1.1rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
            }

            .nav-links a:hover {
                background: rgba(0, 242, 234, 0.1);
            }

            .nav-links a::after {
                display: none;
            }

            .mobile-menu {
                display: flex;
                z-index: 1001;
                position: relative;
            }

            .mobile-menu.active span:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .mobile-menu.active span:nth-child(2) {
                opacity: 0;
            }

            .mobile-menu.active span:nth-child(3) {
                transform: rotate(45deg) translate(-5px, -6px);
            }

            .page-header h1 {
                font-size: 2.5rem;
            }

            .content-section {
                padding: 2rem 1rem;
            }

            .content-section h2 {
                font-size: 1.5rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }

            .lang-switcher {
                position: absolute;
                top: 100%;
                left: 50%;
                transform: translateX(-50%);
                margin-top: 1rem;
                background: var(--glass-bg);
                padding: 1rem;
                border-radius: 12px;
                backdrop-filter: blur(12px);
            }
        }

        /* Scroll Animations */
        .animate-in {
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-card,
        .step-card,
        .content-section {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <i class="fab fa-tiktok"></i>
                </div>
                Snaptiks
            </a>
            <ul class="nav-links">
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="about.html" class="active">حول</a></li>
                <li><a href="contact.html">تواصل</a></li>
                <li><a href="disclaimer.html">إخلاء المسؤولية</a></li>
                <li><a href="terms.html">الشروط</a></li>
                <li><a href="privacy.html">الخصوصية</a></li>
                <li><a href="dmca.html">DMCA</a></li>
                <li class="lang-switcher">
                    <button class="lang-btn active" onclick="switchLanguage('ar')">العربية</button>
                    <button class="lang-btn" onclick="switchLanguage('en')">English</button>
                </li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="page-header">
        <h1>حول Snaptiks</h1>
        <p>تعرف على قصتنا وكيف نساعد الملايين في تحميل محتوى TikTok المفضل لديهم</p>
    </section>

    <div class="container">
        <div class="content-section">
            <h2>🎯 من نحن</h2>
            <p>
                <strong>Snaptiks</strong> هي منصة رائدة وموثوقة لتحميل فيديوهات TikTok بدون علامة مائية. تأسست في 2024 بهدف تسهيل عملية حفظ المحتوى المفضل للمستخدمين من TikTok بأعلى جودة ممكنة وبدون أي قيود.
            </p>
            <p>
                نؤمن بأن محتوى TikTok يستحق أن يُحفظ بجودة عالية وبدون إزعاج العلامات المائية. لذلك قمنا بتطوير أداة ذكية وسهلة الاستخدام تعمل على جميع الأجهزة والمتصفحات.
            </p>
        </div>

        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-number">1M+</div>
                <div class="stat-label">فيديو تم تحميله</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">500K+</div>
                <div class="stat-label">مستخدم نشط</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">نسبة النجاح</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <div class="stat-label">دعم مستمر</div>
            </div>
        </div>

        <div class="content-section">
            <h2>✨ مميزاتنا</h2>
            <ul>
                <li><strong>تحميل بدون علامة مائية:</strong> احصل على فيديوهات نقية 100% بدون أي شعارات أو علامات مائية</li>
                <li><strong>جودة عالية HD:</strong> حفظ الفيديوهات بأعلى جودة ممكنة تصل إلى 1080p</li>
                <li><strong>سريع وموثوق:</strong> تحميل الفيديوهات في ثوانٍ معدودة مع ضمان 99.9% نجاح</li>
                <li><strong>مجاني تماماً:</strong> جميع الخدمات مجانية بدون أي رسوم أو اشتراكات</li>
                <li><strong>لا يحتاج تسجيل:</strong> استخدم الخدمة فوراً بدون إنشاء حساب أو تسجيل دخول</li>
                <li><strong>يعمل على جميع الأجهزة:</strong> متوافق مع الهواتف، الأجهزة اللوحية، والكمبيوترات</li>
                <li><strong>تحميل الصوت:</strong> امكانية تحميل الصوت فقط بصيغة MP3</li>
                <li><strong>آمن ومحمي:</strong> حماية كاملة لخصوصيتك وبياناتك</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>📖 كيف يعمل</h2>
            <div class="how-it-works">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>انسخ الرابط</h3>
                    <p>انسخ رابط الفيديو من تطبيق TikTok</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>ألصق الرابط</h3>
                    <p>ألصق الرابط في مربع الإدخال على موقعنا</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>اضغط تحميل</h3>
                    <p>اضغط على زر التحميل وانتظر ثوانٍ</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>احفظ الفيديو</h3>
                    <p>احفظ الفيديو على جهازك بدون علامة مائية</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2>🚀 رسالتنا ورؤيتنا</h2>
            <p>
                <strong>الرسالة:</strong> نسعى لتوفير أسهل وأفضل طريقة لتحميل فيديوهات TikTok بجودة عالية وبدون قيود، مع الحفاظ على خصوصية المستخدمين وأمانهم.
            </p>
            <p>
                <strong>الرؤية:</strong> أن نصبح المنصة الأولى والأكثر ثقة في العالم لتحميل محتوى TikTok، مع توسيع خدماتنا لتشمل منصات أخرى في المستقبل.
            </p>
        </div>

        <div class="content-section">
            <h2>⚖️ الامتثال القانوني</h2>
            <p>
                نحن في <strong>Snaptiks</strong> نلتزم التام باحترام حقوق الملكية الفكرية وحقوق النشر. موقعنا مصمم للاستخدام الشخصي فقط، ونحن نشجع جميع المستخدمين على:
            </p>
            <ul>
                <li>احترام حقوق المؤلفين والمنشئين على TikTok</li>
                <li>الحصول على إذن قبل إعادة استخدام أي محتوى</li>
                <li>استخدام المحتوى المحمل للاستخدام الشخصي فقط</li>
                <li>عدم انتهاك قوانين حقوق النشر المحلية أو الدولية</li>
            </ul>
            <p>
                للمزيد من المعلومات حول الشروط القانونية، يُرجى مراجعة صفحة <a href="disclaimer.html" style="color: var(--secondary-color);">إخلاء المسؤولية</a>.
            </p>
        </div>

        <div class="content-section" style="text-align: center;">
            <h2>🤝 انضم إلينا</h2>
            <p>
                هل لديك اقتراحات أو ملاحظات لتحسين خدمتنا؟ نحن نحب أن نسمع منك! تواصل معنا عبر صفحة <a href="contact.html" style="color: var(--secondary-color)