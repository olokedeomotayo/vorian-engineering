<header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-8">

        {{-- Logo --}}
        <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/vorian-logo.jpeg') }}"
                alt="Vorian Engineering"
                class="h-16 w-auto object-contain"
            >
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden items-center gap-7 lg:flex">

            <a
                href="/"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Home
            </a>

            <a
                href="/about"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                About Us
            </a>

            <a
                href="/services"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Services
            </a>

            <a
                href="/projects"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Projects
            </a>

            <a
                href="/industries"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Industries
            </a>

            <a
                href="/products"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Products
            </a>

            <a
                href="/blog"
                class="text-sm font-semibold text-gray-700 transition hover:text-vorian-orange"
            >
                Blog
            </a>

        </nav>

        {{-- CTA --}}
        <div class="hidden lg:block">

            <a
                href="/contact"
                class="inline-flex items-center rounded-lg bg-vorian-orange px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-vorian-orange-dark hover:shadow-md"
            >
                Request a Service
            </a>

        </div>

        {{-- Mobile Menu Button --}}
        <button
            type="button"
            class="rounded-lg border border-gray-200 p-2 text-vorian-dark lg:hidden"
            aria-label="Open menu"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>

    </div>

</header>