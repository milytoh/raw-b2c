<?php
include 'includes/protect.php';
require '../config/database.php';

$page_title = 'Manage Products | Admin | RAW B2C LTD';

// Get all products
$stmt = $pdo->query("
    SELECT *
    FROM products
    ORDER BY created_at DESC
");

$products = $stmt->fetchAll();

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
                <a href="add-product.php"
class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">

<span class="material-symbols-outlined">
add_circle
</span>

Add Product

</a>
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
   <?php if (count($products) > 0): ?>
        
        <?php foreach ($products as $product): ?>

            <?php
            // Brand Badge Colors
            $brandClass = 'bg-primary-fixed/50 text-primary';

            if ($product['brand'] == 'Mi Boo') {
                $brandClass = 'bg-secondary-container/50 text-secondary';
            }

            if ($product['brand'] == 'Mi Look') {
                $brandClass = 'bg-tertiary-fixed/50 text-tertiary';
            }

            // Status Badge Colors
            $statusClass = $product['status'] == 'Active'
                ? 'bg-secondary-container text-on-secondary-container'
                : 'bg-surface-container-high text-on-surface';
            ?>

            <tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">

                <!-- Image -->
                <td class="py-4 px-6">
                    <div class="w-12 h-12 rounded bg-surface-container overflow-hidden flex items-center justify-center">

                        <?php if (!empty($product['image_path'])): ?>
                            <img
                                src="../uploads/products/<?php echo $product['image_path']; ?>"
                                alt="<?php echo htmlspecialchars($product['name']); ?>"
                                class="w-full h-full object-cover">
                        <?php else: ?>
                            <span class="material-symbols-outlined text-outline-variant">
                                image
                            </span>
                        <?php endif; ?>

                    </div>
                </td>

                <!-- Product Name -->
                <td class="py-4 px-6 font-semibold text-primary">
                    <?php echo htmlspecialchars($product['name']); ?>
                </td>

                <!-- Brand -->
                <td class="py-4 px-6">
                    <span class="<?php echo $brandClass; ?> px-2 py-1 rounded-md text-xs font-bold">
                        <?php echo htmlspecialchars($product['brand']); ?>
                    </span>
                </td>

                <!-- Status -->
                <td class="py-4 px-6">
                    <span class="<?php echo $statusClass; ?> px-2 py-1 rounded text-xs font-bold">
                        <?php echo $product['status']; ?>
                    </span>
                </td>

                <!-- Actions -->
                <td class="py-4 px-6 text-right space-x-2">

                    <a href="edit-product.php?id=<?php echo $product['id']; ?>"
                       class="text-primary hover:text-primary-container p-1">
                        <span class="material-symbols-outlined text-sm">
                            edit
                        </span>
                    </a>

                    <a href="delete-product.php?id=<?php echo $product['id']; ?>"
                       onclick="return confirm('Delete this product?')"
                       class="text-error hover:text-error-container p-1">
                        <span class="material-symbols-outlined text-sm">
                            delete
                        </span>
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="5" class="py-10 text-center text-on-surface-variant">
                No products found.
            </td>
        </tr>

    <?php endif; ?>
</tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
