

<?php $__env->startSection('page-title', 'Manajemen Pengumuman'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div><h2 class="font-bold text-lg">Daftar Pengumuman</h2><p class="text-gray-500 text-sm">Kelola pengumuman yang tampil di website</p></div>
        <a href="<?php echo e(route('admin.pengumuman.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg">+ Tambah Pengumuman</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b"><tr><th class="p-4 text-left">No</th><th class="p-4 text-left">Judul</th><th class="p-4 text-left">Kategori</th><th class="p-4 text-left">Tanggal</th><th class="p-4 text-left">Penting</th><th class="p-4 text-left">Aksi</th></tr></thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b hover:bg-gray-50"><td class="p-4"><?php echo e($index+1); ?></td><td class="p-4 font-semibold"><?php echo e($item->judul); ?></td><td class="p-4"><?php echo e($item->kategori); ?></td><td class="p-4"><?php echo e($item->tanggal->format('d M Y')); ?></td><td class="p-4"><?php if($item->penting): ?><span class="text-red-500"><i class="fas fa-exclamation-triangle"></i></span><?php else: ?>-<?php endif; ?></td>
                    <td class="p-4 space-x-2"><a href="<?php echo e(route('admin.pengumuman.edit', $item->id)); ?>" class="text-blue-600">Edit</a><form action="<?php echo e(route('admin.pengumuman.destroy', $item->id)); ?>" method="POST" class="inline"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button type="submit" class="text-red-600" onclick="return confirm('Hapus?')">Hapus</button></form></td></tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="6" class="p-8 text-center text-gray-500">Belum ada data pengumuman</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\kecamatan-app\resources\views/admin/pengumuman/index.blade.php ENDPATH**/ ?>