<footer class="border-t border-white/10 py-12 mt-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <?php
                    $site_name = \App\Models\Setting::get('site_name', 'Kabupaten Mukomuko');
                ?>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-9 h-9 gradient-primary rounded-xl flex items-center justify-center"><i class="fas fa-landmark text-white"></i></div>
                    <span class="font-bold text-white"><?php echo e($site_name); ?></span>
                </div>
                <p class="text-sm text-gray-400">Melayani dengan Hati, Menuju Masyarakat Sejahtera</p>
                <div class="flex space-x-3 mt-4">
                    <a href="#" class="text-gray-500 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-500 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-500 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-500 hover:text-white transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Tautan Cepat</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" onclick="showPage('profil-tentang')" class="hover:text-white transition">Tentang Kabupaten</a></li>
                    <li><a href="#" onclick="showPage('profil-struktur')" class="hover:text-white transition">Struktur Organisasi</a></li>
                    <li><a href="#" onclick="showPage('layanan')" class="hover:text-white transition">Layanan Publik</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Kontak</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><i class="fas fa-map-marker-alt w-5"></i> Jl. Pemuda No. 1, Mukomuko</li>
                    <li><i class="fas fa-phone-alt w-5"></i> (0736) 1234567</li>
                    <li><i class="fas fa-envelope w-5"></i> info@mukomukokab.go.id</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Jam Pelayanan</h4>
                <div class="space-y-1 text-sm text-gray-400">
                    <div class="flex justify-between"><span>Senin - Kamis</span><span>08:00 - 15:00</span></div>
                    <div class="flex justify-between"><span>Jumat</span><span>08:00 - 15:30</span></div>
                    <div class="flex justify-between text-yellow-400"><span>Istirahat</span><span>12:00 - 13:00</span></div>
                </div>
            </div>
        </div>
        <hr class="border-white/10 my-6">
        <div class="text-center text-sm text-gray-500">
            <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(\App\Models\Setting::get('site_name', 'Kabupaten Mukomuko')); ?>. All rights reserved.</p>
        </div>
    </div>
</footer><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/components/footer.blade.php ENDPATH**/ ?>