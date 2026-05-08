<?php $__env->startSection('page-title', 'Profil Kecamatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200">
        <h2 class="font-bold text-lg">Edit Profil Kecamatan</h2>
        <p class="text-gray-500 text-sm">Edit informasi profil yang tampil di website</p>
    </div>
    
    <form method="POST" action="<?php echo e(route('admin.profil.update')); ?>" class="p-6 space-y-6">
        <?php echo csrf_field(); ?>
        
        <div>
            <label class="block font-semibold mb-2">Sejarah Singkat</label>
            <textarea name="sejarah" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo e(old('sejarah', $profil->sejarah ?? '')); ?></textarea>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Visi</label>
            <textarea name="visi" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo e(old('visi', $profil->visi ?? '')); ?></textarea>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Misi</label>
            <textarea name="misi" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo e(old('misi', $profil->misi ?? '')); ?></textarea>
            <p class="text-gray-400 text-sm mt-1">Gunakan &lt;ul&gt;&lt;li&gt; untuk bullet points</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block font-semibold mb-2">Nama Camat</label>
                <input type="text" name="nama_camat" value="<?php echo e(old('nama_camat', $profil->nama_camat ?? '')); ?>" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block font-semibold mb-2">NIP Camat</label>
                <input type="text" name="nip_camat" value="<?php echo e(old('nip_camat', $profil->nip_camat ?? '')); ?>" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Sambutan Camat</label>
            <textarea name="sambutan" rows="8" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo e(old('sambutan', $profil->sambutan ?? '')); ?></textarea>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Perubahan</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/admin/profil/index.blade.php ENDPATH**/ ?>