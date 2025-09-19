@extends('layouts.app')

@section('title', 'Speech Recognition')

@section('content')
<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full relative overflow-x-hidden">

    <div class="w-full relative">

        <div
        class="absolute opacity-40 z-0 w-full inset-0 filter invert"
        style="background-image: url('/assets/img/pattern/pattern_2.png'); background-size: 150%; background-position: center; background-repeat: no-repeat;"

        >
    </div>

        <div
            class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
            
            
            
            <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end relative z-10 px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                        Speech Recognition
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
    
                <p
                    class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                    For over a decade, {{ config('app.name') }} has partnered with technology
                    companies to advance speech recognition systems and text-to-speech
                    automation. Leveraging our global network of recording studios,
                    voice talent, linguists, and transcribers, we have contributed to
                    some of the most innovative speech applications on the market.
                    Supporting more than 50 languages, we continue to help clients
                    develop new voices as speech systems evolve and integrate across
                    emerging platforms.
                </p>
            </div>
    
            <div class="w-full pl-10 md:pl-5 relative z-10">
                <div class="w-full aspect-[4/3] overflow-hidden">
                    <img src="/assets/img/page-images/services/Emily-In-Paris-Crop.avif" alt="img"
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
                        Automated Speech Recognition
                    </h4>
                    <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                        {{ config('app.name') }} has been developing automated speech recognition
                        solutions for years, capturing and transcribing content in over 50
                        languages. With expert linguists and centralized project
                        management, we ensure high-volume, accurate transcription while
                        scaling teams and technology to meet any demand.
                    </p>
                </div>
    
                <!-- Card 2 -->
                <div class="flex reveal flex-col gap-1">
                    <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                        Neural Text-to-Speech
                    </h4>
                    <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                        Since our early adoption of TTS technology, {{ config('app.name') }} has
                        delivered thousands of localized voice prompts. Through meticulous
                        casting sessions across multiple territories, centralized
                        contracts, and end-to-end project management, we ensure
                        synthesized voices are natural, consistent, and scalable.
                    </p>
                </div>
    
                <!-- Card 3 -->
                <div class="flex reveal flex-col gap-1">
                    <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                        Data Training & Collection
                    </h4>
                    <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                        We source and curate voice-data collections worldwide, creating
                        robust datasets for machine learning and AI-driven speech
                        applications. With strict quality control and workflow management,
                        {{ config('app.name') }} integrates new languages and accents into existing
                        models efficiently and reliably.
                    </p>
                </div>
            </div>
    
            <div class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
                <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                    <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                        SPEECH RECOGNITION SERVICES
                    </p>
    
                    <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                        <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                            Our Services
                        </h4>
                        <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                    </div>
                </div>
    
                <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                    We help clients develop synthesized voices, managing every step from
                    casting and recording to delivery and contract administration. By
                    sourcing voice-data collections globally, we create comprehensive
                    glossaries and seamlessly integrate new languages into existing
                    speech models.
                </p>
            </div>
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