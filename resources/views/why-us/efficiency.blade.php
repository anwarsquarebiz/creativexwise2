@extends('layouts.app')

@section('title', 'Efficiency')

@section('content')

<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <section class="relative w-screen h-screen" id="about-hero">
        <!-- Background Image -->
        <div id="animated-bg-wrapper" class="absolute -z-20 w-screen h-[130vh] overflow-hidden">
            <div id="animated-bg" class="w-full h-full relative bg-center bg-no-repeat bg-cover" style="
              background-image: url('/assets/img/page-images/why-us/efficiency-hero.avif');
            ">
                <div class="absolute bottom-0 left-0 w-full h-80 pointer-events-none -z-10" style="
                background: linear-gradient(
                  to bottom,
                  transparent,
                  #ffffff 90%
                );
              "></div>
            </div>
        </div>

        <div id="opacity-fixed"
            class="absolute top-0 left-1/2 -translate-x-1/2 h-screen container-fluid z-10 flex items-center justify-center">
            <div class="flex flex-col gap-7 items-center text-center">
                <p id="hero-branding"
                    class="text-xxs md:text-sm lg:text-xl xl:text-lg tracking-wide w-[80%] md:w-full font-medium uppercase leading-none">
                    Working at the Speed of Light
                </p>
                <p id="hero-title" class="font-bold text-3xl tracking-wide md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    Lightning-fast workflows without losing quality.
                </p>
            </div>
        </div>
    </section>

    <section id="second-section" class="relative z-10 w-full flex justify-center">
        <div class="container-fluid flex flex-col md:flex-row pt-[80px] md:pt-[120px] gap-3 md:gap-0">
            <div class="w-full md:w-1/2 flex flex-col gap-8 justify-end">
                <p class="w-full text-xs md:text-base lg:text-xl font-medium leading-[160%] reveal text-zinc-900">
                    You’re already busy creating content that matters. What you need
                    is a seamless way to collaborate with a global production team.
                    With countless platforms to manage and audiences to reach, the
                    right tools and project management make all the difference. At
                    {{ config('app.name') }}, we constantly refine our workflows, develop
                    smarter solutions, and embed innovation into every step—so your
                    content delivers the same impact, everywhere it goes.
                </p>
            </div>

            <div class="w-full md:w-1/2 md:px-16 lg:px-28 flex flex-col gap-3 justify-end md:justify-start items-center">
                <div class="w-[95%] md:w-full h-[1.5px] rounded bg-zinc-900 reveal"></div>
                <p class="w-full text-xxs md:text-sm lg:text-base xl:text-sm text-zinc-700 font-medium leading-[160%] reveal">
                    {{ config('app.name') }} delivers lightning-fast turnarounds for projects of
                    every scale, from global releases to independent hits.
                </p>
            </div>
        </div>
    </section>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col gap-1">
            <p class="text-zinc-700 reveal font-bold text-xs md:text-base">
                Production Suite
            </p>
            <h4 class="text-xl text-zinc-900 reveal font-bold w-full md:w-[65%] md:text-3xl lg:text-4xl">
                The next generation of cloud-powered systems designed to manage
                music production, mixing, mastering, distribution, and creative
                post-production—seamlessly from start to finish.
            </h4>
        </div>

        <div class="w-full">
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Workflow management
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Built to streamline every stage of your workflow, our system
                    ensures maximum efficiency with a clear roadmap guiding your
                    project from start to finish.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Content library
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Centralized and searchable music & media library, letting you
                    register assets and metadata directly in the cloud while
                    automatically linking related files.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-b border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Production visibility
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Seamless tracking of production activities, from resources and
                    workspaces to vendors and capacity—all powered by a flexible
                    dashboard tailored to your needs.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10">
        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/why-us/msx_platform.avif" alt="img"
                class="w-full h-full object-cover object-top" />
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <!-- Card 1 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Collaboration Hub
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    A centralized platform where artists, engineers, and clients work
                    together in real time. From sharing project files to leaving
                    timestamped comments, this hub keeps communication transparent and
                    efficient. Every note, revision, and idea stays in one
                    place—eliminating messy email chains and lost updates.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Asset Management Cloud
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Our cloud-based repository allows you to upload, tag, and organize
                    music, video, and project files with ease. Metadata linking
                    automatically connects related assets, ensuring you never lose
                    track of stems, masters, or alternate versions. Everything is
                    secure, searchable, and accessible worldwide.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Automated QC Engine
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    An intelligent system that scans projects for errors—from missing
                    files to mismatched formats—before they cause problems. It flags
                    inconsistencies, suggests corrections, and provides detailed
                    reports so your team spends less time troubleshooting and more
                    time creating.
                </p>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Workflow Orchestrator
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Designed to streamline complex projects, this tool assigns tasks,
                    tracks progress, and manages dependencies across teams. Whether
                    you’re juggling subtitling, dubbing, mixing, or mastering, the
                    orchestrator ensures everything moves in sync and nothing slips
                    through the cracks.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Vendor Integration Panel
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Manage external partners with complete transparency. Vendors can
                    access project-specific dashboards, upload deliverables, and
                    receive instant feedback. Built-in reporting helps track
                    performance, deadlines, and quality—strengthening collaboration
                    without adding extra overhead.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Analytics & Reporting Suite
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Transform raw data into actionable insights. From turnaround times
                    to quality metrics, this suite provides real-time dashboards and
                    exportable reports. Whether optimizing costs, tracking workloads,
                    or forecasting demand, you get the visibility needed to make
                    smarter decisions.
                </p>
            </div>
        </div>

        <div class="w-full text-zinc-900 px-6 mb-10 flex flex-col md:flex-row gap-1 md:gap-8">
            <div class="flex-1 flex flex-col gap-4 md:gap-2">
                <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold reveal h-fit">
                    Integration Tools
                </h4>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full text-zinc-900 px-6 flex flex-col md:flex-row gap-1 md:gap-8">
            <div class="flex-1 flex flex-col gap-4 md:gap-2 xl:gap-4">
                <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold reveal h-fit">
                    Cloud-Based Production
                </h4>

                <p
                    class="text-xs md:text-base uppercase lg:text-xl xl:text-lg text-zinc-700 font-medium flex-1 leading-[160%] reveal h-fit">
                    Secure & Reliable
                </p>
            </div>
            <p
                class="text-xs md:text-base lg:text-xl xl:text-lg 2xl:text-xl text-zinc-700 font-medium flex-1 leading-[160%] reveal">
                Backed by centralized production hubs across the globe, Creative X
                Wiz mirrors seamless technical processes to securely store, manage,
                and deliver music and media content to any platform, in any format,
                anywhere in the world.
            </p>
        </div>

        <div class="w-full">
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Cloud Collaboration
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Real-time project sharing and feedback across global teams with
                    secure access and instant updates.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Media Asset Library
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Centralized cloud storage with searchable metadata linking to
                    manage, organize, and deliver all creative assets.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-b border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Automated Workflow Engine
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Streamlined task assignment, tracking, and delivery powered by AI
                    to reduce delays and maximize efficiency.
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

    gsap.fromTo(
        "#animated-bg", {
            scale: 1.15
        }, // start zoomed in (like 115%)
        {
            scale: 1,
            duration: 2,
            ease: "power2.out"
        } // zoom out to normal
    );

    // Fade in on page load
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
</script>

@endsection