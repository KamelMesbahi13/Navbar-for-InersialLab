<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

add_action('wp_head', 'inersialab_inject_styles');
function inersialab_inject_styles() {
    if (is_admin()) return;
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
    :root {
        --inersia-bg-dark: #F0F4F8; 
        --inersia-bg-drawer: #0D1B2A; 
        --inersia-primary-orange: #F46036; 
        --inersia-orange-hover: #FF8C61; 
        --inersia-white: #ffffff; 
        --inersia-steel-mist: #5A8AAA; 
        --inersia-border-color: rgba(30, 58, 95, 0.12); 
        --inersia-font-main: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        --inersia-transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
    }
    @media (min-width: 992px) {
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active), 
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active) a, 
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active) button,
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active) [role="button"] {
            cursor: none !important;
        }
    }
    body.elementor-editor-active *,
    body.et-fb-active *,
    body.fl-builder-active * {
        cursor: auto !important;
    }
    .inersia-cursor {
        width: 8px;
        height: 8px;
        background-color: var(--inersia-primary-orange);
        position: fixed;
        top: 0;
        left: 0;
        border-radius: 50%;
        pointer-events: none;
        z-index: 999999999 !important;
        transform: translate(-50%, -50%);
        transition: width 0.2s, height 0.2s, background-color 0.2s;
        will-change: transform;
        display: none;
    }
    .inersia-cursor-ring {
        width: 44px;
        height: 44px;
        border: 1.5px solid var(--inersia-primary-orange);
        position: fixed;
        top: 0;
        left: 0;
        border-radius: 50%;
        pointer-events: none;
        z-index: 999999998 !important;
        transform: translate(-50%, -50%);
        opacity: 0.8;
        transition: width 0.3s cubic-bezier(0.215, 0.61, 0.355, 1), 
                    height 0.3s cubic-bezier(0.215, 0.61, 0.355, 1), 
                    border-color 0.3s, 
                    background-color 0.3s, 
                    opacity 0.3s;
        will-change: transform;
        display: none;
    }
    @media (min-width: 992px) {
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active) .inersia-cursor,
        body.inersia-mouse-active:not(.elementor-editor-active):not(.et-fb-active):not(.fl-builder-active) .inersia-cursor-ring {
            display: block;
        }
    }
    .inersia-cursor.hovered {
        width: 4px;
        height: 4px;
        background-color: var(--inersia-white);
    }
    .inersia-cursor-ring.hovered {
        width: 60px;
        height: 60px;
        border-color: var(--inersia-primary-orange);
        background-color: rgba(244, 96, 54, 0.15);
        opacity: 1;
    }
    .inersia-site-header {
        position: fixed;
        top: 0;
        left: 0 !important;
        transform: none !important;
        width: 100% !important;
        max-width: none;
        height: 90px;
        z-index: 990;
        background: transparent !important;
        backdrop-filter: blur(0px) !important;
        -webkit-backdrop-filter: blur(0px) !important;
        border: none !important;
        border-bottom: 1.5px solid transparent !important;
        border-radius: 0 !important;
        display: flex;
        align-items: center;
        font-family: var(--inersia-font-main);
        box-shadow: none !important;
        transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .inersia-site-header.scrolled {
        height: 75px;
        background: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(16px) !important;
        -webkit-backdrop-filter: blur(16px) !important;
        border-bottom: 1.5px solid var(--inersia-border-color) !important;
        border-radius: 0 !important;
        box-shadow: 0 10px 30px rgba(13, 27, 42, 0.06) !important;
    }
    .inersia-header-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .inersia-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }
    .inersia-logo-img {
        height: 48px;
        display: block;
        object-fit: contain;
        transition: height 0.35s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .inersia-site-header.scrolled .inersia-logo-img {
        height: 40px;
    }
    .inersia-desktop-nav {
        display: flex;
        align-items: center;
    }
    .inersia-desktop-nav ul {
        display: flex;
        list-style: none;
        gap: 36px;
        margin: 0;
        padding: 0;
    }
    .inersia-desktop-nav a {
        text-decoration: none;
        color: #0D1B2A !important; 
        font-size: 15px;
        font-weight: 400;
        transition: var(--inersia-transition);
        position: relative;
        padding: 6px 0;
    }
    .inersia-site-header.scrolled .inersia-desktop-nav a {
        color: #0D1B2A !important;
    }
    .inersia-desktop-nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--inersia-primary-orange) !important;
        transition: var(--inersia-transition);
    }
    .inersia-desktop-nav a:hover {
        color: var(--inersia-primary-orange) !important;
    }
    .inersia-desktop-nav a:hover::after {
        width: 100%;
    }
    .inersia-header-actions {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .inersia-btn-cta {
        display: inline-block;
        padding: 10px 24px;
        background-color: var(--inersia-primary-orange) !important;
        color: var(--inersia-white) !important;
        font-weight: 400;
        font-size: 15px;
        text-decoration: none;
        border-radius: 50px;
        transition: var(--inersia-transition);
        border: 1px solid transparent !important;
        box-shadow: none !important;
    }
    .inersia-btn-cta:hover {
        background-color: var(--inersia-orange-hover) !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(244, 96, 54, 0.3) !important;
    }
    .inersia-hamburger-menu {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 28px !important;
        height: 18px !important;
        background: transparent !important;
        border: none !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
        outline: none !important;
        border-radius: 0 !important;
        z-index: 1001;
        cursor: pointer;
    }
    .inersia-hamburger-menu .inersia-bar {
        width: 100% !important;
        height: 2px !important;
        background-color: #0D1B2A !important; 
        border-radius: 2px !important;
        transition: var(--inersia-transition) !important;
    }
    .inersia-site-header.scrolled .inersia-hamburger-menu .inersia-bar {
        background-color: #0D1B2A !important;
    }
    .inersia-hamburger-menu.active .inersia-bar {
        background-color: var(--inersia-white) !important;
    }
    .inersia-hamburger-menu.active .line-top {
        transform: translateY(8px) rotate(45deg) !important;
    }
    .inersia-hamburger-menu.active .line-mid {
        opacity: 0 !important;
    }
    .inersia-hamburger-menu.active .line-bot {
        transform: translateY(-8px) rotate(-45deg) !important;
    }
    .inersia-nav-drawer {
        position: fixed;
        top: 0;
        left: 50% !important;
        width: 100vw !important;
        height: 100vh !important;
        background-color: #ffffff; 
        z-index: 1000;
        transform: translate(-50%, -100%) !important; 
        visibility: hidden;
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s;
        overflow: hidden;
        font-family: var(--inersia-font-main);
    }
    .inersia-nav-drawer.open {
        transform: translate(-50%, 0) !important; 
        visibility: visible;
    }
    .inersia-nav-drawer-container {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 24px;
    }
    .inersia-nav-drawer-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .inersia-drawer-close {
        width: 44px !important;
        height: 44px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent !important;
        border: none !important; 
        padding: 0 !important;
        box-shadow: none !important;
        cursor: pointer;
        transition: var(--inersia-transition);
    }
    .inersia-drawer-close:hover {
        background: transparent !important;
        transform: rotate(90deg);
    }
    .inersia-close-icon {
        width: 28px;
        height: 28px;
    }
    .inersia-mobile-nav {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
    }
    .inersia-mobile-nav ul {
        list-style: none;
        text-align: center;
        margin: 0;
        padding: 0;
    }
    .inersia-mobile-nav li {
        margin: 24px 0; 
        overflow: hidden;
    }
    .inersia-mobile-nav ul a {
        display: block;
        font-family: var(--inersia-font-main) !important; 
        font-size: 20px; 
        font-weight: 400; 
        color: #0D1B2A !important; 
        text-decoration: none;
        transition: var(--inersia-transition);
        opacity: 0;
        transform: translateY(30px);
    }
    .inersia-nav-drawer.open .inersia-mobile-nav ul a {
        opacity: 1;
        transform: translateY(0);
    }
    .inersia-nav-drawer.open .inersia-mobile-nav li:nth-child(1) a { transition-delay: 0.1s; }
    .inersia-nav-drawer.open .inersia-mobile-nav li:nth-child(2) a { transition-delay: 0.15s; }
    .inersia-nav-drawer.open .inersia-mobile-nav li:nth-child(3) a { transition-delay: 0.2s; }
    .inersia-nav-drawer.open .inersia-mobile-nav li:nth-child(4) a { transition-delay: 0.25s; }
    .inersia-mobile-nav ul a:hover {
        color: var(--inersia-primary-orange) !important; 
        transform: scale(1.05);
    }
    .inersia-btn-cta-large {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 100%;
        max-width: 320px;
        padding: 16px 0;
        background-color: var(--inersia-primary-orange) !important; 
        color: var(--inersia-white) !important; 
        font-family: var(--inersia-font-main) !important;
        font-weight: 400 !important;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border-radius: 8px; 
        border: none !important;
        box-shadow: 0 4px 12px rgba(244, 96, 54, 0.15);
        margin: 32px auto 0 auto;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.35s cubic-bezier(0.25, 1, 0.5, 1), 
                    transform 0.35s cubic-bezier(0.25, 1, 0.5, 1), 
                    background-color 0.35s cubic-bezier(0.25, 1, 0.5, 1), 
                    box-shadow 0.35s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .inersia-nav-drawer.open .inersia-btn-cta-large {
        opacity: 1;
        transform: translateY(0);
        transition-delay: 0.3s;
    }
    .inersia-btn-cta-large:hover {
        background-color: var(--inersia-orange-hover) !important; 
        color: var(--inersia-white) !important;
        box-shadow: 0 4px 20px rgba(244, 96, 54, 0.3);
        transform: scale(1.02);
    }
    @media (max-width: 991px) {
        .inersia-desktop-nav {
            display: none;
        }
        .inersia-hamburger-menu {
            display: flex;
        }
        .inersia-site-header {
            height: 70px;
        }
        .inersia-header-actions .inersia-btn-cta {
            display: none;
        }
    }
    /* RTL adjustments */
    .inersia-site-header[dir="rtl"],
    .inersia-nav-drawer[dir="rtl"] {
        direction: rtl;
    }
    .inersia-site-header[dir="rtl"] .inersia-logo,
    .inersia-nav-drawer[dir="rtl"] .inersia-logo {
        flex-direction: row;
    }
    .inersia-site-header[dir="rtl"] .inersia-desktop-nav a::after {
        left: auto;
        right: 0;
    }
    </style>
    <?php
}

add_action('wp_body_open', 'inersialab_inject_header_html');
function inersialab_inject_header_html() {
    if (is_admin()) return;
    echo inersialab_get_header_markup();
}

function inersialab_get_header_markup() {
    // Detect Arabic from URL
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    $is_arabic = (strpos($request_uri, '/ar/') !== false || preg_match('#/ar$#', $request_uri));
    $dir = $is_arabic ? 'rtl' : 'ltr';

    if ($is_arabic) {
        $nav_services   = 'الخدمات';
        $nav_about      = 'من نحن';
        $nav_portfolio  = 'أعمالنا';
        $nav_contact    = 'اتصل بنا';
        $nav_cta        = 'ابدأ الآن';
        $aria_label     = 'القائمة الرئيسية';
        $close_label    = 'إغلاق القائمة';
        $logo_url       = home_url('/ar/');
        
        $services_link  = '/ar/services/';
        $about_link     = '/ar/about/';
        $portfolio_link = '/ar/portfolio/';
        $contact_link   = '/ar/contact/';
    } else {
        $nav_services   = 'Services';
        $nav_about      = 'À propos';
        $nav_portfolio  = 'Portfolio';
        $nav_contact    = 'Contact';
        $nav_cta        = 'Démarrer';
        $aria_label     = 'Menu principal';
        $close_label    = 'Fermer le menu';
        $logo_url       = home_url('/');
        
        $services_link  = '/services/';
        $about_link     = '/about/';
        $portfolio_link = '/portfolio/';
        $contact_link   = '/contact/';
    }

    ob_start();
    ?>
    <div class="inersia-cursor" id="inersiaCursor"></div>
    <div class="inersia-cursor-ring" id="inersiaCursorRing"></div>
    <header class="inersia-site-header" id="inersiaSiteHeader" dir="<?php echo $dir; ?>">
        <div class="inersia-header-container">
            <a href="<?php echo esc_url($logo_url); ?>" class="inersia-logo">
                <img class="inersia-logo-img" src="https://inersialab.com/wp-content/uploads/2026/06/horizontal_1_png.png" alt="InersiaLab Logo">
            </a>
            <nav class="inersia-desktop-nav">
                <ul>
                    <li><a href="<?php echo esc_url($services_link); ?>"><?php echo esc_html($nav_services); ?></a></li>
                    <li><a href="<?php echo esc_url($about_link); ?>"><?php echo esc_html($nav_about); ?></a></li>
                    <li><a href="<?php echo esc_url($portfolio_link); ?>"><?php echo esc_html($nav_portfolio); ?></a></li>
                    <li><a href="<?php echo esc_url($contact_link); ?>"><?php echo esc_html($nav_contact); ?></a></li>
                </ul>
            </nav>
            <div class="inersia-header-actions">
                <a href="<?php echo esc_url($contact_link); ?>" class="inersia-btn-cta"><?php echo esc_html($nav_cta); ?></a>
                <button class="inersia-hamburger-menu" id="inersiaHamburgerBtn" aria-label="<?php echo esc_attr($aria_label); ?>">
                    <span class="inersia-bar line-top"></span>
                    <span class="inersia-bar line-mid"></span>
                    <span class="inersia-bar line-bot"></span>
                </button>
            </div>
        </div>
    </header>
    <div class="inersia-nav-drawer" id="inersiaNavDrawer" dir="<?php echo $dir; ?>">
        <div class="inersia-nav-drawer-container">
            <div class="inersia-nav-drawer-header">
                <a href="<?php echo esc_url($logo_url); ?>" class="inersia-logo">
                    <img class="inersia-logo-img" src="https://inersialab.com/wp-content/uploads/2026/06/cropped-icon_orange_png.png" alt="InersiaLab Logo">
                </a>
                <button class="inersia-drawer-close" id="inersiaDrawerCloseBtn" aria-label="<?php echo esc_attr($close_label); ?>">
                    <svg class="inersia-close-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6L18 18" stroke="#0D1B2A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <nav class="inersia-mobile-nav">
                <ul>
                    <li><a href="<?php echo esc_url($services_link); ?>"><?php echo esc_html($nav_services); ?></a></li>
                    <li><a href="<?php echo esc_url($about_link); ?>"><?php echo esc_html($nav_about); ?></a></li>
                    <li><a href="<?php echo esc_url($portfolio_link); ?>"><?php echo esc_html($nav_portfolio); ?></a></li>
                    <li><a href="<?php echo esc_url($contact_link); ?>"><?php echo esc_html($nav_contact); ?></a></li>
                </ul>
                <a href="<?php echo esc_url($contact_link); ?>" class="inersia-btn-cta-large"><?php echo esc_html($nav_cta); ?></a>
            </nav>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('inersialab_header', 'inersialab_header_shortcode');
function inersialab_header_shortcode() {
    return inersialab_get_header_markup();
}

add_action('wp_footer', 'inersialab_inject_scripts');
function inersialab_inject_scripts() {
    if (is_admin()) return;
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburgerBtn   = document.getElementById('inersiaHamburgerBtn');
        const navDrawer      = document.getElementById('inersiaNavDrawer');
        const drawerCloseBtn = document.getElementById('inersiaDrawerCloseBtn');
        const drawerLinks    = document.querySelectorAll('.inersia-mobile-nav a');
        const siteHeader     = document.getElementById('inersiaSiteHeader');

        const toggleScrollLock = (lock) => { document.body.style.overflow = lock ? 'hidden' : ''; };
        const openDrawer  = () => { navDrawer.classList.add('open');    hamburgerBtn.classList.add('active');    toggleScrollLock(true);  };
        const closeDrawer = () => { navDrawer.classList.remove('open'); hamburgerBtn.classList.remove('active'); toggleScrollLock(false); };

        if (hamburgerBtn && navDrawer) {
            hamburgerBtn.addEventListener('click', () => navDrawer.classList.contains('open') ? closeDrawer() : openDrawer());
        }
        if (drawerCloseBtn) drawerCloseBtn.addEventListener('click', closeDrawer);
        drawerLinks.forEach(link => link.addEventListener('click', closeDrawer));
        if (navDrawer) navDrawer.addEventListener('click', (e) => { if (e.target === navDrawer) closeDrawer(); });

        window.addEventListener('scroll', () => {
            siteHeader.classList.toggle('scrolled', window.scrollY > 50);
        });

        const cursor     = document.getElementById('inersiaCursor');
        const cursorRing = document.getElementById('inersiaCursorRing');

        if (cursor && cursorRing) {
            let parentBody = null;
            try { parentBody = window.parent.document.body; } catch(e) {}

            const isEditorContext = () => {
                const editorClasses = ['elementor-editor-active', 'et-fb-active', 'fl-builder-active'];
                return editorClasses.some(cls =>
                    document.body.classList.contains(cls) ||
                    (parentBody && parentBody.classList.contains(cls))
                );
            };

            const shouldDisableCursor = () => window.innerWidth <= 991 || isEditorContext();

            const hideCursor = () => {
                document.body.classList.remove('inersia-mouse-active');
                cursor.style.display     = 'none';
                cursorRing.style.display = 'none';
            };

            const showCursor = () => {
                cursor.style.display     = '';
                cursorRing.style.display = '';
            };

            let mouseX = 0, mouseY = 0;
            let dotX   = 0, dotY   = 0;
            let ringX  = 0, ringY  = 0;
            let isMouseActive = false;

            window.addEventListener('mousemove', (e) => {
                if (shouldDisableCursor()) { hideCursor(); return; }
                showCursor();

                if (!isMouseActive) {
                    document.body.classList.add('inersia-mouse-active');
                    isMouseActive = true;
                    dotX = ringX = mouseX = e.clientX;
                    dotY = ringY = mouseY = e.clientY;
                } else {
                    mouseX = e.clientX;
                    mouseY = e.clientY;
                }
            });

            const animateCursor = () => {
                if (shouldDisableCursor()) {
                    hideCursor();
                    requestAnimationFrame(animateCursor);
                    return;
                }
                showCursor();

                if (isMouseActive) {
                    dotX  += (mouseX - dotX)  * 0.35;
                    dotY  += (mouseY - dotY)  * 0.35;
                    ringX += (mouseX - ringX) * 0.15;
                    ringY += (mouseY - ringY) * 0.15;
                    cursor.style.transform     = `translate3d(${dotX}px, ${dotY}px, 0)`;
                    cursorRing.style.transform = `translate3d(${ringX}px, ${ringY}px, 0)`;
                }
                requestAnimationFrame(animateCursor);
            };
            requestAnimationFrame(animateCursor);

            const hoverTargets = document.querySelectorAll(
                'a, button, input[type="submit"], .inersia-hamburger-menu, .inersia-drawer-close'
            );
            hoverTargets.forEach(el => {
                el.addEventListener('mouseenter', () => { cursor.classList.add('hovered');    cursorRing.classList.add('hovered');    });
                el.addEventListener('mouseleave', () => { cursor.classList.remove('hovered'); cursorRing.classList.remove('hovered'); });
            });

            document.addEventListener('mouseleave', () => {
                document.body.classList.remove('inersia-mouse-active');
                isMouseActive = false;
            });
        }
    });
    </script>
    <?php
}
