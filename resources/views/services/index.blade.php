@extends('layouts.app')

@section('title', 'services')

@section('content')

<div id="main" class="h-fit w-full relative overflow-x-hidden">

    <div class="absolute top-10 h-[150vh] left-0 pointer-events-none w-full">
        <div
        class="absolute opacity-40 z-0 w-full inset-0 filter invert"
        style="background-image: url('/assets/img/pattern/pattern_8.png'); background-size: 120%; background-position: center; background-repeat: no-repeat;"

        >
    </div>
    </div>

    <section class="relative w-screen h-screen" id="about-hero">
        <!-- Background Image -->


        <div id="opacity-fixed"
            class="absolute top-0 left-1/2 -translate-x-1/2 h-screen container-fluid z-10 flex items-start md:items-center justify-center pt-[100px]">
            <div class="flex flex-col gap-7 items-start text-start">
                <p id="hero-title"
                    class="font-bold text-4xl text-zinc-900 tracking-wide md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    Localization Services
                </p>

                <p id="hero-branding"
                    class="text-xxs text-zinc-700 md:text-sm md:w-1/2 lg:text-xl xl:text-lg tracking-wide w-[80%] font-medium leading-[160%]">
                    {{ config('app.name') }} is a global leader in music and media production,
                    delivering technology-driven end-to-end solutions for films,
                    series, interactive content, digital platforms, and corporate
                    projects.
                </p>                
            </div>
        </div>
    </section>

    <section id="second-section"
        class="relative z-10 w-full flex flex-col py-[80px] md:py-[120px] gap-[80px] md:gap-[140px] xl:gap-[180px] justify-center">
        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Subtitling
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            With a global network of expert producers, engineers, and
                            creators, {{ config('app.name') }} delivers world-class music, sound
                            design, and post-production services across film, streaming,
                            gaming, and digital platforms.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.subtitling') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Subtitle Production
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Subtitle Alignment
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Metadata Localization
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Closed & Live Captioning
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Express Delivery Service
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        AI-Enhanced Subtitling
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Dubbing
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            From composition and arrangement through recording, mixing,
                            and mastering, our deep expertise and diverse pool of creative
                            talent bring every project to life — be it theatrical, OTT,
                            episodic, or interactive.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.dubbing') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Language Dubbing
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Voice Narration
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Sync-to-Picture Dialogue
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Global Voice Library
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Talent Casting
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Documentary Lectoring
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Accessibility
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            We also provide audio accessibility services including closed
                            captioning (CC), sign language integration, and audio
                            description (AD), making content inclusive and accessible to
                            every audience.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.accessibility') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Real-Time Captioning
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Audio Narration (AD)
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Sign Language Integration
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Speech Recognition
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            Partnering with technology innovators, {{ config('app.name') }} is
                            advancing AI-powered tools such as speech recognition,
                            text-to-speech automation, and synthetic voice development to
                            support emerging media platforms.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.speech-recognition') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Automated Speech Recognition
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Neural Text-to-Speech
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Data Training & Collection
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Conversational Voice Creation
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Distribution
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            From cinematic blockbusters to viral digital shorts, we offer
                            everything needed to produce, refine, and distribute your
                            content — all from a single creative hub.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.distribution') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Version Conformance
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Encoding & Transcoding
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Quality Control Mastering
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Packaging & Global Delivery
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid flex flex-col gap-[80px]">
            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:flex-1 md:pr-10 lg:pr-16 flex flex-col gap-8 xl:gap-10">
                    <div class="w-full flex flex-col gap-4 xl:gap-6">
                        <h4 class="text-lg md:text-2xl lg:text-4xl text-zinc-900 reveal font-bold">
                            Creative Post Production
                        </h4>
                        <p class="text-zinc-700 font-medium text-xxs md:text-sm lg:text-lg reveal">
                            Our post-production excellence is powered by a roster of
                            passionate talent, trusted facilities, and cutting-edge tools.
                            With customized editing suites and highly skilled engineers,
                            we ensure a smooth, end-to-end workflow that always goes
                            beyond the ordinary.
                        </p>
                    </div>

                    <a class="uppercase text-xxs lg:text-sm text-zinc-900 reveal font-medium border-b w-fit border-zinc-900"
                        href="{{ route('services.creative-post') }}">Read more about the service</a>
                </div>

                <div class="w-full md:w-fit xl:w-[30%] md:pr-10 lg:pr-16 flex flex-col gap-4 xl:gap-6">
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Editorial & Sound Mixing
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        VFX & Motion Enhancements
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Final Mastering
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Digital Intermediate Finishing
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Advanced Color Grading
                    </h4>
                    <h4 class="text-xxs uppercase md:text-sm lg:text-lg xl:text-base text-zinc-900 reveal font-medium">
                        Foley & Sound Effects
                    </h4>
                </div>
            </div>
        </div>
    </section>

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

        gsap.fromTo(
            "#opacity-fixed", {
                opacity: 0
            }, {
                opacity: 1,
                duration: 1.5,
                ease: "power2.out"
            }
        );

        // Fade OUT on scroll, reversible
        gsap.fromTo(
            "#opacity-fixed", {
                opacity: 1
            }, {
                opacity: 0,
                ease: "none",
                scrollTrigger: {
                    trigger: "#second-section",
                    start: "top 70%",
                    end: "top 65%",
                    scrub: true,
                    // markers: true,
                },
            }
        );

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
</div>

@endsection