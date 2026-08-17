@extends('layouts.app')

@section('title', 'Industries We Serve in Nigeria | Vorian Engineering')

@section('meta_description', 'Vorian Engineering provides engineering, technical, equipment maintenance and material handling solutions for oil and gas, FMCG, shipping, construction, agriculture and warehousing.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/industries.jpg') }}"
            alt="Industrial engineering operations supported by Vorian Engineering"
            class="h-full w-full object-cover"
        />

        <div class="absolute inset-0 bg-vorian-dark/75"></div>

        <div class="absolute inset-0 bg-gradient-to-r from-vorian-dark via-vorian-dark/85 to-vorian-dark/35"></div>

    </div>

    <div class="relative flex min-h-[560px] items-center lg:min-h-[620px]">

        <div class="mx-auto w-full max-w-7xl px-5 py-20 lg:px-8">

            <div class="max-w-4xl">

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-12 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Industries We Serve
                    </span>

                </div>

                <h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">

                    Engineering Solutions

                    <span class="block text-vorian-orange">
                        Across Diverse Industries
                    </span>

                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    Technical, engineering, equipment and maintenance
                    solutions designed to support businesses operating in
                    demanding environments.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                    >
                        Discuss Your Requirements
                    </a>

                    <a
                        href="/services"
                        class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/5 px-7 py-4 text-sm font-bold text-white"
                    >
                        Explore Services
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- INTRO --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-3xl px-5 text-center lg:px-8">

        <div class="mb-4 flex items-center justify-center gap-3">

            <span class="h-px w-10 bg-vorian-orange"></span>

            <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                Industry Support
            </span>

            <span class="h-px w-10 bg-vorian-orange"></span>

        </div>

        <h2 class="text-3xl font-extrabold text-vorian-dark sm:text-4xl">
            Supporting Operations
            <span class="text-vorian-teal">
                Where Reliability Matters
            </span>
        </h2>

        <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
            Different industries have different equipment, environments and
            operational requirements. Vorian Engineering provides practical
            technical support around those requirements.
        </p>

    </div>

</section>


{{-- INDUSTRIES --}}
<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach([
                [
                    'name' => 'Oil & Gas',
                    'slug' => 'oil-and-gas',
                    'description' => 'Technical, maintenance and equipment support for demanding oil and gas operations.',
                ],
                [
                    'name' => 'FMCG',
                    'slug' => 'fmcg',
                    'description' => 'Equipment and maintenance support for fast-moving consumer goods operations.',
                ],
                [
                    'name' => 'Shipping & Consumer',
                    'slug' => 'shipping-and-consumer',
                    'description' => 'Material handling and technical solutions supporting shipping and consumer operations.',
                ],
                [
                    'name' => 'Construction',
                    'slug' => 'construction',
                    'description' => 'Equipment and technical support for construction environments and operations.',
                ],
                [
                    'name' => 'Agriculture',
                    'slug' => 'agriculture',
                    'description' => 'Equipment and material handling solutions supporting agricultural operations.',
                ],
                [
                    'name' => 'Warehousing',
                    'slug' => 'warehousing',
                    'description' => 'Material handling equipment and technical support for warehouse operations.',
                ],
            ] as $industry)

                <a
                    href="/industries/{{ $industry['slug'] }}"
                    class="group rounded-2xl border border-gray-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange transition group-hover:bg-vorian-orange group-hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 20h16M6 20V8l6-5 6 5v12"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 20v-5h6v5"
                            />

                        </svg>

                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-vorian-dark">
                        {{ $industry['name'] }}
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        {{ $industry['description'] }}
                    </p>

                    <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange">
                        Explore Industry

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </span>

                </a>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="rounded-3xl bg-vorian-dark px-7 py-14 sm:px-10 lg:px-14">

            <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

                <div>

                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Industry Requirements
                    </p>

                    <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                        Need a Solution for Your Industry?
                    </h2>

                    <p class="mt-4 text-gray-400">
                        Talk to Vorian Engineering about your equipment,
                        technical and operational requirements.
                    </p>

                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                    >
                        Contact Vorian
                    </a>

                    <a
                        href="https://wa.me/23481616794408"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-lg border border-white/20 px-7 py-4 text-sm font-bold text-white"
                    >
                        WhatsApp Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection