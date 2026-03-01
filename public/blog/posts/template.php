<?php

/**
 * Astroyds – Blog Post Template
 *
 * HOW TO CREATE A NEW BLOG POST:
 * 1. Copy this file and rename it to your post slug (e.g. my-new-post.php).
 * 2. Replace all [PLACEHOLDER_*] markers with your content.
 * 3. Update the $post array with your post metadata.
 * 4. Write your article body in the designated section below.
 * 5. Update the related posts section with relevant links.
 * 6. Add the post to /public/blog/index.php's $posts array.
 * 7. Remove all [PLACEHOLDER_*] comments once content is finalized.
 */

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../../src/php/headers.php';
require_once __DIR__ . '/../../../src/php/template-partials.php';

send_security_headers();

// ── Post metadata — update these values ─────────────────────────────────────
$post = [
    'title'       => '[PLACEHOLDER_TITLE]',             // e.g. "My New Blog Post"
    'description' => '[PLACEHOLDER_DESCRIPTION]',       // 1-2 sentence meta description
    'date'        => '[PLACEHOLDER_DATE]',              // ISO 8601 format: YYYY-MM-DD
    'author'      => '[PLACEHOLDER_AUTHOR]',            // e.g. "Astroyds Research Team"
    'category'    => '[PLACEHOLDER_CATEGORY]',          // e.g. "AI Safety", "Product", "Research"
    'reading'     => '[PLACEHOLDER_READING_TIME]',      // e.g. "8 min read"
    'slug'        => '[PLACEHOLDER_SLUG]',              // e.g. "my-new-post" (matches filename)
];

$base_url = config('base_url') ?? 'https://astroyds.com';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    $post['title'] . ' | Astroyds',
    $post['description'],
    '/blog/posts/' . $post['slug']
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
    'mainEntityOfPage' => $base_url . '/blog/posts/' . $post['slug'],
    'articleSection'   => $post['category'],
], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?>
</script>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home',             'url' => '/'],
      ['label' => 'Blog',             'url' => '/blog'],
      ['label' => $post['title'],     'url' => '/blog/posts/' . $post['slug']],
  ]); ?>

  <!-- ════════════════════════════════════════════════════════════════════════
       ARTICLE
       ═══════════════════════════════════════════════════════════════════════ -->
  <article class="py-12 sm:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Header -->
      <header class="mb-10 scroll-animate">
        <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider rounded-full bg-[#00d4ff]/10 text-[#00d4ff] mb-4">
          <?= esc($post['category']) ?>
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-gray-900 leading-tight" style="font-family:'Times New Roman',Georgia,serif">
          <?= esc($post['title']) ?>
        </h1>
        <div class="mt-4 flex flex-wrap items-center gap-4 text-sm text-gray-400">
          <span>By <?= esc($post['author']) ?></span>
          <span>&middot;</span>
          <time datetime="<?= esc($post['date']) ?>">[PLACEHOLDER_FORMATTED_DATE]</time>
          <span>&middot;</span>
          <span><?= esc($post['reading']) ?></span>
        </div>
      </header>

      <!-- Cover image placeholder — replace with actual image -->
      <div class="w-full h-64 sm:h-80 rounded-2xl bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10 mb-10 scroll-animate" aria-hidden="true">
        <!-- [PLACEHOLDER_COVER_IMAGE] Replace this div with: <img src="/path/to/image.jpg" alt="..." class="w-full h-64 sm:h-80 rounded-2xl object-cover mb-10 scroll-animate"> -->
      </div>

      <!-- Article body — write your content here -->
      <!-- [PLACEHOLDER_ARTICLE_BODY] -->
      <div class="prose prose-lg max-w-none scroll-animate space-y-6 text-gray-700 leading-relaxed">

        <p>
          [PLACEHOLDER_INTRO_PARAGRAPH] — Write a compelling introduction that hooks the reader and previews the article's key points.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          [PLACEHOLDER_SECTION_1_HEADING]
        </h2>
        <p>
          [PLACEHOLDER_SECTION_1_BODY] — Develop your first major point here. Aim for 2-4 sentences per paragraph.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          [PLACEHOLDER_SECTION_2_HEADING]
        </h2>
        <p>
          [PLACEHOLDER_SECTION_2_BODY] — Continue with your second major point. Add additional paragraphs as needed.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4" style="font-family:'Times New Roman',Georgia,serif">
          [PLACEHOLDER_SECTION_3_HEADING]
        </h2>
        <p>
          [PLACEHOLDER_SECTION_3_BODY] — Third section content goes here.
        </p>

        <p>
          [PLACEHOLDER_CONCLUSION] — Wrap up with a strong concluding paragraph that reinforces your key message and invites further engagement.
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

      <!-- Author byline — update bio text -->
      <div class="mt-10 p-6 bg-white border border-gray-200 rounded-2xl flex items-start gap-4 scroll-animate">
        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-[#00d4ff] to-[#6c63ff] shrink-0" aria-hidden="true">
          <!-- [PLACEHOLDER_AUTHOR_AVATAR] Replace with <img> when available -->
        </div>
        <div>
          <p class="font-semibold text-gray-900"><?= esc($post['author']) ?></p>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">
            [PLACEHOLDER_AUTHOR_BIO] — Write a 1-2 sentence bio for the author or team.
          </p>
        </div>
      </div>

    </div>
  </article>


  <!-- ════════════════════════════════════════════════════════════════════════
       RELATED POSTS — update with relevant links
       ═══════════════════════════════════════════════════════════════════════ -->
  <section class="py-16 bg-white" aria-labelledby="related-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 id="related-heading" class="text-2xl font-bold tracking-tight text-gray-900 mb-8" style="font-family:'Times New Roman',Georgia,serif">
        Related Posts
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- [PLACEHOLDER_RELATED_POST_1] -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#00d4ff]/10 to-[#6c63ff]/10"></div>
          <div class="p-6">
            <time datetime="[PLACEHOLDER_DATE]" class="text-xs text-gray-400 uppercase tracking-wider">[PLACEHOLDER_FORMATTED_DATE]</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              [PLACEHOLDER_RELATED_TITLE_1]
            </h3>
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              [PLACEHOLDER_RELATED_EXCERPT_1]
            </p>
            <a href="/blog/posts/[PLACEHOLDER_RELATED_SLUG_1]" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
              Read More
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </article>

        <!-- [PLACEHOLDER_RELATED_POST_2] -->
        <article class="scroll-animate group bg-[#fafafa] border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="h-48 bg-gradient-to-br from-[#6c63ff]/10 to-[#00d4ff]/10"></div>
          <div class="p-6">
            <time datetime="[PLACEHOLDER_DATE]" class="text-xs text-gray-400 uppercase tracking-wider">[PLACEHOLDER_FORMATTED_DATE]</time>
            <h3 class="mt-2 text-lg font-bold text-gray-900 group-hover:text-[#00d4ff] transition-colors duration-200" style="font-family:'Times New Roman',Georgia,serif">
              [PLACEHOLDER_RELATED_TITLE_2]
            </h3>
            <p class="mt-2 text-sm text-gray-500 leading-relaxed line-clamp-3">
              [PLACEHOLDER_RELATED_EXCERPT_2]
            </p>
            <a href="/blog/posts/[PLACEHOLDER_RELATED_SLUG_2]" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#00d4ff] hover:text-[#6c63ff] transition-colors duration-200">
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
