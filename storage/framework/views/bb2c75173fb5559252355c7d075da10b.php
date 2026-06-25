

<?php $__env->startSection('page-title', 'Statistik Pengunjung'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <div class="p-5 border-b border-gray-200">
        <h3 class="font-bold text-lg">Semua Pengunjung</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50"><tr><th class="p-3 text-left">No</th><th class="p-3 text-left">IP</th><th class="p-3 text-left">Device</th><th class="p-3 text-left">Browser</th><th class="p-3 text-left">OS</th><th class="p-3 text-left">Halaman</th><th class="p-3 text-left">Waktu</th></tr></thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $visitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3"><?php echo e($index + 1); ?></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->ip_address); ?></td>
                    <td class="p-3 text-sm"><span class="px-2 py-1 rounded-full text-xs <?php echo e($visitor->device == 'Mobile' ? 'bg-green-100 text-green-600' : ($visitor->device == 'Tablet' ? 'bg-purple-100 text-purple-600' : 'bg-blue-100 text-blue-600')); ?>"><?php echo e($visitor->device); ?></span></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->browser); ?></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->os); ?></td>
                    <td class="p-3 text-sm max-w-xs truncate"><?php echo e($visitor->page_url); ?></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->created_at->format('d M Y H:i')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="p-8 text-center text-gray-400">Belum ada data pengunjung</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t"><?php echo e($visitors->links()); ?></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\kecamatan-app\resources\views/admin/visitors/index.blade.php ENDPATH**/ ?>