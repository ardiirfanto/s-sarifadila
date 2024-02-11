<div class="sm:w-3/4 xl:w-1/2 w-full">
    <form class="bg-white shadow-lg px-5 py-8" id="submit">
        <ul class="list-decimal ms-4">
            @foreach ($data as $item)
                <li class="mt-8">{{ $item->pertanyaan }}</li>
                @if ($item->gambar)
                    <img src="{{ url('storage/soal/gambar/'.$item->gambar) }}" class="w-96" alt="">
                @endif
                <ul class="mt-3">
                    @foreach ($item->options as $row)
                        <li wire:key='{{ $row->id }}'>
                            <div class="flex items-center mb-4 gap-4">
                                <input type="radio" id="{{ $row->option }}" name="{{ $item->pertanyaan }}" value="{{ $row->id }}" class="radioBtn">
                                <label for="{{ $row->option }}">{{ $row->option }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

    </script>
</div>