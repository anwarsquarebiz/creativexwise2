@extends('layouts.app')

@section('title', 'Subtitling')

@section('content')
<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <div
        class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                    Subtitling
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p
                class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                With over 18 million minutes of subtitled content across 100+
                languages, {{ config('app.name') }} is dedicated to connecting stories with
                audiences worldwide. Our expert subtitlers – a team of skilled
                linguists and seasoned specialists – handle massive volumes of work
                while delivering turnaround times that outpace industry standards.
                For us, excellence doesn’t stop at expectations — we push beyond the
                ordinary every single time.
            </p>
        </div>

        <div class="w-full pl-10 md:pl-5">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="/assets/img/page-images/services/services_subtitling.avif" alt="img"
                    class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <!-- Card 1 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Subtitle Production
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Creating accurate, audience-ready subtitles that capture both
                    meaning and emotion, tailored for theatrical, broadcast, and
                    streaming platforms.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Subtitle Alignment
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Perfectly syncing text to visuals and audio, ensuring flawless
                    timing, readability, and consistency across every frame.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Metadata Localization
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Adapting titles, summaries, and keywords into multiple languages,
                    making content globally discoverable and platform-ready.
                </p>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Closed & Live Captioning
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Delivering pre-prepared and real-time captions for accessibility,
                    enhancing the viewing experience for diverse audiences everywhere.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Express Delivery Service
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Rapid subtitling solutions designed for tight deadlines, balancing
                    speed with uncompromised accuracy and quality.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    AI-Enhanced Subtitling
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Blending artificial intelligence with human expertise to
                    accelerate workflows, increase efficiency, and maintain cultural
                    authenticity.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Subtitling Services
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Our Services
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                Powering global stories with precise subtitling solutions for
                leading studios, OTT platforms, and content makers.
            </p>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col md:flex-row gap-1 relative items-center md:items-start">
            <div class="w-full md:w-[70%] flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Capacity to Deliver, Quality to Impress
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Setting the Gold Standard in Subtitling Across Cultures
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 md:gap-16 md:gap-8 lg:gap-10 reveal p-6">
            <!-- Card 2 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    More international content is being consumed by global audiences
                    than ever before—and subtitles are at the heart of making that
                    possible. At {{ config('app.name') }}, we take pride in our pivotal role in
                    shaping the viewing experience, because we know that outstanding
                    subtitling allows stories to break cultural barriers and reach
                    audiences everywhere. Each year, we deliver 500,000+ hours of
                    subtitling in over 100 languages—covering everything from
                    broadcast and theatrical releases to streaming, VOD, and home
                    entertainment. With 2,500 in-house experts and a worldwide network
                    of linguists, we combine local cultural insight with a global
                    reach, ensuring every subtitle is accurate, accessible, and
                    tailored to the audience.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    Our 2,500 in-house experts understand the unique demands of their
                    local markets and ensure every subtitle file is delivered with
                    precision. Backed by a network of 7,500+ tested language
                    specialists, each trained in time cueing, positioning, content
                    verification, and grammar, we maintain the highest standards of
                    accuracy and readability. At the core of our operations is our
                    proprietary subtitling software, built in-house to be one of the
                    industry’s most advanced systems. With a fully profiled array of
                    inputs, outputs, and workflows, it seamlessly supports every
                    language across every distribution format—whether for digital
                    cinema, broadcast, streaming platforms, or mobile devices.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/services/services_subtitling_3_01-v2.avif" alt="img"
                class="w-full h-full object-cover" />
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:gap-10 xl:gap-16 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Always on. 24/7 global support, no downtime.
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p
                class="text-xxs md:text-base reveal xl:px-5 lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                With dedicated facilities across the globe, {{ config('app.name') }}’s diverse
                team of passionate localization experts is always ready to support
                you. Wherever you are, whenever you need, we ensure your subtitled
                content is transformed seamlessly and your project timelines are
                accelerated with precision.
            </p>
        </div>
    </div>
    
</div>

<script>
    const navbar = document.getElementById("navbar");
    const hamburger = document.getElementById("hamburger");
    const mobileMenu = document.getElementById("mobileMenu");
    let lastScroll = 0;
    let sidebarOpen = false;
    let mm = gsap.matchMedia();

    // Hide/show on scroll
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            gsap.to(navbar, {
                y: 0,
                duration: 0.3
            });
            return;
        }

        if (currentScroll > lastScroll) {
            gsap.to(navbar, {
                y: "-100%",
                duration: 0.3
            });
        } else {
            gsap.to(navbar, {
                y: 0,
                duration: 0.3
            });
        }

        lastScroll = currentScroll;
    });

    // Hamburger toggle for sidebar + shift navbar
    hamburger.addEventListener("click", () => {
        if (!sidebarOpen) {
            // Open sidebar
            gsap.to(mobileMenu, {
                x: "0%",
                duration: 0.3
            });
            gsap.to(navbar, {
                x: "75%",
                duration: 0.3
            });
            document.body.classList.add("overflow-hidden"); // 🚫 stop scroll
            sidebarOpen = true;
        } else {
            // Close sidebar
            gsap.to(mobileMenu, {
                x: "-100%",
                duration: 0.3
            });
            gsap.to(navbar, {
                x: "0%",
                duration: 0.3
            });
            document.body.classList.remove("overflow-hidden"); // ✅ restore scroll
            sidebarOpen = false;
        }
    });

    mm.add("(min-width: 768px)", () => {
        // Desktop / Tablet
        gsap.utils.toArray(".reveal").forEach((el) => {
            gsap.fromTo(
                el, {
                    y: 50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: el,
                        start: "top 98%", // desktop start
                        end: "top 93%",
                        toggleActions: "play none none reverse",
                        markers: false,
                    },
                }
            );
        });
    });

    mm.add("(max-width: 767px)", () => {
        // Mobile
        gsap.utils.toArray(".reveal").forEach((el) => {
            gsap.fromTo(
                el, {
                    y: 50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: el,
                        start: "top 75%", // little earlier (above) on mobile
                        end: "top 85%",
                        toggleActions: "play none none reverse",
                        markers: false,
                    },
                }
            );
        });
    });

    document.querySelectorAll(".menu-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            const submenu = btn.nextElementSibling;

            // Close other open menus
            document.querySelectorAll(".submenu").forEach((sm) => {
                if (sm !== submenu) sm.classList.add("hidden");
            });

            // Toggle this one
            submenu.classList.toggle("hidden");
        });
    });

    // Close menus if click outside
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".group")) {
            document
                .querySelectorAll(".submenu")
                .forEach((sm) => sm.classList.add("hidden"));
        }
    });

    // 🚀 Close menus on scroll
    window.addEventListener("scroll", () => {
        document
            .querySelectorAll(".submenu")
            .forEach((sm) => sm.classList.add("hidden"));
    });

    document.querySelectorAll("[data-submenu]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const submenuId = "submenu-" + btn.dataset.submenu;

            // Hide main menu
            mainMenu.classList.add("hidden");
            // Show submenu container
            submenuContainer.classList.remove("hidden");

            // Hide all submenus, then show the correct one
            submenuContainer
                .querySelectorAll("div")
                .forEach((sm) => sm.classList.add("hidden"));
            document.getElementById(submenuId).classList.remove("hidden");
        });
    });

    // Back button -> return to main menu
    backBtn.addEventListener("click", () => {
        submenuContainer.classList.add("hidden");
        mainMenu.classList.remove("hidden");
    });
</script>
@endsection