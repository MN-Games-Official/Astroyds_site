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
    'Research & Safety | Astroyds',
    'Explore Astroyds\' research publications and safety commitments — advancing AI responsibly through rigorous, human-centered research.',
    '/research'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('research'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Research & Safety', 'url' => '/research'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="research-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Research hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Research &amp; Safety
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Advancing AI responsibly through rigorous research
      </p>
    </div>
  </section>

  <!-- ============================================================
       RESEARCH OVERVIEW
       ============================================================ -->
  <!-- DRAFT -->
  <section id="research-overview" class="py-24 bg-white" aria-labelledby="overview-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="overview-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Research Overview
        </h2>
        <!-- DRAFT content — replace with final copy -->
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            At Astroyds, research is the foundation of everything we build. Our team
            pursues fundamental and applied AI research with a singular focus: creating
            systems that are safe, interpretable, and aligned with human values. We
            believe that responsible innovation begins in the lab, long before a product
            reaches the world.
          </p>
          <p>
            Our research programme spans alignment theory, interpretability methods,
            robustness testing, and fairness evaluation. We publish openly, collaborate
            with academic institutions, and subject our work to external peer review —
            because transparency is not optional when the stakes are this high.
          </p>
          <p>
            Every model we develop undergoes rigorous red-teaming and safety evaluation
            before deployment. By investing in safety research alongside capability
            research, we aim to prove that powerful AI and principled development are
            not mutually exclusive.
          </p>
        </div>
        <!-- /DRAFT -->
      </div>
    </div>
  </section>

  <!-- ============================================================
       PUBLISHED PAPERS
       ============================================================ -->
  <!-- DRAFT -->
  <section id="published-papers" class="py-24 bg-[#fafafa]" aria-labelledby="papers-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="papers-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Published Papers
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          Selected publications from the Astroyds research team.
        </p>
      </div>

      <div class="space-y-8 max-w-4xl mx-auto">

        <!-- DRAFT — Paper 1 -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-lg" aria-label="Research paper">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Scalable Alignment Methods for Large Language Models</h3>
          <p class="text-sm text-gray-400 mb-3">A. Patel, J. Smith, C. Rivera &middot; January 2025</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            We present a novel framework for aligning large language models with human
            preferences at scale, demonstrating improved safety metrics without
            sacrificing downstream task performance&hellip;
          </p>
          <a href="#" class="inline-flex items-center text-[#6c63ff] font-medium text-sm hover:underline" aria-label="Read paper: Scalable Alignment Methods">
            Read Paper &rarr;
          </a>
        </article>

        <!-- DRAFT — Paper 2 -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-lg" aria-label="Research paper">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Interpretability Through Sparse Attention Probing</h3>
          <p class="text-sm text-gray-400 mb-3">J. Doe, A. Patel &middot; March 2025</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            This paper introduces sparse attention probing as a lightweight method for
            understanding internal representations in transformer models, enabling
            researchers to identify and mitigate harmful behaviours&hellip;
          </p>
          <a href="#" class="inline-flex items-center text-[#6c63ff] font-medium text-sm hover:underline" aria-label="Read paper: Interpretability Through Sparse Attention Probing">
            Read Paper &rarr;
          </a>
        </article>

        <!-- DRAFT — Paper 3 -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-lg" aria-label="Research paper">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Red-Teaming Strategies for Foundation Models</h3>
          <p class="text-sm text-gray-400 mb-3">C. Rivera, J. Doe, L. Chen &middot; May 2025</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            We propose a structured red-teaming methodology that combines automated
            adversarial probing with expert human evaluation, significantly improving
            the detection of failure modes in foundation models&hellip;
          </p>
          <a href="#" class="inline-flex items-center text-[#6c63ff] font-medium text-sm hover:underline" aria-label="Read paper: Red-Teaming Strategies for Foundation Models">
            Read Paper &rarr;
          </a>
        </article>

        <!-- DRAFT — Paper 4 -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-lg" aria-label="Research paper">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Fairness-Aware Training for Multilingual AI Systems</h3>
          <p class="text-sm text-gray-400 mb-3">A. Patel, M. Okafor &middot; July 2025</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            Our study examines bias propagation in multilingual models and introduces
            a fairness-aware training pipeline that reduces demographic disparity across
            twelve language families&hellip;
          </p>
          <a href="#" class="inline-flex items-center text-[#6c63ff] font-medium text-sm hover:underline" aria-label="Read paper: Fairness-Aware Training for Multilingual AI Systems">
            Read Paper &rarr;
          </a>
        </article>

        <!-- DRAFT — Paper 5 -->
        <article class="scroll-animate bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-lg" aria-label="Research paper">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Human Oversight Mechanisms in Autonomous Decision Systems</h3>
          <p class="text-sm text-gray-400 mb-3">J. Smith, J. Doe &middot; September 2025</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            This paper explores design patterns for maintaining meaningful human control
            over autonomous AI systems, proposing a tiered oversight framework adaptable
            to varying levels of risk&hellip;
          </p>
          <a href="#" class="inline-flex items-center text-[#6c63ff] font-medium text-sm hover:underline" aria-label="Read paper: Human Oversight Mechanisms in Autonomous Decision Systems">
            Read Paper &rarr;
          </a>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       SAFETY COMMITMENTS
       ============================================================ -->
  <!-- DRAFT -->
  <section id="safety-commitments" class="py-24 bg-white" aria-labelledby="safety-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="safety-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Our Safety Principles
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          The commitments that guide how we build and deploy AI.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Alignment Research -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Alignment Research commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Alignment Research</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We invest heavily in alignment research to ensure our AI systems reliably
            pursue intended goals and remain faithful to human values.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Interpretability -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Interpretability commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Interpretability</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We develop and apply interpretability tools so that our models' decisions
            can be understood, audited, and improved by humans.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Red-Teaming -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Red-Teaming commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Red-Teaming</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Every model undergoes rigorous adversarial testing to uncover failure modes
            before deployment.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Responsible Disclosure -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Responsible Disclosure commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Responsible Disclosure</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We share safety-relevant findings with the research community and follow
            responsible disclosure practices for vulnerabilities.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Human Oversight -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Human Oversight commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Human Oversight</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We design systems with meaningful human control, ensuring people remain in
            the loop for high-stakes decisions.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Bias Mitigation -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Bias Mitigation commitment">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Bias Mitigation</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We actively measure, monitor, and mitigate bias across our models to promote
            fair outcomes for all users.
          </p>
          <!-- /DRAFT -->
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       ADVISORY BOARD
       ============================================================ -->
  <!-- DRAFT — placeholder board members; replace with real data -->
  <section id="advisory-board" class="py-24 bg-[#fafafa]" aria-labelledby="board-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="board-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Advisory Board
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          Advisory board members will be announced. The following are placeholders.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- DRAFT — Board Member 1 -->
        <article class="scroll-animate text-center" aria-label="Advisory board member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Dr. Elena Torres</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">Stanford University</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Leading researcher in AI alignment and machine ethics with over 15 years
            of experience in the field.
          </p>
        </article>

        <!-- DRAFT — Board Member 2 -->
        <article class="scroll-animate text-center" aria-label="Advisory board member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Prof. James Okafor</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">MIT CSAIL</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Expert in interpretability and neural network analysis, contributing to
            foundational work on model transparency.
          </p>
        </article>

        <!-- DRAFT — Board Member 3 -->
        <article class="scroll-animate text-center" aria-label="Advisory board member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Dr. Mei-Lin Zhang</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">Oxford Internet Institute</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Specialist in AI governance and policy, advising governments and
            organisations on responsible AI deployment.
          </p>
        </article>

        <!-- DRAFT — Board Member 4 -->
        <article class="scroll-animate text-center" aria-label="Advisory board member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Dr. Raj Gupta</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">DeepMind (former)</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Renowned for pioneering work in robust AI systems and adversarial
            testing methodologies.
          </p>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       CTA — SAFETY PAGE
       ============================================================ -->
  <section id="research-cta" class="py-24 bg-[#1a1a2e] text-white text-center" aria-label="Call to action">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Learn More About Our Safety Practices
      </h2>
      <p class="text-gray-300 text-lg mb-8 leading-relaxed">
        Discover how we embed responsibility into every stage of AI development.
      </p>
      <a href="/safety" class="inline-block px-8 py-3 bg-[#00d4ff] text-[#1a1a2e] font-semibold rounded-full hover:bg-[#00bfe0] transition-colors duration-200">
        Responsible AI &rarr;
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
