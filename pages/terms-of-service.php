<?php
$page_title = "Terms of Service | RAW HUB";
$base_path = "../";
$home_link = "../index.php";
$about_link = "about.php";
$products_link = "product.php";
$gallery_link = "gallery.php";
$blog_link = "blog.php";
$reviews_link = "reviews.php";
$contact_link = "contact.php";

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- =========================
TERMS HERO
========================= -->
<section class="relative pt-40 pb-32 overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=2000&q=80" 
         class="w-full h-full object-cover" alt="Terms">
    <div class="absolute inset-0 bg-primary/80"></div>
  </div>

  <div class="relative max-w-container-max mx-auto px-margin-desktop text-center">
    <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur text-white text-sm font-semibold mb-6">
      <span class="material-symbols-outlined">gavel</span>
      Legal Information
    </span>

    <h1 class="font-display-lg text-5xl md:text-6xl text-white font-bold mb-8">
      Terms of Service
    </h1>

    <p class="text-white/80 max-w-3xl mx-auto text-lg leading-relaxed">
      Welcome to RAWB2C . By accessing or using our platform, you agree to these Terms of Service.
    </p>
  </div>
</section>

<!-- =========================
SUMMARY CARDS
========================= -->
<section class="py-20 bg-surface-container-low">
  <div class="max-w-container-max mx-auto px-margin-desktop">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-white rounded-3xl shadow-premium p-8">
        <div class="w-14 h-14 rounded-2xl bg-primary-fixed flex items-center justify-center mb-6">
          <span class="material-symbols-outlined text-primary text-3xl">handshake</span>
        </div>
        <h3 class="font-bold text-xl mb-3">Clear Agreement</h3>
        <p class="text-on-surface-variant">We believe in transparency. These terms clearly explain your rights and responsibilities.</p>
      </div>

      <div class="bg-white rounded-3xl shadow-premium p-8">
        <div class="w-14 h-14 rounded-2xl bg-secondary-container flex items-center justify-center mb-6">
          <span class="material-symbols-outlined text-secondary text-3xl">verified_user</span>
        </div>
        <h3 class="font-bold text-xl mb-3">Trusted Platform</h3>
        <p class="text-on-surface-variant">We work hard to maintain a safe and reliable marketplace for everyone.</p>
      </div>

      <div class="bg-white rounded-3xl shadow-premium p-8">
        <div class="w-14 h-14 rounded-2xl bg-tertiary-fixed flex items-center justify-center mb-6">
          <span class="material-symbols-outlined text-tertiary text-3xl">support_agent</span>
        </div>
        <h3 class="font-bold text-xl mb-3">Fair Resolution</h3>
        <p class="text-on-surface-variant">We are committed to resolving issues fairly and helping both customers and service providers.</p>
      </div>

      <div class="bg-white rounded-3xl shadow-premium p-8">
        <div class="w-14 h-14 rounded-2xl bg-primary-container flex items-center justify-center mb-6">
          <span class="material-symbols-outlined text-primary text-3xl">gavel</span>
        </div>
        <h3 class="font-bold text-xl mb-3">Legal Protection</h3>
        <p class="text-on-surface-variant">These terms protect both RAW HUB and our users while promoting fair practices.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================
TERMS CONTENT
========================= -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-4 gap-12">

      <!-- LEFT NAV -->
      <div class="lg:col-span-1">
        <div class="sticky top-8 bg-white rounded-3xl shadow p-8 border border-slate-100">
          <h3 class="font-bold text-xl mb-6 text-primary">Terms Navigation</h3>
          <nav class="space-y-4 text-slate-600">
            <a href="#about" class="block hover:text-primary transition">1. About RAW HUB</a>
            <a href="#responsibilities" class="block hover:text-primary transition">2. User Responsibilities</a>
            <a href="#booking" class="block hover:text-primary transition">3. Booking Services</a>
            <a href="#providers" class="block hover:text-primary transition">4. Service Providers</a>
            <a href="#payments" class="block hover:text-primary transition">5. Payments</a>
            <a href="#cancellation" class="block hover:text-primary transition">6. Cancellation & Refunds</a>
            <a href="#limitation" class="block hover:text-primary transition">7. Limitation of Responsibility</a>
            <a href="#suspension" class="block hover:text-primary transition">8. Account Suspension</a>
            <a href="#ip" class="block hover:text-primary transition">9. Intellectual Property</a>
            <a href="#changes" class="block hover:text-primary transition">10. Changes to Terms</a>
          </nav>
        </div>
      </div>

      <!-- MAIN CONTENT -->
      <div class="lg:col-span-3 space-y-12">

        <div id="about" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">1. About RAW HUB</h3>
          <p class="text-on-surface-variant leading-8">
            RAW HUB is a platform designed to connect individuals, households, and businesses with reliable service providers, workmen, and everyday solutions including home services, errands, repairs, maintenance, and other professional services.
          </p>
        </div>

        <div id="responsibilities" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">2. User Responsibilities</h3>
          <p class="text-on-surface-variant leading-8 mb-6">By using RAW HUB, you agree to:</p>
          <ul class="space-y-4 text-on-surface-variant list-disc pl-6">
            <li>Provide accurate and complete information</li>
            <li>Use the platform responsibly and lawfully</li>
            <li>Treat service providers with respect</li>
            <li>Provide correct details about requested services</li>
            <li>Avoid any fraudulent or harmful activities</li>
          </ul>
        </div>

        <div id="booking" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">3. Booking Services</h3>
          <p class="text-on-surface-variant leading-8">
            When you request a service through RAW HUB, you agree that the details provided are accurate. 
            Service availability depends on suitable providers. Pricing may vary depending on the nature of the job, and additional charges may apply if the scope of work changes.
          </p>
        </div>

        <div id="providers" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">4. Service Providers</h3>
          <p class="text-on-surface-variant leading-8">
            RAW HUB works with independent professionals and partners. Service providers are responsible for delivering the agreed service, maintaining professional conduct, and following safety standards. 
            RAW HUB provides trusted connections but does not replace the direct relationship between customers and service providers.
          </p>
        </div>

        <div id="payments" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">5. Payments</h3>
          <p class="text-on-surface-variant leading-8">
            Payment terms depend on the service requested. Users agree to complete payments according to the agreed arrangement. 
            RAW HUB may update pricing structures, fees, or payment methods when necessary.
          </p>
        </div>

        <div id="cancellation" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">6. Cancellation and Refunds</h3>
          <p class="text-on-surface-variant leading-8">
            Cancellation policies may vary depending on the service. Refund decisions may depend on service status, work already completed, and costs already incurred.
          </p>
        </div>

        <div id="limitation" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">7. Limitation of Responsibility</h3>
          <p class="text-on-surface-variant leading-8">
            RAW HUB provides a platform that connects customers and service providers. We are not responsible for delays caused by circumstances outside our control, independent actions of service providers, or incorrect information provided by users. 
            We will, however, make reasonable efforts to resolve complaints and improve service quality.
          </p>
        </div>

        <div id="suspension" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">8. Account Suspension</h3>
          <p class="text-on-surface-variant leading-8">
            RAW HUB may suspend or restrict accounts involved in fraud, abuse of the platform, false information, or activities that affect other users.
          </p>
        </div>

        <div id="ip" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">9. Intellectual Property</h3>
          <p class="text-on-surface-variant leading-8">
            All RAW HUB branding, logos, content, designs, and materials belong to RAW B2C LTD and cannot be used without permission.
          </p>
        </div>

        <div id="changes" class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-6">10. Changes to Terms</h3>
          <p class="text-on-surface-variant leading-8">
            RAW HUB may update these Terms of Service when necessary. Continued use of our services means you accept the updated terms.
          </p>
        </div>

        <!-- Contact -->
        <div class="bg-white rounded-[32px] shadow-premium p-10">
          <h3 class="text-3xl font-bold text-primary mb-8">11. Contact Us</h3>
          <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-surface-container-low rounded-2xl p-6 text-center">
              <span class="material-symbols-outlined text-primary text-4xl">mail</span>
              <h4 class="font-bold mt-4 mb-2">Email</h4>
              <p>info@rawhub.com</p>
            </div>
            <div class="bg-surface-container-low rounded-2xl p-6 text-center">
              <span class="material-symbols-outlined text-primary text-4xl">call</span>
              <h4 class="font-bold mt-4 mb-2">Phone</h4>
            <p>+234 816 311 8975</p>
            </div>
            <div class="bg-surface-container-low rounded-2xl p-6 text-center">
              <span class="material-symbols-outlined text-primary text-4xl">location_on</span>
              <h4 class="font-bold mt-4 mb-2">Company</h4>
              <p>RAW B2C LTD (RAW HUB)</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>