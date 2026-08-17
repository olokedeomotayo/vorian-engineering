@extends('layouts.app')

@section('title', 'Contact Vorian Engineering | Engineering Services in Lagos, Nigeria')

@section('meta_description', 'Contact Vorian Engineering in Lagos for equipment repairs, maintenance, engineering services, technical support, material handling equipment and equipment enquiries.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[560px] overflow-hidden bg-vorian-dark lg:min-h-[620px]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/heroes/contact.jpg') }}"
            alt="Contact Vorian Engineering for technical and engineering support"
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
                        Contact Vorian Engineering
                    </span>

                </div>

                <h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">

                    Let's Discuss Your

                    <span class="block text-vorian-orange">
                        Engineering Requirements
                    </span>

                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-gray-300 sm:text-lg">
                    Tell us about your equipment, maintenance, engineering
                    or material handling requirement and let's discuss the
                    appropriate solution.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="https://wa.me/23481616794408"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-lg bg-vorian-orange px-7 py-4 text-sm font-bold text-white"
                    >
                        WhatsApp Us
                    </a>

                    <a
                        href="tel:+23481616794408"
                        class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/5 px-7 py-4 text-sm font-bold text-white"
                    >
                        Call Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CONTACT DETAILS --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid gap-6 md:grid-cols-3">

            {{-- Address --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-8">

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
                            d="M12 21s7-5.25 7-12a7 7 0 10-14 0c0 6.75 7 12 7 12z"
                        />

                        <circle cx="12" cy="9" r="2.5" />

                    </svg>

                </div>

                <h2 class="mt-6 text-xl font-bold text-vorian-dark">
                    Visit Us
                </h2>

                <p class="mt-3 text-sm leading-7 text-gray-600">
                    22 Ila-Oragun, Ijegun-Akinjoe,
                    Satellite Town, Lagos State, Nigeria.
                </p>

            </div>


            {{-- Phone --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-8">

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
                            d="M5 4h3l2 5-2 1.5a14 14 0 005.5 5.5L15 14l5 2v3a1 1 0 01-1 1C10.7 20 4 13.3 4 5a1 1 0 011-1z"
                        />

                    </svg>

                </div>

                <h2 class="mt-6 text-xl font-bold text-vorian-dark">
                    Call Us
                </h2>

                <div class="mt-3 space-y-2">

                    <a
                        href="tel:+23481616794408"
                        class="block text-sm text-gray-600 transition hover:text-vorian-orange"
                    >
                        +234 816 167 94408
                    </a>

                    <a
                        href="tel:+2347065280929"
                        class="block text-sm text-gray-600 transition hover:text-vorian-orange"
                    >
                        +234 706 528 0929
                    </a>

                </div>

            </div>


            {{-- Email --}}
            <div class="rounded-2xl border border-gray-200 bg-vorian-light p-8">

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
                            d="M4 6h16v12H4z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 7l8 6 8-6"
                        />

                    </svg>

                </div>

                <h2 class="mt-6 text-xl font-bold text-vorian-dark">
                    Email Us
                </h2>

                <div class="mt-3 space-y-2">

                    <a
                        href="mailto:info@vorian.com.ng"
                        class="block text-sm text-gray-600 transition hover:text-vorian-orange"
                    >
                        info@vorian.com.ng
                    </a>

                    <a
                        href="mailto:tech@vorian.com.ng"
                        class="block text-sm text-gray-600 transition hover:text-vorian-orange"
                    >
                        tech@vorian.com.ng
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CONTACT FORM --}}
<section class="bg-vorian-light py-20 lg:py-28">

    <div class="mx-auto max-w-5xl px-5 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-2">

            <div>

                <div class="mb-5 flex items-center gap-3">

                    <span class="h-px w-10 bg-vorian-orange"></span>

                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                        Send an Enquiry
                    </span>

                </div>

                <h2 class="text-3xl font-extrabold text-vorian-dark sm:text-4xl">
                    Tell Us What
                    <span class="text-vorian-teal">
                        You Need
                    </span>
                </h2>

                <p class="mt-5 text-base leading-7 text-gray-600">
                    Whether you're looking for equipment, maintenance,
                    technical support or engineering services, send us
                    your requirements and our team can follow up.
                </p>

            </div>


            <form
                action="#"
                method="POST"
                class="rounded-2xl bg-white p-7 shadow-sm sm:p-8"
            >

                @csrf

                <div class="space-y-5">

                    <div>

                        <label
                            for="name"
                            class="text-sm font-semibold text-vorian-dark"
                        >
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-vorian-teal focus:ring-2 focus:ring-vorian-teal/10"
                            placeholder="Your full name"
                        >

                    </div>


                    <div>

                        <label
                            for="email"
                            class="text-sm font-semibold text-vorian-dark"
                        >
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-vorian-teal focus:ring-2 focus:ring-vorian-teal/10"
                            placeholder="you@example.com"
                        >

                    </div>


                    <div>

                        <label
                            for="phone"
                            class="text-sm font-semibold text-vorian-dark"
                        >
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-vorian-teal focus:ring-2 focus:ring-vorian-teal/10"
                            placeholder="+234..."
                        >

                    </div>


                    <div>

                        <label
                            for="service"
                            class="text-sm font-semibold text-vorian-dark"
                        >
                            What Do You Need?
                        </label>

                        <select
                            id="service"
                            name="service"
                            class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-vorian-teal focus:ring-2 focus:ring-vorian-teal/10"
                        >

                            <option value="">Select an option</option>

                            <option value="engineering">
                                Technical & Engineering Services
                            </option>

                            <option value="maintenance">
                                Maintenance & Repairs
                            </option>

                            <option value="equipment">
                                Equipment / Product Enquiry
                            </option>

                            <option value="inspection">
                                Inspection & Commissioning
                            </option>

                            <option value="consulting">
                                Technical Consulting
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>


                    <div>

                        <label
                            for="message"
                            class="text-sm font-semibold text-vorian-dark"
                        >
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-vorian-teal focus:ring-2 focus:ring-vorian-teal/10"
                            placeholder="Tell us about your requirement..."
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="w-full rounded-lg bg-vorian-orange px-6 py-4 text-sm font-bold text-white transition hover:bg-vorian-orange-dark"
                    >
                        Send Enquiry
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="rounded-3xl bg-vorian-dark px-7 py-14 text-center sm:px-10">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-vorian-orange">
                Prefer WhatsApp?
            </p>

            <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                Chat Directly With Our Team
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-gray-400">
                Send us your equipment, maintenance or engineering
                requirement directly through WhatsApp.
            </p>

            <a
                href="https://wa.me/23481616794408"
                target="_blank"
                rel="noopener noreferrer"
                class="mt-8 inline-flex rounded-lg bg-vorian-teal px-7 py-4 text-sm font-bold text-white"
            >
                Chat on WhatsApp
            </a>

        </div>

    </div>

</section>

@endsection