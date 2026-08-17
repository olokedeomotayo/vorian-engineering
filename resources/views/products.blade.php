@extends('layouts.app')

@section('title', 'Material Handling Equipment & Products in Nigeria | Vorian Engineering')

@section('meta_description', 'Explore pallet trucks, reach stackers, forklifts, empty container handlers, material handling equipment, genuine parts and equipment installation from Vorian Engineering Nigeria.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/products.jpg') }}"
            alt="Material handling equipment supplied by Vorian Engineering"
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
                        Products & Equipment
                    </span>

                </div>

                <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Material Handling

                    <span class="block text-vorian-orange">
                        Equipment & Solutions
                    </span>

                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    Equipment and technical solutions for lifting, moving,
                    stacking, loading, container handling and other material
                    handling operations.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Request Equipment

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="ml-2 h-5 w-5"
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

                    <a
                        href="https://wa.me/23481616794408"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/5 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10"
                    >
                        WhatsApp Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- INTRO --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-3">

                <span class="h-px w-10 bg-vorian-orange"></span>

                <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                    Equipment Solutions
                </span>

                <span class="h-px w-10 bg-vorian-orange"></span>

            </div>

            <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">
                Equipment for
                <span class="text-vorian-teal">
                    Demanding Operations
                </span>
            </h2>

            <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
                Vorian Engineering provides material handling equipment and
                related technical support for businesses operating in
                industrial, logistics, warehouse, construction and other
                demanding environments.
            </p>

        </div>

    </div>

</section>


{{-- PRODUCTS --}}
<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="Our Products"
            title="Material Handling"
            highlight="Equipment"
            description="Explore equipment and supporting solutions available through Vorian Engineering."
            :centered="true"
        />

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            @foreach([
                [
                    'title' => 'Pallet Trucks',
                    'description' => 'Practical equipment for pallet movement and warehouse material handling.',
                    'url' => '/products/pallet-truck',
                ],
                [
                    'title' => 'Reach Stackers',
                    'description' => 'Heavy-duty container handling equipment for demanding logistics operations.',
                    'url' => '/products/reach-stackers',
                ],
                [
                    'title' => 'Range of Forklifts',
                    'description' => 'Forklift solutions for lifting, stacking, loading and material movement.',
                    'url' => '/products/forklifts',
                ],
                [
                    'title' => 'Empty Container Handler',
                    'description' => 'Equipment designed for efficient empty container movement and handling.',
                    'url' => '/products/empty-container-handler',
                ],
                [
                    'title' => 'Material Handling Equipment',
                    'description' => 'Equipment solutions designed around your material movement requirements.',
                    'url' => '/products/material-handling-equipment',
                ],
                [
                    'title' => 'Local Assembly & Installation',
                    'description' => 'Assembly and installation support for equipment deployment and setup.',
                    'url' => '/services/local-assembly-installation',
                ],
                [
                    'title' => 'Genuine Part Supply',
                    'description' => 'Genuine replacement parts supporting equipment reliability and performance.',
                    'url' => '/products/genuine-parts',
                ],
                [
                    'title' => 'Pre-Delivery Inspection',
                    'description' => 'Inspection support to verify equipment readiness before deployment.',
                    'url' => '/services/pre-delivery-inspection',
                ],
            ] as $product)

                <a
                    href="{{ $product['url'] }}"
                    class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-vorian-orange/30 hover:shadow-xl"
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
                                d="M4 19h16M6 19V9l6-5 6 5v10"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 19v-5h6v5"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-vorian-dark">
                        {{ $product['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        {{ $product['description'] }}
                    </p>

                    <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange">

                        Explore Product

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

                    </span>

                </a>

            @endforeach

        </div>

    </div>

</section>


{{-- SUPPORT --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-6 md:grid-cols-3">

            @foreach([
                [
                    'title' => 'Equipment Supply',
                    'text' => 'Equipment solutions selected around your operational and material handling requirements.',
                ],
                [
                    'title' => 'Installation & Assembly',
                    'text' => 'Support for equipment assembly, installation and deployment.',
                ],
                [
                    'title' => 'Parts & Inspection',
                    'text' => 'Genuine part supply and pre-delivery inspection support.',
                ],
            ] as $item)

                <div class="rounded-2xl border border-gray-200 bg-vorian-light p-7">

                    <div class="h-1 w-12 bg-vorian-orange"></div>

                    <h3 class="mt-6 text-xl font-bold text-vorian-dark">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        {{ $item['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="overflow-hidden rounded-3xl bg-vorian-dark">

            <div class="px-7 py-14 sm:px-10 lg:px-14 lg:py-16">

                <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

                    <div>

                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Need Equipment?
                        </p>

                        <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                            Let's Discuss Your
                            <span class="text-vorian-orange">
                                Equipment Requirement
                            </span>
                        </h2>

                        <p class="mt-5 max-w-xl text-gray-400">
                            Tell us what equipment or material handling
                            solution you need and we'll discuss the
                            appropriate option for your operation.
                        </p>

                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">

                        <a
                            href="/contact"
                            class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                        >
                            Request Equipment
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

    </div>

</section>

@endsection