@extends('layouts.app')

@section('title', 'Vorian Engineering | Engineering & Material Handling Solutions in Nigeria')

@section('meta_description', 'Vorian Engineering provides technical, engineering, maintenance and material handling solutions for businesses across Nigeria.')

@section('content')


{{-- =========================================================
     HERO SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-vorian-dark">

    {{-- Decorative Engineering Grid --}}
    <div
        class="absolute inset-0 opacity-[0.06]"
        style="
            background-image:
                linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
            background-size: 45px 45px;
        "
    ></div>

    {{-- Orange Accent --}}
    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-vorian-orange/20 blur-3xl"></div>

    {{-- Teal Accent --}}
    <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-vorian-teal/20 blur-3xl"></div>


    <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-5 py-20 lg:grid-cols-2 lg:px-8 lg:py-28">

        {{-- LEFT CONTENT --}}
        <div>

            {{-- Eyebrow --}}
            <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2">

                <span class="h-2 w-2 rounded-full bg-vorian-orange"></span>

                <span class="text-xs font-bold uppercase tracking-[0.2em] text-gray-300">
                    Engineering • Technical • Material Handling
                </span>

            </div>


            {{-- H1 --}}
            <h1 class="max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                Engineering & Material Handling

                <span class="block text-vorian-orange">
                    Solutions for Business
                </span>

            </h1>


            {{-- Description --}}
            <p class="mt-7 max-w-2xl text-lg leading-8 text-gray-300">

                Vorian Engineering provides reliable technical, engineering,
                maintenance and material handling solutions that help businesses
                operate safely, efficiently and productively.

            </p>


            {{-- CTAs --}}
            <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                <a
                    href="/contact"
                    class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white shadow-lg shadow-black/20 transition hover:bg-vorian-orange-dark"
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
                    href="/services"
                    class="inline-flex items-center justify-center rounded-lg border border-white/20 bg-white/5 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10"
                >
                    Explore Our Services
                </a>

            </div>


            {{-- Contact --}}
            <div class="mt-8 flex flex-wrap gap-x-6 gap-y-3 text-sm text-gray-400">

                <a
                    href="tel:+23481616794408"
                    class="transition hover:text-white"
                >
                    +234 816 167 94408
                </a>

                <span class="hidden text-gray-600 sm:inline">|</span>

                <a
                    href="mailto:info@vorian.com.ng"
                    class="transition hover:text-white"
                >
                    info@vorian.com.ng
                </a>

            </div>

        </div>


        {{-- RIGHT VISUAL --}}
        <div class="relative">

            {{-- Main Visual Card --}}
            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-3 shadow-2xl backdrop-blur-sm">

                <div class="relative flex min-h-[430px] items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-br from-vorian-teal-dark via-vorian-dark to-gray-950">

                    {{-- Technical Rings --}}
                    <div class="absolute h-72 w-72 rounded-full border border-white/10"></div>

                    <div class="absolute h-52 w-52 rounded-full border border-vorian-orange/30"></div>

                    <div class="absolute h-32 w-32 rounded-full border border-vorian-teal/40"></div>


                    {{-- Engineering Icon --}}
                    <div class="relative z-10 text-center">

                        <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-2xl border border-white/10 bg-white/10 shadow-xl backdrop-blur">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-14 w-14 text-vorian-orange"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M10.5 6h3m-6 4h9m-10.5 4h12M5 18h14"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"
                                />
                            </svg>

                        </div>


                        <h2 class="mt-7 text-2xl font-bold text-white">
                            Built Around Reliability
                        </h2>

                        <p class="mx-auto mt-3 max-w-sm text-sm leading-6 text-gray-400">
                            Technical expertise and dependable support
                            for demanding business operations.
                        </p>

                    </div>

                </div>

            </div>


            {{-- Floating Card --}}
            <div class="absolute -bottom-6 -left-5 hidden rounded-2xl border border-white/10 bg-white px-6 py-5 shadow-2xl sm:block">

                <p class="text-xs font-bold uppercase tracking-wider text-vorian-teal">
                    Our Focus
                </p>

                <p class="mt-1 text-sm font-bold text-gray-900">
                    Safety • Performance • Reliability
                </p>

            </div>


            {{-- Floating Orange Badge --}}
            <div class="absolute -right-4 -top-5 hidden rounded-2xl bg-vorian-orange px-5 py-4 shadow-xl sm:block">

                <p class="text-xs font-bold uppercase tracking-wider text-white/80">
                    Vorian
                </p>

                <p class="text-lg font-extrabold text-white">
                    Engineering
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CREDIBILITY STRIP
========================================================= --}}

<section class="border-b border-gray-100 bg-white">

    <div class="mx-auto grid max-w-7xl grid-cols-2 divide-x divide-gray-100 px-5 py-7 sm:grid-cols-4 lg:px-8">

        <div class="px-4 text-center sm:px-6">

            <p class="text-sm font-bold text-vorian-dark">
                Technical Expertise
            </p>

        </div>

        <div class="px-4 text-center sm:px-6">

            <p class="text-sm font-bold text-vorian-dark">
                Reliable Support
            </p>

        </div>

        <div class="px-4 text-center sm:px-6">

            <p class="text-sm font-bold text-vorian-dark">
                Genuine Parts
            </p>

        </div>

        <div class="px-4 text-center sm:px-6">

            <p class="text-sm font-bold text-vorian-dark">
                Professional Service
            </p>

        </div>

    </div>

</section>

{{-- =========================================================
     ABOUT VORIAN + WHY CHOOSE US
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">

            {{-- LEFT: About --}}
            <div>

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        About Vorian Engineering
                    </span>

                </div>


                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">

                    Engineering Expertise
                    <span class="block text-vorian-teal">
                        That Keeps Business Moving
                    </span>

                </h2>


                <p class="mt-6 text-base leading-8 text-gray-600">
                    Vorian Engineering provides technical, engineering,
                    maintenance and material handling solutions designed
                    around the operational needs of modern businesses.
                </p>


                <p class="mt-5 text-base leading-8 text-gray-600">
                    From equipment diagnostics and repairs to preventive
                    maintenance, technical support, equipment supply and
                    commissioning, we help organizations maintain reliable
                    operations and make better use of their equipment.
                </p>


                {{-- Key Areas --}}
                <div class="mt-8 grid gap-4 sm:grid-cols-2">

                    <div class="flex items-start gap-3">

                        <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-vorian-orange/10 text-vorian-orange">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="text-sm font-bold text-vorian-dark">
                                Technical Expertise
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Practical technical solutions for equipment
                                and operational challenges.
                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-vorian-teal/10 text-vorian-teal">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="text-sm font-bold text-vorian-dark">
                                Equipment Support
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Maintenance, repairs, parts and equipment
                                support.
                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-vorian-orange/10 text-vorian-orange">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="text-sm font-bold text-vorian-dark">
                                Preventive Maintenance
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Programs designed to reduce avoidable
                                equipment downtime.
                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-vorian-teal/10 text-vorian-teal">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="text-sm font-bold text-vorian-dark">
                                Reliable Support
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Ongoing technical assistance when your
                                operations need it.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="mt-9">

                    <a
                        href="/about"
                        class="inline-flex items-center rounded-lg bg-vorian-dark px-6 py-3.5 text-sm font-bold text-white transition hover:bg-vorian-teal"
                    >
                        Learn More About Vorian

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


            {{-- RIGHT: Why Choose Us --}}
            <div class="relative">

                {{-- Decorative Background --}}
                <div class="absolute -right-8 -top-8 h-40 w-40 rounded-full bg-vorian-orange/10 blur-2xl"></div>

                <div class="relative rounded-3xl bg-vorian-dark p-8 shadow-xl sm:p-10">

                    <div class="mb-8">

                        <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Why Choose Vorian
                        </span>

                        <h3 class="mt-3 text-2xl font-bold text-white sm:text-3xl">
                            Built Around Your Operations
                        </h3>

                        <p class="mt-4 text-sm leading-6 text-gray-400">
                            Our approach focuses on practical solutions,
                            equipment reliability and long-term operational
                            performance.
                        </p>

                    </div>


                    {{-- Reason 1 --}}
                    <div class="border-b border-white/10 py-6 first:pt-0">

                        <div class="flex gap-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-vorian-orange text-white">

                                <span class="text-sm font-extrabold">
                                    01
                                </span>

                            </div>

                            <div>

                                <h4 class="font-bold text-white">
                                    Practical Technical Solutions
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-gray-400">
                                    We focus on identifying the actual
                                    technical challenge and delivering
                                    solutions suited to the operation.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Reason 2 --}}
                    <div class="border-b border-white/10 py-6">

                        <div class="flex gap-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-vorian-teal text-white">

                                <span class="text-sm font-extrabold">
                                    02
                                </span>

                            </div>

                            <div>

                                <h4 class="font-bold text-white">
                                    Equipment-Focused Expertise
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-gray-400">
                                    From material handling equipment to
                                    technical systems, our services are
                                    built around operational equipment needs.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Reason 3 --}}
                    <div class="border-b border-white/10 py-6">

                        <div class="flex gap-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-vorian-orange text-white">

                                <span class="text-sm font-extrabold">
                                    03
                                </span>

                            </div>

                            <div>

                                <h4 class="font-bold text-white">
                                    Preventive Approach
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-gray-400">
                                    Planned maintenance helps businesses
                                    reduce avoidable breakdowns and maintain
                                    equipment performance.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Reason 4 --}}
                    <div class="py-6">

                        <div class="flex gap-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-vorian-teal text-white">

                                <span class="text-sm font-extrabold">
                                    04
                                </span>

                            </div>

                            <div>

                                <h4 class="font-bold text-white">
                                    Support Beyond Supply
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-gray-400">
                                    Equipment supply is supported by
                                    installation, inspections, parts and
                                    technical assistance.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- CTA --}}
                    <div class="mt-5 rounded-xl bg-white/5 p-5">

                        <p class="text-sm font-semibold text-white">
                            Have an equipment or technical challenge?
                        </p>

                        <a
                            href="/contact"
                            class="mt-3 inline-flex items-center text-sm font-bold text-vorian-orange transition hover:text-white"
                        >
                            Speak With Our Technical Team

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

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     SERVICES SECTION
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        {{-- Section Heading --}}
        <div class="max-w-3xl">

            <div class="mb-4 flex items-center gap-3">

                <span class="h-px w-10 bg-vorian-orange"></span>

                <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                    What We Do
                </span>

            </div>

            <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">
                Engineering & Technical Services
                <span class="block text-vorian-teal">
                    You Can Depend On
                </span>
            </h2>

            <p class="mt-6 max-w-2xl text-base leading-7 text-gray-600 sm:text-lg">
                From equipment diagnostics and repairs to maintenance,
                technical consulting and commissioning, Vorian Engineering
                delivers practical solutions that keep your operations
                running efficiently.
            </p>

        </div>


        {{-- Services Grid --}}

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <x-service-card
                    title="Electronics Diagnosis & Troubleshooting"
                    description="Accurate diagnosis and troubleshooting of electronic systems to identify faults, reduce downtime and restore equipment performance."
                    url="/services/electronics-diagnosis-troubleshooting"
                    accent="orange"
                    icon="icons.diagnosis"
                />

                <x-service-card
                    title="Repairs & Regular Servicing"
                    description="Professional equipment repairs and scheduled servicing designed to improve reliability, extend equipment life and minimize unexpected breakdowns."
                    url="/services/repairs-regular-servicing"
                    accent="teal"
                    icon="icons.repairs"
                />

                <x-service-card
                    title="Maintenance Programs"
                    description="Structured preventive maintenance programs that help businesses protect their equipment, reduce downtime and maintain consistent operational performance."
                    url="/services/maintenance-programs"
                    accent="orange"
                    icon="icons.maintenance"
                />

                <x-service-card
                    title="Technical Consulting & Support"
                    description="Practical technical guidance and ongoing support to help organizations make informed equipment, maintenance and engineering decisions."
                    url="/services/technical-consulting-support"
                    accent="teal"
                    icon="icons.consulting"
                />

                <x-service-card
                    title="Technical & Engineering Services"
                    description="Technical and engineering support tailored to equipment, operational and business requirements across demanding industrial environments."
                    url="/services/technical-engineering-services"
                    accent="orange"
                    icon="icons.engineering"
                />

                <x-service-card
                    title="Pre-Delivery Inspection & Commissioning"
                    description="Thorough equipment inspections and commissioning support to verify readiness, functionality and operational requirements before deployment."
                    url="/services/pre-delivery-inspection-commissioning"
                    accent="teal"
                    icon="icons.inspection"
                />

            </div>



        {{-- Services CTA --}}
        <div class="mt-12 flex flex-col items-center justify-between gap-6 rounded-2xl bg-vorian-dark px-7 py-8 sm:flex-row lg:px-10">

            <div>

                <h3 class="text-xl font-bold text-white sm:text-2xl">
                    Need technical support for your equipment?
                </h3>

                <p class="mt-2 text-sm text-gray-400">
                    Talk to Vorian Engineering about your requirements.
                </p>

            </div>

            <a
                href="/contact"
                class="inline-flex shrink-0 items-center rounded-lg bg-vorian-orange px-6 py-3.5 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
            >
                Talk to an Engineer

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

</section>

{{-- =========================================================
     INDUSTRIES SECTION
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        {{-- Section Header --}}
        <div class="grid gap-8 lg:grid-cols-2 lg:items-end">

            <div>

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Industries We Serve
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">
                    Technical Solutions Across
                    <span class="text-vorian-teal">
                        Diverse Industries
                    </span>
                </h2>

            </div>

            <p class="max-w-xl text-base leading-7 text-gray-600 lg:ml-auto">
                Vorian Engineering supports businesses across demanding
                industries with dependable technical services, equipment
                support, maintenance solutions and material handling expertise.
            </p>

        </div>


        {{-- Industries Grid --}}
        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


            {{-- Oil & Gas --}}
            <a
                href="/industries/oil-and-gas"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-vorian-dark"
            >

                {{-- Background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-vorian-dark via-vorian-dark to-vorian-teal-dark"></div>

                {{-- Decorative Circle --}}
                <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full border border-white/10"></div>

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v18M7 7l5-4 5 4M7 17l5 4 5-4"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 12h16"
                            />
                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-white">
                            Oil & Gas
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-400">
                            Technical and equipment support for demanding
                            industrial operations.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-orange">
                            Explore Industry

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

                    </div>

                </div>

            </a>


            {{-- FMCG --}}
            <a
                href="/industries/fmcg"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl border border-gray-200 bg-vorian-light"
            >

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-teal/10 text-vorian-teal">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 7h16M5 7l1 13h12l1-13"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 7V4h6v3"
                            />

                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-vorian-dark">
                            FMCG
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Equipment and maintenance support for fast-moving
                            consumer goods operations.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange">
                            Explore Industry

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

                    </div>

                </div>

            </a>


            {{-- Shipping & Consumer --}}
            <a
                href="/industries/shipping-and-consumer"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl border border-gray-200 bg-white"
            >

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 17h18M5 17l2-8h10l2 8"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M7 9V6h10v3"
                            />

                            <circle cx="7" cy="19" r="1.5" />
                            <circle cx="17" cy="19" r="1.5" />

                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-vorian-dark">
                            Shipping & Consumer
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Material handling and technical support for
                            shipping, logistics and consumer operations.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-orange transition group-hover:text-vorian-teal">
                            Explore Industry

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

                    </div>

                </div>

            </a>


            {{-- Construction --}}
            <a
                href="/industries/construction"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl border border-gray-200 bg-white"
            >

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-teal/10 text-vorian-teal">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 20h16M6 20V9l6-5 6 5v11"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 20v-5h6v5"
                            />

                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-vorian-dark">
                            Construction
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Technical services and equipment solutions
                            supporting construction operations.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange">
                            Explore Industry

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

                    </div>

                </div>

            </a>


            {{-- Agriculture --}}
            <a
                href="/industries/agriculture"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl border border-gray-200 bg-vorian-light"
            >

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 21V8"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 12c-4-1-6-3.5-6-7 4 .5 6 2.5 6 7z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 15c4-1 6-3.5 6-7-4 .5-6 2.5-6 7z"
                            />

                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-vorian-dark">
                            Agriculture
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Equipment support and material handling solutions
                            for agricultural operations and supply chains.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-vorian-orange transition group-hover:text-vorian-teal">
                            Explore Industry

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

                    </div>

                </div>

            </a>


            {{-- Warehousing --}}
            <a
                href="/industries/warehousing"
                class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-vorian-teal"
            >

                <div class="relative flex h-full flex-col justify-between p-7">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-white/10 text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 20.25h16.5M5.25 20.25V8.25L12 4.5l6.75 3.75v12"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 20.25v-6h7.5v6"
                            />

                        </svg>

                    </div>

                    <div class="mt-10">

                        <h3 class="text-2xl font-bold text-white">
                            Warehousing
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/70">
                            Material handling equipment and technical support
                            for efficient warehouse operations.
                        </p>

                        <span class="mt-5 inline-flex items-center text-sm font-bold text-white">
                            Explore Industry

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

                    </div>

                </div>

            </a>

        </div>


        {{-- Industry CTA --}}
        <div class="mt-12 text-center">

            <p class="text-sm text-gray-500">
                Looking for a technical solution tailored to your industry?
            </p>

            <a
                href="/contact"
                class="mt-4 inline-flex items-center text-sm font-bold text-vorian-teal transition hover:text-vorian-orange"
            >
                Discuss Your Requirements

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

    </div>

</section>

{{-- =========================================================
     PRODUCTS & MATERIAL HANDLING SECTION
========================================================= --}}

<section class="bg-vorian-dark py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        {{-- Section Header --}}
        <div class="grid gap-8 lg:grid-cols-2 lg:items-end">

            <div>

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Products & Solutions
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">
                    Material Handling
                    <span class="text-vorian-orange">
                        Equipment & Support
                    </span>
                </h2>

            </div>

            <p class="max-w-xl text-base leading-7 text-gray-400 lg:ml-auto">
                From forklifts and pallet trucks to reach stackers and
                container handling equipment, Vorian Engineering provides
                equipment solutions backed by technical expertise,
                installation and genuine parts support.
            </p>

        </div>


        {{-- Equipment Grid --}}
        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


            {{-- Pallet Truck --}}
            <a
                href="/products/pallet-truck"
                class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 transition duration-300 hover:-translate-y-1 hover:border-vorian-orange/50 hover:bg-white/10"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 18h12M7 18V8h5l4 4v6"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 8V5h5"
                        />

                        <circle cx="7" cy="20" r="1" />
                        <circle cx="17" cy="20" r="1" />

                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Pallet Truck
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-400">
                    Practical pallet handling solutions for warehouses,
                    distribution centres and industrial operations.
                </p>

                <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-orange">
                    View Product

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


            {{-- Reach Stackers --}}
            <a
                href="/products/reach-stackers"
                class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 transition duration-300 hover:-translate-y-1 hover:border-vorian-teal/50 hover:bg-white/10"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-teal/10 text-vorian-teal">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 20h12M7 20V10h5l5 4v6"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 10V5h4"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 5l3 3"
                        />

                        <circle cx="8" cy="20" r="1" />
                        <circle cx="17" cy="20" r="1" />

                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Reach Stackers
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-400">
                    Heavy-duty container handling equipment designed for
                    demanding logistics and terminal environments.
                </p>

                <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal">
                    View Product

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


            {{-- Forklifts --}}
            <a
                href="/products/forklifts"
                class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 transition duration-300 hover:-translate-y-1 hover:border-vorian-orange/50 hover:bg-white/10"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 18h14M6 18V9h6l3 3v6"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 9V4h4v8"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 4h3"
                        />

                        <circle cx="7" cy="20" r="1" />
                        <circle cx="17" cy="20" r="1" />

                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Forklifts
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-400">
                    A range of forklift solutions for lifting, stacking,
                    loading and material movement.
                </p>

                <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-orange">
                    View Product

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


            {{-- Empty Container Handler --}}
            <a
                href="/products/empty-container-handler"
                class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 transition duration-300 hover:-translate-y-1 hover:border-vorian-teal/50 hover:bg-white/10"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-vorian-teal/10 text-vorian-teal">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 18h16M6 18V8h12v10"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 8V5h8v3"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12h6"
                        />

                    </svg>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Empty Container Handler
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-400">
                    Equipment solutions for efficient empty container
                    movement and terminal handling operations.
                </p>

                <span class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal">
                    View Product

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

        </div>


        {{-- Support Solutions --}}
        <div class="mt-6 grid gap-5 md:grid-cols-2 lg:grid-cols-4">


            {{-- Material Handling --}}
            <a
                href="/products/material-handling-equipment"
                class="group rounded-2xl bg-white p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

                <div class="flex items-center justify-between">

                    <h3 class="font-bold text-vorian-dark">
                        Material Handling Equipment
                    </h3>

                    <span class="text-vorian-orange transition group-hover:translate-x-1">
                        →
                    </span>

                </div>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Equipment solutions designed around your operational
                    and material movement requirements.
                </p>

            </a>


            {{-- Local Assembly --}}
            <a
                href="/services/local-assembly-installation"
                class="group rounded-2xl bg-white p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

                <div class="flex items-center justify-between">

                    <h3 class="font-bold text-vorian-dark">
                        Local Assembly & Installation
                    </h3>

                    <span class="text-vorian-teal transition group-hover:translate-x-1">
                        →
                    </span>

                </div>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Professional assembly and installation support for
                    equipment deployment and commissioning.
                </p>

            </a>


            {{-- Genuine Parts --}}
            <a
                href="/products/genuine-parts"
                class="group rounded-2xl bg-white p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

                <div class="flex items-center justify-between">

                    <h3 class="font-bold text-vorian-dark">
                        Genuine Part Supply
                    </h3>

                    <span class="text-vorian-orange transition group-hover:translate-x-1">
                        →
                    </span>

                </div>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Genuine replacement parts to support equipment
                    reliability and long-term performance.
                </p>

            </a>


            {{-- PDI --}}
            <a
                href="/services/pre-delivery-inspection"
                class="group rounded-2xl bg-white p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
            >

                <div class="flex items-center justify-between">

                    <h3 class="font-bold text-vorian-dark">
                        Pre-Delivery Inspections
                    </h3>

                    <span class="text-vorian-teal transition group-hover:translate-x-1">
                        →
                    </span>

                </div>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Inspection support to verify equipment readiness before
                    delivery and operational deployment.
                </p>

            </a>

        </div>


        {{-- Products CTA --}}
        <div class="mt-12 flex flex-col items-center justify-between gap-6 rounded-2xl border border-white/10 bg-white/5 px-7 py-8 sm:flex-row lg:px-10">

            <div>

                <p class="text-sm font-semibold uppercase tracking-wider text-vorian-orange">
                    Need Equipment?
                </p>

                <h3 class="mt-2 text-xl font-bold text-white sm:text-2xl">
                    Find the right material handling solution for your operation.
                </h3>

            </div>

            <a
                href="/contact"
                class="inline-flex shrink-0 items-center rounded-lg bg-vorian-orange px-6 py-3.5 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
            >
                Enquire About Equipment

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

</section>

{{-- =========================================================
     PROJECTS / CASE STUDIES SECTION
========================================================= --}}

<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        {{-- Section Header --}}
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div class="max-w-3xl">

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Our Projects
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">
                    Engineering Solutions
                    <span class="text-vorian-teal">
                        Delivered in Practice
                    </span>
                </h2>

                <p class="mt-6 max-w-2xl text-base leading-7 text-gray-600 sm:text-lg">
                    Explore selected projects and technical solutions delivered
                    for businesses across demanding operational environments.
                </p>

            </div>

            <a
                href="/projects"
                class="inline-flex shrink-0 items-center self-start rounded-lg border border-vorian-dark px-5 py-3 text-sm font-bold text-vorian-dark transition hover:bg-vorian-dark hover:text-white md:self-auto"
            >
                View All Projects

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


        {{-- Project Showcase --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-3">


            {{-- Project Placeholder 1 --}}
            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative flex h-64 items-center justify-center overflow-hidden bg-vorian-dark">

                    {{-- Technical Background --}}
                    <div
                        class="absolute inset-0 opacity-[0.08]"
                        style="
                            background-image:
                                linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                                linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                            background-size: 35px 35px;
                        "
                    ></div>

                    <div class="relative text-center">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-xl bg-vorian-orange text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 20h16M6 20V9l6-5 6 5v11"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 20v-5h6v5"
                                />

                            </svg>

                        </div>

                        <p class="mt-4 text-xs font-bold uppercase tracking-[0.2em] text-gray-400">
                            Project Showcase
                        </p>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider">

                        <span class="text-vorian-orange">
                            Engineering
                        </span>

                        <span class="text-gray-300">
                            /
                        </span>

                        <span class="text-gray-500">
                            Nigeria
                        </span>

                    </div>

                    <h3 class="mt-4 text-xl font-bold text-vorian-dark">
                        Engineering & Technical Solutions
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        A showcase of Vorian's technical capabilities,
                        equipment support and engineering solutions.
                    </p>

                    <a
                        href="/projects"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Explore Projects

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

                </div>

            </article>


            {{-- Project Placeholder 2 --}}
            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative flex h-64 items-center justify-center overflow-hidden bg-vorian-teal">

                    <div
                        class="absolute inset-0 opacity-[0.08]"
                        style="
                            background-image:
                                linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                                linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                            background-size: 35px 35px;
                        "
                    ></div>

                    <div class="relative text-center">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-xl bg-white/10 text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 17h18M5 17l2-8h10l2 8"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M7 9V6h10v3"
                                />

                                <circle cx="7" cy="19" r="1.5" />
                                <circle cx="17" cy="19" r="1.5" />

                            </svg>

                        </div>

                        <p class="mt-4 text-xs font-bold uppercase tracking-[0.2em] text-white/60">
                            Material Handling
                        </p>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider">

                        <span class="text-vorian-teal">
                            Material Handling
                        </span>

                        <span class="text-gray-300">
                            /
                        </span>

                        <span class="text-gray-500">
                            Nigeria
                        </span>

                    </div>

                    <h3 class="mt-4 text-xl font-bold text-vorian-dark">
                        Equipment & Operational Support
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        Equipment supply, technical support, maintenance and
                        material handling solutions for business operations.
                    </p>

                    <a
                        href="/projects"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Explore Projects

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

                </div>

            </article>


            {{-- Project Placeholder 3 --}}
            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="relative flex h-64 items-center justify-center overflow-hidden bg-vorian-dark">

                    <div
                        class="absolute inset-0 opacity-[0.08]"
                        style="
                            background-image:
                                linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                                linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                            background-size: 35px 35px;
                        "
                    ></div>

                    <div class="relative text-center">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-xl bg-vorian-orange text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3v18M7 7l5-4 5 4M7 17l5 4 5-4"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 12h16"
                                />

                            </svg>

                        </div>

                        <p class="mt-4 text-xs font-bold uppercase tracking-[0.2em] text-gray-400">
                            Technical Services
                        </p>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider">

                        <span class="text-vorian-orange">
                            Technical Support
                        </span>

                        <span class="text-gray-300">
                            /
                        </span>

                        <span class="text-gray-500">
                            Nigeria
                        </span>

                    </div>

                    <h3 class="mt-4 text-xl font-bold text-vorian-dark">
                        Maintenance & Equipment Reliability
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        Diagnostics, repairs, servicing and preventive
                        maintenance designed around equipment reliability.
                    </p>

                    <a
                        href="/projects"
                        class="mt-6 inline-flex items-center text-sm font-bold text-vorian-teal transition group-hover:text-vorian-orange"
                    >
                        Explore Projects

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

                </div>

            </article>

        </div>


        {{-- Projects CTA --}}
        <div class="mt-12 rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-100 sm:p-10">

            <div class="flex flex-col gap-7 lg:flex-row lg:items-center lg:justify-between">

                <div>

                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Have a Project?
                    </p>

                    <h3 class="mt-3 text-2xl font-extrabold text-vorian-dark sm:text-3xl">
                        Let's discuss your engineering requirements.
                    </h3>

                    <p class="mt-3 max-w-2xl text-sm leading-6 text-gray-600">
                        Tell us about your equipment, technical challenge
                        or operational requirement and our team can discuss
                        the appropriate solution with you.
                    </p>

                </div>

                <div class="flex shrink-0 flex-col gap-3 sm:flex-row">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-6 py-3.5 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Discuss Your Project
                    </a>

                    <a
                        href="https://wa.me/23481616794408"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-lg border border-vorian-dark px-6 py-3.5 text-sm font-bold text-vorian-dark transition hover:bg-vorian-dark hover:text-white"
                    >
                        WhatsApp Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     CLIENT TRUST / CTA SECTION
========================================================= --}}

<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        {{-- Trust Header --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-3">

                <span class="h-px w-10 bg-vorian-orange"></span>

                <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                    Built for Business
                </span>

                <span class="h-px w-10 bg-vorian-orange"></span>

            </div>

            <h2 class="text-3xl font-extrabold tracking-tight text-vorian-dark sm:text-4xl lg:text-5xl">
                Technical Support You Can
                <span class="text-vorian-teal">
                    Rely On
                </span>
            </h2>

            <p class="mt-6 text-base leading-7 text-gray-600 sm:text-lg">
                Whether you need equipment support, preventive maintenance,
                technical troubleshooting or material handling solutions,
                Vorian Engineering is ready to discuss your requirements.
            </p>

        </div>


        {{-- Trust Cards --}}
        <div class="mt-14 grid gap-6 md:grid-cols-3">


            {{-- Card 1 --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-7">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3l7 4v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V7l7-4z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12l2 2 4-4"
                        />

                    </svg>

                </div>

                <h3 class="mt-6 text-lg font-bold text-vorian-dark">
                    Reliability Focused
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Our solutions are designed around equipment reliability,
                    operational continuity and practical business needs.
                </p>

            </div>


            {{-- Card 2 --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-7">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-vorian-teal/10 text-vorian-teal">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6v6l4 2"
                        />

                        <circle cx="12" cy="12" r="8.5" />

                    </svg>

                </div>

                <h3 class="mt-6 text-lg font-bold text-vorian-dark">
                    Responsive Support
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    From troubleshooting and repairs to ongoing maintenance,
                    our services are built to support your operations.
                </p>

            </div>


            {{-- Card 3 --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-7">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-vorian-orange/10 text-vorian-orange">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12l2 2 4-4"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 5h14v14H5z"
                        />

                    </svg>

                </div>

                <h3 class="mt-6 text-lg font-bold text-vorian-dark">
                    Practical Solutions
                </h3>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    We focus on solutions that fit your equipment,
                    environment and operational requirements.
                </p>

            </div>

        </div>


        {{-- =====================================================
             FINAL CTA
        ====================================================== --}}

        <div class="relative mt-16 overflow-hidden rounded-3xl bg-vorian-dark">

            {{-- Decorative Elements --}}
            <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-vorian-orange/20 blur-3xl"></div>

            <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-vorian-teal/20 blur-3xl"></div>

            <div
                class="absolute inset-0 opacity-[0.04]"
                style="
                    background-image:
                        linear-gradient(rgba(255,255,255,.7) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,.7) 1px, transparent 1px);
                    background-size: 40px 40px;
                "
            ></div>


            <div class="relative px-7 py-12 sm:px-10 lg:px-14 lg:py-16">

                <div class="grid gap-10 lg:grid-cols-2 lg:items-center">

                    {{-- CTA Content --}}
                    <div>

                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                            Let's Work Together
                        </p>

                        <h2 class="mt-4 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                            Need a Reliable Engineering or
                            <span class="text-vorian-orange">
                                Equipment Solution?
                            </span>
                        </h2>

                        <p class="mt-5 max-w-xl text-base leading-7 text-gray-400">
                            Tell us about your equipment, maintenance,
                            technical or material handling requirements.
                            Our team is ready to discuss the right solution
                            for your operation.
                        </p>


                        {{-- CTA Buttons --}}
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
                                class="inline-flex items-center justify-center rounded-lg border border-white/20 bg-white/5 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10"
                            >
                                WhatsApp Us
                            </a>

                        </div>

                    </div>


                    {{-- Contact Details --}}
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm">

                        <p class="text-sm font-bold uppercase tracking-[0.15em] text-vorian-orange">
                            Contact Vorian Engineering
                        </p>


                        {{-- Address --}}
                        <div class="mt-7 flex gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-vorian-orange/10 text-vorian-orange">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 21s7-5.25 7-12a7 7 0 10-14 0c0 6.75 7 12 7 12z"
                                    />

                                    <circle cx="12" cy="9" r="2.5" />

                                </svg>

                            </div>

                            <div>

                                <p class="text-xs font-bold uppercase tracking-wider text-gray-500">
                                    Address
                                </p>

                                <p class="mt-1 text-sm leading-6 text-gray-300">
                                    22 Ila-Oragun, Ijegun-Akinjoe,
                                    Satellite Town, Lagos State, Nigeria.
                                </p>

                            </div>

                        </div>


                        {{-- Phone --}}
                        <div class="mt-6 flex gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-vorian-teal/10 text-vorian-teal">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 4h3l2 5-2 1.5a14 14 0 005.5 5.5L15 14l5 2v3a1 1 0 01-1 1C10.7 20 4 13.3 4 5a1 1 0 011-1z"
                                    />

                                </svg>

                            </div>

                            <div>

                                <p class="text-xs font-bold uppercase tracking-wider text-gray-500">
                                    Phone
                                </p>

                                <div class="mt-1 space-y-1">

                                    <a
                                        href="tel:+23481616794408"
                                        class="block text-sm text-gray-300 transition hover:text-vorian-orange"
                                    >
                                        +234 816 167 94408
                                    </a>

                                    <a
                                        href="tel:+2347065280929"
                                        class="block text-sm text-gray-300 transition hover:text-vorian-orange"
                                    >
                                        +234 706 528 0929
                                    </a>

                                </div>

                            </div>

                        </div>


                        {{-- Email --}}
                        <div class="mt-6 flex gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-vorian-orange/10 text-vorian-orange">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4 6h16v12H4z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4 7l8 6 8-6"
                                    />

                                </svg>

                            </div>

                            <div>

                                <p class="text-xs font-bold uppercase tracking-wider text-gray-500">
                                    Email
                                </p>

                                <div class="mt-1 space-y-1">

                                    <a
                                        href="mailto:info@vorian.com.ng"
                                        class="block text-sm text-gray-300 transition hover:text-vorian-orange"
                                    >
                                        info@vorian.com.ng
                                    </a>

                                    <a
                                        href="mailto:tech@vorian.com.ng"
                                        class="block text-sm text-gray-300 transition hover:text-vorian-orange"
                                    >
                                        tech@vorian.com.ng
                                    </a>

                                </div>

                            </div>

                        </div>


                        {{-- WhatsApp --}}
                        <a
                            href="https://wa.me/23481616794408"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-7 flex items-center justify-center rounded-lg bg-vorian-teal px-5 py-3.5 text-sm font-bold text-white transition hover:bg-vorian-teal-dark"
                        >
                            Chat With Us on WhatsApp
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection

