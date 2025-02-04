<style>
    :root {
        --card-line-height: 1.2em;
        --card-padding: 1em;
        --card-radius: 1em;
        --color-green: hsl(244, 85%, 37%);
        --color-gray: #e2ebf6;
        --color-dark-gray: #c4d1e1;
        --radio-border-width: 4px;
        --radio-size: 1.5em;
    }

    .grid {
        display: grid;
        grid-gap: var(--card-padding);
        margin: 0 auto;
        max-width: 60em;
        padding: 0;

        @media (min-width: 42em) {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .card {
        background-color: #fff;
        border-radius: var(--card-radius);
        position: relative;

        &:hover {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
        }
    }

    .radio {
        font-size: inherit;
        margin: 0;
        position: absolute;
        right: calc(var(--card-padding) + var(--radio-border-width));
        top: calc(var(--card-padding) + var(--radio-border-width));
    }

    @supports(-webkit-appearance: none) or (-moz-appearance: none) {
        .radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            background: #fff;
            border: var(--radio-border-width) solid var(--color-gray);
            border-radius: 50%;
            cursor: pointer;
            height: var(--radio-size);
            outline: none;
            transition:
                background 0.2s ease-out,
                border-color 0.2s ease-out;
            width: var(--radio-size);

            /* &::after {
                border: var(--radio-border-width) solid #fff;
                border-top: 0;
                border-left: 0;
                content: '';
                display: block;
                height: 0.75rem;
                left: 25%;
                position: absolute;
                top: 50%;
                transform:
                    rotate(45deg) translate(-50%, -50%);
                width: 0.375rem;
            } */

            &:checked {
                background: var(--color-green);
                border-color: var(--color-green);
            }
        }

        .card:hover .radio {
            border-color: var(--color-dark-gray);

            &:checked {
                border-color: var(--color-green);
            }
        }
    }

    .plan-details {
        border: var(--radio-border-width) solid var(--color-gray);
        border-radius: var(--card-radius);
        cursor: pointer;
        display: flex;
        flex-direction: column;
        padding: var(--card-padding);
        transition: border-color 0.2s ease-out;
    }

    .card:hover .plan-details {
        border-color: var(--color-dark-gray);
    }

    .radio:checked~.plan-details {
        border-color: var(--color-green);
    }

    .radio:focus~.plan-details {
        box-shadow: 0 0 0 2px var(--color-dark-gray);
    }

    .radio:disabled~.plan-details {
        color: var(--color-dark-gray);
        cursor: default;
    }

    .radio:disabled~.plan-details .plan-type {
        color: var(--color-dark-gray);
    }

    .card:hover .radio:disabled~.plan-details {
        border-color: var(--color-gray);
        box-shadow: none;
    }

    .card:hover .radio:disabled {
        border-color: var(--color-gray);
    }

    .plan-type {
        color: var(--color-green);
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1em;
    }

    .plan-cost {
        font-size: 2.5rem;
        font-weight: bold;
        padding: 0.5rem 0;
    }

    .slash {
        font-weight: normal;
    }

    .plan-cycle {
        font-size: 2rem;
        font-variant: none;
        border-bottom: none;
        cursor: inherit;
        text-decoration: none;
    }

    .hidden-visually {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    
    }
.bg-gradient-1 {
    background: linear-gradient(135deg, #00aaff, #0044cc);
}

.bg-gradient-3 {
    background: linear-gradient(135deg, #ff7f00, #d45d00);
}

.bg-gradient-0 {
    background: linear-gradient(135deg, #00bcd4, #00796b);
}
.bg-gradient-2 {
    background: linear-gradient(135deg, #ff0000, #8b0000);
}
</style>
<div class="row bg-transparent">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($soal->gambar != null)
                    <div class="mb-3">
                        <img style="margin: auto;display:block" width="75%"
                            src="{{ url('/storage/soal/gambar/' . $soal->gambar) }}" alt="">
                    </div>
                @endif
                <div class="font-semibold text-xl text-info">
                    {{ $soal->pertanyaan }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mt-5 justify-end">
            <input id="question" type="hidden" name="question" value="{{ $soal->id }}">
            @foreach ($soal->options as $key => $item)
                <label id="label{{ $item->id }}" class="card bg-gradient-{{ $key }} mb-2">
                    <input onchange="validateAnswer(this)" data-nilai="{{ $item->nilai }}" name="answer" class="radio" type="radio" value="{{ $item->id }}">
                    <div class="card-body plan-details">
                        <span class="text-white font-bold text-lg">
                            {{ $item->option }}
                        </span>
                    </div>
                </label>
            @endforeach
        </div>
    </div>
    {{-- <div class="col-12">
        <div class="d-flex mt-10">
            <button onclick="saveAnswer()" class="btn btn-light grow">
                Simpan
            </button>
        </div>
    </div> --}}
</div>
