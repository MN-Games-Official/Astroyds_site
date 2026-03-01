<?php

/**
 * Astroyds – Blog & News listing page
 * DRAFT – All content is placeholder.
 *
 * @see /public/config.php               Site configuration & helpers
 * @see /src/php/headers.php             Security headers & CSRF
 * @see /src/php/template-partials.php   Reusable HTML partials
 */

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../../src/php/headers.php';
require_once __DIR__ . '/../../src/php/template-partials.php';

send_security_headers();

// ── Sample blog post data ───────────────────────────────────────────────────
$posts = [
    [
        'title'    => 'The Future of AI Safety: Why It Matters Now',
        'slug'     => 'ai-safety-future',
        'date'     => '2025-01-15',
        'author'   => 'Astroyds Research Team',
        'category' => 'AI Safety',
        'excerpt'  => 'As AI systems grow more capable, the question of safety becomes not just important — but urgent. We explore why proactive safety research is critical and how Astroyds is leading the charge.',
        'reading'  => '8 min read',
        'featured' => true,
    ],
    [
        'title'    => 'Introducing IDLE: CPU-Based AI for Everyone',
        'slug'     => 'introducing-idle',
        'date'     => '2025-02-03',
        'author'   => 'Astroyds Engineering',
        'category' => 'Product',
        'excerpt'  => 'IDLE brings powerful AI capabilities to standard hardware. Learn how our CPU-first approach makes advanced AI accessible without expensive GPU infrastructure.',
        'reading'  => '6 min read',
        'featured' => false,
    ],
    [
        'title'    => 'Our Framework for Responsible AI Development',
        'slug'     => 'responsible-ai-framework',
        'date'     => '2025-03-01',
        'author'   => 'Astroyds Ethics Board',
        'category' => 'Research',
        'excerpt'  => 'Responsible AI isn\'t a checkbox — it\'s a practice. We share our internal framework for building AI systems that are transparent, fair, and aligned with human values.',
        'reading'  => '10 min read',
        'featured' => false,
    ],
];

$featured = $posts[0];
$grid_posts = array_slice($posts, 1);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Blog & News | Astroyds',
    'Insights, updates, and perspectives from Astroyds on AI safety, responsible development, and the future of intelligence.',
    '/blog'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('blog'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Blog', 'url' => '/blog'],
  ]); ?>

  <!-- ════════════════════════════════════════════════════════════════════════
       HERO
       ═══════════════════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-[#1a1a2e] text-[#fafafa]" aria-labelledby="blog-hero-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
      <h1 id="blog-hero-heading" class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-4" style="font-family:'Times New Roman',Georgia,serif">
        Blog &amp; News
      </h1>
      <!-- DRAFT -->
      <p class="text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Insights, updates, and perspectives from Astroyds
      </p>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       FEATURED POST
       ═══════════════════════════════════════════════════════════════════════ -->
  <!-- DRAFT -->
  <section class="py-16 bg-white" aria-labelledby="featured-heading">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 id="featured-heading" class="sr-only">Featured Post</h2>

      <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl md:grid md:grid-cols-2">
        <div class="h-64 md:h-auto bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10"></div>
        <div class="p-8 md:p-10 flex flex-col justify-center">
          <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider rounded-full bg-[#00d4ff]/10 text-[#00d4ff] mb-4 w-fit">
            <?= esc($featured['category']) ?>
          </span>
          <time datetime="<?= esc($featured['date']) ?>" class="text-xs text-gray-400 uppercase tracking-wider">
            <?= date('F j, Y', strtotime($featured['date'])) ?>
          </time>
          <h3 class="mt-2 text-2xl sm:text-3xl font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
            <?= esc($featured['title']) ?>
          </h3>
          <p class="mt-3 text-gray-500 leading-relaxed">
            <?= esc($featured['excerpt']) ?>
          </p>
          <div class="mt-4 flex items-center gap-4 text-sm text-gray-400">
            <span><?= esc($featured['author']) ?></span>
            <span>&middot;</span>
            <span><?= esc($featured['reading']) ?></span>
          </div>
          <a href="/blog/posts/<?= esc($featured['slug']) ?>" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
            Read More
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>
      </article>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════════════════
       POST GRID
       ═══════════════════════════════════════════════════════════════════════ -->
  <!-- DRAFT -->
  <section class="py-16 bg-[#fafafa]" aria-labelledby="posts-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 id="posts-heading" class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900 mb-10" style="font-family:'Times New Roman',Georgia,serif">
        Latest Posts
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($posts as $post): ?>
        <article class="scroll-animate group bg-white border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10"></div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <span class="inline-block px-2.5 py-0.5 text-xs font-semibold uppercase tracking-wider rounded-full bg-[#6c63ff]/10 text-[#6c63ff]">
                <?= esc($post['category']) ?>
              </span>
              <span class="text-xs text-gray-400"><?= esc($post['reading']) ?></span>
            </div>
            <time datetime="<?= esc($post['date']) ?>" class="text-xs text-gray-400 uppercase tracking-wider">
              <?= date('F j, Y', strtotime($post['date'])) ?>
            </time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              <?= esc($post['title']) ?>
            </h3>
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              <?= esc($post['excerpt']) ?>
            </p>
            <div class="mt-3 text-xs text-gray-400">
              By <?= esc($post['author']) ?>
            </div>
            <a href="/blog/posts/<?= esc($post['slug']) ?>" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>
        <?php endforeach; ?>
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
