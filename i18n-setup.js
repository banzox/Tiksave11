document.addEventListener('DOMContentLoaded', async () => {
    // التأكد من تحميل المكتبة
    if (typeof i18next === 'undefined') {
        console.error('i18next not loaded');
        return;
    }

    await i18next
        .use(i18nextHttpBackend)
        .use(i18nextBrowserLanguageDetector)
        .init({
            fallbackLng: 'en',
            debug: false,
            supportedLngs: ['en', 'ar', 'fr', 'es', 'de'],
            backend: {
                // بما أن الملف في المجلد الرئيسي، هذا المسار هو الصحيح
                loadPath: 'locales/{{lng}}/translation.json',
            },
            detection: {
                order: ['localStorage', 'navigator'],
                caches: ['localStorage']
            }
        });

    updateContent();

    i18next.on('languageChanged', () => {
        updateContent();
    });
});

function updateContent() {
    const lang = i18next.language;
    const dir = ['ar', 'he', 'fa'].includes(lang) ? 'rtl' : 'ltr';
    
    document.documentElement.dir = dir;
    document.documentElement.lang = lang;

    if (lang === 'ar') {
        document.body.style.fontFamily = "'Tajawal', sans-serif";
    } else {
        document.body.style.fontFamily = "'Inter', sans-serif";
    }

    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
            if (el.hasAttribute('placeholder')) {
                el.placeholder = i18next.t(key);
            }
        } else {
            el.innerHTML = i18next.t(key);
        }
    });

    document.querySelectorAll('.lang-btn').forEach(btn => {
        // إزالة الكلاس النشط من الجميع ثم إضافته للزر الحالي
        btn.classList.remove('active');
        // التحقق مما إذا كان الزر يخص اللغة الحالية
        if (btn.getAttribute('onclick') && btn.getAttribute('onclick').includes(`'${lang}'`)) {
            btn.classList.add('active');
        }
    });
}

window.changeLanguage = function(lang) {
    i18next.changeLanguage(lang);
};
