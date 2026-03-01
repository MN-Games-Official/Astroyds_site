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
    'Contact Us | Astroyds',
    'Get in touch with the Astroyds team. Whether you have a question, partnership inquiry, or just want to say hello — we\'d love to hear from you.',
    '/contact'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('contact'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Contact', 'url' => '/contact'],
  ]); ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section id="contact-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Contact hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Get in Touch
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        We'd love to hear from you
      </p>
    </div>
  </section>

  <!-- ============================================================
       CONTACT FORM + SIDEBAR
       ============================================================ -->
  <section id="contact-form-section" class="py-24 bg-white" aria-labelledby="contact-form-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-20">

        <!-- Contact Form -->
        <div class="lg:col-span-2 scroll-animate">
          <h2 id="contact-form-heading" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-8" style="font-family:'Times New Roman',Georgia,serif">
            Send Us a Message
          </h2>

          <div id="form-success" class="hidden mb-6 rounded-xl bg-green-50 border border-green-200 p-4 text-green-800" role="status" aria-live="polite">
            Thank you! Your message has been sent. We'll get back to you soon.
          </div>
          <div id="form-error" class="hidden mb-6 rounded-xl bg-red-50 border border-red-200 p-4 text-red-800" role="alert" aria-live="assertive"></div>

          <form action="/src/php/contact-endpoint.php" method="POST" data-contact-form aria-label="Contact form" novalidate>
            <?php echo csrf_token_field(); ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

              <!-- Name -->
              <div class="form-group">
                <label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1">
                  Name <span class="text-red-500" aria-hidden="true">*</span>
                </label>
                <input
                  type="text"
                  id="contact-name"
                  name="name"
                  required
                  minlength="2"
                  maxlength="100"
                  autocomplete="name"
                  aria-required="true"
                  placeholder="Your full name"
                  class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition"
                >
                <p class="field-error mt-1 text-sm text-red-600" aria-live="polite"></p>
              </div>

              <!-- Email -->
              <div class="form-group">
                <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1">
                  Email <span class="text-red-500" aria-hidden="true">*</span>
                </label>
                <input
                  type="email"
                  id="contact-email"
                  name="email"
                  required
                  maxlength="254"
                  autocomplete="email"
                  aria-required="true"
                  placeholder="you@example.com"
                  class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition"
                >
                <p class="field-error mt-1 text-sm text-red-600" aria-live="polite"></p>
              </div>

              <!-- Company -->
              <div class="form-group">
                <label for="contact-company" class="block text-sm font-medium text-gray-700 mb-1">
                  Company
                </label>
                <input
                  type="text"
                  id="contact-company"
                  name="company"
                  maxlength="100"
                  autocomplete="organization"
                  placeholder="Your company (optional)"
                  class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition"
                >
              </div>

              <!-- Role -->
              <div class="form-group">
                <label for="contact-role" class="block text-sm font-medium text-gray-700 mb-1">
                  Role
                </label>
                <input
                  type="text"
                  id="contact-role"
                  name="role"
                  maxlength="100"
                  autocomplete="organization-title"
                  placeholder="Your role (optional)"
                  class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition"
                >
              </div>
            </div>

            <!-- Subject -->
            <div class="form-group mt-6">
              <label for="contact-subject" class="block text-sm font-medium text-gray-700 mb-1">
                Subject <span class="text-red-500" aria-hidden="true">*</span>
              </label>
              <select
                id="contact-subject"
                name="subject"
                required
                aria-required="true"
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 bg-white focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition"
              >
                <option value="" disabled selected>Select a subject</option>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Partnership">Partnership</option>
                <option value="Media">Media</option>
                <option value="Research">Research</option>
                <option value="Careers">Careers</option>
                <option value="Other">Other</option>
              </select>
              <p class="field-error mt-1 text-sm text-red-600" aria-live="polite"></p>
            </div>

            <!-- Message -->
            <div class="form-group mt-6">
              <label for="contact-message" class="block text-sm font-medium text-gray-700 mb-1">
                Message <span class="text-red-500" aria-hidden="true">*</span>
              </label>
              <textarea
                id="contact-message"
                name="message"
                required
                minlength="10"
                maxlength="5000"
                rows="6"
                aria-required="true"
                placeholder="Tell us how we can help…"
                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-[#6c63ff] focus:ring-2 focus:ring-[#6c63ff]/20 transition resize-y"
              ></textarea>
              <p class="field-error mt-1 text-sm text-red-600" aria-live="polite"></p>
            </div>

            <!-- Submit -->
            <div class="mt-8">
              <button
                type="submit"
                class="inline-flex items-center justify-center px-8 py-3 rounded-full bg-[#6c63ff] text-white font-semibold text-base hover:bg-[#5a52e0] focus:outline-none focus:ring-2 focus:ring-[#6c63ff]/50 transition-all duration-200"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>

        <!-- Sidebar -->
        <aside class="scroll-animate" aria-label="Contact information">
          <div class="sticky top-28 space-y-10">

            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-3">Email</h3>
              <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline break-all">
                letstalk@astroyds.com
              </a>
            </div>

            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-3">Location</h3>
              <p class="text-gray-600 leading-relaxed">
                Maple Grove, Minnesota, USA
              </p>
            </div>

            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-3">Response Time</h3>
              <p class="text-gray-600 leading-relaxed">
                We typically respond within 48 hours.
              </p>
            </div>

          </div>
        </aside>

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
