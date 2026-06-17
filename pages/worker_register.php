<?php
$page_title = 'Worker Registration | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Join Our Workforce</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Register your skills to become part of the RAW B2C LTD workforce. Empowering individuals through high-impact opportunities.
        </p>
    </div>
</section>

<!-- Registration Form Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="max-w-3xl mx-auto reveal bg-white p-8 md:p-12 rounded-[32px] shadow-premium border border-outline-variant/10">
        <div class="text-center mb-10">
            <h2 class="font-headline-md text-3xl text-primary mb-4">Worker Registration Form</h2>
            <p class="text-on-surface-variant">Fill in your details below to register your skills in our database.</p>
        </div>
        
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Personal Info -->
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">First Name</label>
                    <input type="text" name="first_name" required class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Enter first name">
                </div>
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Last Name</label>
                    <input type="text" name="last_name" required class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Enter last name">
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Enter email address">
                </div>
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Phone Number</label>
                    <input type="tel" name="phone" required class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Enter phone number">
                </div>
            </div>
            
            <!-- Professional Info -->
            <div class="border-t border-outline-variant/20 pt-6 mt-6">
                <h3 class="font-bold text-lg text-primary mb-6">Professional Information</h3>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-primary mb-2">Primary Skill Area</label>
                    <select name="skill_area" required class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface-variant">
                        <option value="" disabled selected>Select your primary skill</option>
                        <option value="technology">Technology & IT</option>
                        <option value="construction">Construction & Engineering</option>
                        <option value="fashion">Fashion & Design (Mi Look)</option>
                        <option value="admin">Administration & Office</option>
                        <option value="marketing">Sales & Marketing</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-primary mb-2">Years of Experience</label>
                    <input type="number" name="experience_years" min="0" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="e.g. 5">
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-primary mb-2">Detailed Skills List</label>
                    <textarea name="skills_details" rows="3" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="List your specific skills separated by commas (e.g. Carpentry, Masonry, CAD, React.js)"></textarea>
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-primary mb-2">Upload CV / Resume (Optional)</label>
                    <input type="file" name="cv_file" accept=".pdf,.doc,.docx" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer">
                </div>
            </div>
            
            <div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant/30">
                <label class="flex items-start gap-3 cursor-pointer">
                    <input type="checkbox" required class="mt-1 form-checkbox text-primary rounded focus:ring-primary">
                    <span class="text-sm text-on-surface-variant leading-relaxed">
                        I consent to RAW B2C LTD storing my personal and professional information in their secure database. I understand my profile will be visible only to the administration team for potential opportunities within the RAW ecosystem.
                    </span>
                </label>
            </div>
            
            <div class="text-center pt-6">
                <button type="submit" class="bg-primary text-on-primary px-12 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all w-full sm:w-auto text-lg">
                    Submit Registration
                </button>
            </div>
        </form>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
