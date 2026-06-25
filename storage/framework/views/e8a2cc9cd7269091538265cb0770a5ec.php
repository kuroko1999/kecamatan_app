

<?php $__env->startSection('page-title', 'Pengaturan Warna Website'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm max-w-3xl mx-auto">
    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
        <h2 class="font-bold text-lg">Pengaturan Warna Website</h2>
        <p class="text-gray-500 text-sm">Ubah warna tema website landing page</p>
    </div>
    
    <form method="POST" action="<?php echo e(route('admin.warna.update')); ?>" class="p-6 space-y-6">
        <?php echo csrf_field(); ?>
        
        <!-- Warna Background -->
        <div class="border-b border-gray-200 dark:border-gray-700 pb-6">
            <h3 class="font-semibold text-md mb-4">Warna Dasar</h3>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block font-semibold mb-2">Warna Background Website</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" name="bg_color" value="<?php echo e($bgColor ?? '#0f172a'); ?>" class="w-16 h-16 rounded-lg border cursor-pointer">
                        <input type="text" name="bg_color" value="<?php echo e($bgColor ?? '#0f172a'); ?>" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Warna latar belakang website.</p>
                </div>
                
                <div>
                    <label class="block font-semibold mb-2">Warna Teks Utama</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" name="text_color" value="<?php echo e($textColor ?? '#ffffff'); ?>" class="w-16 h-16 rounded-lg border cursor-pointer">
                        <input type="text" name="text_color" value="<?php echo e($textColor ?? '#ffffff'); ?>" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Warna teks utama website.</p>
                </div>
            </div>
            
            <div class="mt-4">
                <label class="block font-semibold mb-2">Warna Card / Kontainer</label>
                <div class="flex items-center space-x-3">
                    <input type="color" name="card_bg_color" value="<?php echo e($cardBgColor ?? '#1e293b'); ?>" class="w-16 h-16 rounded-lg border cursor-pointer">
                    <input type="text" name="card_bg_color" value="<?php echo e($cardBgColor ?? '#1e293b'); ?>" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                </div>
                <p class="text-gray-500 text-sm mt-1">Warna background card, modal, dan container.</p>
            </div>
        </div>
        
        <!-- Warna Aksen -->
        <div class="border-b border-gray-200 dark:border-gray-700 pb-6">
            <h3 class="font-semibold text-md mb-4">Warna Aksen & Tombol</h3>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block font-semibold mb-2">Warna Primary (Tombol Utama)</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" name="primary_color" value="<?php echo e($primaryColor ?? '#1a3a6b'); ?>" class="w-16 h-16 rounded-lg border cursor-pointer">
                        <input type="text" name="primary_color" value="<?php echo e($primaryColor ?? '#1a3a6b'); ?>" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Warna untuk tombol utama, link, dan gradien.</p>
                </div>
                
                <div>
                    <label class="block font-semibold mb-2">Warna Secondary (Aksen)</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" name="secondary_color" value="<?php echo e($secondaryColor ?? '#d4a017'); ?>" class="w-16 h-16 rounded-lg border cursor-pointer">
                        <input type="text" name="secondary_color" value="<?php echo e($secondaryColor ?? '#d4a017'); ?>" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Warna aksen untuk highlight dan elemen sekunder.</p>
                </div>
            </div>
        </div>
        
        <!-- Preview -->
        <div class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg">
            <h3 class="font-semibold mb-3">Preview</h3>
            <div class="p-4 rounded-lg" id="previewBg" style="background-color: <?php echo e($bgColor ?? '#0f172a'); ?>;">
                <p id="previewText" style="color: <?php echo e($textColor ?? '#ffffff'); ?>;">Contoh teks dengan warna yang dipilih</p>
                <div class="mt-3 p-3 rounded-lg" id="previewCard" style="background-color: <?php echo e($cardBgColor ?? '#1e293b'); ?>;">
                    <p style="color: <?php echo e($textColor ?? '#ffffff'); ?>;">Contoh card/container</p>
                </div>
                <div class="mt-3 flex gap-2">
                    <button class="px-4 py-2 rounded-lg text-white" id="previewPrimaryBtn" style="background-color: <?php echo e($primaryColor ?? '#1a3a6b'); ?>;">Tombol Primary</button>
                    <button class="px-4 py-2 rounded-lg text-white" id="previewSecondaryBtn" style="background-color: <?php echo e($secondaryColor ?? '#d4a017'); ?>;">Tombol Secondary</button>
                </div>
            </div>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-lg text-white transition" style="background: linear-gradient(135deg, <?php echo e($primaryColor ?? '#1a3a6b'); ?>, #06b6d4);">
                Simpan Semua Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    // Sync color picker dengan text input untuk setiap field
    const colorFields = ['bg_color', 'text_color', 'card_bg_color', 'primary_color', 'secondary_color'];
    
    colorFields.forEach(field => {
        const picker = document.querySelector(`input[name="${field}"][type="color"]`);
        const text = document.querySelector(`input[name="${field}"][type="text"]`);
        
        if (picker && text) {
            picker.addEventListener('input', () => {
                text.value = picker.value;
                updatePreview(field, picker.value);
            });
            text.addEventListener('input', () => {
                picker.value = text.value;
                updatePreview(field, text.value);
            });
        }
    });
    
    function updatePreview(field, color) {
        if (field === 'bg_color') {
            document.getElementById('previewBg').style.backgroundColor = color;
        } else if (field === 'text_color') {
            document.getElementById('previewText').style.color = color;
            document.querySelectorAll('#previewCard p').forEach(el => el.style.color = color);
        } else if (field === 'card_bg_color') {
            document.getElementById('previewCard').style.backgroundColor = color;
        } else if (field === 'primary_color') {
            document.getElementById('previewPrimaryBtn').style.backgroundColor = color;
            document.querySelector('button[type="submit"]').style.background = `linear-gradient(135deg, ${color}, #06b6d4)`;
        } else if (field === 'secondary_color') {
            document.getElementById('previewSecondaryBtn').style.backgroundColor = color;
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\kecamatan-app\resources\views/admin/pengaturan/warna.blade.php ENDPATH**/ ?>