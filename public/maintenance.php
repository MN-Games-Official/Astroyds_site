<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../src/php/headers.php';
require_once __DIR__ . '/../src/php/template-partials.php';

http_response_code(503);
header('Retry-After: 3600');
send_security_headers();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php
render_head(
    'Under Maintenance | Astroyds',
    'Astroyds is currently undergoing scheduled maintenance. We will be back soon.',
    '/maintenance'
);
?>

<body class="bg-[#1a1a2e] text-white antialiased font-sans min-h-screen flex flex-col items-center justify-center">

  <main id="main-content" class="flex-1 flex items-center justify-center w-full px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl mx-auto text-center py-24">

      <!-- Logo -->
      <a href="/" class="inline-block mb-12" aria-label="Astroyds home">
        <span class="text-3xl sm:text-4xl font-bold tracking-tight" style="font-family:'Times New Roman',Georgia,serif">
          <span class="text-white">Astro</span><span class="text-[#6c63ff]">yds</span>
        </span>
      </a>

      <!-- Pulsing indicator -->
      <div class="flex items-center justify-center gap-3 mb-10" aria-hidden="true">
        <span class="relative flex h-3 w-3">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00d4ff] opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-[#00d4ff]"></span>
        </span>
        <span class="text-sm text-[#00d4ff] font-medium uppercase tracking-widest">Maintenance in progress</span>
      </div>

      <!-- Heading -->
      <h1 class="text-4xl sm:text-5xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        We&rsquo;ll be back soon
      </h1>

      <!-- Description -->
      <p class="text-lg text-gray-400 leading-relaxed mb-8 max-w-md mx-auto">
        We&rsquo;re performing scheduled maintenance to improve your experience. Everything will be back to normal shortly.
      </p>

      <!-- Estimated return -->
      <div class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-sm text-gray-300 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#6c63ff]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Estimated return: <strong class="text-white">within 1 hour</strong>
      </div>

      <!-- Contact -->
      <p class="text-sm text-gray-500">
        For urgent matters, contact us at
        <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline">letstalk@astroyds.com</a>
      </p>

    </div>
  </main>

<script src="/src/js/main.js" defer></script>
<script src="/src/js/analytics.js" defer></script>

</body>
</html>
