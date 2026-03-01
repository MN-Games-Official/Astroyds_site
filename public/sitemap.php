<?php
/**
 * Sitemap.xml generator for Astroyds
 */
header('Content-Type: application/xml; charset=utf-8');

$base = 'https://astroyds.com';
$pages = [
    ['loc' => '/',                          'priority' => '1.0', 'changefreq' => 'weekly'],
    ['loc' => '/about.php',                 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/companies/',                'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/companies/idle.php',        'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/companies/rift.php',        'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/companies/bulletproof.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/research/',                 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/safety.php',               'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/blog/',                     'priority' => '0.8', 'changefreq' => 'daily'],
    ['loc' => '/blog/posts/ai-safety-future.php',          'priority' => '0.6', 'changefreq' => 'monthly'],
    ['loc' => '/blog/posts/introducing-idle.php',          'priority' => '0.6', 'changefreq' => 'monthly'],
    ['loc' => '/blog/posts/responsible-ai-framework.php',  'priority' => '0.6', 'changefreq' => 'monthly'],
    ['loc' => '/contact.php',              'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/privacy.php',              'priority' => '0.3', 'changefreq' => 'yearly'],
    ['loc' => '/terms.php',                'priority' => '0.3', 'changefreq' => 'yearly'],
];

$date = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
    <url>
        <loc><?= htmlspecialchars($base . $page['loc'], ENT_XML1) ?></loc>
        <lastmod><?= $date ?></lastmod>
        <changefreq><?= $page['changefreq'] ?></changefreq>
        <priority><?= $page['priority'] ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
