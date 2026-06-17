<?php
$page_title = 'Manage Workers | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Workers</h1>
                    <p class="text-on-surface-variant">View and manage registered workers and their skills.</p>
                </div>
                <div class="flex gap-3">
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">search</span>
                        <input type="text" placeholder="Search workers..." class="pl-10 pr-4 py-2 bg-white border border-outline-variant/30 rounded-lg text-sm focus:outline-none focus:border-primary">
                    </div>
                    <button class="bg-white border border-outline-variant/30 text-primary px-4 py-2 rounded-lg font-bold text-sm hover:bg-surface-container flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">filter_list</span> Filter
                    </button>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-[24px] shadow-premium border border-outline-variant/10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-on-surface-variant text-sm border-b border-outline-variant/20">
                                <th class="py-4 px-6 font-bold">Name</th>
                                <th class="py-4 px-6 font-bold">Email</th>
                                <th class="py-4 px-6 font-bold">Primary Skill</th>
                                <th class="py-4 px-6 font-bold">Experience</th>
                                <th class="py-4 px-6 font-bold">Date Registered</th>
                                <th class="py-4 px-6 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <!-- Placeholder Row 1 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-semibold text-primary">Sarah Okafor</td>
                                <td class="py-4 px-6 text-on-surface-variant">sarah.o@example.com</td>
                                <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded-md text-xs font-bold">Fashion & Design</span></td>
                                <td class="py-4 px-6 text-on-surface-variant">5 Years</td>
                                <td class="py-4 px-6 text-on-surface-variant">Oct 24, 2026</td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">visibility</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 2 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-semibold text-primary">Michael Adebayo</td>
                                <td class="py-4 px-6 text-on-surface-variant">michael.a@example.com</td>
                                <td class="py-4 px-6"><span class="bg-primary-fixed/50 text-primary px-2 py-1 rounded-md text-xs font-bold">Technology & IT</span></td>
                                <td class="py-4 px-6 text-on-surface-variant">8 Years</td>
                                <td class="py-4 px-6 text-on-surface-variant">Oct 22, 2026</td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">visibility</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 3 -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-semibold text-primary">Kwame Mensah</td>
                                <td class="py-4 px-6 text-on-surface-variant">kwame.m@example.com</td>
                                <td class="py-4 px-6"><span class="bg-tertiary-fixed/50 text-tertiary px-2 py-1 rounded-md text-xs font-bold">Construction</span></td>
                                <td class="py-4 px-6 text-on-surface-variant">12 Years</td>
                                <td class="py-4 px-6 text-on-surface-variant">Oct 20, 2026</td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">visibility</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-outline-variant/20 flex justify-between items-center text-sm">
                    <span class="text-on-surface-variant">Showing 1 to 3 of 1,245 entries</span>
                    <div class="flex gap-1">
                        <button class="px-3 py-1 border border-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container">Prev</button>
                        <button class="px-3 py-1 bg-primary text-white rounded-md">1</button>
                        <button class="px-3 py-1 border border-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container">2</button>
                        <button class="px-3 py-1 border border-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
