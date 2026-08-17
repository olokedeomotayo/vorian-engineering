@props([
    'title',
    'description',
    'url',
    'accent' => 'orange',
    'icon' => null,
])

@php
    $iconClasses = $accent === 'teal'
        ? 'bg-vorian-teal/10 text-vorian-teal group-hover:bg-vorian-teal group-hover:text-white'
        : 'bg-vorian-orange/10 text-vorian-orange group-hover:bg-vorian-orange group-hover:text-white';
@endphp

<article class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-vorian-orange/30 hover:shadow-xl">

    {{-- Icon --}}
    <div class="flex h-14 w-14 items-center justify-center rounded-xl transition {{ $iconClasses }}">

        @if($icon === 'diagnosis')
            @include('components.icons.diagnosis')

        @elseif($icon === 'repairs')
            @include('components.icons.repairs')

        @elseif($icon === 'maintenance')
            @include('components.icons.maintenance')

        @elseif($icon === 'consulting')
            @include('components.icons.consulting')

        @elseif($icon === 'engineering')
            @include('components.icons.engineering')

        @elseif($icon === 'inspection')
            @include('components.icons.inspection')

        @else
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.7"
            >
                <circle cx="12" cy="12" r="8" />
            </svg>
        @endif

    </div>


    {{-- Title --}}
    <h3 class="mt-6 text-xl font-bold text-vorian-dark">
        {{ $title }}
    </h3>


    {{-- Description --}}
    <p class="mt-3 text-sm leading-6 text-gray-600">
        {{ $description }}
    </p>


    {{-- Learn More --}}
    <a
        href="{{ $url }}"
        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
    >
        Learn More

        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="ml-2 h-4 w-4 transition group-hover:translate-x-1"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
        </svg>
    </a>

</article>