@extends('layouts.app')

@section('title', 'Accessibility')

@section('content')
<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full relative overflow-x-hidden">
    <div
        class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
       
        <div
        class="absolute  opacity-30 z-0 w-full h-4/6 bottom-0 left-0"
        style="background-image: url('/assets/img/pattern/pattern_3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"

        >
    </div>
       
        <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end relative z-10 px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                    Accessibility
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p
                class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                The World Health Organization (WHO) estimates that 430 million
                people worldwide have disabling hearing loss, and at least 2.2
                billion experience near or distance vision impairment. By delivering
                500,000+ hours of subtitling, closed and live captioning, audio
                description, and sign language services, {{ config('app.name') }} helps
                connect content and connect people everywhere. These assistive
                technologies are increasingly recognized as basic human rights, with
                regulations across major networks and broadcasters mandating
                accessibility. Current requirements call for nearly all broadcast
                programming to include captions or audio descriptions, and new
                mandates continue to expand the amount of content that must be
                adapted for audiences worldwide.
            </p>
        </div>

        <div class="w-full pl-10 md:pl-5 relative z-10">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="/assets/img/page-images/services/why_us_efficiency_1_01.avif" alt="img"
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
                    Real-Time Captioning
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Our real-time captioning services provide immediate, accurate text
                    for live broadcasts, events, and streaming content. This ensures
                    that audiences with hearing impairments or those watching in noisy
                    environments can follow every word and nuance as it happens,
                    delivering accessibility without delay.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Audio Narration (AD)
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Audio description adds an extra layer of storytelling by narrating
                    visual elements for audiences with vision impairments. Our expert
                    narrators describe key actions, scene changes, gestures, and
                    on-screen text, allowing all viewers to fully experience and enjoy
                    the content with clarity and immersion. match content hearing
                    impaired audiences can experience.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Sign Language Integration
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Sign language uses manual gestures, facial expressions, and body
                    language to convey meaning. For many viewers, closed captions or
                    subtitles do not provide the same depth of understanding. By
                    integrating sign language interpretation into media content, we
                    ensure accessibility for audiences worldwide who rely on signing
                    to fully grasp stories, dialogue, and contextual nuances.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Access Services
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Our Services
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                At {{ config('app.name') }}, we are committed to bringing content to every
                audience. With our scale and expertise, we help you deliver more
                accessible and immersive stories, reaching millions around the
                world.
            </p>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col md:flex-row gap-1 relative items-center md:items-start">
            <div class="w-full md:w-[70%] flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Precision You Can Trust
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Unlocking boundless possibilities for viewers everywhere.
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
                    Understanding client needs is a top priority at {{ config('app.name') }}.
                    Our dedicated team manages both offline and live closed caption
                    projects, ensuring compliance with local regulations while
                    providing hearing-impaired audiences full access to media.
                    Leveraging advanced speech-to-text technology alongside skilled
                    re-speaking specialists, we deliver live closed captioning for
                    broadcasts and streaming, as well as high-quality offline
                    captioning.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    Closed captioning for every platform and venue. Our advanced,
                    technology-driven quality control ensures projects are delivered
                    on even the tightest deadlines, while exceeding the high standards
                    expected from a leading media localization provider.
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