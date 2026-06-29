<?php

$page_title = "Legal Center | RAW HUB";
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
LEGAL HERO
========================= -->

<section class="relative pt-40 pb-32 overflow-hidden">

    <div class="absolute inset-0">

        <img
            src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=2000&q=80"
            class="w-full h-full object-cover"
            alt="Legal">

        <div class="absolute inset-0 bg-primary/80"></div>

    </div>

    <div class="relative max-w-container-max mx-auto px-margin-desktop text-center">

        <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur text-white text-sm font-semibold mb-6 reveal active">

            <span class="material-symbols-outlined">gavel</span>

            Legal Information

        </span>

        <h1 class="font-display-lg text-5xl md:text-6xl text-white font-bold mb-8 reveal active delay-100">

            Privacy Policy 

        </h1>

        <p class="text-white/80 max-w-3xl mx-auto text-lg leading-relaxed reveal active delay-200">

            At RAW HUB, transparency and trust are at the heart of everything we do.
            This Legal Centre explains how we collect, use, protect and manage your
            information while outlining the terms that govern the use of our platform.

        </p>

    </div>

</section>

<!-- =========================
SUMMARY CARDS
========================= -->


<!-- =========================
CONTENT
========================= -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-4 gap-12">

      <!-- LEFT NAV -->
      <div class="lg:col-span-1">
        <div class="sticky top-8 bg-white rounded-3xl shadow p-8 border border-slate-100">
          <h3 class="font-bold text-xl mb-6 text-primary">Legal Navigation</h3>
          <nav class="space-y-4 text-slate-600">
            <a href="#privacy" class="flex items-center gap-3 hover:text-primary transition-colors block py-2">Privacy Policy</a>
            <a href="#collection" class="flex items-center gap-3 hover:text-primary transition-colors block py-2">Information We Collect</a>
            <a href="#usage" class="flex items-center gap-3 hover:text-primary transition-colors block py-2">How We Use Information</a>
            <a href="#sharing" class="flex items-center gap-3 hover:text-primary transition-colors block py-2">Sharing Information</a>
            <a href="#security" class="flex items-center gap-3 hover:text-primary transition-colors block py-2">Data Security</a>
          </nav>
        </div>
      </div>

      <!-- MAIN CONTENT -->
      <div class="lg:col-span-3 space-y-12">

        <!-- Privacy Policy -->
        <div id="privacy" class="bg-white rounded-3xl shadow p-10 border border-slate-100">
          <span class="uppercase tracking-widest text-primary font-bold text-sm">Privacy Policy</span>
          <h2 class="text-4xl font-bold mt-4 mb-6">RAW B2C LTD (RAW HUB)</h2>
          <p class="text-slate-600 leading-relaxed">
            <strong>Effective Date:</strong> [Insert Date]<br><br>
            RAW B2C LTD ("RAW HUB", "we", "our", or "us") respects your privacy and is committed to protecting the personal information of our customers...
          </p>
        </div>

        <!-- Information We Collect -->
        <div id="collection" class="bg-white rounded-3xl shadow p-10 border border-slate-100">
          <h3 class="text-3xl font-bold text-primary mb-8">1. Information We Collect</h3>
          <div class="grid md:grid-cols-2 gap-6">
            <!-- your cards here -->
            <div class="flex gap-4">
              <span class="material-symbols-outlined text-primary">person</span>
              <div>
                <h4 class="font-bold">Personal Details</h4>
                <p>Full name, email address and phone number.</p>
              </div>
            </div>
            <!-- repeat other cards -->
          </div>
        </div>

        <!-- How We Use Information -->
        <div id="usage" class="bg-white rounded-3xl shadow p-10 border border-slate-100">
          <h3 class="text-3xl font-bold text-primary mb-8">2. How We Use Your Information</h3>
          <ul class="space-y-5 text-on-surface-variant list-disc pl-5">
            <li>Provide and improve our services.</li>
            <li>Connect customers with trusted professionals.</li>
            <li>Process bookings and requests.</li>
            <li>Communicate important service updates.</li>
          </ul>
        </div>

        <!-- SECTION 3: Sharing -->
      <div id="sharing" class="bg-white rounded-[32px] shadow-premium p-10">
        <h3 class="text-3xl font-bold text-primary mb-8">3. Sharing of Information</h3>
        <p class="text-on-surface-variant leading-8 mb-8">
          RAW HUB does not sell your personal information. 
          We only share information necessary to provide our services effectively.
        </p>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="flex gap-4">
            <span class="material-symbols-outlined text-primary">engineering</span>
            <div>
              <h4 class="font-bold mb-2">Verified Professionals</h4>
              <p>Information required to complete your requested service.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <span class="material-symbols-outlined text-primary">account_balance</span>
            <div>
              <h4 class="font-bold mb-2">Payment Providers</h4>
              <p>Where payment processing is necessary.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <span class="material-symbols-outlined text-primary">groups</span>
            <div>
              <h4 class="font-bold mb-2">Business Partners</h4>
              <p>Partners supporting the operation of RAW HUB.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <span class="material-symbols-outlined text-primary">gavel</span>
            <div>
              <h4 class="font-bold mb-2">Legal Authorities</h4>
              <p>Where required by applicable law.</p>
            </div>
          </div>
        </div>
      </div>
     
  <!-- SECTION 4 -->
  <div class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">4. Service Providers and Workmen</h3>
    <p class="leading-8 text-on-surface-variant mb-6">
      RAW HUB connects customers with trusted technicians, artisans, professionals and independent service providers.
    </p>
    <p class="leading-8 text-on-surface-variant">
      Although we carefully verify providers, they operate independently. 
      Users are encouraged to communicate clearly, confirm job requirements and report any concerns through RAW HUB.
    </p>
  </div>

  <!-- SECTION 5: Security -->
  <div id="security" class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">5. Data Security</h3>
    <div class="flex items-start gap-5">
      <span class="material-symbols-outlined text-primary text-5xl">shield_lock</span>
      <div>
        <p class="leading-8 text-on-surface-variant">
          We apply reasonable technical and organisational security measures to protect your information against unauthorized access, alteration, misuse and disclosure.
        </p>
        <p class="leading-8 text-on-surface-variant mt-5">
          However, no online platform can guarantee 100% protection of information transmitted through the internet.
        </p>
      </div>
    </div>
  </div>

  <!-- SECTION 6: Your Rights -->
  <div class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">6. Your Rights</h3>
    <ul class="space-y-5 text-on-surface-variant list-disc pl-6">
      <li>Request access to your personal information.</li>
      <li>Correct inaccurate information.</li>
      <li>Request deletion where applicable.</li>
      <li>Withdraw permissions where legally permitted.</li>
      <li>Contact RAW HUB regarding your privacy.</li>
    </ul>
  </div>

  <!-- SECTION 7: Cookies -->
  <div class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">7. Cookies & Website Usage</h3>
    <p class="leading-8 text-on-surface-variant">
      Our website may use cookies and similar technologies to improve website performance, analyse visitor behaviour and enhance the overall browsing experience.
    </p>
  </div>

  <!-- SECTION 8: Changes -->
  <div class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">8. Changes to This Policy</h3>
    <p class="leading-8 text-on-surface-variant">
      RAW HUB reserves the right to update this Privacy Policy whenever necessary. 
      Any modifications will be published on this page together with the revised effective date.
    </p>
  </div>

  <!-- SECTION 9: Contact Us -->
  <div class="bg-white rounded-[32px] shadow-premium p-10">
    <h3 class="text-3xl font-bold text-primary mb-8">9. Contact Us</h3>
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



