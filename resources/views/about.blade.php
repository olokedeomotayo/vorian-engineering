@extends('layouts.app')

@section('title', 'About Vorian Engineering | Technical & Engineering Solutions in Nigeria')

@section('meta_description', 'Vorian Engineering provides technical, engineering, equipment maintenance, repairs, inspections and material handling solutions for businesses across Nigeria.')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/services.jpg') }}"
            alt="Vorian Engineering technical and engineering solutions"
            class="h-full w-full object-cover"
        />

        <div class="absolute inset-0 bg-vorian-dark/80"></div>

        <div class="absolute inset-0 bg-gradient-to-r from-vorian-dark via-vorian-dark/90 to-vorian-dark/40"></div>

    </div>


    <div class="relative flex min-h-[560px] items-center lg:min-h-[620px]">

        <div class="mx-auto w-full max-w-7xl px-5 py-20 lg:px-8">

            <div class="max-w-4xl">

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-12 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        About Vorian Engineering
                    </span>

                </div>


                <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Engineering Solutions

                    <span class="block text-vorian-orange">
                        Built Around Your Operations
                    </span>

                </h1>


                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    We provide practical technical, engineering, equipment
                    maintenance and material handling solutions designed to
                    support reliable and efficient business operations.
                </p>


                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/services"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Explore Our Services

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
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/10"
                    >
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHO WE ARE
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">

            <div>

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Who We Are
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">

                    A Technical Partner

                    <span class="block text-vorian-teal">
                        You Can Rely On
                    </span>

                </h2>

            </div>


            <div class="space-y-5 text-base leading-8 text-gray-600">

                <p>
                    Vorian Engineering is an engineering and technical
                    solutions company focused on equipment reliability,
                    maintenance and operational support.
                </p>

                <p>
                    We work with businesses that depend on equipment and
                    technical systems to keep their operations moving.
                    Our services cover equipment diagnosis and
                    troubleshooting, repairs, regular servicing,
                    maintenance programs, technical consulting,
                    engineering support, inspection and commissioning.
                </p>

                <p>
                    We also support material handling requirements through
                    equipment supply, local assembly and installation,
                    genuine part supply and pre-delivery inspection.
                </p>

                <p>
                    Our approach is straightforward: understand the
                    operational requirement, identify the right solution
                    and provide practical technical support that contributes
                    to equipment performance and business continuity.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHAT WE DO
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="What We Do"
            title="Engineering, Equipment"
            highlight="& Technical Support"
            description="Our capabilities cover key areas of equipment support, engineering services and material handling."
            :centered="true"
        />


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            <x-service-card
                title="Electronics Diagnosis & Troubleshooting"
                description="Systematic diagnosis and troubleshooting to identify equipment faults and support efficient restoration."
                url="/services/electronics-diagnosis-troubleshooting"
                accent="orange"
                icon="diagnosis"
            />

            <x-service-card
                title="Repairs & Regular Servicing"
                description="Equipment repairs and regular servicing focused on maintaining functionality and operational reliability."
                url="/services/repairs-regular-servicing"
                accent="teal"
                icon="repairs"
            />

            <x-service-card
                title="Maintenance Programs"
                description="Planned maintenance programs designed to help businesses reduce avoidable equipment failures and downtime."
                url="/services/maintenance-programs"
                accent="orange"
                icon="maintenance"
            />

            <x-service-card
                title="Technical Consulting & Support"
                description="Technical guidance and support for equipment, maintenance and engineering-related decisions."
                url="/services/technical-consulting-support"
                accent="teal"
                icon="consulting"
            />

            <x-service-card
                title="Technical & Engineering Services"
                description="Practical engineering and technical services tailored to specific operational requirements."
                url="/services/technical-engineering-services"
                accent="orange"
                icon="engineering"
            />

            <x-service-card
                title="Inspection & Commissioning"
                description="Pre-delivery inspection and commissioning support to help verify equipment readiness before deployment."
                url="/services/pre-delivery-inspection-commissioning"
                accent="teal"
                icon="inspection"
            />

        </div>

    </div>

</section>


{{-- =========================================================
     MATERIAL HANDLING
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">

            <div class="order-2 lg:order-1">

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Material Handling
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">

                    Equipment Solutions

                    <span class="block text-vorian-teal">
                        For Material Handling
                    </span>

                </h2>

                <p class="mt-6 text-base leading-8 text-gray-600">
                    Vorian Engineering supports businesses with material
                    handling equipment and related technical services for
                    lifting, moving, stacking and container handling
                    operations.
                </p>


                <div class="mt-8 grid gap-3 sm:grid-cols-2">

                    @foreach([
                        'Pallet Trucks',
                        'Reach Stackers',
                        'Range of Forklifts',
                        'Empty Container Handlers',
                        'Material Handling Equipment',
                        'Genuine Part Supply',
                        'Local Assembly & Installation',
                        'Pre-Delivery Inspection',
                    ] as $product)

                        <div class="flex items-center gap-3">

                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-vorian-orange/10 text-vorian-orange">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3.5 w-3.5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="3"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 12l4 4L19 6"
                                    />

                                </svg>

                            </span>

                            <span class="text-sm font-semibold text-vorian-dark">
                                {{ $product }}
                            </span>

                        </div>

                    @endforeach

                </div>


                <a
                    href="/products"
                    class="mt-8 inline-flex items-center text-sm font-bold text-vorian-teal transition hover:text-vorian-orange"
                >
                    Explore Our Products

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2 h-4 w-4"
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


            <div class="order-1 overflow-hidden rounded-3xl bg-vorian-dark lg:order-2">

                <div class="relative aspect-[4/3]">

                    <img
                        src="{{ asset('images/heroes/products.jpg') }}"
                        alt="Vorian Engineering material handling equipment"
                        class="h-full w-full object-cover"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-vorian-dark/80 via-transparent to-transparent"></div>

                    <div class="absolute bottom-0 left-0 p-7">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Equipment Solutions
                        </p>

                        <p class="mt-2 text-xl font-bold text-white">
                            Material Handling & Industrial Equipment
                        </p>

                    </div>

                </div>

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
            eyebrow="Industries We Serve"
            title="Supporting"
            highlight="Different Operations"
            description="Our technical and equipment capabilities can support businesses across diverse industrial and commercial environments."
            :centered="true"
        />


        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

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
                    class="group rounded-2xl border border-white/10 bg-white/5 p-7 transition duration-300 hover:-translate-y-1 hover:border-vorian-orange/40 hover:bg-white/10"
                >

                    <div class="h-1 w-10 rounded-full bg-vorian-orange transition-all group-hover:w-16"></div>

                    <h3 class="mt-6 text-xl font-bold text-white">
                        {{ $industry }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-400">
                        Technical, equipment and operational support
                        tailored to industry requirements.
                    </p>

                    <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-orange">

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


{{-- =========================================================
     OUR APPROACH
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <x-section-heading
            eyebrow="Our Approach"
            title="Understand. Solve."
            highlight="Support."
            description="We focus on practical engineering support rather than one-size-fits-all solutions."
            :centered="true"
        />


        <div class="mt-14 grid gap-6 md:grid-cols-3">

            @foreach([
                [
                    'number' => '01',
                    'title' => 'Understand',
                    'description' => 'We begin by understanding the equipment, operational environment and specific requirement.',
                ],
                [
                    'number' => '02',
                    'title' => 'Solve',
                    'description' => 'We identify practical technical and engineering solutions suited to the situation.',
                ],
                [
                    'number' => '03',
                    'title' => 'Support',
                    'description' => 'We provide ongoing technical support that helps maintain equipment performance.',
                ],
            ] as $step)

                <div class="relative rounded-2xl border border-gray-200 p-8">

                    <span class="text-5xl font-black text-vorian-orange/15">
                        {{ $step['number'] }}
                    </span>

                    <h3 class="mt-2 text-xl font-bold text-vorian-dark">
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
     WHY VORIAN
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-3">

                <span class="h-px w-10 bg-vorian-orange"></span>

                <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                    Why Vorian
                </span>

                <span class="h-px w-10 bg-vorian-orange"></span>

            </div>

            <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl">
                Focused on
                <span class="text-vorian-teal">
                    Your Operation
                </span>
            </h2>

            <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
                We combine technical knowledge, equipment support and
                practical problem-solving to help businesses address
                operational requirements.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            @foreach([
                [
                    'title' => 'Technical Expertise',
                    'description' => 'Practical technical knowledge applied to equipment and engineering requirements.',
                ],
                [
                    'title' => 'Equipment Support',
                    'description' => 'Support covering diagnosis, repairs, servicing, maintenance and inspection.',
                ],
                [
                    'title' => 'Operational Focus',
                    'description' => 'Solutions considered within the context of real business operations.',
                ],
                [
                    'title' => 'Ongoing Support',
                    'description' => 'Technical support designed to continue beyond the initial service.',
                ],
            ] as $reason)

                <div class="rounded-2xl bg-white p-7 shadow-sm">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-vorian-orange text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-lg font-bold text-vorian-dark">
                        {{ $reason['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        {{ $reason['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     FINAL CTA
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-vorian-dark">

            <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-vorian-orange/20 blur-3xl"></div>

            <div class="absolute -bottom-24 -left-24 h-80 w-80 rounded-full bg-vorian-teal/20 blur-3xl"></div>

            <div class="relative px-7 py-14 sm:px-10 lg:px-14 lg:py-16">

                <div class="grid gap-10 lg:grid-cols-2 lg:items-center">

                    <div>

                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Work With Vorian Engineering
                        </p>

                        <h2 class="mt-4 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                            Let's Find the Right Solution for Your Operation.
                        </h2>

                        <p class="mt-5 max-w-xl text-base leading-7 text-gray-400">
                            Have an equipment, maintenance, engineering or
                            material handling requirement? Talk to our team.
                        </p>

                    </div>


                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">

                        <a
                            href="/contact"
                            class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                        >
                            Contact Vorian
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