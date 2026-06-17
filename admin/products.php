<?php
$page_title = 'Manage Products | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Products & Services</h1>
                    <p class="text-on-surface-variant">Update details, benefits, and statuses for ecosystem offerings.</p>
                </div>
                <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">
                    <span class="material-symbols-outlined">add_circle</span> Add Product
                </button>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-[24px] shadow-premium border border-outline-variant/10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-on-surface-variant text-sm border-b border-outline-variant/20">
                                <th class="py-4 px-6 font-bold">Image</th>
                                <th class="py-4 px-6 font-bold">Product Name</th>
                                <th class="py-4 px-6 font-bold">Brand</th>
                                <th class="py-4 px-6 font-bold">Status</th>
                                <th class="py-4 px-6 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <!-- Placeholder Row 1 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="w-12 h-12 rounded bg-surface-container overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=100&q=80" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-semibold text-primary">Co-working Space Pass</td>
                                <td class="py-4 px-6"><span class="bg-primary-fixed/50 text-primary px-2 py-1 rounded-md text-xs font-bold">RAW HUB</span></td>
                                <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded text-xs font-bold">Active</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 2 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="w-12 h-12 rounded bg-surface-container overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=100&q=80" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-semibold text-primary">Premium Sneakers</td>
                                <td class="py-4 px-6"><span class="bg-secondary-container/50 text-secondary px-2 py-1 rounded-md text-xs font-bold">Mi Boo</span></td>
                                <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded text-xs font-bold">Active</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 3 -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="w-12 h-12 rounded bg-surface-container overflow-hidden flex items-center justify-center">
                                        <span class="material-symbols-outlined text-outline-variant">image</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-semibold text-primary">Summer Collection Dress</td>
                                <td class="py-4 px-6"><span class="bg-tertiary-fixed/50 text-tertiary px-2 py-1 rounded-md text-xs font-bold">Mi Look</span></td>
                                <td class="py-4 px-6"><span class="bg-surface-container-high text-on-surface px-2 py-1 rounded text-xs font-bold">Draft</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="text-error hover:text-error-container p-1"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
