@extends('admin.layouts.admin')

@section('page-title', 'Pengaturan Warna')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="font-bold text-lg">Pengaturan Warna Website</h2>
        <p class="text-gray-500 text-sm">Ubah warna tema website landing page</p>
    </div>
    
    <form method="POST" action="{{ route('admin.warna.update') }}" class="p-6 space-y-6">
        @csrf
        
        <div>
            <label class="block font-semibold mb-2">Warna Utama (Primary)</label>
            <div class="flex items-center space-x-3">
                <input type="color" name="primary_color" value="{{ $primaryColor }}" class="w-16 h-16 rounded-lg border cursor-pointer" id="primaryColorPicker">
                <input type="text" name="primary_color" value="{{ $primaryColor }}" class="flex-1 p-3 border border-gray-300 rounded-lg" id="primaryColorText">
            </div>
            <p class="text-gray-400 text-sm mt-1">Warna ini akan digunakan untuk tombol, header, dan elemen utama lainnya.</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Warna Sekunder (Secondary)</label>
            <div class="flex items-center space-x-3">
                <input type="color" name="secondary_color" value="{{ $secondaryColor }}" class="w-16 h-16 rounded-lg border cursor-pointer" id="secondaryColorPicker">
                <input type="text" name="secondary_color" value="{{ $secondaryColor }}" class="flex-1 p-3 border border-gray-300 rounded-lg" id="secondaryColorText">
            </div>
            <p class="text-gray-400 text-sm mt-1">Warna ini akan digunakan untuk aksen dan highlight.</p>
        </div>
        
        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
            <h3 class="font-semibold mb-3">Preview Warna</h3>
            <div class="flex space-x-4">
                <div class="w-20 h-20 rounded-lg shadow-md" id="primaryPreview" style="background-color: {{ $primaryColor }}"></div>
                <div class="w-20 h-20 rounded-lg shadow-md" id="secondaryPreview" style="background-color: {{ $secondaryColor }}"></div>
            </div>
            <div class="mt-4 space-x-2">
                <button class="px-4 py-2 rounded-lg text-white shadow-md" id="previewPrimaryBtn" style="background-color: {{ $primaryColor }}">Tombol Primary</button>
                <button class="px-4 py-2 rounded-lg text-white shadow-md" id="previewSecondaryBtn" style="background-color: {{ $secondaryColor }}">Tombol Secondary</button>
            </div>
            <div class="mt-4 p-3 rounded-lg" id="previewCard" style="background: linear-gradient(135deg, {{ $primaryColor }}, #06b6d4);">
                <p class="text-white text-sm">Preview Gradient Primary</p>
            </div>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 rounded-lg text-white transition" style="background: linear-gradient(135deg, {{ $primaryColor }}, #06b6d4);">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    // Sync color picker with text input
    const primaryPicker = document.getElementById('primaryColorPicker');
    const primaryText = document.getElementById('primaryColorText');
    const secondaryPicker = document.getElementById('secondaryColorPicker');
    const secondaryText = document.getElementById('secondaryColorText');
    
    const primaryPreview = document.getElementById('primaryPreview');
    const secondaryPreview = document.getElementById('secondaryPreview');
    const previewPrimaryBtn = document.getElementById('previewPrimaryBtn');
    const previewSecondaryBtn = document.getElementById('previewSecondaryBtn');
    const previewCard = document.getElementById('previewCard');
    
    function updatePrimaryPreview(color) {
        primaryPreview.style.backgroundColor = color;
        previewPrimaryBtn.style.backgroundColor = color;
        previewCard.style.background = `linear-gradient(135deg, ${color}, #06b6d4)`;
        document.querySelector('button[type="submit"]').style.background = `linear-gradient(135deg, ${color}, #06b6d4)`;
    }
    
    function updateSecondaryPreview(color) {
        secondaryPreview.style.backgroundColor = color;
        previewSecondaryBtn.style.backgroundColor = color;
    }
    
    primaryPicker?.addEventListener('input', (e) => {
        primaryText.value = e.target.value;
        updatePrimaryPreview(e.target.value);
    });
    
    primaryText?.addEventListener('input', (e) => {
        primaryPicker.value = e.target.value;
        updatePrimaryPreview(e.target.value);
    });
    
    secondaryPicker?.addEventListener('input', (e) => {
        secondaryText.value = e.target.value;
        updateSecondaryPreview(e.target.value);
    });
    
    secondaryText?.addEventListener('input', (e) => {
        secondaryPicker.value = e.target.value;
        updateSecondaryPreview(e.target.value);
    });
</script>
@endsection