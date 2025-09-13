@extends('layouts.app')

@section('title', 'Distribution')

@section('content')
<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <div
        class="w-full h-fit pt-20 md:pt-32 lg:pt-52 gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-5xl lg:text-6xl xl:text-8xl leading-[130%] font-extrabold text-zinc-900">
                    Distribution & Media Services
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p
                class="leading-[160%] text-xxs md:text-base lg:text-base xl:text-lg 2xl:text-xl font-medium w-3/4 text-zinc-900">
                Deliver your content globally through {{ config('app.name') }}’s extensive
                distribution network. With unmatched reliability and quality
                standards, we ensure deadlines are met while exceeding audience
                expectations. Our media services team manages digital content
                preparation and delivery for VOD platforms, overseeing the entire
                end-to-end process in-house. Supported by centralized hubs in Kuala
                Lumpur, Los Angeles, Manila, Seoul, and Warsaw, {{ config('app.name') }}
                aligns technical policies and procedures to deliver content in any
                language to broadcasters, streaming services, and online platforms
                worldwide.
            </p>
        </div>

        <div class="w-full pl-10 md:pl-5">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="/assets/img/page-images/services/Shadow-and-Bone-Crop.avif" alt="img"
                    class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Packaging & Global Delivery
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    We handle the complete packaging of content, creating digital
                    cinema packages, VOD-ready files, and broadcast-ready formats.
                    Coupled with our worldwide distribution network, {{ config('app.name') }}
                    guarantees safe, reliable, and timely delivery to any platform,
                    region, or device.
                </p>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 p-6">
            <!-- Card 1 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Version Conformance
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    We ensure that every version of your content meets the technical
                    and creative specifications required by broadcasters and streaming
                    platforms. By validating formats, audio tracks, and subtitles, our
                    team guarantees content is fully compliant and ready for
                    distribution across multiple channels.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Encoding & Transcoding
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Our team encodes and transcodes content into a wide array of
                    formats, including UHD, HDR, and SDR. Leveraging advanced tools
                    and automation, we maintain quality and consistency while
                    efficiently converting content for diverse platforms, devices, and
                    audiences worldwide.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex reveal flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Quality Control Mastering
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    From five-point spot checks to full linear QC, we meticulously
                    review every asset to ensure flawless audio, video, and metadata.
                    Our quality control processes are designed to catch even the
                    smallest inconsistencies, ensuring your content meets the highest
                    industry standards.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:mb-14 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    Distribution & Media Services
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Our Services
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                From theatrical blockbusters to binge-worthy episodics, we offer
                everything needed to ingest, transcode, QC and package your content
                – including a single point of distribution for all of our end-to-end
                media services.
            </p>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col md:flex-row gap-1 relative items-center md:items-start">
            <div class="w-full md:w-[70%] flex flex-col gap-3 lg:gap-5">
                <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                    API Integration
                </p>

                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Ensuring consistent, seamless processes worldwide.
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
                    Our custom system development and integrations allow us to publish
                    content to any platform worldwide while giving you full visibility
                    through your client dashboard. We edit and transform your content
                    into any required deliverable format and ensure seamless delivery
                    to final output destinations. All end-to-end, all under one
                    streamlined workflow.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <p
                    class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm 2xl:text-base leading-[160%] font-medium">
                    All managed under one centralized roof through our
                    state-of-the-art media service hubs in Kuala Lumpur, Los Angeles,
                    Manila, Seoul, and Warsaw. Let {{ config('app.name') }} help bring your
                    content to more screens, in more places, anywhere around the
                    globe.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 py-[80px] md:py-[120px]">
        <div class="w-full aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/services/services_distribution_3_01.avif" alt="img"
                class="w-full h-full object-cover" />
        </div>

        <div class="w-full flex flex-col md:flex-row gap-1 md:gap-10 xl:gap-16 relative items-center md:items-start">
            <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
                <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                    <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                        Your all-in-one solution.
                    </h4>
                    <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
                </div>
            </div>

            <p
                class="text-xxs md:text-base reveal xl:px-5 lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
                Consolidating your services and resources reduces production
                hand-offs, accelerates turnaround times, and minimizes the effort
                spent managing multiple vendors. Today, the world’s leading content
                is mastered, packaged, and distributed seamlessly through Creative X
                Wiz.
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