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
    'About | Astroyds',
    'Learn about the Astroyds mission — pioneering responsible, human-caring AI built in Maple Grove, Minnesota. Discover our story, values, and vision for a better world.',
    '/about'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('about'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'About', 'url' => '/about'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="about-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="About hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        About Astroyds
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Pioneering responsible AI for a better world
      </p>
    </div>
  </section>

  <!-- ============================================================
       OUR STORY
       ============================================================ -->
  <!-- DRAFT -->
  <section id="our-story" class="py-24 bg-white" aria-labelledby="story-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="story-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          Our Story
        </h2>
        <!-- DRAFT content — replace with final copy -->
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            Astroyds was founded in Maple Grove, Minnesota by a visionary team united by
            a single conviction: artificial intelligence should serve humanity, not the
            other way around. What began as a small group of researchers, engineers, and
            dreamers has grown into a mission-driven company determined to build the
            future responsibly.
          </p>
          <p>
            From our earliest days we recognised that the most transformative technologies
            carry the greatest responsibility. Rather than racing to ship products, we
            chose to invest in safety-first research and human-caring design — ensuring
            every system we create earns the trust of the people it touches.
          </p>
          <p>
            Our journey has taken us from late-night whiteboard sessions to launching
            IDLE, our flagship intelligent platform. Along the way we have assembled a
            diverse team of thinkers and builders who share a common goal: to prove that
            powerful AI and principled development are not mutually exclusive.
          </p>
          <p>
            Today, Astroyds continues to push the boundaries of what responsible AI can
            achieve — guided by our values, grounded in our community, and inspired by
            the future we are helping to shape.
          </p>
        </div>
        <!-- /DRAFT -->
      </div>
    </div>
  </section>

  <!-- ============================================================
       MISSION & VISION
       ============================================================ -->
  <!-- DRAFT -->
  <section id="mission-vision" class="py-24 bg-[#fafafa]" aria-labelledby="mission-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">

        <!-- Mission -->
        <div class="scroll-animate relative">
          <div class="absolute -left-4 top-0 w-1 h-16 bg-[#00d4ff] rounded-full" aria-hidden="true"></div>
          <h2 id="mission-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6 pl-4" style="font-family:'Times New Roman',Georgia,serif">
            Our Mission
          </h2>
          <blockquote class="pl-4 text-xl sm:text-2xl font-semibold text-[#6c63ff] leading-snug mb-4">
            &ldquo;Building the future, so you don&rsquo;t have to.&rdquo;
          </blockquote>
          <!-- DRAFT -->
          <p class="pl-4 text-gray-600 leading-relaxed">
            We exist to design and deploy AI systems that are safe, transparent, and
            genuinely useful — empowering individuals and organisations to focus on
            what matters most while we handle the complexity beneath the surface.
          </p>
          <!-- /DRAFT -->
        </div>

        <!-- Vision -->
        <div class="scroll-animate relative">
          <div class="absolute -left-4 top-0 w-1 h-16 bg-[#6c63ff] rounded-full" aria-hidden="true"></div>
          <h2 id="vision-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6 pl-4" style="font-family:'Times New Roman',Georgia,serif">
            Our Vision
          </h2>
          <!-- DRAFT -->
          <p class="pl-4 text-gray-600 leading-relaxed">
            We envision a world where artificial intelligence amplifies human potential
            rather than replacing it — where every breakthrough is measured not only by
            its capability but by the positive impact it creates. Our goal is to set
            the global standard for AI that is ethical, inclusive, and aligned with the
            long-term wellbeing of society.
          </p>
          <!-- /DRAFT -->
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       OUR VALUES
       ============================================================ -->
  <!-- DRAFT -->
  <section id="values" class="py-24 bg-white" aria-labelledby="values-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="values-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Our Values
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          The principles that guide every decision we make.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Value 1 — Safety First -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Safety First value">
          <!-- Shield icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Safety First</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Every product we ship is rigorously tested and reviewed for safety. We
            believe that trust is earned through transparency and caution.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Value 2 — Human-Centered -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Human-Centered value">
          <!-- People icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Human-Centered</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            People come first. We design technology that augments human abilities,
            respects individual agency, and adapts to real-world needs.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Value 3 — Innovation -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Innovation value">
          <!-- Lightbulb icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovation</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We push boundaries with curiosity and rigour, pursuing breakthroughs that
            create lasting value rather than fleeting novelty.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Value 4 — Transparency -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Transparency value">
          <!-- Eye icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Transparency</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Openness builds trust. We share our methods, acknowledge our limitations,
            and invite scrutiny from the communities we serve.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Value 5 — Sustainability -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Sustainability value">
          <!-- Leaf icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#00d4ff]/10 text-[#00d4ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Sustainability</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            We build for the long term — optimising our models for efficiency and
            minimising the environmental footprint of every system we deploy.
          </p>
          <!-- /DRAFT -->
        </article>

        <!-- Value 6 — Collaboration -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Collaboration value">
          <!-- Hands icon placeholder -->
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Collaboration</h3>
          <!-- DRAFT -->
          <p class="text-gray-500 text-sm leading-relaxed">
            Great ideas emerge at the intersection of disciplines. We partner across
            industries, academia, and communities to amplify our collective impact.
          </p>
          <!-- /DRAFT -->
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       LEADERSHIP TEAM
       ============================================================ -->
  <!-- DRAFT — placeholder team members; replace with real data -->
  <section id="leadership" class="py-24 bg-[#fafafa]" aria-labelledby="leadership-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="leadership-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Leadership
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          The people steering our mission forward.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- DRAFT — Team Member 1 -->
        <article class="scroll-animate text-center" aria-label="Team member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Jane Doe</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">Co-Founder &amp; CEO</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Visionary leader with a decade of experience in AI research and a passion
            for ethical technology.
          </p>
        </article>

        <!-- DRAFT — Team Member 2 -->
        <article class="scroll-animate text-center" aria-label="Team member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">John Smith</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">Co-Founder &amp; CTO</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Systems architect focused on building scalable, safety-first AI
            infrastructure from the ground up.
          </p>
        </article>

        <!-- DRAFT — Team Member 3 -->
        <article class="scroll-animate text-center" aria-label="Team member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Aisha Patel</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">VP of Research</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            AI researcher specialising in alignment and interpretability, previously
            at a leading national lab.
          </p>
        </article>

        <!-- DRAFT — Team Member 4 -->
        <article class="scroll-animate text-center" aria-label="Team member placeholder">
          <div class="w-28 h-28 mx-auto mb-5 rounded-full bg-gray-200 flex items-center justify-center" aria-hidden="true">
            <span class="text-3xl text-gray-400">👤</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">Carlos Rivera</h3>
          <p class="text-sm text-[#6c63ff] font-medium mb-2">Head of Product</p>
          <p class="text-gray-500 text-sm leading-relaxed">
            Product strategist dedicated to translating cutting-edge research into
            intuitive, human-friendly experiences.
          </p>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       TIMELINE / MILESTONES
       ============================================================ -->
  <!-- DRAFT — placeholder milestones; update as the company grows -->
  <section id="timeline" class="py-24 bg-white" aria-labelledby="timeline-heading">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 scroll-animate">
        <h2 id="timeline-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Milestones
        </h2>
        <p class="text-gray-500 max-w-xl mx-auto">
          Key moments in our journey so far.
        </p>
      </div>

      <!-- Vertical timeline -->
      <div class="relative border-l-2 border-gray-200 ml-4 sm:ml-8 space-y-12" role="list" aria-label="Company milestones">

        <!-- DRAFT — Milestone 1 -->
        <div class="scroll-animate relative pl-8" role="listitem">
          <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#00d4ff] border-2 border-white" aria-hidden="true"></div>
          <time class="text-sm font-semibold text-[#00d4ff]">2024</time>
          <h3 class="text-lg font-semibold text-gray-900 mt-1">Founded</h3>
          <p class="text-gray-500 text-sm leading-relaxed mt-1">
            Astroyds is established in Maple Grove, Minnesota with a mission to build
            responsible, human-caring AI.
          </p>
        </div>

        <!-- DRAFT — Milestone 2 -->
        <div class="scroll-animate relative pl-8" role="listitem">
          <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#6c63ff] border-2 border-white" aria-hidden="true"></div>
          <time class="text-sm font-semibold text-[#6c63ff]">2024</time>
          <h3 class="text-lg font-semibold text-gray-900 mt-1">Seed Funding Secured</h3>
          <p class="text-gray-500 text-sm leading-relaxed mt-1">
            Closed our seed round, enabling the team to accelerate research and begin
            product development.
          </p>
        </div>

        <!-- DRAFT — Milestone 3 -->
        <div class="scroll-animate relative pl-8" role="listitem">
          <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#00d4ff] border-2 border-white" aria-hidden="true"></div>
          <time class="text-sm font-semibold text-[#00d4ff]">2025</time>
          <h3 class="text-lg font-semibold text-gray-900 mt-1">IDLE Platform Launch</h3>
          <p class="text-gray-500 text-sm leading-relaxed mt-1">
            Released IDLE — our flagship intelligent assistant platform — to early
            adopters and beta partners.
          </p>
        </div>

        <!-- DRAFT — Milestone 4 -->
        <div class="scroll-animate relative pl-8" role="listitem">
          <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#6c63ff] border-2 border-white" aria-hidden="true"></div>
          <time class="text-sm font-semibold text-[#6c63ff]">2025</time>
          <h3 class="text-lg font-semibold text-gray-900 mt-1">Research Partnership</h3>
          <p class="text-gray-500 text-sm leading-relaxed mt-1">
            Partnered with leading academic institutions to advance AI safety and
            alignment research.
          </p>
        </div>

        <!-- DRAFT — Milestone 5 -->
        <div class="scroll-animate relative pl-8" role="listitem">
          <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#00d4ff] border-2 border-white" aria-hidden="true"></div>
          <time class="text-sm font-semibold text-[#00d4ff]">2026</time>
          <h3 class="text-lg font-semibold text-gray-900 mt-1">Global Expansion</h3>
          <p class="text-gray-500 text-sm leading-relaxed mt-1">
            Expanding our reach to serve customers and collaborators around the world.
          </p>
        </div>

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
