<?php
$page_title = 'Manage Reviews | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Reviews</h1>
                    <p class="text-on-surface-variant">Approve, reject, or delete customer feedback.</p>
                </div>
            </div>

            <!-- Pending Reviews -->
            <h3 class="font-bold text-lg text-primary mb-4">Pending Approval (2)</h3>
            <div class="space-y-4 mb-10">
                <!-- Review Item -->
                <div class="bg-white rounded-[24px] shadow-sm border border-outline-variant/30 p-6 flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4">
                        <h4 class="font-bold text-primary">John Doe</h4>
                        <p class="text-xs text-on-surface-variant mb-2">john.doe@example.com</p>
                        <div class="flex gap-1 text-secondary text-sm">
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-sm text-on-surface-variant italic">"The level of professionalism and the direct impact on our operations since partnering with RAW B2C LTD has been transformative."</p>
                    </div>
                    <div class="md:w-1/4 flex flex-col justify-center gap-2">
                        <button class="bg-primary-fixed text-on-primary-fixed font-bold px-4 py-2 rounded-xl text-sm hover:bg-primary hover:text-white transition-colors">Approve Review</button>
                        <button class="bg-error-container text-on-error-container font-bold px-4 py-2 rounded-xl text-sm hover:bg-error hover:text-white transition-colors">Reject & Delete</button>
                    </div>
                </div>

                <!-- Review Item -->
                <div class="bg-white rounded-[24px] shadow-sm border border-outline-variant/30 p-6 flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4">
                        <h4 class="font-bold text-primary">Alice Smith</h4>
                        <p class="text-xs text-on-surface-variant mb-2">alice.smith@example.com</p>
                        <div class="flex gap-1 text-secondary text-sm">
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined filled">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-sm text-on-surface-variant italic">"Great products from Mi Boo. Delivery was slightly delayed but overall quality is fantastic."</p>
                    </div>
                    <div class="md:w-1/4 flex flex-col justify-center gap-2">
                        <button class="bg-primary-fixed text-on-primary-fixed font-bold px-4 py-2 rounded-xl text-sm hover:bg-primary hover:text-white transition-colors">Approve Review</button>
                        <button class="bg-error-container text-on-error-container font-bold px-4 py-2 rounded-xl text-sm hover:bg-error hover:text-white transition-colors">Reject & Delete</button>
                    </div>
                </div>
            </div>

            <!-- Approved Reviews -->
            <h3 class="font-bold text-lg text-primary mb-4">Recently Approved</h3>
            <div class="bg-white rounded-[24px] shadow-premium border border-outline-variant/10 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low text-on-surface-variant text-sm border-b border-outline-variant/20">
                            <th class="py-4 px-6 font-bold">Reviewer</th>
                            <th class="py-4 px-6 font-bold">Rating</th>
                            <th class="py-4 px-6 font-bold w-1/2">Review Snippet</th>
                            <th class="py-4 px-6 font-bold text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-b border-outline-variant/10">
                            <td class="py-4 px-6 font-semibold text-primary">Sarah Aminu</td>
                            <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded text-xs font-bold">5 Stars</span></td>
                            <td class="py-4 px-6 text-on-surface-variant truncate max-w-xs">Mi Boo products have redefined what luxury means to us...</td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 font-semibold text-primary">Moussa Kone</td>
                            <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded text-xs font-bold">5 Stars</span></td>
                            <td class="py-4 px-6 text-on-surface-variant truncate max-w-xs">Their commitment to community growth is not just a slogan...</td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
