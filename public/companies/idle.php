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
    'IDLE | Astroyds',
    'IDLE — a revolutionary CPU-based alternative to generative AI. High-efficiency models tuned for deterministic, controllable outputs.',
    '/companies/idle'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('companies'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Companies', 'url' => '/companies'],
      ['label' => 'IDLE', 'url' => '/companies/idle'],
  ]); ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section id="idle-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="IDLE hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="inline-flex items-center gap-3 mb-6">
        <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-[#00d4ff]/20 text-[#00d4ff]" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
          </svg>
        </div>
      </div>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        IDLE
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        CPU-native intelligence. Deterministic by design.
      </p>
    </div>
  </section>

  <!-- ============================================================
       WHAT IS IDLE?
       ============================================================ -->
  <!-- DRAFT -->
  <section id="what-is-idle" class="py-24 bg-white" aria-labelledby="what-idle-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="what-idle-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          What is IDLE?
        </h2>
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            IDLE is a next-generation inference platform that runs entirely on standard
            CPUs — no GPUs required. By rethinking the model architecture from the ground
            up, IDLE delivers high-quality, deterministic outputs at a fraction of the
            energy cost of traditional generative AI systems.
          </p>
          <p>
            Unlike probabilistic large language models, IDLE produces controllable and
            reproducible results every time. This makes it ideal for regulated industries,
            safety-critical applications, and edge deployments where consistency and
            auditability are non-negotiable.
          </p>
          <p>
            Built with privacy at its core, IDLE processes data locally without requiring
            cloud connectivity — keeping sensitive information exactly where it belongs.
            From healthcare to embedded systems, IDLE brings intelligent compute to places
            GPUs simply cannot reach.
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
          Architecture
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          A high-level view of the IDLE CPU-based inference pipeline.
        </p>
      </div>

      <div class="scroll-animate" role="img" aria-label="IDLE architecture diagram showing input flowing through tokenizer, CPU inference engine, deterministic decoder, to output">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-2">
          <!-- Input -->
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 border-2 border-[#00d4ff]/30 text-sm font-semibold text-gray-700">
              Input Data
            </div>
          </div>
          <!-- Arrow -->
          <div class="text-[#00d4ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Tokenizer -->
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 border-2 border-[#00d4ff]/30 text-sm font-semibold text-gray-700">
              Tokenizer
            </div>
          </div>
          <!-- Arrow -->
          <div class="text-[#00d4ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- CPU Engine -->
          <div class="flex flex-col items-center gap-2 min-w-[140px]">
            <div class="w-36 h-20 flex items-center justify-center rounded-xl bg-[#00d4ff]/20 border-2 border-[#00d4ff] text-sm font-bold text-[#00d4ff]">
              CPU Inference
            </div>
          </div>
          <!-- Arrow -->
          <div class="text-[#00d4ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Decoder -->
          <div class="flex flex-col items-center gap-2 min-w-[140px]">
            <div class="w-36 h-20 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 border-2 border-[#00d4ff]/30 text-sm font-semibold text-gray-700">
              Deterministic Decoder
            </div>
          </div>
          <!-- Arrow -->
          <div class="text-[#00d4ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Output -->
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 border-2 border-[#00d4ff]/30 text-sm font-semibold text-gray-700">
              Output
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

        <!-- Feature 1 — CPU-Optimized -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="CPU-Optimized feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">CPU-Optimized</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Runs on commodity hardware with no GPU dependencies — lowering cost and
            expanding deployment possibilities.
          </p>
        </article>

        <!-- Feature 2 — Deterministic Outputs -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Deterministic Outputs feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Deterministic Outputs</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Same input, same output — every time. Perfect for auditable, regulated, and
            safety-critical environments.
          </p>
        </article>

        <!-- Feature 3 — Low Power Consumption -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Low Power Consumption feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Low Power Consumption</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Designed for energy efficiency — dramatically reducing the carbon footprint
            of AI inference workloads.
          </p>
        </article>

        <!-- Feature 4 — Edge Deployment -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Edge Deployment feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Edge Deployment</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Deploy intelligence at the edge — on-device, on-premise, or in air-gapped
            environments without cloud dependencies.
          </p>
        </article>

        <!-- Feature 5 — Privacy-Preserving -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Privacy-Preserving feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Privacy-Preserving</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Data never leaves the device. Local processing ensures complete privacy and
            compliance with the strictest data regulations.
          </p>
        </article>

        <!-- Feature 6 — Open Standards -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Open Standards feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Open Standards</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Built on open formats and interoperable APIs — no vendor lock-in, full
            transparency, community-driven development.
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
  <section id="research" class="py-24 bg-[#fafafa]" aria-labelledby="research-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="research-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Research References
        </h2>
        <ul class="space-y-6" role="list" aria-label="Research papers">
          <li class="border-l-4 border-[#00d4ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Efficient CPU-Based Inference for Compact Language Models</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2025. <em>Journal of Efficient AI Systems</em>.</p>
          </li>
          <li class="border-l-4 border-[#00d4ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Deterministic Neural Architectures for Safety-Critical Applications</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2024. <em>Proceedings of Responsible AI Conference</em>.</p>
          </li>
          <li class="border-l-4 border-[#00d4ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Privacy-Preserving Edge Inference: A Survey</p>
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
  <section id="idle-cta" class="py-20 bg-[#1a1a2e] text-white text-center" aria-label="IDLE call to action">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Ready to explore IDLE?
      </h2>
      <p class="text-gray-300 mb-8 max-w-xl mx-auto">
        Discover how CPU-native intelligence can transform your workflows.
      </p>
      <a href="#" class="inline-block px-8 py-4 rounded-full bg-[#00d4ff] text-[#1a1a2e] font-semibold text-lg hover:bg-[#00d4ff]/90 transition-colors" aria-label="Visit IDLE external site">
        Visit IDLE
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
