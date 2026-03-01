<?php

/**
 * Astroyds – Homepage
 *
 * @see /public/config.php    Site configuration & helpers
 * @see /src/php/headers.php   Security headers & CSRF
 * @see /src/php/template-partials.php  Reusable HTML partials
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../src/php/headers.php';
require_once __DIR__ . '/../src/php/template-partials.php';

send_security_headers();

$hero_concept = config('hero_concept') ?? 'A';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Astroyds — Shaping Tomorrow\'s Intelligence',
    'Moving humanity forward for a better future. Astroyds builds safety-first AI companies that shape the future of intelligence.',
    '/'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('home'); ?>

<main id="main-content">

  <!-- ════════════════════════════════════════════════════════════════════════
       HERO SECTION
       Concept <?= esc($hero_concept) ?> is active. Switch via HERO_CONCEPT env var.

       Candidate headlines:
       <!-- HEADLINE CANDIDATE 1: "Shaping Tomorrow's Intelligence" -->
       <!-- HEADLINE CANDIDATE 2: "The Future Starts Here" -->
       <!-- HEADLINE CANDIDATE 3: "Intelligence, Designed Responsibly" -->
       ═══════════════════════════════════════════════════════════════════════ -->

  <?php if ($hero_concept === 'A'): ?>
  <!-- ── Concept A — Immersive ──────────────────────────────────────────── -->
  <section
    id="hero"
    class="relative min-h-screen flex items-center justify-center overflow-hidden"
    style="background:#1a1a2e"
    aria-label="Hero"
  >
    <canvas id="hero-particles" class="absolute inset-0 w-full h-full" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
      <!-- DRAFT -->
      <h1
        class="text-5xl sm:text-6xl md:text-7xl font-bold leading-tight tracking-tight text-[#fafafa] mb-6"
        style="font-family:'Times New Roman',Georgia,serif"
      >
        Shaping Tomorrow&rsquo;s Intelligence
      </h1>
      <!-- DRAFT -->
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
        Moving humanity forward for a better future.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a
          href="/about"
          class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-[#00d4ff] text-[#1a1a2e] font-semibold text-sm tracking-wide hover:bg-[#00d4ff]/90 transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#00d4ff]/50 focus:ring-offset-2 focus:ring-offset-[#1a1a2e]"
        >
          Explore Our Vision
          <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a
          href="/companies"
          class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border border-white/20 text-[#fafafa] font-semibold text-sm tracking-wide hover:border-[#00d4ff]/50 hover:text-[#00d4ff] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#00d4ff]/50 focus:ring-offset-2 focus:ring-offset-[#1a1a2e]"
        >
          Meet Our Companies
        </a>
      </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce" aria-hidden="true">
      <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
    </div>
  </section>

  <?php else: ?>
  <!-- ── Concept B — Clean Serif ────────────────────────────────────────── -->
  <section
    id="hero"
    class="relative min-h-[85vh] flex items-center justify-center bg-[#fafafa]"
    aria-label="Hero"
  >
    <div class="max-w-4xl mx-auto px-6 text-center py-24">
      <!-- DRAFT -->
      <h1
        class="text-5xl sm:text-6xl md:text-7xl font-bold leading-tight tracking-tight text-gray-900 mb-6"
        style="font-family:'Times New Roman',Georgia,serif"
      >
        Shaping Tomorrow&rsquo;s
        <span class="bg-gradient-to-r from-[#00d4ff] to-[#6c63ff] bg-clip-text text-transparent">Intelligence</span>
      </h1>
      <!-- DRAFT -->
      <p class="text-lg sm:text-xl text-gray-500 max-w-2xl mx-auto mb-10 leading-relaxed">
        Moving humanity forward for a better future.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a
          href="/about"
          class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-gray-900 text-white font-semibold text-sm tracking-wide hover:bg-gray-800 transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gray-900/50 focus:ring-offset-2"
        >
          Explore Our Vision
          <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a
          href="/companies"
          class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border border-gray-300 text-gray-700 font-semibold text-sm tracking-wide hover:border-gray-900 hover:text-gray-900 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-900/50 focus:ring-offset-2"
        >
          Meet Our Companies
        </a>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <!-- ════════════════════════════════════════════════════════════════════════
       FEATURED SUBCOMPANIES
       ═══════════════════════════════════════════════════════════════════════ -->
  <section id="companies" class="py-24 bg-white" aria-labelledby="companies-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="companies-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900" style="font-family:'Times New Roman',Georgia,serif">
          Our Companies
        </h2>
        <p class="mt-4 text-gray-500 max-w-xl mx-auto">
          Three focused ventures, one shared mission.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- IDLE -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-[#00d4ff]/30">
          <!-- Logo placeholder -->
          <div class="mb-6" aria-hidden="true">
            <svg class="h-12 w-12 text-[#00d4ff]" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="4" width="40" height="40" rx="8" stroke="currentColor" stroke-width="2"/>
              <circle cx="24" cy="24" r="8" fill="currentColor" opacity="0.2"/>
              <circle cx="24" cy="24" r="4" fill="currentColor"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2" style="font-family:'Times New Roman',Georgia,serif">IDLE</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Intelligent systems that learn, adapt, and evolve. IDLE builds foundation models designed for real-world reasoning.
          </p>
          <ul class="space-y-2 text-sm text-gray-600 mb-6" aria-label="IDLE key features">
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Foundation model research
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Autonomous reasoning agents
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Scalable inference infrastructure
            </li>
          </ul>
          <a href="/companies#idle" class="inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
            Learn More
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

        <!-- RIFT -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-[#6c63ff]/30">
          <!-- Logo placeholder -->
          <div class="mb-6" aria-hidden="true">
            <svg class="h-12 w-12 text-[#6c63ff]" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <polygon points="24,4 44,40 4,40" stroke="currentColor" stroke-width="2" fill="none"/>
              <polygon points="24,16 34,36 14,36" fill="currentColor" opacity="0.2"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2" style="font-family:'Times New Roman',Georgia,serif">RIFT</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Breaking barriers between human creativity and machine capability. RIFT develops tools that amplify what people can achieve.
          </p>
          <ul class="space-y-2 text-sm text-gray-600 mb-6" aria-label="RIFT key features">
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#6c63ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Human-AI collaboration tools
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#6c63ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Creative augmentation platform
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#6c63ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Enterprise workflow integration
            </li>
          </ul>
          <a href="/companies#rift" class="inline-flex items-center gap-1 text-sm font-semibold text-[#6c63ff] hover:text-[#00d4ff] transition-colors duration-200">
            Learn More
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

        <!-- BulletPROOF -->
        <article class="scroll-animate group relative bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-[#00d4ff]/30">
          <!-- Logo placeholder -->
          <div class="mb-6" aria-hidden="true">
            <svg class="h-12 w-12 text-[#00d4ff]" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24 4L6 14V26C6 36 14 44 24 44C34 44 42 36 42 26V14L24 4Z" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M24 12L12 18V26C12 33 17 39 24 39C31 39 36 33 36 26V18L24 12Z" fill="currentColor" opacity="0.2"/>
              <path d="M17 24L22 29L31 20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2" style="font-family:'Times New Roman',Georgia,serif">BulletPROOF</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Security and trust for the AI era. BulletPROOF delivers hardened infrastructure and safety-first deployment frameworks.
          </p>
          <ul class="space-y-2 text-sm text-gray-600 mb-6" aria-label="BulletPROOF key features">
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              AI safety &amp; alignment testing
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Secure deployment pipelines
            </li>
            <li class="flex items-start gap-2">
              <svg class="h-4 w-4 mt-0.5 text-[#00d4ff] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              Compliance &amp; governance tools
            </li>
          </ul>
          <a href="/companies#bulletproof" class="inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
            Learn More
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </article>

      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       MISSION SECTION
       ═══════════════════════════════════════════════════════════════════════ -->
  <section id="mission" class="py-24 bg-[#fafafa]" aria-labelledby="mission-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <div class="scroll-animate">
          <h2 id="mission-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-8" style="font-family:'Times New Roman',Georgia,serif">
            Building the future, so you don&rsquo;t have to.
          </h2>
          <!-- DRAFT -->
          <div class="space-y-5 text-gray-600 leading-relaxed">
            <p>
              At Astroyds, we believe intelligence should serve everyone. Our companies work at the frontier of AI research, safety, and application — building systems that are not only powerful but trustworthy, transparent, and aligned with human values.
            </p>
            <!-- DRAFT -->
            <p>
              We take a long-term view. Every model we train, every tool we ship, and every partnership we form is guided by a single principle: technology must move humanity forward. That means investing in safety research alongside capability, and never cutting corners on the foundations.
            </p>
            <!-- DRAFT -->
            <p>
              From foundational research at IDLE to creative tools at RIFT and hardened security at BulletPROOF, our ecosystem of companies shares resources, talent, and a commitment to responsible innovation.
            </p>
          </div>
        </div>

        <!-- Decorative geometric SVG -->
        <div class="scroll-animate flex items-center justify-center" aria-hidden="true">
          <svg class="w-full max-w-md" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="200" cy="200" r="150" stroke="#e5e7eb" stroke-width="1"/>
            <circle cx="200" cy="200" r="100" stroke="#00d4ff" stroke-width="1" opacity="0.4"/>
            <circle cx="200" cy="200" r="50" stroke="#6c63ff" stroke-width="1" opacity="0.6"/>
            <line x1="50" y1="200" x2="350" y2="200" stroke="#e5e7eb" stroke-width="0.5"/>
            <line x1="200" y1="50" x2="200" y2="350" stroke="#e5e7eb" stroke-width="0.5"/>
            <circle cx="200" cy="200" r="6" fill="#00d4ff"/>
            <circle cx="200" cy="100" r="4" fill="#6c63ff" opacity="0.6"/>
            <circle cx="200" cy="300" r="4" fill="#6c63ff" opacity="0.6"/>
            <circle cx="100" cy="200" r="4" fill="#00d4ff" opacity="0.4"/>
            <circle cx="300" cy="200" r="4" fill="#00d4ff" opacity="0.4"/>
            <path d="M200 100 L300 200 L200 300 L100 200 Z" stroke="#00d4ff" stroke-width="0.5" opacity="0.3"/>
          </svg>
        </div>

      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       SAFETY & RESEARCH HIGHLIGHT
       ═══════════════════════════════════════════════════════════════════════ -->
  <section id="safety" class="py-24 bg-white" aria-labelledby="safety-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
      <!-- Shield icon -->
      <div class="inline-flex items-center justify-center h-16 w-16 rounded-2xl bg-[#00d4ff]/10 mb-8" aria-hidden="true">
        <svg class="h-8 w-8 text-[#00d4ff]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
        </svg>
      </div>

      <h2 id="safety-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Safety-First AI Development
      </h2>
      <!-- DRAFT -->
      <p class="text-gray-500 text-lg leading-relaxed max-w-2xl mx-auto mb-10">
        We believe the most capable AI must also be the safest. Our dedicated research teams work on alignment, interpretability, and robustness — ensuring that every system we deploy earns the trust it&rsquo;s given.
      </p>

      <a
        href="/research"
        class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-gray-900 text-white font-semibold text-sm tracking-wide hover:bg-gray-800 transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gray-900/50 focus:ring-offset-2"
      >
        Explore Our Research
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       LATEST NEWS / BLOG
       ═══════════════════════════════════════════════════════════════════════ -->
  <section id="blog" class="py-24 bg-[#fafafa]" aria-labelledby="blog-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="blog-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900" style="font-family:'Times New Roman',Georgia,serif">
          Latest from Astroyds
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Blog post 1 -->
        <!-- DRAFT -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10"></div>
          <div class="p-6">
            <time datetime="2025-06-01" class="text-xs text-gray-400 uppercase tracking-wider">June 1, 2025</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              Introducing IDLE&rsquo;s Reasoning Framework
            </h3>
            <!-- DRAFT -->
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              Our latest research explores new approaches to multi-step reasoning in large language models, pushing the boundaries of what autonomous agents can achieve.
            </p>
            <a href="/blog" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

        <!-- Blog post 2 -->
        <!-- DRAFT -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#6c63ff]/10 to-[#00d4ff]/10"></div>
          <div class="p-6">
            <time datetime="2025-05-15" class="text-xs text-gray-400 uppercase tracking-wider">May 15, 2025</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#6c63ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              Safety Benchmarks: Our 2025 Report
            </h3>
            <!-- DRAFT -->
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              Transparency is core to our mission. We&rsquo;re releasing our annual safety benchmarks, covering alignment testing, red-teaming results, and governance recommendations.
            </p>
            <a href="/blog" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#6c63ff] hover:text-[#00d4ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

        <!-- Blog post 3 -->
        <!-- DRAFT -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-gray-100"></div>
          <div class="p-6">
            <time datetime="2025-04-28" class="text-xs text-gray-400 uppercase tracking-wider">April 28, 2025</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              RIFT Partners with Leading Creative Studios
            </h3>
            <!-- DRAFT -->
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              We&rsquo;re announcing partnerships with three major creative studios to bring AI-augmented tools to designers, filmmakers, and musicians worldwide.
            </p>
            <a href="/blog" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       NEWSLETTER / CTA
       ═══════════════════════════════════════════════════════════════════════ -->
  <section id="newsletter" class="py-24 bg-white" aria-labelledby="newsletter-heading">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
      <h2 id="newsletter-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
        Stay Connected
      </h2>
      <!-- DRAFT -->
      <p class="text-gray-500 leading-relaxed mb-8">
        Get the latest on our research, product launches, and company news — delivered straight to your inbox.
      </p>

      <!-- Visual-only email input (no backend wired) -->
      <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" aria-label="Newsletter signup" onsubmit="return false;">
        <label for="newsletter-email" class="sr-only">Email address</label>
        <input
          id="newsletter-email"
          type="email"
          placeholder="you@example.com"
          class="flex-1 px-5 py-3 rounded-full border border-gray-300 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#00d4ff]/50 focus:border-[#00d4ff] transition-colors duration-200"
          aria-describedby="newsletter-note"
          disabled
        />
        <button
          type="submit"
          class="px-6 py-3 rounded-full bg-gray-900 text-white text-sm font-semibold hover:bg-gray-800 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-900/50 focus:ring-offset-2 cursor-not-allowed opacity-60"
          disabled
          aria-disabled="true"
        >
          Subscribe
        </button>
      </form>
      <p id="newsletter-note" class="mt-3 text-xs text-gray-400">Coming soon. No spam, ever.</p>
    </div>
  </section>

</main>

<?php render_footer(); ?>
<?php render_cookie_consent(); ?>
<?php render_chat_widget(); ?>

<!-- Scripts -->
<script src="/src/js/main.js" defer></script>
<?php if ($hero_concept === 'A'): ?>
<script src="/src/js/hero-particles.js" defer></script>
<?php endif; ?>
<script src="/src/js/analytics.js" defer></script>

</body>
</html>
