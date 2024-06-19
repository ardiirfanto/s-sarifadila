<div class="page-content-wrapper py-3">
    <div class="container">
<div>
    <div class="flex items-center justify-between gap-3 mb-6">
        <div>
            <select id="countries" wire:model.live='urutkan' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="0" selected>Urutkan</option>
              <option value="1">Nilai Tertinggi - Terendah</option>
              <option value="2">Nilai Terendah - Tertinggi</option>
              <option value="3">Terbaru - Terlama</option>
              <option value="2">Telama - Terbaru</option>
            </select>
        </div>
    </div>
    
      <div class="card invoice-card shadow">
        <div class="card-body">
    <div class="invoice-table">
            <div class="table-responsive">
              <table class="table table-bordered caption-top">
                <caption>Lihat Nilai</caption>
                <thead class="table-light">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Code
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
                            {{ $item->code }}
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
</div>
      </div>
    </div>
  </div>
