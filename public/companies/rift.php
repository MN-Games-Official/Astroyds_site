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
    'RIFT | Astroyds',
    'RIFT — a custom programming language built for safe, verifiable AI engineering and secure compute.',
    '/companies/rift'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('companies'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Companies', 'url' => '/companies'],
      ['label' => 'RIFT', 'url' => '/companies/rift'],
  ]); ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section id="rift-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="RIFT hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="inline-flex items-center gap-3 mb-6">
        <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-[#6c63ff]/20 text-[#6c63ff]" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
          </svg>
        </div>
      </div>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        RIFT
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        A language built for verifiable AI. Safe by construction.
      </p>
    </div>
  </section>

  <!-- ============================================================
       WHAT IS RIFT?
       ============================================================ -->
  <!-- DRAFT -->
  <section id="what-is-rift" class="py-24 bg-white" aria-labelledby="what-rift-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="what-rift-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
          What is RIFT?
        </h2>
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
          <p>
            RIFT is a purpose-built programming language designed for the age of AI. It
            combines the rigour of formally verified systems with the expressiveness
            developers need to build intelligent, concurrent applications — without
            sacrificing safety.
          </p>
          <p>
            Every RIFT program is type-safe and memory-safe by default. The compiler
            catches entire categories of bugs at build time, and its verification engine
            can mathematically prove that critical code paths behave as specified — making
            RIFT ideal for AI pipelines, financial systems, and security-critical software.
          </p>
          <p>
            With first-class AI primitives — tensors, inference graphs, and training loops
            built into the language — RIFT eliminates the friction of bridging research
            code and production systems. Write once, verify once, deploy everywhere.
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
          Compilation Pipeline
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          From source to verified binary — the RIFT compilation pipeline.
        </p>
      </div>

      <div class="scroll-animate" role="img" aria-label="RIFT compilation pipeline: source code flows through parser, type checker, verification engine, optimizer, to native binary">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-2">
          <!-- Source -->
          <div class="flex flex-col items-center gap-2 min-w-[110px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 border-2 border-[#6c63ff]/30 text-sm font-semibold text-gray-700">
              Source Code
            </div>
          </div>
          <div class="text-[#6c63ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Parser -->
          <div class="flex flex-col items-center gap-2 min-w-[110px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 border-2 border-[#6c63ff]/30 text-sm font-semibold text-gray-700">
              Parser
            </div>
          </div>
          <div class="text-[#6c63ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Type Checker -->
          <div class="flex flex-col items-center gap-2 min-w-[110px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 border-2 border-[#6c63ff]/30 text-sm font-semibold text-gray-700">
              Type Checker
            </div>
          </div>
          <div class="text-[#6c63ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Verification -->
          <div class="flex flex-col items-center gap-2 min-w-[130px]">
            <div class="w-32 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/20 border-2 border-[#6c63ff] text-sm font-bold text-[#6c63ff]">
              Verification
            </div>
          </div>
          <div class="text-[#6c63ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Optimizer -->
          <div class="flex flex-col items-center gap-2 min-w-[110px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 border-2 border-[#6c63ff]/30 text-sm font-semibold text-gray-700">
              Optimizer
            </div>
          </div>
          <div class="text-[#6c63ff] text-2xl rotate-90 sm:rotate-0" aria-hidden="true">→</div>
          <!-- Binary -->
          <div class="flex flex-col items-center gap-2 min-w-[110px]">
            <div class="w-28 h-20 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 border-2 border-[#6c63ff]/30 text-sm font-semibold text-gray-700">
              Native Binary
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

        <!-- Type-Safe -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Type-Safe feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Type-Safe</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            A rich type system catches errors at compile time, eliminating entire
            categories of runtime bugs before they happen.
          </p>
        </article>

        <!-- Verifiable -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Verifiable feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Verifiable</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Built-in verification engine proves program correctness mathematically —
            critical for regulated and safety-sensitive domains.
          </p>
        </article>

        <!-- Memory-Safe -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Memory-Safe feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Memory-Safe</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Ownership and borrowing semantics prevent memory leaks, buffer overflows,
            and data races without garbage collection overhead.
          </p>
        </article>

        <!-- Concurrent -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Concurrent feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Concurrent</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            First-class concurrency primitives make parallel and distributed computing
            safe, ergonomic, and performant by default.
          </p>
        </article>

        <!-- AI-Native Primitives -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="AI-Native Primitives feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">AI-Native Primitives</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Tensors, inference graphs, and training loops are built into the language —
            no external frameworks required.
          </p>
        </article>

        <!-- Cross-Platform -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1" aria-label="Cross-Platform feature">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#6c63ff]/10 text-[#6c63ff] mb-5" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Cross-Platform</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Compile to native binaries on Linux, macOS, Windows, and embedded targets
            from a single codebase.
          </p>
        </article>

      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       CODE EXAMPLE
       ============================================================ -->
  <!-- DRAFT -->
  <section id="code-example" class="py-24 bg-[#fafafa]" aria-labelledby="code-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="scroll-animate">
        <h2 id="code-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          A Taste of RIFT
        </h2>
        <p class="text-gray-500 mb-8">
          A simple verified function in RIFT syntax. <span class="italic">(Placeholder — syntax subject to change.)</span>
        </p>
        <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-lg">
          <div class="flex items-center gap-2 px-4 py-3 bg-[#1a1a2e] border-b border-gray-700">
            <span class="w-3 h-3 rounded-full bg-[#ff5f57]" aria-hidden="true"></span>
            <span class="w-3 h-3 rounded-full bg-[#febc2e]" aria-hidden="true"></span>
            <span class="w-3 h-3 rounded-full bg-[#28c840]" aria-hidden="true"></span>
            <span class="ml-3 text-xs text-gray-400 font-mono">example.rift</span>
          </div>
          <pre class="bg-[#0f0f23] text-gray-200 p-6 overflow-x-auto text-sm leading-relaxed font-mono" aria-label="RIFT code example"><code><span class="text-[#6c63ff]">module</span> math

<span class="text-gray-500">/// Computes factorial with compile-time verification.</span>
<span class="text-gray-500">/// @verify result >= 1</span>
<span class="text-[#6c63ff]">fn</span> <span class="text-[#00d4ff]">factorial</span>(n: <span class="text-[#ff6b6b]">Uint</span>) -&gt; <span class="text-[#ff6b6b]">Uint</span> {
    <span class="text-[#6c63ff]">match</span> n {
        <span class="text-[#febc2e]">0</span> =&gt; <span class="text-[#febc2e]">1</span>,
        _ =&gt; n * factorial(n - <span class="text-[#febc2e]">1</span>),
    }
}

<span class="text-gray-500">/// Train a simple model on a dataset.</span>
<span class="text-[#6c63ff]">fn</span> <span class="text-[#00d4ff]">train</span>(data: <span class="text-[#ff6b6b]">Tensor</span>&lt;<span class="text-[#ff6b6b]">f32</span>&gt;) -&gt; <span class="text-[#ff6b6b]">Model</span> {
    <span class="text-[#6c63ff]">let</span> model = Model::new(layers: [<span class="text-[#febc2e]">128</span>, <span class="text-[#febc2e]">64</span>, <span class="text-[#febc2e]">10</span>])
    model.fit(data, epochs: <span class="text-[#febc2e]">50</span>)
}</code></pre>
        </div>
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
          <li class="border-l-4 border-[#6c63ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Formal Verification of AI Systems: Challenges and Opportunities</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2025. <em>ACM Computing Surveys</em>.</p>
          </li>
          <li class="border-l-4 border-[#6c63ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Memory Safety in Systems Programming Languages: A Comparative Study</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2024. <em>IEEE Transactions on Software Engineering</em>.</p>
          </li>
          <li class="border-l-4 border-[#6c63ff] pl-6 py-2">
            <p class="text-gray-900 font-semibold">Domain-Specific Languages for Machine Learning Pipelines</p>
            <p class="text-gray-500 text-sm mt-1">Placeholder Author et al., 2024. <em>Proceedings of PLDI</em>.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- /DRAFT -->

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section id="rift-cta" class="py-20 bg-[#1a1a2e] text-white text-center" aria-label="RIFT call to action">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Ready to explore RIFT?
      </h2>
      <p class="text-gray-300 mb-8 max-w-xl mx-auto">
        Build verifiable, safe AI systems with a language designed for the task.
      </p>
      <a href="#" class="inline-block px-8 py-4 rounded-full bg-[#6c63ff] text-white font-semibold text-lg hover:bg-[#6c63ff]/90 transition-colors" aria-label="Visit RIFT external site">
        Visit RIFT
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
