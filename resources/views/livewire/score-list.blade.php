<div>
    <div class="flex items-center justify-between gap-3 mb-6">
        <div>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" wire:model.live='pencarian' class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari nama atau NISN..." required />
            </div>
        </div>
        <div>
            <select id="countries" wire:model.live='urutkan' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="0" selected>Urutkan</option>
              <option value="1">Nilai Tertinggi - Terendah</option>
              <option value="2">Nilai Terendah - Tertinggi</option>
            </select>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NISN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pelajaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Submit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @if ($data->count() < 1)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" colspan="6" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Tidak ada!
                        </th>
                    </tr>
                @endif
                @foreach ($data as $item)
                    <tr wire:key='{{ $item->id }}' class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $no++ }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->nisn }}
                        </td>
                        <td class="px-6 py-4">
                            BAB {{ $item->bab.' - '. $item->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at->format('d-M-Y') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->nilai }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $data->links() }}
    </div>
</div>
