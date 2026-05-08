<?php $__env->startSection('page-title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div><h2 class="font-bold text-lg">Daftar Berita</h2><p class="text-gray-500 text-sm">Kelola berita yang tampil di website</p></div>
        <a href="<?php echo e(route('admin.berita.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg">+ Tambah Berita</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b">
                <tr><th class="p-4 text-left">No</th><th class="p-4 text-left">Gambar</th><th class="p-4 text-left">Judul</th><th class="p-4 text-left">Penulis</th><th class="p-4 text-left">Views</th><th class="p-4 text-left">Status</th><th class="p-4 text-left">Aksi</th></tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4"><?php echo e($index+1); ?></td>
                    <td class="p-4">
                        <?php if($item->gambar): ?><img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" class="w-12 h-12 rounded object-cover"><?php else: ?><i class="fas fa-image text-gray-400 text-2xl"></i><?php endif; ?>
                    </td>
                    <td class="p-4 font-semibold"><?php echo e(\Illuminate\Support\Str::limit($item->judul, 40)); ?></td>
                    <td class="p-4"><?php echo e($item->penulis); ?></td>
                    <td class="p-4"><?php echo e(number_format($item->views)); ?></td>
                    <td class="p-4"><span class="px-2 py-1 rounded-full text-xs <?php echo e($item->aktif ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'); ?>"><?php echo e($item->aktif ? 'Aktif' : 'Nonaktif'); ?></span></td>
                    <td class="p-4 space-x-2"><a href="<?php echo e(route('admin.berita.edit', $item->id)); ?>" class="text-blue-600">Edit</a><form action="<?php echo e(route('admin.berita.destroy', $item->id)); ?>" method="POST" class="inline"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button type="submit" class="text-red-600" onclick="return confirm('Hapus?')">Hapus</button></form></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="p-8 text-center text-gray-500">Belum ada berita</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>