@extends('layouts.app')

@section('title', 'Engineering & Technical Blog | Vorian Engineering Nigeria')

@section('meta_description', 'Read Vorian Engineering insights on equipment maintenance, material handling, engineering solutions, technical support and operational reliability in Nigeria.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/blog.jpg') }}"
            alt="Vorian Engineering technical insights and engineering knowledge"
            class="h-full w-full object-cover"
        />

        <div class="absolute inset-0 bg-vorian-dark/80"></div>

        <div class="absolute inset-0 bg-gradient-to-r from-vorian-dark via-vorian-dark/90 to-vorian-dark/35"></div>

    </div>

    <div class="relative flex min-h-[560px] items-center lg:min-h-[620px]">

        <div class="mx-auto w-full max-w-7xl px-5 py-20 lg:px-8">

            <div class="max-w-4xl">

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-12 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Vorian Insights
                    </span>

                </div>

                <h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">

                    Engineering & Technical

                    <span class="block text-vorian-orange">
                        Knowledge Hub
                    </span>

                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    Practical insights on engineering, equipment maintenance,
                    material handling and operational reliability.
                </p>

                <div class="mt-8">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                    >
                        Talk to Our Team

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
                Engineering Knowledge
            </span>

            <span class="h-px w-10 bg-vorian-orange"></span>

        </div>

        <h2 class="text-3xl font-extrabold text-vorian-dark sm:text-4xl">
            Practical Information for
            <span class="text-vorian-teal">
                Better Operations
            </span>
        </h2>

        <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
            Our blog will cover practical topics that help businesses
            understand equipment, maintenance, material handling and
            engineering requirements.
        </p>

    </div>

</section>


{{-- FEATURED TOPICS --}}
<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="Knowledge Categories"
            title="What We'll"
            highlight="Talk About"
            description="Useful engineering and equipment information for businesses and technical teams."
            :centered="true"
        />

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach([
                [
                    'title' => 'Equipment Maintenance',
                    'description' => 'Practical guidance on preventive maintenance, servicing and equipment reliability.',
                ],
                [
                    'title' => 'Material Handling',
                    'description' => 'Insights into forklifts, pallet trucks, reach stackers and material handling operations.',
                ],
                [
                    'title' => 'Engineering Solutions',
                    'description' => 'Technical perspectives on equipment, engineering support and operational challenges.',
                ],
                [
                    'title' => 'Troubleshooting',
                    'description' => 'Useful information about equipment faults, diagnosis and technical troubleshooting.',
                ],
                [
                    'title' => 'Industry Insights',
                    'description' => 'Perspectives on equipment and technical requirements across key industries.',
                ],
                [
                    'title' => 'Operational Reliability',
                    'description' => 'Ideas for improving equipment readiness, reliability and operational continuity.',
                ],
            ] as $topic)

                <article class="rounded-2xl border border-gray-200 bg-white p-7 shadow-sm">

                    <div class="h-1 w-12 bg-vorian-orange"></div>

                    <h2 class="mt-6 text-xl font-bold text-vorian-dark">
                        {{ $topic['title'] }}
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        {{ $topic['description'] }}
                    </p>

                    <span class="mt-6 inline-flex text-sm font-bold text-vorian-teal">
                        Coming Soon
                    </span>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="rounded-3xl bg-vorian-dark px-7 py-14 text-center sm:px-10 lg:px-14">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                Need Technical Advice?
            </p>

            <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-extrabold text-white sm:text-4xl">
                Have an Equipment or Engineering Question?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-gray-400">
                Instead of waiting for the next article, speak directly
                with the Vorian Engineering team.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                <a
                    href="/contact"
                    class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                >
                    Contact Us
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

</section>

@endsection