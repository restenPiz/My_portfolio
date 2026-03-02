document.addEventListener('DOMContentLoaded', function () {

    // ====== DARK MODE ======
    const toggleBtn = document.getElementById('darkModeToggle');
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    }

    // ====== LANGUAGE SELECTOR ======
    const langBtn = document.getElementById('langBtn');
    const langDropdown = document.getElementById('langDropdown');

    if (langBtn && langDropdown) {
        langBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            langDropdown.classList.toggle('show');
        });

        document.addEventListener('click', function () {
            langDropdown.classList.remove('show');
        });

        langDropdown.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // ====== TRANSLATIONS ======
    const translations = {
        en: {
            nav_home: 'Home',
            nav_about: 'About',
            nav_services: 'Services',
            nav_portfolio: 'Portfolio',
            nav_pricing: 'Pricing',
            nav_experience: 'Experience',
            hero_hello: "Hello I'm",
            hero_role: 'Full Stack Developer',
            hero_btn: 'Hire Me',
            about_sub: 'About',
            about_title: 'Why You Hire Me?',
            services_sub: 'Services',
            services_title: 'Service I Provide',
            portfolio_sub: 'Portfolio',
            portfolio_title: 'Latest Projects',
            pricing_sub: 'Pricing',
            pricing_title: 'Pricing Plans',
            experience_sub: 'Experience',
            experience_title: 'Work Experience',
            contact_title: 'Have Any Project in Mind?',
        },
        pt: {
            nav_home: 'Início',
            nav_about: 'Sobre',
            nav_services: 'Serviços',
            nav_portfolio: 'Portfólio',
            nav_pricing: 'Preços',
            nav_experience: 'Experiência',
            hero_hello: 'Olá, sou',
            hero_role: 'Desenvolvedor Full Stack',
            hero_btn: 'Contrate-me',
            about_sub: 'Sobre',
            about_title: 'Por que me contratar?',
            services_sub: 'Serviços',
            services_title: 'Serviços que Ofereço',
            portfolio_sub: 'Portfólio',
            portfolio_title: 'Projetos Recentes',
            pricing_sub: 'Preços',
            pricing_title: 'Planos de Preços',
            experience_sub: 'Experiência',
            experience_title: 'Experiência Profissional',
            contact_title: 'Tem algum projeto em mente?',
        }
    };

    function applyLanguage(lang) {
        const t = translations[lang];
        if (!t) return;

        // Nav links
        const navLinks = document.querySelectorAll('#nav .nav-item a.page-scroll');
        const navKeys = ['nav_home','nav_about','nav_services','nav_portfolio','nav_pricing','nav_experience'];
        navLinks.forEach((link, i) => {
            if (navKeys[i]) link.childNodes[0].textContent = t[navKeys[i]] + ' ';
        });

        // Hero
        const heroHello = document.querySelector('.header_sub_title');
        if (heroHello) heroHello.textContent = t.hero_hello;

        const heroRole = document.querySelector('.header_hero_content > span');
        if (heroRole) heroRole.textContent = t.hero_role;

        const heroBtn = document.querySelector('.header_hero_content .main-btn');
        if (heroBtn) heroBtn.textContent = t.hero_btn;

        // Sections - sub_title e main_title por seção
        const subTitles = document.querySelectorAll('.sub_title');
        const mainTitles = document.querySelectorAll('.main_title');

        const subKeys = ['about_sub','services_sub','portfolio_sub','pricing_sub','experience_sub'];
        const mainKeys = ['about_title','services_title','portfolio_title','pricing_title','experience_title'];

        subTitles.forEach((el, i) => { if (subKeys[i]) el.textContent = t[subKeys[i]]; });
        mainTitles.forEach((el, i) => { if (mainKeys[i]) el.textContent = t[mainKeys[i]]; });

        // Contact
        const actionTitle = document.querySelector('.action_title');
        if (actionTitle) actionTitle.textContent = t.contact_title;

        // Update active lang in dropdown
        document.querySelectorAll('#langDropdown a').forEach(a => {
            a.classList.toggle('active', a.dataset.lang === lang);
        });

        // Update button label
        if (langBtn) langBtn.querySelector('.lang-label').textContent = lang.toUpperCase();

        localStorage.setItem('lang', lang);
    }

    // Apply saved language
    const savedLang = localStorage.getItem('lang') || 'pt';
    applyLanguage(savedLang);

    // Language click events
    document.querySelectorAll('#langDropdown a').forEach(function (a) {
        a.addEventListener('click', function (e) {
            e.preventDefault();
            applyLanguage(this.dataset.lang);
            langDropdown.classList.remove('show');
        });
    });
});
