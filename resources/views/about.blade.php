<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Biodata Mahasiswa</h3>
                    <hr class="mb-4 border-gray-600">
                    
                    <div class="grid grid-cols-1 gap-4">
                        <p><strong>Nama :</strong> {{ $nama }}</p>
                        <p><strong>NIM :</strong> {{ $nim }}</p>
                        <p><strong>Program Studi :</strong> {{ $prodi }}</p>
                        <p><strong>Hobi :</strong> {{ $hobi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>