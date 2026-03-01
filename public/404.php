<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../src/php/headers.php';
require_once __DIR__ . '/../src/php/template-partials.php';

http_response_code(404);
send_security_headers();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Page Not Found | Astroyds',
    'The page you are looking for could not be found.',
    '/404'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header(''); ?>

<main id="main-content">

  <section class="relative min-h-[80vh] flex items-center justify-center py-24 bg-[#1a1a2e] text-white overflow-hidden" aria-label="404 error page">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>

    <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

      <!-- SVG space illustration -->
      <div class="mb-10" aria-hidden="true">
        <svg class="mx-auto w-48 h-48 sm:w-56 sm:h-56" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Stars -->
          <circle cx="20" cy="30" r="2" fill="#00d4ff" opacity="0.6"/>
          <circle cx="170" cy="50" r="1.5" fill="#6c63ff" opacity="0.5"/>
          <circle cx="50" cy="160" r="1" fill="#00d4ff" opacity="0.4"/>
          <circle cx="150" cy="140" r="2" fill="#6c63ff" opacity="0.7"/>
          <circle cx="30" cy="100" r="1.5" fill="#00d4ff" opacity="0.3"/>
          <circle cx="180" cy="120" r="1" fill="#6c63ff" opacity="0.6"/>
          <circle cx="90" cy="20" r="1.5" fill="#00d4ff" opacity="0.5"/>
          <circle cx="130" cy="180" r="1" fill="#6c63ff" opacity="0.4"/>
          <!-- Main asteroid -->
          <g transform="translate(100,100)">
            <ellipse cx="0" cy="0" rx="38" ry="34" fill="#2a2a4a" stroke="#6c63ff" stroke-width="1.5" transform="rotate(-15)"/>
            <circle cx="-12" cy="-8" r="6" fill="#1a1a2e" opacity="0.6"/>
            <circle cx="14" cy="5" r="4" fill="#1a1a2e" opacity="0.5"/>
            <circle cx="-4" cy="12" r="3" fill="#1a1a2e" opacity="0.4"/>
            <circle cx="8" cy="-14" r="2.5" fill="#1a1a2e" opacity="0.5"/>
          </g>
          <!-- Small asteroids -->
          <g transform="translate(45,55)">
            <ellipse cx="0" cy="0" rx="10" ry="8" fill="#2a2a4a" stroke="#00d4ff" stroke-width="1" opacity="0.7" transform="rotate(25)"/>
            <circle cx="-2" cy="1" r="2" fill="#1a1a2e" opacity="0.4"/>
          </g>
          <g transform="translate(155,80)">
            <ellipse cx="0" cy="0" rx="7" ry="6" fill="#2a2a4a" stroke="#00d4ff" stroke-width="1" opacity="0.5" transform="rotate(-30)"/>
          </g>
          <!-- Orbit ring -->
          <ellipse cx="100" cy="100" rx="80" ry="25" fill="none" stroke="#6c63ff" stroke-width="0.5" opacity="0.2" transform="rotate(-10, 100, 100)"/>
        </svg>
      </div>

      <!-- 404 text -->
      <h1 class="text-8xl sm:text-9xl font-bold tracking-tighter mb-4" style="font-family:'Times New Roman',Georgia,serif">
        <span class="bg-gradient-to-r from-[#00d4ff] to-[#6c63ff] bg-clip-text text-transparent">404</span>
      </h1>

      <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family:'Times New Roman',Georgia,serif">
        Lost in space?
      </h2>

      <p class="text-lg text-gray-400 max-w-lg mx-auto mb-10 leading-relaxed">
        The page you&rsquo;re looking for has drifted into the void. It may have been moved, deleted, or never existed.
      </p>

      <!-- CTA -->
      <a href="/" class="inline-flex items-center gap-2 px-8 py-4 bg-[#6c63ff] text-white font-semibold rounded-xl transition-all duration-300 hover:bg-[#5a52e0] hover:shadow-lg hover:shadow-[#6c63ff]/25 hover:-translate-y-0.5">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"/>
        </svg>
        Return Home
      </a>

      <!-- Helpful links -->
      <div class="mt-16 pt-10 border-t border-white/10">
        <p class="text-sm text-gray-500 mb-4">Or try one of these pages:</p>
        <nav class="flex flex-wrap justify-center gap-4 text-sm" aria-label="Helpful links">
          <a href="/about" class="text-[#00d4ff] hover:underline">About</a>
          <a href="/research" class="text-[#00d4ff] hover:underline">Research</a>
          <a href="/safety" class="text-[#00d4ff] hover:underline">Responsible AI</a>
          <a href="/contact" class="text-[#00d4ff] hover:underline">Contact</a>
        </nav>
      </div>

    </div>
  </section>

</main>

<?php render_footer(); ?>

<script src="/src/js/main.js" defer></script>
<script src="/src/js/analytics.js" defer></script>

</body>
</html>
