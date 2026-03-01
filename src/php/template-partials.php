<?php

declare(strict_types=1);

/**
 * Template partials for Astroyds site.
 *
 * Provides functions that echo reusable HTML sections:
 *   render_head()           – full <head> block
 *   render_header()         – site header / navigation
 *   render_footer()         – site footer
 *   render_cookie_consent() – GDPR cookie banner
 *   render_chat_widget()    – floating support chat placeholder
 *   render_breadcrumbs()    – breadcrumb nav with Schema.org markup
 *
 * Assumes config.php has already been included so config() is available.
 */

// ── Helpers ─────────────────────────────────────────────────────────────────

/**
 * Escape a string for safe HTML output.
 */
function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// ── 1. render_head() ────────────────────────────────────────────────────────

/**
 * Output the full <head> section.
 *
 * @param string $title         Page title.
 * @param string $description   Meta description.
 * @param string $canonical_path Canonical path (e.g. "/" or "/about").
 * @param string $og_image       Path to the Open Graph image.
 */
function render_head(
    string $title,
    string $description,
    string $canonical_path = '/',
    string $og_image = '/src/assets/svg/og-default.svg'
): void {
    $base_url  = config('base_url') ?? 'https://astroyds.com';
    $site_name = config('site_name') ?? 'Astroyds';
    $canonical = rtrim($base_url, '/') . '/' . ltrim($canonical_path, '/');
    $og_img    = rtrim($base_url, '/') . '/' . ltrim($og_image, '/');

    $title       = esc($title);
    $description = esc($description);
    $canonical   = esc($canonical);
    $og_img      = esc($og_img);
    $site_name   = esc($site_name);

    // Inline critical CSS — loaded from file when available, otherwise a
    // sensible default is embedded so the page never ships without styles.
    $critical_css = '';
    $critical_path = dirname(__DIR__) . '/css/critical.css';
    if (file_exists($critical_path) && is_readable($critical_path)) {
        $contents = file_get_contents($critical_path);
        if ($contents !== false) {
            $critical_css = $contents;
        }
    }

    // Clarity tracking ID
    $clarity_id = esc(config('clarity_tracking_id') ?? '');
    $enable_clarity = config('enable_clarity');

    // Schema.org Organization JSON-LD
    $schema = json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => config('site_name') ?? 'Astroyds',
        'url'         => $base_url,
        'logo'        => rtrim($base_url, '/') . '/src/assets/svg/og-default.svg',
        'description' => config('tagline') ?? '',
        'contactPoint' => [
            '@type'       => 'ContactPoint',
            'email'       => config('contact_email') ?? 'letstalk@astroyds.com',
            'contactType' => 'customer support',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);

    echo <<<HEAD
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{$title}</title>
<meta name="description" content="{$description}">

<!-- Open Graph -->
<meta property="og:title" content="{$title}">
<meta property="og:description" content="{$description}">
<meta property="og:image" content="{$og_img}">
<meta property="og:url" content="{$canonical}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{$site_name}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{$title}">
<meta name="twitter:description" content="{$description}">
<meta name="twitter:image" content="{$og_img}">

<!-- Canonical -->
<link rel="canonical" href="{$canonical}">

<!-- Preload Inter font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"></noscript>

<!-- Inline critical CSS -->
<style>{$critical_css}</style>

<!-- Main stylesheet (async) -->
<link rel="stylesheet" href="/src/css/main.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="/src/css/main.css"></noscript>

<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Favicons -->
<link rel="icon" href="/public/icons/favicon.ico" sizes="any">
<link rel="icon" href="/public/icons/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/public/icons/apple-touch-icon.png">
<link rel="manifest" href="/manifest.webmanifest">

<!-- Schema.org Organization -->
<script type="application/ld+json">{$schema}</script>

<!-- Font display swap -->
<style>
@font-face{font-family:'Inter';font-display:swap;src:local('Inter')}
</style>

<!-- Reduced-motion preferences -->
<style>
@media(prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms!important;animation-iteration-count:1!important;transition-duration:0.01ms!important;scroll-behavior:auto!important}}
</style>

HEAD;

    // Microsoft Clarity — only when enabled
    if ($enable_clarity && $clarity_id !== '') {
        echo <<<CLARITY
<!-- Microsoft Clarity -->
<script>
(function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y)})(window,document,"clarity","script","{$clarity_id}");
</script>

CLARITY;
    }

    echo "</head>\n";
}

// ── 2. render_header() ──────────────────────────────────────────────────────

/**
 * Output the site header and navigation.
 *
 * @param string $current_page Slug of the active page (home|about|companies|research|blog|contact).
 */
function render_header(string $current_page = 'home'): void
{
    $pages = [
        'home'      => ['label' => 'Home',      'href' => '/'],
        'about'     => ['label' => 'About',     'href' => '/about'],
        'companies' => ['label' => 'Companies', 'href' => '/companies'],
        'research'  => ['label' => 'Research',  'href' => '/research'],
        'blog'      => ['label' => 'Blog',      'href' => '/blog'],
        'contact'   => ['label' => 'Contact',   'href' => '/contact'],
    ];

    $languages = [
        ['code' => 'en', 'label' => 'English',    'active' => true],
        ['code' => 'es', 'label' => 'Spanish',    'active' => false],
        ['code' => 'fr', 'label' => 'French',     'active' => false],
        ['code' => 'ja', 'label' => 'Japanese',   'active' => false],
        ['code' => 'zh', 'label' => 'Chinese',    'active' => false],
        ['code' => 'pt', 'label' => 'Portuguese', 'active' => false],
        ['code' => 'de', 'label' => 'German',     'active' => false],
        ['code' => 'it', 'label' => 'Italian',    'active' => false],
        ['code' => 'ar', 'label' => 'Arabic',     'active' => false],
    ];

    // Build nav links
    $nav_links = '';
    foreach ($pages as $slug => $page) {
        $active_class = ($slug === $current_page)
            ? 'text-[#00d4ff] border-b-2 border-[#00d4ff]'
            : 'text-[#fafafa] hover:text-[#00d4ff]';
        $aria = ($slug === $current_page) ? ' aria-current="page"' : '';
        $href  = esc($page['href']);
        $label = esc($page['label']);
        $nav_links .= "<a href=\"{$href}\" class=\"px-3 py-2 text-sm font-medium transition-colors duration-200 {$active_class}\"{$aria}>{$label}</a>\n";
    }

    // Build mobile nav links
    $mobile_links = '';
    foreach ($pages as $slug => $page) {
        $active_class = ($slug === $current_page)
            ? 'text-[#00d4ff] bg-[#00d4ff]/10'
            : 'text-[#fafafa] hover:text-[#00d4ff] hover:bg-white/5';
        $aria = ($slug === $current_page) ? ' aria-current="page"' : '';
        $href  = esc($page['href']);
        $label = esc($page['label']);
        $mobile_links .= "<a href=\"{$href}\" class=\"block px-4 py-3 rounded-lg text-base font-medium transition-colors duration-200 {$active_class}\"{$aria}>{$label}</a>\n";
    }

    // Build language dropdown items
    $lang_items = '';
    foreach ($languages as $lang) {
        $label = esc($lang['label']);
        if ($lang['active']) {
            $lang_items .= "<li><span class=\"block px-4 py-2 text-sm text-[#00d4ff] font-semibold\">{$label} ✓</span></li>\n";
        } else {
            $lang_items .= "<li><span class=\"block px-4 py-2 text-sm text-gray-400 cursor-default\" aria-disabled=\"true\">{$label} <span class=\"ml-1 text-xs bg-white/10 text-gray-500 rounded px-1.5 py-0.5\">coming soon</span></span></li>\n";
        }
    }

    echo <<<HEADER
<header class="sticky top-0 z-50 bg-[#1a1a2e]/95 backdrop-blur-md border-b border-white/10" role="banner">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-2 group" aria-label="Astroyds home">
        <svg class="h-8 w-8 text-[#00d4ff] transition-transform duration-300 group-hover:scale-110" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <circle cx="16" cy="16" r="14" stroke="currentColor" stroke-width="2"/>
          <circle cx="16" cy="16" r="6" fill="currentColor"/>
          <path d="M16 2V6M16 26V30M2 16H6M26 16H30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <span class="text-xl font-bold text-[#fafafa]" style="font-family:'Times New Roman',Georgia,serif">Astroyds</span>
      </a>

      <!-- Desktop navigation -->
      <nav class="hidden md:flex items-center gap-1" aria-label="Primary navigation">
        {$nav_links}
      </nav>

      <!-- Right section: language + mobile toggle -->
      <div class="flex items-center gap-2">

        <!-- Language selector -->
        <div class="relative" id="ast-lang-wrap">
          <button type="button" id="ast-lang-btn" class="flex items-center gap-1 px-3 py-1.5 text-sm text-[#fafafa] border border-white/20 rounded-lg hover:border-[#00d4ff]/50 transition-colors duration-200" aria-haspopup="true" aria-expanded="false" aria-label="Select language">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg>
            <span>EN</span>
            <svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <ul id="ast-lang-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-[#1a1a2e] border border-white/10 rounded-xl shadow-xl py-2 z-50" role="menu" aria-label="Language options">
            {$lang_items}
          </ul>
        </div>

        <!-- Mobile menu toggle -->
        <button type="button" id="ast-mobile-btn" class="md:hidden p-2 text-[#fafafa] hover:text-[#00d4ff] transition-colors duration-200" aria-expanded="false" aria-controls="ast-mobile-menu" aria-label="Toggle navigation menu">
          <svg id="ast-menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg id="ast-close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <nav id="ast-mobile-menu" class="hidden md:hidden border-t border-white/10 bg-[#1a1a2e]/98 backdrop-blur-md" aria-label="Mobile navigation">
    <div class="px-4 py-4 space-y-1">
      {$mobile_links}
    </div>
  </nav>

  <!-- Header JS -->
  <script>
  (function(){
    /* Language dropdown */
    var lb=document.getElementById('ast-lang-btn'),ld=document.getElementById('ast-lang-dropdown'),lw=document.getElementById('ast-lang-wrap');
    if(lb&&ld){lb.addEventListener('click',function(e){e.stopPropagation();var open=!ld.classList.contains('hidden');ld.classList.toggle('hidden');lb.setAttribute('aria-expanded',String(!open))});document.addEventListener('click',function(e){if(lw&&!lw.contains(e.target)){ld.classList.add('hidden');lb.setAttribute('aria-expanded','false')}})}
    /* Mobile menu */
    var mb=document.getElementById('ast-mobile-btn'),mm=document.getElementById('ast-mobile-menu'),mi=document.getElementById('ast-menu-icon'),ci=document.getElementById('ast-close-icon');
    if(mb&&mm&&mi&&ci){mb.addEventListener('click',function(){var open=mm.classList.contains('hidden');mm.classList.toggle('hidden');mi.classList.toggle('hidden');ci.classList.toggle('hidden');mb.setAttribute('aria-expanded',String(open))})}
  })();
  </script>
</header>

HEADER;
}

// ── 3. render_footer() ──────────────────────────────────────────────────────

/**
 * Output the site footer.
 */
function render_footer(): void
{
    $year  = gmdate('Y');
    $email = esc(config('contact_email') ?? 'letstalk@astroyds.com');

    echo <<<FOOTER
<footer class="bg-[#1a1a2e] border-t border-white/10 text-[#fafafa]" role="contentinfo">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      <!-- Brand -->
      <div>
        <h2 class="text-2xl font-bold mb-2" style="font-family:'Times New Roman',Georgia,serif">Astroyds</h2>
        <p class="text-gray-400 text-sm leading-relaxed">Moving humanity forward for a better future.</p>
        <a href="mailto:{$email}" class="mt-3 inline-block text-sm text-[#00d4ff] hover:underline">{$email}</a>
      </div>

      <!-- Quick links -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-4">Quick Links</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="/about" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">About</a></li>
          <li><a href="/companies" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Companies</a></li>
          <li><a href="/research" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Research</a></li>
          <li><a href="/blog" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Blog</a></li>
          <li><a href="/contact" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Contact</a></li>
          <li><a href="/privacy" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Privacy</a></li>
          <li><a href="/terms" class="text-gray-300 hover:text-[#00d4ff] transition-colors duration-200">Terms</a></li>
        </ul>
      </div>

      <!-- Social & legal -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-4">Connect</h3>
        <div class="flex gap-4 mb-6">
          <!-- LinkedIn -->
          <a href="#" class="text-gray-400 hover:text-[#00d4ff] transition-colors duration-200" aria-label="LinkedIn">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.27c-.97 0-1.75-.79-1.75-1.76s.78-1.76 1.75-1.76 1.75.79 1.75 1.76-.78 1.76-1.75 1.76zm13.5 11.27h-3v-5.6c0-3.37-4-3.12-4 0v5.6h-3v-10h3v1.77c1.4-2.59 7-2.78 7 2.48v5.75z"/></svg>
          </a>
          <!-- Twitter / X -->
          <a href="#" class="text-gray-400 hover:text-[#00d4ff] transition-colors duration-200" aria-label="Twitter">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <!-- GitHub -->
          <a href="#" class="text-gray-400 hover:text-[#00d4ff] transition-colors duration-200" aria-label="GitHub">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.333-1.754-1.333-1.754-1.089-.745.083-.729.083-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
          </a>
        </div>
        <div class="text-xs text-gray-500 space-y-1">
          <p><a href="/privacy" class="hover:text-[#00d4ff] transition-colors duration-200">Privacy Policy</a> · <a href="/terms" class="hover:text-[#00d4ff] transition-colors duration-200">Terms of Use</a></p>
        </div>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="mt-10 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
      <p>&copy; {$year} Astroyds. All rights reserved.</p>
      <p>Built with care by Astroyds</p>
    </div>
  </div>
</footer>

FOOTER;
}

// ── 4. render_cookie_consent() ──────────────────────────────────────────────

/**
 * Output a cookie-consent banner.
 * Consent preference is stored in localStorage. The banner auto-hides if
 * the user has already accepted.
 */
function render_cookie_consent(): void
{
    echo <<<'COOKIES'
<div id="ast-cookie-banner" class="fixed bottom-0 inset-x-0 z-[60] transition-transform duration-500 translate-y-full" role="dialog" aria-label="Cookie consent" aria-describedby="ast-cookie-msg">
  <div class="max-w-4xl mx-auto px-4 pb-4">
    <div class="bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
      <p id="ast-cookie-msg" class="text-sm text-gray-300 flex-1 leading-relaxed">
        We use cookies and <strong class="text-[#fafafa]">Microsoft Clarity</strong> analytics to understand how visitors interact with our site and improve your experience.
        Read our <a href="/privacy" class="text-[#00d4ff] underline hover:text-[#6c63ff] transition-colors duration-200">privacy policy</a> for details.
      </p>
      <div class="flex gap-3 shrink-0">
        <button type="button" id="ast-cookie-decline" class="px-4 py-2 text-sm rounded-lg border border-white/20 text-gray-400 hover:text-[#fafafa] hover:border-white/40 transition-colors duration-200">Decline</button>
        <button type="button" id="ast-cookie-accept" class="px-4 py-2 text-sm rounded-lg bg-[#00d4ff] text-[#1a1a2e] font-semibold hover:bg-[#00d4ff]/90 transition-colors duration-200">Accept</button>
      </div>
    </div>
  </div>
</div>

<script>
(function(){
  var banner=document.getElementById('ast-cookie-banner');
  if(!banner)return;
  var pref=localStorage.getItem('ast_cookie_consent');
  if(pref==='accepted'||pref==='declined'){return}
  requestAnimationFrame(function(){banner.classList.remove('translate-y-full');banner.classList.add('translate-y-0')});
  document.getElementById('ast-cookie-accept').addEventListener('click',function(){localStorage.setItem('ast_cookie_consent','accepted');hide()});
  document.getElementById('ast-cookie-decline').addEventListener('click',function(){localStorage.setItem('ast_cookie_consent','declined');hide()});
  function hide(){banner.classList.remove('translate-y-0');banner.classList.add('translate-y-full')}
})();
</script>

COOKIES;
}

// ── 5. render_chat_widget() ─────────────────────────────────────────────────

/**
 * Output a floating support-chat placeholder widget (bottom-right).
 */
function render_chat_widget(): void
{
    echo <<<'CHAT'
<div id="ast-chat-widget" class="fixed bottom-6 right-6 z-50">
  <!-- Toggle button -->
  <button type="button" id="ast-chat-toggle" class="h-14 w-14 rounded-full bg-[#00d4ff] text-[#1a1a2e] shadow-lg flex items-center justify-center hover:bg-[#00d4ff]/90 transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#00d4ff]/50 focus:ring-offset-2 focus:ring-offset-[#1a1a2e]" aria-label="Open support chat" aria-expanded="false" aria-controls="ast-chat-panel">
    <svg id="ast-chat-open-icon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
    <svg id="ast-chat-close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/></svg>
  </button>

  <!-- Chat panel -->
  <div id="ast-chat-panel" class="hidden absolute bottom-[4.5rem] right-0 w-80 bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl overflow-hidden" role="dialog" aria-label="Support chat">
    <div class="bg-[#00d4ff] px-5 py-3 flex items-center justify-between">
      <h3 class="text-sm font-semibold text-[#1a1a2e]" style="font-family:'Times New Roman',Georgia,serif">Astroyds Support</h3>
      <button type="button" id="ast-chat-close-btn" class="text-[#1a1a2e]/70 hover:text-[#1a1a2e] transition-colors duration-200" aria-label="Close chat">
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="px-5 py-8 text-center">
      <svg class="mx-auto h-10 w-10 text-[#6c63ff] mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
      <p class="text-[#fafafa] font-semibold mb-1">Support coming soon</p>
      <p class="text-gray-400 text-sm">Our AI chat assistant is under development. In the meantime, reach out at <a href="mailto:letstalk@astroyds.com" class="text-[#00d4ff] hover:underline">letstalk@astroyds.com</a>.</p>
    </div>
  </div>
</div>

<style>
#ast-chat-panel.ast-chat-enter{animation:ast-chat-in .25s ease-out}
@keyframes ast-chat-in{from{opacity:0;transform:translateY(12px) scale(.95)}to{opacity:1;transform:translateY(0) scale(1)}}
@media(prefers-reduced-motion:reduce){#ast-chat-panel.ast-chat-enter{animation:none}}
</style>

<script>
(function(){
  var tog=document.getElementById('ast-chat-toggle'),panel=document.getElementById('ast-chat-panel'),oi=document.getElementById('ast-chat-open-icon'),ci=document.getElementById('ast-chat-close-icon'),cb=document.getElementById('ast-chat-close-btn');
  function toggle(){var open=panel.classList.contains('hidden');panel.classList.toggle('hidden');if(open){panel.classList.add('ast-chat-enter')}else{panel.classList.remove('ast-chat-enter')}oi.classList.toggle('hidden');ci.classList.toggle('hidden');tog.setAttribute('aria-expanded',String(open))}
  if(tog){tog.addEventListener('click',toggle)}
  if(cb){cb.addEventListener('click',toggle)}
})();
</script>

CHAT;
}

// ── 6. render_breadcrumbs() ─────────────────────────────────────────────────

/**
 * Output breadcrumb navigation with Schema.org BreadcrumbList markup.
 *
 * @param array<int, array{label: string, url: string}> $items Breadcrumb items.
 */
function render_breadcrumbs(array $items): void
{
    if (empty($items)) {
        return;
    }

    $base_url = config('base_url') ?? 'https://astroyds.com';
    $count    = count($items);

    // Build Schema.org JSON-LD
    $list_items = [];
    foreach ($items as $i => $item) {
        $list_items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['label'],
            'item'     => rtrim($base_url, '/') . '/' . ltrim($item['url'], '/'),
        ];
    }

    $schema = json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $list_items,
    ], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);

    echo "<script type=\"application/ld+json\">{$schema}</script>\n";
    echo "<nav class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3\" aria-label=\"Breadcrumb\">\n";
    echo "  <ol class=\"flex flex-wrap items-center gap-1 text-sm text-gray-400\">\n";

    foreach ($items as $i => $item) {
        $label = esc($item['label']);
        $url   = esc($item['url']);
        $is_last = ($i === $count - 1);

        if ($is_last) {
            echo "    <li aria-current=\"page\"><span class=\"text-[#fafafa] font-medium\">{$label}</span></li>\n";
        } else {
            echo "    <li class=\"flex items-center gap-1\">";
            echo "<a href=\"{$url}\" class=\"hover:text-[#00d4ff] transition-colors duration-200\">{$label}</a>";
            echo "<svg class=\"h-3.5 w-3.5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path stroke-linecap=\"round\" d=\"M9 5l7 7-7 7\"/></svg>";
            echo "</li>\n";
        }
    }

    echo "  </ol>\n";
    echo "</nav>\n";
}
