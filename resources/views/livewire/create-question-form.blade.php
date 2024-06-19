<div>
    <style>
        progress[value]::-webkit-progress-bar {
            border: .3px solid rgb(0, 71, 137);
            border-radius: 10rem;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }

        progress[value]::-webkit-progress-value {
            background-color: rgb(0, 157, 255);
            border-radius: 10rem;
        }
    </style>
    <h1 class="text-xl font-semibold text-center">Tambah Soal</h1>
    <form class="max-w-sm mx-auto" wire:submit='submit'
        x-data="{ uploading: false, progress: 0 }"
        x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false"
        x-on:livewire-upload-cancel="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"
    >
        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soal</label>
            <textarea id="message" rows="3" wire:model='soal' class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis soal disini..." required></textarea>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload gambar</label>
            @error('gambar')
                <span class="inline-block px-4 py-1 font-semibold text-white rounded-full animate-pulse bg-red-600">Upload Gagal!</span>
            @enderror
            <div class="mb-3">
                @if ($gambar == null)
                    <div x-show="progress > 1">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                @else
                    <div>
                        <span class="inline-block px-4 py-1 font-semibold text-white rounded-full bg-green-600">Upload Berhasil!</span>
                    </div>
                @endif
            </div>
            <input id="file_input" accept="image/png, image/jpeg" wire:model='gambar' type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
        </div>
        <div x-show="progress > 1">
            @if ($gambar == null)
                <button type="submit" class="focus:outline-none w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" disabled>Simpan</button>
            @else
                <button type="submit" class="focus:outline-none w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Simpan</button>
                @endif
            </div>
        <div x-show="progress < 1">
            <button type="submit" class="focus:outline-none w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Simpan</button>
        </div>
    </form>
</div>
