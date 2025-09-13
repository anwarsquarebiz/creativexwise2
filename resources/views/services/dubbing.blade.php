@extends('layouts.app')

@section('title', 'Dubbing')

@section('content')
<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <div
        class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div
            class="flex flex-col gap-10 w-full md-1/2 items-center justify-end px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4
                    class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                    Dubbing
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p
                class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                With over six million minutes of dubbed content across 100+
                languages, {{ config('app.name') }} brings new cultures and experiences to
                audiences worldwide. Backed by 273 owned-and-operated recording
                studios, including state-of-the-art Dolby Atmos facilities, we
                provide unmatched global reach and seamless connectivity.
            </p>
        </div>

        <div class="w-full pl-10 md:pl-5">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img
                    src="/assets/img/page-images/services/Bridgerton-Crop.avif"
                    alt="img"
                    class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div
            class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Global Voice Library
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    A diverse catalog of professional voice talents across languages,
                    accents, and styles—ready to bring your story to life with the
                    perfect match.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Talent Casting
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Expert casting services that pair characters with the right
                    voices, ensuring emotional depth, cultural authenticity, and
                    audience connection.
                </p>
            </div>

            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Documentary Lectoring
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Clear, authoritative voiceovers designed for documentaries and
                    factual programming, striking the balance between informative and
                    engaging.
                </p>
            </div>
        </div>

        <div
            class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <!-- Card 1 -->
            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Language Dubbing
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Transforming content into local languages with precision and
                    creativity, ensuring audiences experience the story as if it were
                    originally made for them.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Voice Narration
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Crystal-clear narration that guides, informs, and enhances the
                    viewing experience—perfect for documentaries, e-learning, and
                    corporate content.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4
                    class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Sync-to-Picture Dialogue
                </h4>
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Seamless lip-sync dubbing that matches character expressions,
                    timing, and emotion, making every scene feel natural and
                    authentic.
                </p>
            </div>
        </div>

        <div
            class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <p
                    class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Dubbing Services
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4
                        class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Our Services
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p
                class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                Where technology-powered localization meets dubbing innovation —
                delivering global OTT and streaming content that feels authentic and
                connects with every audience.
            </p>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
        <div
            class="w-full flex flex-col md:flex-row gap-1 relative items-center md:items-start">
            <div class="w-full md:w-[70%] flex flex-col gap-3 lg:gap-5">
                <p
                    class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Record from Anywhere
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4
                        class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Scalable Solutions, Wherever You Are
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>
        </div>

        <div
            class="w-full grid grid-cols-1 md:grid-cols-2 md:gap-16 md:gap-8 lg:gap-10 reveal p-6">
            <!-- Card 2 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    {{ config('app.name') }}’s dedication to advanced solutions and quickly
                    deployable recording facilities ensures maximum flexibility for
                    all client projects. Leveraging cutting-edge technology, we
                    maintain the capacity to handle localization projects of any
                    scale, anywhere in the world, without compromising quality or
                    speed.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    Using our custom app and cloud-based software, talent can be
                    booked and scheduled effortlessly for recording sessions. This
                    streamlined workflow ensures high-quality localization is
                    delivered on time and within budget.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full aspect-[3/1] reveal overflow-hidden">
            <img
                src="/assets/img/page-images/services/MicrosoftTeams-image-(11).avif"
                alt="img"
                class="w-full h-full object-cover" />
        </div>

        <div
            class="w-full flex flex-col md:flex-row gap-1 md:gap-10 xl:gap-16 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4
                        class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Unmatched Quality, Crystal Clear, Perfectly Detailed
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p
                class="text-xxs md:text-base reveal xl:px-5 lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                {{ config('app.name') }}’s Dolby Atmos studios provide state-of-the-art sound
                mixing, mastering, and delivery of Dolby-compatible content. With
                seamless technology integration, we ensure your audiences experience
                every project in the highest audio quality, across theaters, home
                setups, and all languages worldwide.
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