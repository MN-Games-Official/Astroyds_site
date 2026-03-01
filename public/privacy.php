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
    'Privacy Policy | Astroyds',
    'Read the Astroyds privacy policy — how we collect, use, and protect your personal data. GDPR-compliant and transparent.',
    '/privacy'
);
?>

<body class="bg-[#fafafa] text-gray-900 antialiased font-sans">
<?php render_header('privacy'); ?>

<main id="main-content">

  <?php render_breadcrumbs([
      ['label' => 'Home', 'url' => '/'],
      ['label' => 'Privacy Policy', 'url' => '/privacy'],
  ]); ?>

  <!-- ============================================================
       HERO / BANNER
       ============================================================ -->
  <section id="privacy-hero" class="relative py-28 sm:py-36 bg-[#1a1a2e] text-white text-center overflow-hidden" aria-label="Privacy Policy hero">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1a1a2e] to-[#0f0f23] opacity-90" aria-hidden="true"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6" style="font-family:'Times New Roman',Georgia,serif">
        Privacy Policy
      </h1>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Your privacy matters to us
      </p>
    </div>
  </section>

  <!-- ============================================================
       PRIVACY POLICY CONTENT
       ============================================================ -->
  <section class="py-24 bg-white" aria-labelledby="privacy-content-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">

        <p class="text-sm text-gray-400 mb-10">Last updated: January 1, 2025</p>

        <!-- Introduction -->
        <h2 id="privacy-content-heading" class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          1. Introduction
        </h2>
        <p>
          Astroyds (&ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;) is a sole proprietorship located in Maple Grove, Hennepin County, Minnesota 55311, USA. We are committed to protecting and respecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your personal data when you visit our website at <a href="https://astroyds.com" class="text-[#6c63ff] hover:underline">astroyds.com</a> (the &ldquo;Site&rdquo;).
        </p>
        <p>
          By using our Site, you acknowledge that you have read and understood this Privacy Policy. If you do not agree with the practices described herein, please do not use our Site.
        </p>

        <!-- Information We Collect -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          2. Information We Collect
        </h2>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">2.1 Information You Provide</h3>
        <p>When you use our contact form, we collect the following personal data:</p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Name</strong> &mdash; your full name</li>
          <li><strong>Email address</strong> &mdash; so we can respond to your inquiry</li>
          <li><strong>Company name</strong> &mdash; if provided</li>
          <li><strong>Role / job title</strong> &mdash; if provided</li>
          <li><strong>Message content</strong> &mdash; the text of your inquiry</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">2.2 Information Collected Automatically</h3>
        <p>When you visit our Site, we may automatically collect certain information, including:</p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Cookies</strong> &mdash; small data files stored on your device to maintain session state and remember your preferences (see Section 5)</li>
          <li><strong>Analytics data via Microsoft Clarity</strong> &mdash; including heatmaps, session recordings, page views, click patterns, scroll depth, device type, browser type, operating system, screen resolution, and general geographic location (country/region level)</li>
          <li><strong>Log data</strong> &mdash; IP address, browser type, referring URL, pages visited, and timestamps</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">2.3 Information We Do Not Collect</h3>
        <p>
          We do not collect sensitive personal data such as racial or ethnic origin, political opinions, religious beliefs, health data, or biometric data.
        </p>

        <!-- How We Use Your Information -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          3. How We Use Your Information
        </h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li>To respond to your inquiries and provide customer support</li>
          <li>To improve our Site&rsquo;s functionality and user experience</li>
          <li>To analyse usage patterns and optimise our content and services</li>
          <li>To maintain the security and integrity of our Site</li>
          <li>To comply with legal obligations</li>
          <li>To detect, prevent, and address technical issues or abuse</li>
        </ul>

        <!-- Legal Bases for Processing (GDPR) -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          4. Legal Bases for Processing (GDPR)
        </h2>
        <p>If you are located in the European Economic Area (EEA) or the United Kingdom, we process your personal data on the following legal bases:</p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Consent</strong> &mdash; Where you have given us explicit consent to process your data, such as when you submit a contact form or accept cookies. You may withdraw your consent at any time.</li>
          <li><strong>Legitimate interests</strong> &mdash; Where processing is necessary for our legitimate interests (e.g., improving our services, understanding how visitors use our Site, ensuring security), provided those interests are not overridden by your rights and freedoms.</li>
          <li><strong>Legal obligation</strong> &mdash; Where processing is necessary to comply with a legal obligation to which we are subject.</li>
        </ul>

        <!-- Cookies and Tracking Technologies -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          5. Cookies and Tracking Technologies
        </h2>
        <p>Our Site uses the following cookies and tracking technologies:</p>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">5.1 Essential Cookies</h3>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Session cookies</strong> &mdash; Temporary cookies that expire when you close your browser. These are necessary for the Site to function properly (e.g., CSRF protection).</li>
          <li><strong>Cookie consent cookie</strong> &mdash; Stores your cookie preference so we do not repeatedly ask for your consent. This cookie persists until you clear your browser data.</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">5.2 Analytics Cookies</h3>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Microsoft Clarity</strong> &mdash; We use Microsoft Clarity to understand how visitors interact with our Site. Clarity uses cookies and tracking scripts to collect data including heatmaps, session recordings, page views, and click patterns. Clarity does not collect passwords, payment details, or other sensitive form fields. For more information, see <a href="https://clarity.microsoft.com/terms" class="text-[#6c63ff] hover:underline" target="_blank" rel="noopener noreferrer">Microsoft Clarity&rsquo;s Terms of Service</a> and <a href="https://privacy.microsoft.com/privacystatement" class="text-[#6c63ff] hover:underline" target="_blank" rel="noopener noreferrer">Microsoft&rsquo;s Privacy Statement</a>.</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">5.3 Managing Cookies</h3>
        <p>
          You can manage or disable cookies through your browser settings. Please note that disabling essential cookies may affect the functionality of our Site. You can also withdraw your cookie consent at any time by clearing your browser cookies and revisiting our Site.
        </p>

        <!-- Data Retention -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          6. Data Retention
        </h2>
        <p>
          We retain your personal data only for as long as necessary to fulfil the purposes for which it was collected:
        </p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Contact form submissions</strong> &mdash; Retained for up to 24 months from the date of submission, unless a longer retention period is required by law or necessary for ongoing correspondence.</li>
          <li><strong>Analytics data</strong> &mdash; Retained in accordance with Microsoft Clarity&rsquo;s data retention policies (typically up to 13 months).</li>
          <li><strong>Session cookies</strong> &mdash; Expire when you close your browser.</li>
          <li><strong>Consent cookies</strong> &mdash; Persist until you clear your browser data.</li>
        </ul>
        <p>
          When personal data is no longer needed, we securely delete or anonymise it.
        </p>

        <!-- Your Rights -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          7. Your Rights
        </h2>
        <p>
          If you are located in the EEA, the United Kingdom, or other jurisdictions with applicable data protection laws, you have the following rights regarding your personal data:
        </p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li><strong>Right of access</strong> &mdash; You have the right to request a copy of the personal data we hold about you.</li>
          <li><strong>Right to rectification</strong> &mdash; You have the right to request correction of any inaccurate or incomplete personal data.</li>
          <li><strong>Right to erasure</strong> &mdash; You have the right to request deletion of your personal data, subject to certain legal exceptions.</li>
          <li><strong>Right to data portability</strong> &mdash; You have the right to receive your personal data in a structured, commonly used, and machine-readable format.</li>
          <li><strong>Right to restriction of processing</strong> &mdash; You have the right to request that we restrict the processing of your personal data under certain circumstances.</li>
          <li><strong>Right to object</strong> &mdash; You have the right to object to the processing of your personal data based on legitimate interests or for direct marketing purposes.</li>
          <li><strong>Right to withdraw consent</strong> &mdash; Where processing is based on consent, you have the right to withdraw your consent at any time without affecting the lawfulness of processing carried out before withdrawal.</li>
          <li><strong>Right to lodge a complaint</strong> &mdash; You have the right to lodge a complaint with a supervisory authority in the EU member state of your habitual residence, place of work, or place of the alleged infringement.</li>
        </ul>
        <p>
          To exercise any of these rights, please contact us at <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline">letstalk@astroyds.com</a>. We will respond to your request within 30 days.
        </p>

        <!-- International Data Transfers -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          8. International Data Transfers
        </h2>
        <p>
          Our Site is hosted and operated in the United States. If you are accessing our Site from outside the United States, please be aware that your personal data may be transferred to, stored, and processed in the United States, where data protection laws may differ from those in your jurisdiction.
        </p>
        <p>
          Where we transfer personal data from the EEA or the United Kingdom to the United States, we rely on appropriate safeguards, including the EU-U.S. Data Privacy Framework, standard contractual clauses, or other legally recognised transfer mechanisms, to ensure your data is adequately protected.
        </p>

        <!-- Data Security -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          9. Data Security
        </h2>
        <p>
          We implement appropriate technical and organisational measures to protect your personal data against unauthorised access, alteration, disclosure, or destruction. These measures include:
        </p>
        <ul class="list-disc pl-6 space-y-2 my-4">
          <li>HTTPS/TLS encryption for all data transmitted between your browser and our servers</li>
          <li>CSRF (Cross-Site Request Forgery) protection on all forms</li>
          <li>Content Security Policy (CSP) headers to prevent cross-site scripting attacks</li>
          <li>Rate limiting to prevent abuse of our services</li>
          <li>Input sanitisation and validation on all user-submitted data</li>
          <li>Secure storage of contact form submissions with restricted access</li>
        </ul>
        <p>
          While we strive to use commercially acceptable means to protect your personal data, no method of transmission over the Internet or method of electronic storage is 100% secure. We cannot guarantee absolute security.
        </p>

        <!-- Third-Party Services -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          10. Third-Party Services
        </h2>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">10.1 Microsoft Clarity</h3>
        <p>
          We use Microsoft Clarity, a web analytics service provided by Microsoft Corporation, to analyse how visitors use our Site. Clarity collects data through cookies and tracking scripts, including heatmaps, session recordings, page views, click patterns, scroll depth, and device information. This data helps us understand user behaviour and improve our Site.
        </p>
        <p>
          Microsoft Clarity may share data with Microsoft Advertising. For more information about how Microsoft processes your data, please review <a href="https://privacy.microsoft.com/privacystatement" class="text-[#6c63ff] hover:underline" target="_blank" rel="noopener noreferrer">Microsoft&rsquo;s Privacy Statement</a>.
        </p>

        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">10.2 Third-Party Links</h3>
        <p>
          Our Site may contain links to third-party websites. We are not responsible for the privacy practices or content of those websites. We encourage you to review the privacy policies of any third-party sites you visit.
        </p>

        <!-- Children's Privacy -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          11. Children&rsquo;s Privacy
        </h2>
        <p>
          Our Site is not directed at children under the age of 16. We do not knowingly collect personal data from children under 16. If we become aware that we have collected personal data from a child under 16 without parental consent, we will take steps to delete that information promptly. If you believe we may have collected data from a child under 16, please contact us at <a href="mailto:letstalk@astroyds.com" class="text-[#6c63ff] hover:underline">letstalk@astroyds.com</a>.
        </p>

        <!-- Changes to This Policy -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          12. Changes to This Policy
        </h2>
        <p>
          We may update this Privacy Policy from time to time to reflect changes in our practices, technologies, legal requirements, or other factors. When we make material changes, we will update the &ldquo;Last updated&rdquo; date at the top of this page. We encourage you to review this Privacy Policy periodically to stay informed about how we protect your data.
        </p>

        <!-- Contact Us -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-16 mb-6" style="font-family:'Times New Roman',Georgia,serif">
          13. Contact Us
        </h2>
        <p>
          If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:
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
