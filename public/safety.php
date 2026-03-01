<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../src/php/headers.php';
require_once __DIR__ . '/../src/php/template-partials.php';

send_security_headers();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Responsible AI | Astroyds',
    'Our commitment to safe, ethical, and beneficial AI — learn about Astroyds\' responsible AI principles, red-teaming practices, and bias mitigation strategies.',
    '/safety'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('safety'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Responsible AI', 'url' => '/safety'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="safety-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Safety hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Responsible AI
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Our commitment to safe, ethical, and beneficial AI
      </p>
    </div>
  </section>

  <!-- ============================================================
       OUR APPROACH
       ============================================================ -->
  <!-- DRAFT -->
  <section id="our-approach" class="py-24 bg-white" aria-labelledby="approach-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="approach-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Our Approach
        </h2>
        <!-- DRAFT content — replace with final copy -->
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            Responsible AI is not a department at Astroyds — it is a discipline woven
            into every stage of our development process. From initial research to final
            deployment, we evaluate our systems against rigorous safety, fairness, and
            transparency standards.
          </p>
          <p>
            We recognise that building powerful AI carries profound responsibility. Our
            approach combines proactive risk assessment, continuous monitoring, and
            iterative improvement to ensure our systems behave as intended and serve the
            broad interests of society.
          </p>
          <p>
            We engage with external researchers, policymakers, and civil society
            organisations to incorporate diverse perspectives into our safety practices.
            No single team can anticipate every risk — collaboration is essential to
            building AI that works for everyone.
          </p>
          <p>
            Ultimately, we measure our success not only by what our AI can do, but by
            the trust it earns from the people and communities it serves.
          </p>
        </div>
        <!-- /DRAFT -->
      </div>
    </div>
  </section>

  <!-- ============================================================
       PRINCIPLES GRID
       ============================================================ -->
  <!-- DRAFT -->
  <section id="principles" class="py-24 bg-[#fafafa]" aria-labelledby="principles-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="principles-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Our Principles
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          The values that define how we design, build, and deploy AI.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Safety by Design -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Safety by Design principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Safety by Design</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Safety is embedded from the earliest stages of research and design, not
            bolted on as an afterthought.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Transparency -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Transparency principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Transparency</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We openly share our methods, disclose limitations, and provide clear
            documentation of how our systems work.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Fairness -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Fairness principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Fairness</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We actively identify and address biases in our data and models to promote
            equitable outcomes for all users.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Privacy -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Privacy principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Privacy</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We protect user data with strong privacy safeguards and minimise data
            collection to what is strictly necessary.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Accountability -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Accountability principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Accountability</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We take responsibility for the outcomes of our systems and maintain clear
            lines of accountability throughout our organisation.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Human Oversight -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Human Oversight principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Human Oversight</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We ensure meaningful human control over high-stakes AI decisions, keeping
            people in the loop where it matters most.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Robustness -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Robustness principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Robustness</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Our systems are built to perform reliably across diverse conditions and
            resist adversarial manipulation.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Inclusivity -->
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Inclusivity principle">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Inclusivity</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We design AI that works for everyone, considering diverse perspectives,
            languages, and communities from the outset.
          </p>
          <!-- /DRAFT -->
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       RED-TEAMING
       ============================================================ -->
  <!-- DRAFT -->
  <section id="red-teaming" class="py-24 bg-white" aria-labelledby="redteam-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="redteam-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Red-Teaming &amp; Adversarial Testing
        </h2>
        <!-- DRAFT content — replace with final copy -->
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            Before any Astroyds model reaches production, it undergoes extensive
            adversarial testing — a process we call red-teaming. Our dedicated safety
            team, supplemented by external researchers, systematically probes models
            for failure modes, harmful outputs, and unexpected behaviours.
          </p>
          <p>
            Our red-teaming methodology combines automated adversarial probing with
            structured human evaluation. Automated tools generate thousands of edge-case
            inputs, while domain experts assess outputs for subtle harms that automated
            systems might miss. This dual approach ensures comprehensive coverage.
          </p>
          <p>
            We document and share our findings — both internally and with the broader
            research community — so that the entire field can benefit from what we
            learn. We believe that safety is a shared responsibility, and adversarial
            testing is most effective when conducted openly and collaboratively.
          </p>
        </div>
        <!-- /DRAFT -->
      </div>
    </div>
  </section>

  <!-- ============================================================
       BIAS AND FAIRNESS
       ============================================================ -->
  <!-- DRAFT -->
  <section id="bias-fairness" class="py-24 bg-[#fafafa]" aria-labelledby="bias-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="bias-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Bias &amp; Fairness
        </h2>
        <!-- DRAFT content — replace with final copy -->
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            We acknowledge that AI systems can reflect and amplify societal biases
            present in training data. At Astroyds, we treat bias detection and
            mitigation as an ongoing commitment — not a one-time checklist.
          </p>
          <p>
            Our fairness pipeline includes demographic impact analysis, counterfactual
            testing, and continuous monitoring in production. We evaluate our models
            across multiple dimensions of fairness and publish aggregate results to
            maintain accountability.
          </p>
          <p>
            We actively seek diverse perspectives — from our team, our users, and
            external advisors — to identify blind spots and ensure our systems work
            equitably for all communities.
          </p>
        </div>
        <!-- /DRAFT -->
      </div>
    </div>
  </section>

  <!-- ============================================================
       REPORTING SAFETY CONCERNS
       ============================================================ -->
  <section id="reporting" class="py-24 bg-white" aria-labelledby="reporting-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="reporting-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Report a Safety Concern
        </h2>
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            We encourage anyone — users, researchers, and the broader community — to
            report safety concerns, vulnerabilities, or potential harms related to our
            AI systems. Your reports help us improve.
          </p>
          <p>
            To report a concern, please contact our safety team at
            <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] font-medium hover:underline">letstalk@astroyds.com</a>.
            We review every report and will respond within five business days.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       RESOURCES
       ============================================================ -->
  <!-- DRAFT -->
  <section id="resources" class="py-24 bg-[#fafafa]" aria-labelledby="resources-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="resources-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Resources
        </h2>
        <ul class="space-y-4 text-lg" role="list">
          <li>
            <a href="/research" class="text-[#6c63ff] font-medium hover:underline">
              Research &amp; Safety Publications
            </a>
            <span class="text-gray-400"> — Our latest papers and findings</span>
          </li>
          <!-- DRAFT — placeholder external links -->
          <li>
            <a href="#" class="text-[#6c63ff] font-medium hover:underline" rel="noopener noreferrer">
              Partnership on AI
            </a>
            <span class="text-gray-400"> — Multi-stakeholder AI safety organisation</span>
          </li>
          <li>
            <a href="#" class="text-[#6c63ff] font-medium hover:underline" rel="noopener noreferrer">
              NIST AI Risk Management Framework
            </a>
            <span class="text-gray-400"> — Federal guidelines for trustworthy AI</span>
          </li>
          <li>
            <a href="#" class="text-[#6c63ff] font-medium hover:underline" rel="noopener noreferrer">
              AI Safety Research Hub
            </a>
            <span class="text-gray-400"> — Community resources for AI safety</span>
          </li>
          <!-- /DRAFT -->
        </ul>
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
