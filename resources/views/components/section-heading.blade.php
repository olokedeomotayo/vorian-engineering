@props([
    'eyebrow',
    'title',
    'highlight' => null,
    'description' => null,
    'centered' => false,
])

<div
    @class([
        'max-w-3xl' => true,
        'mx-auto text-center' => $centered,
    ])
>

    {{-- Eyebrow --}}
    <div
        @class([
            'mb-4 flex items-center gap-3',
            'justify-center' => $centered,
        ])
    >

        <span class="h-px w-10 bg-vorian-orange"></span>

        <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
            {{ $eyebrow }}
        </span>

        @if($centered)
            <span class="h-px w-10 bg-vorian-orange"></span>
        @endif

    </div>


    {{-- Heading --}}
    <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">

        {{ $title }}

        @if($highlight)
            <span class="block text-vorian-teal">
                {{ $highlight }}
            </span>
        @endif

    </h2>


    {{-- Description --}}
    @if($description)

        <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
            {{ $description }}
        </p>

    @endif

</div>