<?php $__env->startSection('page-title', 'Struktur Organisasi'); ?>

<?php $__env->startSection('content'); ?>
<div class="grid md:grid-cols-2 gap-6">
    <!-- Form Tambah -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h2 class="font-bold text-lg">Tambah Data Baru</h2>
        </div>
        <form method="POST" action="<?php echo e(route('admin.struktur.store')); ?>" enctype="multipart/form-data" class="p-6 space-y-4">
            <?php echo csrf_field(); ?>
            <div>
                <label class="block font-semibold mb-2">Jabatan</label>
                <input type="text" name="jabatan" required class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block font-semibold mb-2">Nama</label>
                <input type="text" name="nama" required class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block font-semibold mb-2">NIP (Opsional)</label>
                <input type="text" name="nip" class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block font-semibold mb-2">Foto (Opsional)</label>
                <input type="file" name="gambar" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-2">Urutan</label>
                    <input type="number" name="urutan" value="0" class="w-full p-3 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label class="block font-semibold mb-2">Status</label>
                    <select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg">
                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg w-full">Simpan</button>
        </form>
    </div>
    
    <!-- Daftar Data -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h2 class="font-bold text-lg">Daftar Struktur Organisasi</h2>
        </div>
        <div class="divide-y">
            <?php $__empty_1 = true; $__currentLoopData = $struktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-4 hover:bg-gray-50">
                <div class="flex items-start gap-4">
                    <?php if($item->gambar): ?>
                    <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" class="w-12 h-12 rounded-full object-cover">
                    <?php else: ?>
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-gray-500"></i>
                    </div>
                    <?php endif; ?>
                    <div class="flex-1">
                        <h3 class="font-semibold"><?php echo e($item->jabatan); ?></h3>
                        <p class="text-gray-600"><?php echo e($item->nama); ?></p>
                        <?php if($item->nip): ?><p class="text-xs text-gray-400">NIP: <?php echo e($item->nip); ?></p><?php endif; ?>
                        <span class="text-xs px-2 py-0.5 rounded-full <?php echo e($item->aktif ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'); ?>">
                            <?php echo e($item->aktif ? 'Aktif' : 'Nonaktif'); ?>

                        </span>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="editData(<?php echo e($item->id); ?>, '<?php echo e($item->jabatan); ?>', '<?php echo e($item->nama); ?>', '<?php echo e($item->nip); ?>', <?php echo e($item->urutan); ?>, <?php echo e($item->aktif); ?>)" 
                                class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form action="<?php echo e(route('admin.struktur.destroy', $item->id)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Hapus data ini?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="p-8 text-center text-gray-500">Belum ada data</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="font-bold text-lg mb-4">Edit Data</h3>
        <form id="editForm" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
            <input type="hidden" name="id" id="editId">
            <div class="mb-3"><label class="block font-medium">Jabatan</label><input type="text" name="jabatan" id="editJabatan" required class="w-full p-2 border rounded"></div>
            <div class="mb-3"><label class="block font-medium">Nama</label><input type="text" name="nama" id="editNama" required class="w-full p-2 border rounded"></div>
            <div class="mb-3"><label class="block font-medium">NIP</label><input type="text" name="nip" id="editNip" class="w-full p-2 border rounded"></div>
            <div class="mb-3"><label class="block font-medium">Urutan</label><input type="number" name="urutan" id="editUrutan" class="w-full p-2 border rounded"></div>
            <div class="mb-3"><label class="block font-medium">Status</label><select name="aktif" id="editAktif" class="w-full p-2 border rounded"><option value="1">Aktif</option><option value="0">Nonaktif</option></select></div>
            <div class="flex justify-end gap-2"><button type="button" onclick="closeModal()" class="px-4 py-2 border rounded">Batal</button><button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button></div>
        </form>
    </div>
</div>

<script>
function editData(id, jabatan, nama, nip, urutan, aktif) {
    document.getElementById('editId').value = id;
    document.getElementById('editJabatan').value = jabatan;
    document.getElementById('editNama').value = nama;
    document.getElementById('editNip').value = nip || '';
    document.getElementById('editUrutan').value = urutan;
    document.getElementById('editAktif').value = aktif;
    document.getElementById('editForm').action = "<?php echo e(url('admin/struktur')); ?>/" + id;
    document.getElementById('editModal').classList.add('flex');
    document.getElementById('editModal').classList.remove('hidden');
}
function closeModal() {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/admin/struktur/index.blade.php ENDPATH**/ ?>