@extends('layouts.app')

@section('title', 'Technology')

@section('content')

<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full">
    <section class="relative w-screen h-screen" id="about-hero">
        <!-- Background Image -->
        <div id="animated-bg-wrapper" class="absolute -z-20 w-screen h-[130vh] overflow-hidden">
            <div id="animated-bg" class="w-full h-full relative bg-center bg-no-repeat bg-cover" style="
              background-image: url('/assets/img/page-images/why-us/technology-hero.avif');
            ">
                <div class="absolute bottom-0 left-0 w-full h-60 pointer-events-none -z-10" style="
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
                    {{ config('app.name') }} revolutionize the future with
                </p>
                <p id="hero-title" class="font-bold text-3xl tracking-wide md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    Cutting-Edge Technology & Creative Innovation
                </p>
            </div>
        </div>
    </section>

    <section id="second-section" class="relative z-10 w-full flex justify-center">
        <div class="container-fluid flex flex-col md:flex-row pt-[120px] md:pt-[120px] gap-3 md:gap-0">
            <div class="w-full md:w-1/2 flex flex-col gap-8 justify-end">
                <p class="w-full text-xs md:text-base lg:text-xl font-medium leading-[160%] reveal text-zinc-900">
                    Since our inception, technology has been central to everything we
                    do. The future of media production will be shaped by artificial
                    intelligence and machine learning, with impacts that reach far
                    beyond our industry. We are at a pivotal moment in the evolution
                    of technology, with innovation driving everything we create.
                </p>
            </div>
        </div>
    </section>

    <div
        class="w-full container-fluid flex flex-col lg:flex-row relative items-center gap-14 justify-center md:items-start py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col md:flex-row lg:flex-col gap-5 md:gap-10">
            <div class="w-full md:w-1/2 reveal lg:w-full flex flex-col gap-1.5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-3xl 2xl:text-6xl font-extrabold text-zinc-900">
                    Improving day-to-day workflows
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p class="px-4 md:w-1/2 reveal lg:w-full text-xs md:text-base font-medium text-zinc-700 text-lg 2xl:px-12">
                We’re entering the next chapter of transformation in global media
                production. Our core goal is to accelerate the adoption of
                technology and cloud-based platforms within our daily workflows. We
                believe that applying artificial intelligence to entertainment and
                music content creates a more connected, efficient, and enjoyable
                experience for audiences worldwide. At {{ config('app.name') }}, our
                philosophy is to use technology-empowered solutions to help people
                everywhere enjoy more fulfilling and memorable experiences through
                the content we bring to life.
            </p>
        </div>

        <div class="w-full grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-1">
            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Scalability..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        SCALABILITY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Automated production pipelines
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Visibility..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        VISIBILITY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Real-time project tracking
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Speed..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        SPEED
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Continuous operations with fast turnarounds
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Quality..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        QUALITY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Automated quality control checks
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Security..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        SECURITY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Read-only access, proxy delivery, and forensic watermarking
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Efficiency..avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        EFFICIENCY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Centralized workflows with full transparency
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 reveal p-6">
            <!-- Card 1 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    NEURAL MACHINE TRANSLATION
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Now more than ever, leading media and production companies are
                    leveraging machine learning to automate creative workflows. The
                    use of computer-assisted content creation is rapidly expanding
                    across the entertainment industry. As artificial intelligence
                    evolves, it continues to reshape how we produce, adapt, and
                    deliver content, as well as how audiences experience and engage
                    with it.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    INDUSTRY TRENDS
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Machine learning is increasingly integrated into every corner of
                    media production—from streaming platforms where audiences watch,
                    to cloud-based servers where content is stored, and to speech and
                    audio recognition tools used in post-production. At Creative X
                    Wiz, we understand that cutting-edge technology brings new
                    opportunities and challenges. By embracing industry trends,
                    optimizing workflows, and adopting innovative solutions, we turn
                    unexpected challenges into opportunities to drive creativity and
                    efficiency.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    BUSINESS INTEGRATION
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Through the integration of advanced AI-driven production tools
                    across our enterprise, we are eliminating bottlenecks, improving
                    project capacity, ensuring consistency, and elevating overall
                    quality. Our team of creative and technical experts has observed
                    that AI-assisted workflows provide faster turnaround times, higher
                    consistency, and improved output quality, all while supporting the
                    creative process and enhancing collaboration across global teams.
                </p>
            </div>
        </div>

        <div class="w-full text-zinc-900 px-6 flex flex-col md:flex-row gap-1 md:gap-8">
            <div class="flex-1 flex flex-col gap-4 md:gap-2">
                <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold reveal h-fit">
                    AI & MT
                </h4>

                <p
                    class="text-xs md:text-base uppercase lg:text-xl xl:text-lg text-zinc-700 font-medium flex-1 leading-[160%] reveal h-fit">
                    Artificial intelligence and machine translation
                </p>
            </div>
            <p
                class="text-xs md:text-base lg:text-xl xl:text-lg 2xl:text-xl text-zinc-700 font-medium flex-1 leading-[160%] reveal">
                Now more than ever, leading translation companies are using machine
                learning to help automate their content creation. It is likely that
                the volume of computer-generated content will increase rapidly in
                other fields as well. With computer-assisted translation evolving
                rapidly, artificial intelligence will continue to impact not only
                the way we localize content and overall capacity, but also the way
                we produce and consume it.
            </p>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col-reverse items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 lg:gap-10 reveal p-6">
            <!-- Card 1 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Unsupervised Learning
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    At {{ config('app.name') }}, unsupervised learning powers our data
                    augmentation and pre-processing systems. By detecting patterns in
                    genre-specific media—such as dramas, documentaries, animations,
                    comedies, and more—our AI tools categorize and organize data,
                    building smarter workflows that adapt to diverse creative demands.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Supervised Learning
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Through supervised learning, our AI engines are trained with
                    carefully labeled media datasets. This allows our technology to
                    recognize and distinguish between faces, voices, scenes, sounds,
                    and even stylistic nuances—ensuring reliable results that enhance
                    content creation and post-production precision.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col gap-1">
                <h4 class="text-xs md:text-sm lg:text-lg xl:text-sm font-bold text-zinc-900 uppercase">
                    Testing & Collecting New Data
                </h4>
                <p class="text-zinc-700 mt-2 text-xxs md:text-xs lg:text-base xl:text-sm leading-[160%] font-medium">
                    Every dataset we use is refined through rigorous quality control
                    to ensure alignment with industry standards and to surpass
                    conventional benchmarks. After training our AI models with part of
                    the data, we validate accuracy with the rest. Our ever-expanding
                    sources include genre-specific datasets, live audio-visual feeds,
                    and high-quality commercial content—constantly fueling smarter,
                    sharper production outcomes.
                </p>
            </div>
        </div>

        <div class="w-full text-zinc-900 px-6 flex flex-col md:flex-row gap-1 md:gap-8">
            <div class="flex-1 flex flex-col gap-4 md:gap-2 xl:gap-4">
                <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold reveal h-fit">
                    Boosting Performance and Precision
                </h4>

                <p
                    class="text-xs md:text-base uppercase lg:text-xl xl:text-lg text-zinc-700 font-medium flex-1 leading-[160%] reveal h-fit">
                    With neural machine translation (NMT)
                </p>
            </div>
            <p
                class="text-xs md:text-base lg:text-xl xl:text-lg 2xl:text-xl text-zinc-700 font-medium flex-1 leading-[160%] reveal">
                By leveraging AI-driven tools and genre-specific data—including
                drama, documentary, animation, comedy, horror, and more across 100+
                languages—we enhance the performance and accuracy of our creative
                workflows through multiple advanced learning approaches.
            </p>
        </div>

        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/why-us/why_us_technology_3_01-2.avif" alt="img"
                class="w-full h-full object-cover" />
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full flex flex-col gap-1">
            <p class="text-zinc-700 reveal font-bold text-xs md:text-base">
                NMT Features
            </p>
            <h4 class="text-xl text-zinc-900 reveal font-bold w-full md:w-[65%] md:text-3xl lg:text-4xl">
                At {{ config('app.name') }}, every beat of our work blends human creativity
                with the power of technology.
            </h4>
        </div>

        <div class="w-full">
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Context Awareness
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Captures meaning beyond words for natural, accurate output.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Adaptive Learning
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Continuously improves quality with every new project.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Genre-Specific Training
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Fine-tuned for drama, comedy, animation, and more.
                </p>
            </div>

            <div class="w-full py-5 lg:py-8 reveal border-t border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    Automated Quality Checks
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Detects and fixes timing or translation errors instantly.
                </p>
            </div>

            <div class="w-full py-5 lg:py-8 reveal border-t border-b border-zinc-700 flex flex-col md:flex-row gap-1">
                <h4 class="w-full md:w-1/2 text-xs md:text-sm lg:text-lg font-bold text-zinc-900">
                    High Scalability
                </h4>
                <p class="w-full md:w-1/2 font-medium text-xxs md:text-xs lg:text-base text-zinc-700">
                    Handles massive volumes of content with speed and consistency.
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