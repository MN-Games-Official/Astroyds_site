<?php

/**
 * Astroyds – Blog Post: Introducing IDLE
 * DRAFT – All content is placeholder.
 */

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../../src/php/headers.php';
require_once __DIR__ . '/../../../src/php/template-partials.php';

send_security_headers();

$post = [
    'title'       => 'Introducing IDLE: CPU-Based AI for Everyone',
    'description' => 'IDLE brings powerful AI to standard hardware. Learn how our CPU-first approach makes advanced AI accessible without expensive GPU infrastructure.',
    'date'        => '2025-02-03',
    'author'      => 'Astroyds Engineering',
    'category'    => 'Product',
    'reading'     => '6 min read',
];

$base_url = config('base_url') ?? 'https://astroyds.com';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Introducing IDLE: CPU-Based AI for Everyone | Astroyds',
    $post['description'],
    '/blog/posts/introducing-idle'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('blog'); ?>

<!-- Schema.org Article markup -->
<script type="application/ld+json">
<?= json_encode([
    '@context'         => 'https://schema.org',
    '@type'            => 'Article',
    'headline'         => $post['title'],
    'description'      => $post['description'],
    'datePublished'    => $post['date'],
    'dateModified'     => $post['date'],
    'author'           => [
        '@type' => 'Organization',
        'name'  => $post['author'],
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => 'Astroyds',
        'url'   => $base_url,
    ],
    'mainEntityOfPage' => $base_url . '/blog/posts/introducing-idle',
    'articleSection'   => $post['category'],
], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?>
</script>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home',              'url' => '/'],
      ['label' => 'Blog',              'url' => '/blog'],
      ['label' => 'Introducing IDLE',  'url' => '/blog/posts/introducing-idle'],
  ]); ?>

  <!-- ════════════════════════════════════════════════════════════════════════
       ARTICLE
       ═══════════════════════════════════════════════════════════════════════ -->
  <!-- DRAFT -->
  <article class="py-12 sm:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Header -->
      <header class="mb-10 scroll-animate">
        <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider rounded-full bg-[#6c63ff]/10 text-[#6c63ff] mb-4">
          <?= esc($post['category']) ?>
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-gray-900 leading-tight" style="font-family:'Times New Roman',Georgia,serif">
          <?= esc($post['title']) ?>
        </h1>
        <div class="mt-4 flex flex-wrap items-center gap-4 text-sm text-gray-400">
          <span>By <?= esc($post['author']) ?></span>
          <span>&middot;</span>
          <time datetime="<?= esc($post['date']) ?>"><?= date('F j, Y', strtotime($post['date'])) ?></time>
          <span>&middot;</span>
          <span><?= esc($post['reading']) ?></span>
        </div>
      </header>

      <!-- Cover image placeholder -->
      <div class="w-full h-64 sm:h-80 rounded-2xl bg-gradient-to-br from-[#6c63ff]/10 to-[#00d4ff]/10 mb-10 scroll-animate" aria-hidden="true"></div>

      <!-- Body -->
      <!-- DRAFT — All article content below is placeholder -->
      <div class="prose prose-lg max-w-none scroll-animate space-y-6 text-gray-700 leading-relaxed">

        <p>
          For too long, cutting-edge AI has been locked behind walls of expensive GPU infrastructure. The prevailing assumption has been that powerful models require specialized hardware — hardware that most organizations, researchers, and individuals simply cannot afford. Today, we're excited to introduce IDLE, a new approach to AI inference that runs efficiently on standard CPUs, making advanced AI truly accessible to everyone.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          The CPU-First Philosophy
        </h2>
        <p>
          IDLE is built on a fundamental insight: with the right model architecture and optimization techniques, CPUs can deliver remarkably capable AI inference. By leveraging advances in model quantization, efficient attention mechanisms, and hardware-aware compilation, IDLE achieves performance levels that were previously thought to require dedicated accelerators. This isn't about compromising on quality — it's about expanding the definition of what's possible on commodity hardware.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Accessibility Without Compromise
        </h2>
        <p>
          Our goal with IDLE is to democratize access to AI capabilities. A university researcher in a developing country, a small business owner automating customer support, a hobbyist exploring creative AI applications — none of these users should be excluded from the AI revolution simply because they lack access to GPU clusters. IDLE runs on the laptops, desktops, and servers that people already own, with no special hardware requirements beyond a modern CPU.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Technical Innovations Under the Hood
        </h2>
        <p>
          IDLE incorporates several technical innovations that make CPU-based inference practical. Our custom quantization pipeline preserves model accuracy while dramatically reducing memory and compute requirements. We've developed a novel attention mechanism optimized for CPU cache hierarchies, and our runtime compiler generates hardware-specific instruction sequences that extract maximum performance from each processor architecture. The result is a system that feels responsive and capable on everyday hardware.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          Safety Built In From Day One
        </h2>
        <p>
          True to the Astroyds mission, IDLE doesn't sacrifice safety for accessibility. Every model shipped through IDLE undergoes the same rigorous safety evaluation as our GPU-based systems, including alignment testing through BulletPROOF's evaluation suite, red-teaming exercises, and bias audits. Making AI more accessible means making safe AI more accessible — and that's a responsibility we take seriously.
        </p>

        <p>
          IDLE represents our belief that the future of AI should be inclusive. Powerful, safe, and accessible — running on the hardware you already have. We're just getting started, and we can't wait to see what the community builds with it.
        </p>
      </div>

      <!-- Share buttons (placeholder) -->
      <div class="mt-12 pt-8 border-t border-gray-200 scroll-animate">
        <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-4">Share this article</h3>
        <div class="flex gap-3">
          <a href="#" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 text-sm text-gray-600 hover:border-[#00d4ff] hover:text-[#00d4ff] transition-colors duration-200" aria-label="Share on Twitter">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            Twitter
          </a>
          <a href="#" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 text-sm text-gray-600 hover:border-[#00d4ff] hover:text-[#00d4ff] transition-colors duration-200" aria-label="Share on LinkedIn">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.27c-.97 0-1.75-.79-1.75-1.76s.78-1.76 1.75-1.76 1.75.79 1.75 1.76-.78 1.76-1.75 1.76zm13.5 11.27h-3v-5.6c0-3.37-4-3.12-4 0v5.6h-3v-10h3v1.77c1.4-2.59 7-2.78 7 2.48v5.75z"/></svg>
            LinkedIn
          </a>
          <button type="button" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 text-sm text-gray-600 hover:border-[#00d4ff] hover:text-[#00d4ff] transition-colors duration-200" aria-label="Copy link">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m9.86-2.04a4.5 4.5 0 00-1.242-7.244l-4.5-4.5a4.5 4.5 0 00-6.364 6.364l1.757 1.757"/></svg>
            Copy Link
          </button>
        </div>
      </div>

      <!-- Author byline -->
      <div class="mt-10 p-6 bg-white border border-gray-200 rounded-2xl flex items-start gap-4 scroll-animate">
        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-[#6c63ff] to-[#00d4ff] shrink-0" aria-hidden="true"></div>
        <div>
          <p class="font-semibold text-gray-900"><?= esc($post['author']) ?></p>
          <!-- DRAFT -->
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">
            The Astroyds Engineering team designs and builds the systems that power our AI products, from model architecture and inference optimization to developer tools and deployment infrastructure.
          </p>
        </div>
      </div>

    </div>
  </article>


  <!-- ════════════════════════════════════════════════════════════════════════
       RELATED POSTS
       ═══════════════════════════════════════════════════════════════════════ -->
  <!-- DRAFT -->
  <section class="py-16 bg-white" aria-labelledby="related-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 id="related-heading" class="text-2xl font-bold tracking-tight text-gray-900 mb-8" style="font-family:'Times New Roman',Georgia,serif">
        Related Posts
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10"></div>
          <div class="p-6">
            <time datetime="2025-01-15" class="text-xs text-gray-400 uppercase tracking-wider">January 15, 2025</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              The Future of AI Safety: Why It Matters Now
            </h3>
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              As AI systems grow more capable, the question of safety becomes not just important — but urgent. We explore why proactive safety research is critical.
            </p>
            <a href="/blog/posts/ai-safety-future" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-gray-100"></div>
          <div class="p-6">
            <time datetime="2025-03-01" class="text-xs text-gray-400 uppercase tracking-wider">March 1, 2025</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              Our Framework for Responsible AI Development
            </h3>
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              Responsible AI isn&rsquo;t a checkbox — it&rsquo;s a practice. We share our internal framework for building AI systems that are transparent, fair, and aligned with human values.
            </p>
            <a href="/blog/posts/responsible-ai-framework" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

      </div>
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
