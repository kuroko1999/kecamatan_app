

<?php $__env->startSection('page-title', 'Tambah Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm max-w-2xl mx-auto">
    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
        <h2 class="font-bold text-lg">Tambah Admin Baru</h2>
        <p class="text-gray-500 text-sm">Buat akun administrator baru</p>
    </div>
    
    <form method="POST" action="<?php echo e(route('admin.admins.store')); ?>" class="p-6 space-y-5">
        <?php echo csrf_field(); ?>
        
        <div>
            <label class="block font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo e(old('nama')); ?>" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Email</label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Password</label>
            <input type="password" name="password" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
            <p class="text-gray-400 text-sm mt-1">Minimal 4 karakter</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Role</label>
            <select name="role" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                <option value="admin">Admin</option>
                <option value="superadmin">Super Admin</option>
            </select>
        </div>
        
        <div class="flex justify-end space-x-3">
            <a href="<?php echo e(route('admin.admins')); ?>" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\kecamatan-app\resources\views/admin/admins/create.blade.php ENDPATH**/ ?>