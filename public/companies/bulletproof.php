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
    'BulletPROOF | Astroyds',
    'BulletPROOF — an AI-powered news verification engine that detects misinformation with context-aware signals.',
    '/companies/bulletproof'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('companies'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Companies', 'url' => '/companies'],
      ['label' => 'BulletPROOF', 'url' => '/companies/bulletproof'],
  ]); ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section id="bulletproof-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="BulletPROOF hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="inline-flex items-center gap-3 mb-6">
        <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-[#ff6b6b]/20 text-[#ff6b6b]" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
      </div>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        BulletPROOF
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        AI-powered truth. Verified in real time.
      </p>
    </div>
  </section>

  <!-- ============================================================
       WHAT IS BULLETPROOF?
       ============================================================ -->
  <!-- DRAFT -->
  <section id="what-is-bulletproof" class="py-24 bg-white" aria-labelledby="what-bp-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="what-bp-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          What is BulletPROOF?
        </h2>
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            BulletPROOF is an AI-powered news verification engine that analyses claims,
            articles, and social media posts in real time. By cross-referencing multiple
            authoritative sources and applying context-aware natural language processing,
            BulletPROOF surfaces misinformation before it spreads.
          </p>
          <p>
            Rather than a simple true/false binary, BulletPROOF produces nuanced confidence
            scores alongside detailed evidence trails. Every verdict is explainable and
            auditable — giving journalists, platforms, and readers the tools they need to
            make informed decisions.
          </p>
          <p>
            Designed as an API-first platform, BulletPROOF integrates seamlessly into
            newsrooms, social media pipelines, and content moderation workflows. Its modular
            architecture allows organisations to customise detection signals for their
            specific domain and audience.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       ARCHITECTURE DIAGRAM
       ============================================================ -->
  <!-- DRAFT -->
  <section id="architecture" class="py-24 bg-[#fafafa]" aria-labelledby="arch-heading">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="arch-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Verification Pipeline
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          From raw input to verified verdict — how BulletPROOF processes claims.
        </p>
      </div>

      <div class="scroll-animate" role="img" aria-label="BulletPROOF verification pipeline: news input flows through claim extraction, multi-source analysis, signal detection, to verified verdict">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-2">
          <!-- Input -->
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 border-2 border-[#ff6b6b]/30 text-sm font-semibold text-gray-700">
              News Input
            </div>
          </div>
          <div class="text-[#ff6b6b] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Claim Extraction -->
          <div class="flex flex-col items-center gap-2 min-w-[130px]">
            <div class="w-32 h-20 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 border-2 border-[#ff6b6b]/30 text-sm font-semibold text-gray-700 text-center px-2">
              Claim Extraction
            </div>
          </div>
          <div class="text-[#ff6b6b] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Analysis -->
          <div class="flex flex-col items-center gap-2 min-w-[130px]">
            <div class="w-32 h-20 flex items-center justify-center rounded-xl bg-[#ff6b6b]/20 border-2 border-[#ff6b6b] text-sm font-bold text-[#ff6b6b] text-center px-2">
              Multi-Source Analysis
            </div>
          </div>
          <div class="text-[#ff6b6b] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Signals -->
          <div class="flex flex-col items-center gap-2 min-w-[130px]">
            <div class="w-32 h-20 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 border-2 border-[#ff6b6b]/30 text-sm font-semibold text-gray-700 text-center px-2">
              Signal Detection
            </div>
          </div>
          <div class="text-[#ff6b6b] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Verdict -->
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 border-2 border-[#ff6b6b]/30 text-sm font-semibold text-gray-700">
              Verdict
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       KEY FEATURES
       ============================================================ -->
  <!-- DRAFT -->
  <section id="features" class="py-24 bg-white" aria-labelledby="features-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="features-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Key Features
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Real-Time Verification -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Real-Time Verification feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Real-Time Verification</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Analyse claims in milliseconds as they emerge — staying ahead of viral
            misinformation cycles.
          </p>
        </article>

        <!-- Context-Aware -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Context-Aware feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Context-Aware</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Goes beyond keyword matching — understanding nuance, satire, and context
            to reduce false positives.
          </p>
        </article>

        <!-- Multi-Source Analysis -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Multi-Source Analysis feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Multi-Source Analysis</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Cross-references claims against hundreds of authoritative sources, databases,
            and fact-checking organisations.
          </p>
        </article>

        <!-- Bias Detection -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Bias Detection feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Bias Detection</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Identifies framing bias, emotional manipulation, and misleading headlines —
            surfacing the full picture.
          </p>
        </article>

        <!-- API-First -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="API-First feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">API-First</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            RESTful and GraphQL APIs make integration effortless — from newsroom CMSs
            to social media moderation pipelines.
          </p>
        </article>

        <!-- Transparency Reports -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Transparency Reports feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Transparency Reports</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Every verdict includes a full evidence trail and methodology disclosure —
            building trust through radical openness.
          </p>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       USE CASES
       ============================================================ -->
  <!-- DRAFT -->
  <section id="use-cases" class="py-24 bg-[#fafafa]" aria-labelledby="usecases-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="usecases-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Use Cases
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          Real-world applications of AI-powered news verification.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Use Case 1 — Newsrooms -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl" aria-label="Newsroom verification use case">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Newsroom Verification</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Journalists can verify claims and sources in real time during breaking news,
            reducing the risk of publishing unverified information under deadline pressure.
          </p>
        </article>

        <!-- Use Case 2 — Social Platforms -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl" aria-label="Social platform moderation use case">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Platform Moderation</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Social media platforms can integrate BulletPROOF to flag potentially misleading
            posts, adding context labels and source links before content goes viral.
          </p>
        </article>

        <!-- Use Case 3 — Public Health -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl" aria-label="Public health monitoring use case">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#ff6b6b]/10 text-[#ff6b6b] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Public Health Monitoring</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Health agencies can track and counter medical misinformation in real time,
            protecting communities from dangerous false claims during health crises.
          </p>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       RESEARCH REFERENCES
       ============================================================ -->
  <!-- DRAFT -->
  <section id="research" class="py-24 bg-white" aria-labelledby="research-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="research-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Research References
        </h2>
        <ul class="space-y-6" role="list" aria-label="Research papers">
          <li class="border-l-4 border-[#ff6b6b] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Automated Fact-Checking: A Survey of Methods and Datasets</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2025. <em>Journal of AI and Society</em>.</p>
          </li>
          <li class="border-l-4 border-[#ff6b6b] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Context-Aware Misinformation Detection in Social Media Streams</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2024. <em>Proceedings of ACL</em>.</p>
          </li>
          <li class="border-l-4 border-[#ff6b6b] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Bias and Framing in Digital News: Computational Approaches</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2024. <em>arXiv preprint</em>.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section id="bulletproof-cta" class="py-20 bg-[#1a1a2e] text-white text-center" aria-label="BulletPROOF call to action">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Ready to explore BulletPROOF?
      </h2>
      <p class="text-gray-300 mb-8 max-w-xl mx-auto">
        Bring AI-powered truth verification to your platform.
      </p>
      <a href="#" class="inline-block px-8 py-4 rounded-full bg-[#ff6b6b] text-white font-semibold text-lg hover:bg-[#ff6b6b]/90 transition-colors" aria-label="Visit BulletPROOF external site">
        Visit BulletPROOF
      </a>
    </div>
  </section>

</main>

<?php render_footer(); ?>
<?php render_cookie_consent(); ?>
<?php render_chat_widget(); ?>

<script src="/src/js/main.js" defer></script>
<script src="/src/js/analytics.js" defer></script>

</body>
</html>
