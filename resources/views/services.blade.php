@extends('layouts.app')

@section('title', 'Engineering & Technical Services in Nigeria | Vorian Engineering')

@section('meta_description', 'Vorian Engineering provides electronics diagnosis, equipment repairs, regular servicing, preventive maintenance, technical consulting, engineering services, inspections and commissioning in Nigeria.')

@section('content')

{{-- =========================================================
     SERVICES HERO
========================================================= --}}

<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    {{-- Hero Image --}}
    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/services.jpg') }}"
            alt="Vorian Engineering technical maintenance and engineering services"
            class="h-full w-full object-cover"
        />

        {{-- Dark Brand Overlay --}}
        <div class="absolute inset-0 bg-vorian-dark/80"></div>

        {{-- Gradient for Text Readability --}}
        <div class="absolute inset-0 bg-gradient-to-r from-vorian-dark via-vorian-dark/90 to-vorian-dark/40"></div>

    </div>


    {{-- Hero Content --}}
    <div class="relative flex min-h-[560px] items-center lg:min-h-[620px]">

        <div class="mx-auto w-full max-w-7xl px-5 py-20 lg:px-8">

            <div class="max-w-3xl">

                {{-- Eyebrow --}}
                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-12 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Our Services
                    </span>

                </div>


                {{-- Heading --}}
                <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Engineering & Technical

                    <span class="block text-vorian-orange">
                        Services in Nigeria
                    </span>

                </h1>


                {{-- Description --}}
                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    From equipment diagnosis and repairs to preventive
                    maintenance, technical consulting and commissioning,
                    Vorian Engineering provides practical solutions designed
                    around your operational requirements.
                </p>


                {{-- CTAs --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Request a Service

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


                {{-- Small Trust Indicators --}}
                <div class="mt-10 flex flex-wrap gap-x-7 gap-y-3 text-sm text-gray-400">

                    <span class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-vorian-orange"></span>
                        Equipment Support
                    </span>

                    <span class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-vorian-teal"></span>
                        Maintenance Solutions
                    </span>

                    <span class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-vorian-orange"></span>
                        Technical Expertise
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     INTRODUCTION
========================================================= --}}

<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

            <div>

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Technical Support
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">
                    Keeping Your Equipment
                    <span class="text-vorian-teal">
                        Ready for Operation
                    </span>
                </h2>

            </div>


            <div class="space-y-5 text-base leading-8 text-gray-600">

                <p>
                    Equipment performance plays an important role in
                    productivity, operational continuity and business
                    efficiency.
                </p>

                <p>
                    Vorian Engineering provides technical services that
                    support equipment throughout its operational lifecycle,
                    from diagnosis and repairs to maintenance, inspection,
                    commissioning and ongoing technical support.
                </p>

                <p>
                    Our approach is focused on understanding the actual
                    requirement before recommending a practical solution.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES GRID
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="What We Offer"
            title="Our Core"
            highlight="Technical Services"
            description="Explore our range of engineering, equipment maintenance and technical support services."
            :centered="true"
        />


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            <x-service-card
                title="Electronics Diagnosis & Troubleshooting"
                description="Accurate diagnosis and troubleshooting of electronic systems and equipment to identify faults and support efficient restoration."
                url="/services/electronics-diagnosis-troubleshooting"
                accent="orange"
                icon="diagnosis"
            />

            <x-service-card
                title="Repairs & Regular Servicing"
                description="Professional repairs and regular servicing designed to maintain equipment functionality, reliability and operational performance."
                url="/services/repairs-regular-servicing"
                accent="teal"
                icon="repairs"
            />

            <x-service-card
                title="Maintenance Programs"
                description="Planned preventive maintenance programs designed to help reduce avoidable equipment breakdowns and downtime."
                url="/services/maintenance-programs"
                accent="orange"
                icon="maintenance"
            />

            <x-service-card
                title="Technical Consulting & Support"
                description="Technical guidance and support to help businesses make informed decisions around equipment, maintenance and engineering requirements."
                url="/services/technical-consulting-support"
                accent="teal"
                icon="consulting"
            />

            <x-service-card
                title="Technical & Engineering Services"
                description="Technical and engineering solutions tailored to specific operational, equipment and business requirements."
                url="/services/technical-engineering-services"
                accent="orange"
                icon="engineering"
            />

            <x-service-card
                title="Pre-Delivery Inspection & Commissioning"
                description="Inspection and commissioning support to help verify equipment readiness before delivery and operational deployment."
                url="/services/pre-delivery-inspection-commissioning"
                accent="teal"
                icon="inspection"
            />

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICE LIFECYCLE
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">

            <div>

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Equipment Lifecycle Support
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">
                    Support From
                    <span class="text-vorian-teal">
                        Diagnosis to Maintenance
                    </span>
                </h2>

                <p class="mt-6 text-base leading-7 text-gray-600">
                    Our services can support different stages of your
                    equipment lifecycle, helping businesses address
                    technical challenges and maintain operational readiness.
                </p>

            </div>


            <div class="space-y-4">

                @foreach([
                    [
                        'number' => '01',
                        'title' => 'Diagnose',
                        'description' => 'Identify equipment faults and technical issues.',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Repair',
                        'description' => 'Address identified faults and restore equipment functionality.',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Maintain',
                        'description' => 'Apply planned maintenance to support equipment reliability.',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Inspect & Commission',
                        'description' => 'Verify equipment readiness before operational deployment.',
                    ],
                ] as $stage)

                    <div class="flex gap-5 rounded-2xl border border-gray-200 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-vorian-dark text-sm font-extrabold text-white">
                            {{ $stage['number'] }}
                        </div>

                        <div>

                            <h3 class="font-bold text-vorian-dark">
                                {{ $stage['title'] }}
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                {{ $stage['description'] }}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     INDUSTRIES
========================================================= --}}

<section class="bg-vorian-dark py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="Industries"
            title="Services Designed"
            highlight="For Different Operations"
            description="Our technical services can support businesses across multiple industrial and commercial environments."
            :centered="true"
        />


        <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            @foreach([
                'Oil & Gas',
                'FMCG',
                'Shipping & Consumer',
                'Construction',
                'Agriculture',
                'Warehousing',
            ] as $industry)

                <a
                    href="/industries/{{ \Illuminate\Support\Str::slug($industry) }}"
                    class="group rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-vorian-orange/50 hover:bg-white/10"
                >

                    <h3 class="text-xl font-bold text-white">
                        {{ $industry }}
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-400">
                        Technical and equipment support tailored to
                        operational requirements.
                    </p>

                    <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-orange">

                        View Industry

                        <span class="ml-2 transition group-hover:translate-x-1">
                            →
                        </span>

                    </span>

                </a>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICE CTA
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-vorian-dark">

            <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-vorian-orange/20 blur-3xl"></div>

            <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-vorian-teal/20 blur-3xl"></div>

            <div class="relative px-7 py-12 sm:px-10 lg:px-14 lg:py-16">

                <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

                    <div>

                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Need Technical Support?
                        </p>

                        <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                            Let's Discuss Your
                            <span class="text-vorian-orange">
                                Requirements
                            </span>
                        </h2>

                        <p class="mt-5 max-w-xl text-base leading-7 text-gray-400">
                            Whether you need equipment repairs, maintenance,
                            technical support or an engineering solution,
                            contact Vorian Engineering to discuss your needs.
                        </p>

                    </div>


                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">

                        <a
                            href="/contact"
                            class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                        >
                            Request a Service
                        </a>

                        <a
                            href="https://wa.me/23481616794408"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center rounded-lg border border-white/20 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10"
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