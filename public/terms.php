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
    'Terms of Use | Astroyds',
    'Review the Astroyds terms of use — the rules and guidelines governing your use of our website and services.',
    '/terms'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('terms'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Terms of Use', 'url' => '/terms'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="terms-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Terms of Use hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Terms of Use
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Please read these terms carefully before using our Site
      </p>
    </div>
  </section>

  <!-- ============================================================
       TERMS OF USE CONTENT
       ============================================================ -->
  <section class="py-24 bg-white" aria-labelledby="terms-content-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">

        <p class="text-sm text-gray-400 mb-10">Last updated: January 1, 2025</p>

        <!-- Acceptance of Terms -->
        <h2 id="terms-content-heading" class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          1. Acceptance of Terms
        </h2>
        <p>
          By accessing or using the Astroyds website at <a href="https://astroyds.com" class="text-[#6c63ff] hover:underline">astroyds.com</a> (the &ldquo;Site&rdquo;), you agree to be bound by these Terms of Use (&ldquo;Terms&rdquo;). If you do not agree to these Terms, you must not access or use the Site.
        </p>
        <p>
          These Terms constitute a legally binding agreement between you and Astroyds, a sole proprietorship located in Maple Grove, Hennepin County, Minnesota 55311, USA (&ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;).
        </p>

        <!-- Description of Service -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          2. Description of Service
        </h2>
        <p>
          Astroyds operates this Site to provide information about our company, our mission, our research in artificial intelligence, and our products and services. The Site includes informational pages, a contact form, a blog, and other content that may be updated from time to time.
        </p>

        <!-- Intellectual Property Rights -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          3. Intellectual Property Rights
        </h2>
        <p>
          All content on this Site &mdash; including but not limited to text, graphics, logos, icons, images, audio clips, software, and the compilation thereof &mdash; is the property of Astroyds or its content suppliers and is protected by United States and international copyright, trademark, and other intellectual property laws.
        </p>
        <p>
          You may not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store, or transmit any material on our Site without our prior written consent, except as follows:
        </p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li>Your computer may temporarily store copies of such materials in RAM incidental to your accessing and viewing those materials.</li>
          <li>You may store files that are automatically cached by your web browser for display enhancement purposes.</li>
          <li>You may print or download one copy of a reasonable number of pages of the Site for your own personal, non-commercial use and not for further reproduction, publication, or distribution.</li>
        </ul>

        <!-- User Conduct -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          4. User Conduct
        </h2>
        <p>You agree not to use the Site in any manner that:</p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li>Violates any applicable federal, state, local, or international law or regulation</li>
          <li>Infringes upon or violates the intellectual property rights or privacy rights of any third party</li>
          <li>Attempts to interfere with, compromise the system integrity or security of, or decipher any transmissions to or from the servers running the Site</li>
          <li>Introduces any viruses, Trojan horses, worms, logic bombs, or other material that is malicious or technologically harmful</li>
          <li>Uses any robot, spider, scraper, or other automated means to access the Site for any purpose without our express written permission</li>
          <li>Impersonates or attempts to impersonate Astroyds, an Astroyds employee, or any other person or entity</li>
          <li>Engages in any activity that could disable, overburden, damage, or impair the Site</li>
        </ul>

        <!-- Contact Form Submissions -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          5. Contact Form Submissions
        </h2>
        <p>
          When you submit information through our contact form, you represent and warrant that the information you provide is accurate and complete. You agree that we may use the information you submit to respond to your inquiry, improve our services, and for other purposes described in our <a href="/privacy" class="text-[#6c63ff] hover:underline">Privacy Policy</a>.
        </p>
        <p>
          You acknowledge that any submissions through our contact form are non-confidential and non-proprietary unless otherwise stated by us in writing. We are under no obligation to respond to any submission, though we endeavour to respond to all legitimate inquiries in a timely manner.
        </p>

        <!-- Disclaimer of Warranties -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          6. Disclaimer of Warranties
        </h2>
        <p>
          THE SITE AND ALL CONTENT, MATERIALS, INFORMATION, AND SERVICES PROVIDED ON THE SITE ARE PROVIDED ON AN &ldquo;AS IS&rdquo; AND &ldquo;AS AVAILABLE&rdquo; BASIS WITHOUT ANY WARRANTIES OF ANY KIND, WHETHER EXPRESS, IMPLIED, STATUTORY, OR OTHERWISE. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, ASTROYDS DISCLAIMS ALL WARRANTIES, INCLUDING WITHOUT LIMITATION IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.
        </p>
        <p>
          We do not warrant that the Site will be uninterrupted, timely, secure, or error-free, or that any defects will be corrected. We do not warrant the accuracy, completeness, or usefulness of any information on the Site.
        </p>

        <!-- Limitation of Liability -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          7. Limitation of Liability
        </h2>
        <p>
          TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL ASTROYDS, ITS OWNER, EMPLOYEES, AGENTS, OR AFFILIATES BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING WITHOUT LIMITATION LOSS OF PROFITS, DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES, ARISING OUT OF OR IN CONNECTION WITH:
        </p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li>Your access to or use of, or inability to access or use, the Site</li>
          <li>Any conduct or content of any third party on the Site</li>
          <li>Any content obtained from the Site</li>
          <li>Unauthorised access, use, or alteration of your transmissions or content</li>
        </ul>
        <p>
          In no event shall our aggregate liability exceed one hundred United States dollars (USD $100.00).
        </p>

        <!-- Indemnification -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          8. Indemnification
        </h2>
        <p>
          You agree to defend, indemnify, and hold harmless Astroyds and its owner, employees, agents, and affiliates from and against any and all claims, damages, obligations, losses, liabilities, costs, or debt, and expenses (including but not limited to attorney&rsquo;s fees) arising from: (a) your use of and access to the Site; (b) your violation of any provision of these Terms; or (c) your violation of any third-party right, including without limitation any intellectual property, privacy, or proprietary right.
        </p>

        <!-- Governing Law -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          9. Governing Law
        </h2>
        <p>
          These Terms shall be governed by and construed in accordance with the laws of the State of Minnesota, United States of America, without regard to its conflict of law provisions. You agree that any legal action or proceeding arising out of or relating to these Terms or your use of the Site shall be brought exclusively in the state or federal courts located in Hennepin County, Minnesota, and you consent to the personal jurisdiction of such courts.
        </p>

        <!-- Dispute Resolution -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          10. Dispute Resolution
        </h2>
        <p>
          Before initiating any legal proceedings, you agree to first attempt to resolve any dispute informally by contacting us at <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline">letstalk@astroyds.com</a>. We will endeavour to resolve the dispute through good-faith negotiation within 30 days of receiving your notice. If the dispute cannot be resolved informally, either party may pursue legal remedies as described in Section 9.
        </p>

        <!-- Modifications to Terms -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          11. Modifications to Terms
        </h2>
        <p>
          We reserve the right to modify these Terms at any time at our sole discretion. When we make material changes, we will update the &ldquo;Last updated&rdquo; date at the top of this page. Your continued use of the Site after any modifications constitutes your acceptance of the revised Terms. We encourage you to review these Terms periodically.
        </p>

        <!-- Severability -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          12. Severability
        </h2>
        <p>
          If any provision of these Terms is held to be invalid, illegal, or unenforceable by a court of competent jurisdiction, such invalidity, illegality, or unenforceability shall not affect any other provision of these Terms. The remaining provisions shall continue in full force and effect, and the invalid or unenforceable provision shall be modified to the minimum extent necessary to make it valid, legal, and enforceable.
        </p>

        <!-- Entire Agreement -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          13. Entire Agreement
        </h2>
        <p>
          These Terms, together with our <a href="/privacy" class="text-[#6c63ff] hover:underline">Privacy Policy</a>, constitute the entire agreement between you and Astroyds with respect to your use of the Site and supersede all prior or contemporaneous understandings, agreements, representations, and warranties, whether written or oral, regarding the Site.
        </p>

        <!-- Contact Information -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          14. Contact Information
        </h2>
        <p>
          If you have any questions or concerns about these Terms, please contact us:
        </p>
        <div class="mt-6 p-6 bg-[#fafafa] rounded-2xl border border-gray-200">
          <p class="font-semibold text-gray-900 mb-2">Astroyds</p>
          <p>Maple Grove, Hennepin County, Minnesota 55311, USA</p>
          <p class="mt-2">
            Email: <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline">letstalk@astroyds.com</a>
          </p>
        </div>

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
