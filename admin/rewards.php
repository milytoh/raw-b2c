<?php
$page_title = 'Manage Rewards | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Customer Rewards</h1>
                    <p class="text-on-surface-variant">Manually track and process customer reward claims.</p>
                </div>
                <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">
                    <span class="material-symbols-outlined">add_circle</span> Log New Reward
                </button>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
                <div class="bg-white p-6 rounded-[24px] shadow-sm border border-outline-variant/10 text-center">
                    <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Total Claims Processed</p>
                    <h3 class="font-headline-md text-4xl font-bold text-primary">342</h3>
                </div>
                <div class="bg-white p-6 rounded-[24px] shadow-sm border border-outline-variant/10 text-center border-l-4 border-l-error">
                    <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Pending Claims</p>
                    <h3 class="font-headline-md text-4xl font-bold text-error">45</h3>
                </div>
                <div class="bg-white p-6 rounded-[24px] shadow-sm border border-outline-variant/10 text-center">
                    <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Total Value Disbursed</p>
                    <h3 class="font-headline-md text-4xl font-bold text-primary">₦1.2M</h3>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-[24px] shadow-premium border border-outline-variant/10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-on-surface-variant text-sm border-b border-outline-variant/20">
                                <th class="py-4 px-6 font-bold">Claim ID</th>
                                <th class="py-4 px-6 font-bold">Customer Name</th>
                                <th class="py-4 px-6 font-bold">Reward Type</th>
                                <th class="py-4 px-6 font-bold">Points/Value</th>
                                <th class="py-4 px-6 font-bold">Status</th>
                                <th class="py-4 px-6 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <!-- Placeholder Row 1 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-mono text-on-surface-variant">#RWD-9021</td>
                                <td class="py-4 px-6 font-semibold text-primary">Chidi Okafor</td>
                                <td class="py-4 px-6">Mi Boo Discount Voucher</td>
                                <td class="py-4 px-6 font-semibold">1,000 pts</td>
                                <td class="py-4 px-6"><span class="bg-surface-container-high text-on-surface px-2 py-1 rounded text-xs font-bold">Pending</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="bg-primary-fixed text-on-primary-fixed text-xs font-bold px-3 py-1 rounded hover:bg-primary hover:text-white transition-colors">Process</button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 2 -->
                            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-mono text-on-surface-variant">#RWD-9020</td>
                                <td class="py-4 px-6 font-semibold text-primary">Amina Bello</td>
                                <td class="py-4 px-6">RAW HUB Day Pass</td>
                                <td class="py-4 px-6 font-semibold">2,500 pts</td>
                                <td class="py-4 px-6"><span class="bg-surface-container-high text-on-surface px-2 py-1 rounded text-xs font-bold">Pending</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="bg-primary-fixed text-on-primary-fixed text-xs font-bold px-3 py-1 rounded hover:bg-primary hover:text-white transition-colors">Process</button>
                                </td>
                            </tr>
                            <!-- Placeholder Row 3 -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-mono text-on-surface-variant">#RWD-9019</td>
                                <td class="py-4 px-6 font-semibold text-primary">Tunde Bakare</td>
                                <td class="py-4 px-6">Cashback (₦5,000)</td>
                                <td class="py-4 px-6 font-semibold">5,000 pts</td>
                                <td class="py-4 px-6"><span class="bg-secondary-container text-on-secondary-container px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <button class="text-primary hover:text-primary-container p-1"><span class="material-symbols-outlined text-sm">visibility</span></button>
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
