<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سياسة الخصوصية - موقع Snaptiks | Privacy Policy</title>
    <meta name="description" content="سياسة الخصوصية الشاملة لموقع Snaptiks - Comprehensive privacy policy for Snaptiks website">
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
            --success-color: #4caf50;
            --info-color: #2196f3;
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
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--secondary-color);
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

        /* Info Boxes */
        .success-box {
            background: rgba(76, 175, 80, 0.1);
            border: 2px solid var(--success-color);
            border-radius: 16px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .success-box h3 {
            color: var(--success-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .info-box {
            background: rgba(33, 150, 243, 0.1);
            border: 2px solid var(--info-color);
            border-radius: 16px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .info-box h3 {
            color: var(--info-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
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
                    <i class="fas fa-tiktok"></i>
                </div>
                Snaptiks
            </a>
            <ul class="nav-links">
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="about.html">حول</a></li>
                <li><a href="contact.html">تواصل</a></li>
                <li><a href="disclaimer.html">إخلاء المسؤولية</a></li>
                <li><a href="terms.html">الشروط</a></li>
                <li><a href="privacy.html" class="active">الخصوصية</a></li>
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
        <h1>سياسة الخصوصية</h1>
        <p>نحن نلتزم بحماية خصوصيتك وبياناتك الشخصية بأعلى المعايير</p>
    </section>

    <div class="container">
        <div class="content-section">
            <h2>مقدمة عامة</h2>
            <p>
                في موقع <strong>Snaptiks</strong>، تعتبر خصوصية زوارنا ومستخدمينا ذات أهمية بالغة بالنسبة لنا. توضح وثيقة سياسة الخصوصية هذه أنواع المعلومات الشخصية التي يتلقاها ويجمعها موقع Snaptiks وكيفية استخدامها.
            </p>
            <div class="success-box">
                <h3>✅ التزامنا الصارم</h3>
                <p>
                    نحن نلتزم بعدم بيع أو تأجير أو مشاركة أي معلومات شخصية لزوارنا مع أي طرف ثالث لأغراض تجارية.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>المعلومات التي نجمعها</h2>
            <p>
                نظراً لطبيعة خدمتنا كأداة تحميل، فإن جمع البيانات لدينا محدود للغاية ويقتصر على ما هو ضروري لعمل الموقع:
            </p>
            
            <h3>1. ملفات الدخول (Log Files)</h3>
            <p>
                مثل العديد من المواقع الأخرى، يستخدم Snaptiks ملفات الدخول. المعلومات داخل ملفات الدخول تشمل:
            </p>
            <ul>
                <li>عناوين بروتوكول الإنترنت (IP).</li>
                <li>نوع المتصفح (Browser Type).</li>
                <li>مزود خدمة الإنترنت (ISP).</li>
                <li>ختم التاريخ/الوقت.</li>
                <li>صفحات الإحالة/الخروج.</li>
            </ul>
            <p>
                هذه المعلومات تستخدم لتحليل الاتجاهات وإدارة الموقع، وهي ليست مرتبطة بأي معلومات لتحديد الهوية الشخصية.
            </p>

            <h3>2. البيانات المدخلة</h3>
            <p>
                نحن لا نقوم بتخزين روابط TikTok التي تقوم بإدخالها في سجل دائم. تتم معالجة الرابط بشكل فوري ومؤقت لغرض التحميل فقط.
            </p>
        </div>

        <div class="content-section">
            <h2>ملفات تعريف الارتباط (Cookies)</h2>
            <p>
                يستخدم Snaptiks ملفات تعريف الارتباط لتخزين المعلومات حول تفضيلات الزوار (مثل اللغة المفضلة)، ولتسجيل معلومات محددة عن المستخدم حول الصفحات التي يزورها، ولتخصيص محتوى صفحة الويب استنادًا إلى نوع متصفح الزائر.
            </p>
            
            <div class="info-box">
                <h3>ℹ️ إعلانات الطرف الثالث</h3>
                <p>
                    قد يستخدم بعض شركائنا الإعلانيين (مثل Adsterra) ملفات تعريف الارتباط ومنارات الويب (Web Beacons) على موقعنا. هذه الأطراف الثالثة تستخدم التكنولوجيا لعرض الإعلانات والروابط التي تظهر على Snaptiks مباشرة في متصفحك. هم يتلقون تلقائيًا عنوان IP الخاص بك عند حدوث ذلك.
                </p>
                <p>
                    ليس لدى Snaptiks أي وصول أو سيطرة على ملفات تعريف الارتباط هذه التي يستخدمها معلنون من أطراف ثالثة.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>أمن المعلومات</h2>
            <p>
                نحن نتخذ إجراءات أمنية مناسبة للحماية من الوصول غير المصرح به إلى البيانات أو تغييرها أو الإفصاح عنها أو إتلافها. تشمل هذه الإجراءات:
            </p>
            <ul>
                <li>استخدام بروتوكول التشفير SSL (https) لجميع الاتصالات.</li>
                <li>مراجعات دورية لممارسات جمع البيانات وتخزينها ومعالجتها.</li>
                <li>تقييد الوصول إلى المعلومات الشخصية لموظفي Snaptiks ومقاوليه ووكلائه.</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>تواصل معنا</h2>
            <p>
                إذا كنت بحاجة إلى مزيد من المعلومات أو لديك أية أسئلة عن سياسة الخصوصية الخاصة بنا، لا تتردد في الاتصال بنا عن طريق البريد الإلكتروني:
            </p>
            <p style="text-align: center; margin-top: 1rem;">
                <a href="mailto:privacy@snaptiks.com" style="color: var(--secondary-color); font-weight: bold; font-size: 1.2rem;">privacy@snaptiks.com</a>
            </p>
        </div>
        
        <div class="content-section">
            <h2>تحديثات سياسة الخصوصية</h2>
            <p>
                نحتفظ بالحق في تحديث أو تغيير سياسة الخصوصية الخاصة بنا في أي وقت. يجب عليك التحقق من هذه السياسة بشكل دوري. استمرارك في استخدام الخدمة بعد نشر أي تعديلات على سياسة الخصوصية هذه في هذه الصفحة سيشكل إقرارًا منك بالتعديلات وموافقتك على الالتزام بسياسة الخصوصية المعدلة والالتزام بها.
            </p>
            <p><strong>آخر تحديث:</strong> 16 يناير 2024</p>
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
