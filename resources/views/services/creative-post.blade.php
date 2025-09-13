@extends('layouts.app')

@section('title', 'Creative Post Production')

@section('content')

<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <div
        class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                    Creative Post Production
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p
                class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                Our post-production services are driven by a talented roster of top
                engineers and creatives who constantly refine workflows and are
                trusted by leading media and entertainment companies worldwide.
                {{ config('app.name') }}’s cutting-edge facilities, customized editing suites,
                and highly skilled engineers operate with a follow-the-sun approach,
                available 24/7 to ensure a smooth and efficient post-production
                process.
            </p>
        </div>

        <div class="w-full pl-10 md:pl-5">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="/assets/img/page-images/services/Wednesday-Crop.avif" alt="img"
                    class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Digital Intermediate Finishing
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Our digital intermediate finishing process refines color,
                    contrast, and visual fidelity to achieve the director’s intent. We
                    provide end-to-end solutions for color correction, grading, and
                    final adjustments, ensuring cinematic quality across all formats.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Advanced Color Grading
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Using state-of-the-art tools, our colorists enhance mood, tone,
                    and visual storytelling. Every project receives meticulous
                    attention, whether for theatrical release, streaming, or episodic
                    content, ensuring a polished and consistent look.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Foley & Sound Effects
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    {{ config('app.name') }}’s foley and sound effects teams recreate authentic
                    audio environments, from footsteps to ambient sounds, to enhance
                    realism and immersion. Coupled with precise synchronization, our
                    audio effects make every scene feel alive and captivating.
                </p>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <!-- Card 1 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Editorial & Sound Mixing
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    {{ config('app.name') }}’s editorial and sound mixing services craft every
                    scene with precision, enhancing storytelling through seamless
                    audio integration and meticulous editing. Our team ensures every
                    cut, transition, and mix aligns perfectly with the creative
                    vision, bringing content to life for audiences worldwide.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    VFX & Motion Enhancements
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Our visual effects and motion enhancement teams transform creative
                    concepts into immersive experiences. From subtle enhancements to
                    complex animations, we elevate storytelling with graphics,
                    compositing, and dynamic visual effects tailored to each project.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Final Mastering
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    {{ config('app.name') }}’s final mastering services guarantee flawless
                    delivery of both audio and video content. We apply rigorous
                    quality checks, optimize formats for all platforms, and ensure
                    that every asset meets industry-leading standards.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Creative Post Production
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Our Services
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                Cutting-edge visuals and sound for live-action films, animated
                features, episodic television, interactive games, and cartoons.
            </p>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col md:flex-row gap-1 relative items-center md:items-start">
            <div class="w-full md:w-[70%] flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Striking visuals. Immersive audio.
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Delivering immersive sound, crisp dialogue, and richly layered
                        scenes for your content.
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
                    {{ config('app.name') }} is a trusted, strategic partner for major studio
                    productions, post supervisors, and producers through our
                    comprehensive post-production picture services. From dailies to
                    final asset delivery, you can be confident in the look and feel of
                    every frame we deliver.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    Our in-house teams leverage the latest connectivity and
                    cloud-based workflows to manage ever-changing files and assets.
                    Skilled technicians, editors, VFX artists, and colorists work
                    together to bring your creative vision to life with precision and
                    efficiency.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/services/services_creative_3_01.avif" alt="img"
                class="w-full h-full object-cover" />
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:gap-10 xl:gap-16 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Your all-in-one production partner, from start to finish.
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p
                class="text-xxs md:text-base reveal xl:px-5 lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                At {{ config('app.name') }}, bringing visions to life through advanced
                workflows and processes is our passion. We meet tight deadlines
                while supporting your multimedia needs from production all the way
                through final delivery.
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