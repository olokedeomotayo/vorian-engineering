@extends('layouts.app')

@section('title', 'Engineering Projects & Case Studies | Vorian Engineering Nigeria')

@section('meta_description', 'Explore Vorian Engineering projects, technical services, equipment solutions, maintenance support and material handling work across Nigeria.')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/projects.jpg') }}"
            alt="Vorian Engineering projects and technical solutions"
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
                        Our Projects
                    </span>

                </div>


                <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Engineering Solutions

                    <span class="block text-vorian-orange">
                        Delivered in Practice
                    </span>

                </h1>


                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    Explore selected engineering, technical, equipment and
                    material handling solutions delivered to support
                    operational requirements.
                </p>


                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Discuss Your Project

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
                        class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/10"
                    >
                        WhatsApp Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     INTRODUCTION
========================================================= --}}

<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-3xl px-5 text-center lg:px-8">

        <div class="mb-4 flex items-center justify-center gap-3">

            <span class="h-px w-10 bg-vorian-orange"></span>

            <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                Project Experience
            </span>

            <span class="h-px w-10 bg-vorian-orange"></span>

        </div>


        <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">

            Practical Solutions for

            <span class="text-vorian-teal">
                Real Operations
            </span>

        </h2>


        <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
            Our project work covers technical support, equipment services,
            maintenance, material handling and engineering requirements.
            The examples below represent the types of solutions Vorian
            Engineering can provide.
        </p>

    </div>

</section>


{{-- =========================================================
     PROJECTS
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="Selected Projects"
            title="Engineering & Technical"
            highlight="Solutions"
            description="Examples of project categories and solutions delivered by Vorian Engineering."
            :centered="true"
        />


        <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">


            {{-- PROJECT 1 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/services.jpg') }}"
                        alt="Equipment maintenance and technical engineering project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-orange px-4 py-2 text-xs font-bold text-white">
                        Technical Services
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Equipment Support
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Equipment Diagnosis & Maintenance
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Technical diagnosis, troubleshooting and maintenance
                        support designed to help equipment remain operational
                        and reliable.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>


            {{-- PROJECT 2 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/products.jpg') }}"
                        alt="Material handling equipment project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-teal px-4 py-2 text-xs font-bold text-white">
                        Material Handling
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Equipment Solutions
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Material Handling Equipment Support
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Material handling equipment solutions supporting
                        lifting, movement, stacking and operational
                        requirements.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>


            {{-- PROJECT 3 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/industries.jpg') }}"
                        alt="Industrial engineering technical support project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-orange px-4 py-2 text-xs font-bold text-white">
                        Engineering
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Technical Support
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Industrial Technical Support
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Technical and engineering support tailored to
                        equipment and operational requirements in industrial
                        environments.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>


            {{-- PROJECT 4 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/about.jpg') }}"
                        alt="Engineering inspection and commissioning project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-teal px-4 py-2 text-xs font-bold text-white">
                        Inspection
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Equipment Readiness
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Pre-Delivery Inspection & Commissioning
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Equipment inspection and commissioning support to
                        help verify readiness before operational deployment.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>


            {{-- PROJECT 5 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/contact.jpg') }}"
                        alt="Technical consulting and engineering support project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-orange px-4 py-2 text-xs font-bold text-white">
                        Consulting
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Engineering Support
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Technical Consulting & Support
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Technical guidance supporting equipment, maintenance
                        and engineering-related operational decisions.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>


            {{-- PROJECT 6 --}}

            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative aspect-[16/10] overflow-hidden bg-vorian-dark">

                    <img
                        src="{{ asset('images/heroes/services.jpg') }}"
                        alt="Equipment repair and servicing project"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 to-transparent"></div>

                    <span class="absolute left-5 top-5 rounded-full bg-vorian-teal px-4 py-2 text-xs font-bold text-white">
                        Repairs
                    </span>

                </div>


                <div class="p-7">

                    <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                        Equipment Reliability
                    </p>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        Equipment Repairs & Servicing
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Repair and servicing support focused on maintaining
                        equipment functionality and operational readiness.
                    </p>

                    <a
                        href="/contact"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Discuss Similar Project

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     PROJECT PROCESS
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="How We Work"
            title="From Requirement"
            highlight="to Solution"
            description="Our project approach starts with understanding the operational requirement and ends with practical technical support."
            :centered="true"
        />


        <div class="mt-14 grid gap-6 md:grid-cols-4">

            @foreach([
                [
                    'number' => '01',
                    'title' => 'Understand',
                    'description' => 'Understand your equipment, environment and operational requirement.',
                ],
                [
                    'number' => '02',
                    'title' => 'Assess',
                    'description' => 'Assess the technical requirement and identify the appropriate approach.',
                ],
                [
                    'number' => '03',
                    'title' => 'Deliver',
                    'description' => 'Provide the agreed technical, engineering or equipment solution.',
                ],
                [
                    'number' => '04',
                    'title' => 'Support',
                    'description' => 'Continue supporting equipment performance and operational requirements.',
                ],
            ] as $step)

                <div class="rounded-2xl border border-gray-200 p-7">

                    <div class="text-4xl font-black text-vorian-orange/20">
                        {{ $step['number'] }}
                    </div>

                    <h3 class="mt-3 text-xl font-bold text-vorian-dark">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        {{ $step['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="rounded-3xl bg-vorian-dark px-7 py-14 sm:px-10 lg:px-14 lg:py-16">

            <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

                <div>

                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Have a Project?
                    </p>

                    <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                        Let's Discuss Your
                        <span class="text-vorian-orange">
                            Requirement
                        </span>
                    </h2>

                    <p class="mt-5 max-w-xl text-gray-400">
                        Tell us about your engineering, equipment,
                        maintenance or material handling requirement.
                    </p>

                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                    >
                        Start a Conversation
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