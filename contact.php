<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا - Snaptiks | Contact Us</title>
    <meta name="description" content="تواصل مع فريق Snaptiks للدعم والمساعدة - Contact Snaptiks team for support and assistance">
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

        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin: 3rem 0;
        }

        /* Contact Form */
        .contact-form-section {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid var(--glass-border);
        }

        .contact-form-section h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-white);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-white);
            transition: all 0.3s ease;
            font-family: 'Tajawal', sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--secondary-color);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 20px rgba(0, 242, 234, 0.3);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--text-gray);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: linear-gradient(45deg, var(--primary-color), #ff4081);
            color: var(--text-white);
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 0, 80, 0.3);
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 0, 80, 0.4);
        }

        .submit-btn:disabled {
            background: linear-gradient(45deg, #666, #888);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Contact Info */
        .contact-info-section {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-info-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
        }

        .contact-info-card h3 {
            font-size: 1.3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .contact-info-card p {
            opacity: 0.8;
            line-height: 1.6;
            margin-bottom: 0.5rem;
        }

        .contact-info-card a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-info-card a:hover {
            text-decoration: underline;
            color: var(--primary-color);
        }

        /* FAQ Section */
        .faq-section {
            margin: 4rem 0;
        }

        .faq-section h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 2rem;
            text-align: center;
        }

        .faq-item {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 12px;
            margin-bottom: 1rem;
            border: 1px solid var(--glass-border);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--secondary-color);
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }

        .faq-answer {
            padding: 0 1.5rem 1.5rem;
            opacity: 0.8;
            line-height: 1.6;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
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
                background: rgba(15, 12, 41, 0.98);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                padding-top: 2rem;
                z-index: 1000;
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
                z-index: 1002;
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

            .contact-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-form-section {
                padding: 2rem 1.5rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-links .lang-switcher {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 1rem;
                padding-top: 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
                justify-content: center;
            }

            .nav-links .lang-switcher .lang-btn {
                width: 100%;
                max-width: 200px;
                margin: 0 auto;
            }
        }

        /* Loading Animation */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            top: 100px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            padding: 1rem 2rem;
            border-radius: 25px;
            z-index: 2000;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .toast.show {
            opacity: 1;
        }

        .toast.success {
            background: rgba(0, 200, 83, 0.95);
        }

        .toast.error {
            background: rgba(244, 67, 54, 0.95);
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
                <li><a href="contact.html" class="active">تواصل</a></li>
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
        <h1>تواصل معنا</h1>
        <p>نحن هنا للمساعدة! تواصل معنا عبر أي من القنوات المتاحة</p>
    </section>

    <div class="container">
        <div class="contact-layout">
            <div class="contact-form-section">
                <h2>📧 أرسل رسالة</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">الاسم الكامل</label>
                        <input type="text" id="name" name="name" placeholder="أدخل اسمك الكامل" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">نوع الرسالة</label>
                        <select id="subject" name="subject" required>
                            <option value="">اختر نوع الرسالة</option>
                            <option value="support">دعم فني</option>
                            <option value="suggestion">اقتراح</option>
                            <option value="bug">إبلاغ عن مشكلة</option>
                            <option value="business">استفسار تجاري</option>
                            <option value="other">أخرى</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">نص الرسالة</label>
                        <textarea id="message" name="message" placeholder="اكتب رسالتك هنا..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span id="btnText">إرسال الرسالة</span>
                        <span id="btnLoader" style="display: none;">
                            <span class="loading-spinner"></span> جاري الإرسال...
                        </span>
                    </button>
                </form>
            </div>

            <div class="contact-info-section">
                <div class="contact-info-card">
                    <h3>📧 البريد الإلكتروني</h3>
                    <p>للاستفسارات العامة:</p>
                    <p><a href="mailto:info@snaptiks.com">info@snaptiks.com</a></p>
                    <p>للدعم الفني:</p>
       