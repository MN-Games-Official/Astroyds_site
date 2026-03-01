<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../../src/php/headers.php';
require_once __DIR__ . '/../../src/php/template-partials.php';

send_security_headers();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Our Companies | Astroyds',
    'Explore the Astroyds portfolio — IDLE, RIFT, and BulletPROOF. Building the technologies that shape tomorrow.',
    '/companies'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('companies'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Companies', 'url' => '/companies'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="companies-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Companies hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Our Portfolio
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Building the technologies that shape tomorrow
      </p>
    </div>
  </section>

  <!-- ============================================================
       COMPANY CARDS
       ============================================================ -->
  <!-- DRAFT -->
  <section id="portfolio" class="py-24 bg-white" aria-labelledby="portfolio-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="portfolio-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Our Companies
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          Each venture tackles a critical challenge in AI and technology — responsibly.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- IDLE Card -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 hover:border-[#00d4ff]/40" aria-label="IDLE company card">
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#00d4ff] to-[#00d4ff]/40 rounded-t-2xl" aria-hidden="true"></div>
          <!-- Logo placeholder -->
          <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[#00d4ff]/10 text-[#00d4ff] mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-3">IDLE</h3>
          <!-- DRAFT -->
          <p class="text-gray-600 leading-relaxed mb-6">
            A revolutionary CPU-based alternative to generative AI. High-efficiency models
            tuned for deterministic, controllable outputs.
          </p>
          <ul class="space-y-3 mb-8 text-sm text-gray-500" aria-label="IDLE key features">
            <li class="flex items-start gap-2">
              <span class="text-[#00d4ff] mt-0.5" aria-hidden="true">✦</span>
              CPU-optimized inference engine
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#00d4ff] mt-0.5" aria-hidden="true">✦</span>
              Deterministic, reproducible outputs
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#00d4ff] mt-0.5" aria-hidden="true">✦</span>
              Privacy-preserving edge deployment
            </li>
          </ul>
          <!-- /DRAFT -->
          <a href="/companies/idle" class="inline-flex items-center gap-2 text-[#00d4ff] font-semibold hover:underline transition-colors" aria-label="Explore IDLE">
            Explore IDLE
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

        <!-- RIFT Card -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 hover:border-[#6c63ff]/40" aria-label="RIFT company card">
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#6c63ff] to-[#6c63ff]/40 rounded-t-2xl" aria-hidden="true"></div>
          <!-- Logo placeholder -->
          <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[#6c63ff]/10 text-[#6c63ff] mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-3">RIFT</h3>
          <!-- DRAFT -->
          <p class="text-gray-600 leading-relaxed mb-6">
            A custom programming language built for safe, verifiable AI engineering
            and secure compute.
          </p>
          <ul class="space-y-3 mb-8 text-sm text-gray-500" aria-label="RIFT key features">
            <li class="flex items-start gap-2">
              <span class="text-[#6c63ff] mt-0.5" aria-hidden="true">✦</span>
              Type-safe &amp; memory-safe by design
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#6c63ff] mt-0.5" aria-hidden="true">✦</span>
              Formally verifiable programs
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#6c63ff] mt-0.5" aria-hidden="true">✦</span>
              AI-native primitives &amp; concurrency
            </li>
          </ul>
          <!-- /DRAFT -->
          <a href="/companies/rift" class="inline-flex items-center gap-2 text-[#6c63ff] font-semibold hover:underline transition-colors" aria-label="Explore RIFT">
            Explore RIFT
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

        <!-- BulletPROOF Card -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 hover:border-[#ff6b6b]/40" aria-label="BulletPROOF company card">
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#ff6b6b] to-[#ff6b6b]/40 rounded-t-2xl" aria-hidden="true"></div>
          <!-- Logo placeholder -->
          <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-3">BulletPROOF</h3>
          <!-- DRAFT -->
          <p class="text-gray-600 leading-relaxed mb-6">
            An AI-powered news verification engine that detects misinformation with
            context-aware signals.
          </p>
          <ul class="space-y-3 mb-8 text-sm text-gray-500" aria-label="BulletPROOF key features">
            <li class="flex items-start gap-2">
              <span class="text-[#ff6b6b] mt-0.5" aria-hidden="true">✦</span>
              Real-time misinformation detection
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#ff6b6b] mt-0.5" aria-hidden="true">✦</span>
              Multi-source cross-referencing
            </li>
            <li class="flex items-start gap-2">
              <span class="text-[#ff6b6b] mt-0.5" aria-hidden="true">✦</span>
              Transparent confidence scoring
            </li>
          </ul>
          <!-- /DRAFT -->
          <a href="/companies/bulletproof" class="inline-flex items-center gap-2 text-[#ff6b6b] font-semibold hover:underline transition-colors" aria-label="Explore BulletPROOF">
            Explore BulletPROOF
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

</main>

<?php render_footer(); ?>
<?php render_cookie_consent(); ?>
<?php render_chat_widget(); ?>

<script src="/src/js/main.js" defer></script>
<script src="/src/js/analytics.js" defer></script>

</body>
</html>
