<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشروط والأحكام - موقع Snaptiks | Terms and Conditions</title>
    <meta name="description" content="الشروط والأحكام الكاملة لاستخدام موقع Snaptiks - Complete terms and conditions for using Snaptiks website">
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
            line-height: 1.8;
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

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .mobile-menu span {
            width: 25px;
            height: 3px;
            background: var(--text-white);
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
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

        .content-section h3 {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin: 2rem 0 1rem 0;
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
            margin-bottom: 1.5rem;
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

        /* Warning Box */
        .warning-box {
            background: rgba(255, 193, 7, 0.1);
            border: 2px solid #ffc107;
            border-radius: 16px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .warning-box h3 {
            color: #ffc107;
            margin-bottom: 1rem;
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

            .footer-links {
                flex-direction: column;
                gap: 1rem;
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
                <li><a href="about.html">حول</a></li>
                <li><a href="contact.html">تواصل</a></li>
                <li><a href="disclaimer.html">إخلاء المسؤولية</a></li>
                <li><a href="terms.html" class="active">الشروط</a></li>
                <li><a href="privacy.html">الخصوصية</a></li>
                <li><a href="dmca.html">DMCA</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="page-header">
        <h1>الشروط والأحكام</h1>
        <p>يرجى قراءة هذه الشروط بعناية قبل استخدام موقعنا</p>
    </section>

    <div class="container">
        <div class="content-section">
            <h2>1. الموافقة على الشروط</h2>
            <p>
                مرحباً بك في موقع <strong>Snaptiks</strong>. بزيارتك لهذا الموقع واستخدام خدماتنا، فإنك توافق صراحةً وضمنياً على الالتزام بجميع الشروط والأحكام الواردة في هذه الاتفاقية. إذا كنت لا توافق على أي جزء من هذه الشروط، يرجى التوقف عن استخدام الموقع فوراً.
            </p>
        </div>

        <div class="content-section">
            <h2>2. وصف الخدمة</h2>
            <p>
                يقدم Snaptiks أداة تقنية عبر الإنترنت تتيح للمستخدمين تحميل مقاطع الفيديو من منصة TikTok. نحن نعمل كوسيط تقني فقط ولا نستضيف أي محتوى على خوادمنا. جميع الحقوق محفوظة لأصحابها الأصليين.
            </p>
            <ul>
                <li>الخدمة مقدمة "كما هي" وبدون أي ضمانات.</li>
                <li>نحتفظ بالحق في تعديل أو إيقاف الخدمة في أي وقت.</li>
                <li>الخدمة مخصصة للاستخدام الشخصي فقط.</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>3. التزامات المستخدم</h2>
            <p>
                باستخدامك للموقع، فإنك تتعهد وتوافق على ما يلي:
            </p>
            <ul>
                <li>عدم استخدام الخدمة لأي أغراض غير قانونية أو محظورة.</li>
                <li>عدم انتهاك حقوق الملكية الفكرية للآخرين.</li>
                <li>عدم محاولة اختراق الموقع أو تعطيل عمله.</li>
                <li>عدم استخدام برامج آلية (Bots) للوصول إلى الخدمة.</li>
                <li>تحمل المسؤولية الكاملة عن المحتوى الذي تقوم بتحميله.</li>
            </ul>
            <div class="warning-box">
                <h3>⚠️ تنبيه هام</h3>
                <p>
                    نحن لا ندعم ولا نشجع على تحميل المحتوى المحمي بحقوق النشر بدون إذن صريح من المالك. أنت المسؤول الوحيد عن أي انتهاك قانوني قد ينتج عن استخدامك للخدمة.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>4. حقوق الملكية الفكرية</h2>
            <p>
                جميع العلامات التجارية والشعارات والمحتوى الخاص بموقع Snaptiks (باستثناء محتوى المستخدمين) هي ملكية حصرية لنا.
            </p>
            <p>
                أما بالنسبة للفيديوهات التي يتم تحميلها، فإن حقوق النشر والملكية تظل مملوكة بالكامل لمنشئي المحتوى الأصليين على TikTok.
            </p>
        </div>

        <div class="content-section">
            <h2>5. إخلاء المسؤولية</h2>
            <p>
                نحن لا نتحمل أي مسؤولية عن أي أضرار مباشرة أو غير مباشرة قد تنشأ عن استخدامك للموقع. وهذا يشمل، على سبيل المثال لا الحصر:
            </p>
            <ul>
                <li>الأعطال التقنية أو توقف الخدمة.</li>
                <li>فقدان البيانات أو تلف الأجهزة.</li>
                <li>أي نزاعات قانونية تتعلق بحقوق النشر.</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>6. الإنهاء</h2>
            <p>
                نحتفظ بالحق في إنهاء أو تعليق وصولك إلى الموقع فوراً، دون سابق إنذار، لأي سبب كان، بما في ذلك خرق هذه الشروط.
            </p>
        </div>

        <div class="content-section">
            <h2>7. التغييرات على الشروط</h2>
            <p>
                نحتفظ بالحق في تعديل هذه الشروط في أي وقت. سيتم نشر التغييرات على هذه الصفحة، ويعتبر استمرارك في استخدام الموقع بعد التعديلات قبولاً لها.
            </p>
            <p><strong>تاريخ آخر تحديث:</strong> 16 يناير 2024</p>
        </div>

        <div class="content-section">
            <h2>8. اتصل بنا</h2>
            <p>
                إذا كان لديك أي استفسارات حول هذه الشروط، يرجى التواصل معنا عبر البريد الإلكتروني:
                <a href="mailto:legal@snaptiks.com" style="color: var(--secondary-color);">legal@snaptiks.com</a>
            </p>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">Snaptiks</div>
            <p style="margin-bottom: 1rem; opacity: 0.8;">
                أفضل أداة لتحميل فيديوهات TikTok بدون علامة مائية
            </p>
            <div class="footer-links">
                <a href="index.php">الرئيسية</a>
                <a href="about.html">حول</a>
                <a href="contact.html">تواصل</a>
                <a href="disclaimer.html">إخلاء المسؤولية</a>
                <a href="terms.html">الشروط</a>
                <a href="privacy.html">الخصوصية</a>
                <a href="dmca.html">DMCA</a>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Snaptiks. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            const mobileMenu = document.querySelector('.mobile-menu');
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                const navLinks = document.querySelector('.nav-links');
                const mobileMenu = document.querySelector('.mobile-menu');
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.content-section').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
