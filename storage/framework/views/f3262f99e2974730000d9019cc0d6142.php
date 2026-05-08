<?php $__env->startSection('page-title', 'Manajemen Layanan'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div>
            <h2 class="font-bold text-lg">Daftar Layanan</h2>
            <p class="text-gray-500 text-sm">Kelola layanan yang tampil di website</p>
        </div>
        <a href="<?php echo e(route('admin.layanan.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">+ Tambah Layanan</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="text-left p-4">No</th>
                    <th class="text-left p-4">Icon</th>
                    <th class="text-left p-4">Nama Layanan</th>
                    <th class="text-left p-4">Deskripsi</th>
                    <th class="text-left p-4">Urutan</th>
                    <th class="text-left p-4">Status</th>
                    <th class="text-left p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4"><?php echo e($index + 1); ?></td>
                    <td class="p-4"><i class="<?php echo e($item->icon); ?> text-xl text-blue-600"></i></td>
                    <td class="p-4 font-semibold"><?php echo e($item->nama); ?></td>
                    <td class="p-4 max-w-md"><?php echo e(Str::limit($item->deskripsi, 60)); ?></td>
                    <td class="p-4"><?php echo e($item->urutan); ?></td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded-full text-xs <?php echo e($item->aktif ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'); ?>">
                            <?php echo e($item->aktif ? 'Aktif' : 'Nonaktif'); ?>

                        </span>
                    </td>
                    <td class="p-4 space-x-2">
                        <a href="<?php echo e(route('admin.layanan.edit', $item->id)); ?>" class="text-blue-600 hover:text-blue-800">Edit</a>
                        <form action="<?php echo e(route('admin.layanan.destroy', $item->id)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Hapus layanan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="p-8 text-center text-gray-500">Belum ada data layanan</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/admin/layanan/index.blade.php ENDPATH**/ ?>