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
    <form wire:submit='store'>
        @if (session('failed'))
            <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <span class="font-medium">Oops!</span> {{ session('failed') }}
            </div>
        @endif
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Bab - Mapel
            </label>
            <select wire:model.live='pilihPelajaran' id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
                <option value="0" selected>Pilih Bab Mapel</option>
                @foreach ($datamateri as $item)
                    <option value="{{ $item->id }}">[{{ $item->mapel }}] BAB {{ $item->bab . ' - ' . $item->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Materi</label>
            @error('materi')
                <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                    role="alert">
                    <span class="font-medium">Oops!</span> Video materi sudah ada.
                </div>
            @enderror
            <select id="materi" wire:model.live='materi'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0" selected>Pilih Materi</option>
                @foreach ($datasub as $item)
                    <option value="{{ $item->id }}">{{ $item->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload video
                <span class="text-red-600">*Maksimal 300MB</span></label>

            @error('fileVideo')
                <span class="inline-block px-4 py-1 font-semibold text-white rounded-full bg-red-600">Upload Gagal!</span>
            @enderror

            <div class="my-3">
                @if ($fileVideo == null)
                    <div x-show="progress > 1">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                @else
                    <div>
                        <span class="inline-block px-4 py-1 font-semibold text-white rounded-full bg-green-600">Upload
                            Berhasil!</span>
                    </div>
                @endif
            </div>
            <input type="file" id="file_input" wire:model='fileVideo' accept="video/*"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                required>
        </div>
        <div class="flex justify-end">
            @if ($fileVideo == null)
                <button type="submit"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                    disabled>Simpan</button>
            @else
                <button type="submit"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Simpan</button>
            @endif
        </div>
    </form>
</div>
