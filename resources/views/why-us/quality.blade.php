@extends('layouts.app')

@section('title', 'Quality')

@section('content')

<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full overflow-x-hidden">
    <section class="relative w-screen h-screen" id="about-hero">
        <!-- Background Image -->
        <div id="animated-bg-wrapper" class="absolute -z-20 w-screen h-[130vh] overflow-hidden">
            <div id="animated-bg" class="w-full h-full relative bg-center bg-no-repeat bg-cover" style="
              background-image: url('/assets/img/page-images/why-us/quality-hero.avif');
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
                    Our obsession with quality means we are always ahead
                </p>
                <p id="hero-title" class="font-bold text-3xl tracking-wide md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    Driven by perfection
                </p>
            </div>
        </div>

    </section>

    <section id="second-section" class="relative z-10 w-full flex justify-center">
        <div class="container-fluid flex flex-col md:flex-row py-[120px] md:py-[120px] gap-3 md:gap-0">
            <div class="w-full md:w-1/2 flex flex-col gap-8 justify-end">
                <p class="w-full text-xs md:text-base lg:text-xl font-medium leading-[160%] reveal text-zinc-900">
                    {{ config('app.name') }} is built on the value of delivering quality that
                    transcends cultures and content that stays true to its essence. We
                    hire the most progressive, passionate creators, and our team
                    ensures that every sound or score feels entirely authentic. We
                    won’t settle for ordinary. Here’s how we strive for perfection.
                </p>
            </div>

            <div class="w-full md:w-1/2 md:px-16 lg:px-28 flex flex-col gap-3 justify-end md:justify-start items-center">
                <div class="w-[95%] md:w-full h-[1.5px] rounded bg-zinc-900 reveal"></div>
                <p class="w-full text-xxs md:text-sm lg:text-base xl:text-sm text-zinc-700 font-medium leading-[160%] reveal">
                    Our cutting-edge recording studios and editing suites have earned
                    recognition from top streaming platforms worldwide.
                </p>
            </div>
        </div>
    </section>

    <div
        class="w-full h-fit gap-10 md:gap-0 flex flex-col md:flex-row items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="flex flex-col gap-10 w-full md-1/2 items-center justify-end px-3 md:px-0 md:pl-8 lg:pl-12 xl:pl-14">
            <div class="w-full flex flex-col gap-5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl reveal md:text-4xl xl:text-5xl 2xl:text-6xl leading-[130%] font-extrabold text-zinc-900">
                    Reach Out to {{ config('app.name') }}
                </h4>
                <div class="w-8 reveal md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p class="leading-[160%] reveal text-xxs md:text-sm lg:text-base font-medium w-3/4 text-zinc-900">
                Our success relies on connections. Passionate collaborators, driven
                by shared values, who are ready to revolutionize global media,
                post-production, and music production.
            </p>

            <p class="leading-[160%] reveal text-xxs md:text-xs lg:text-base font-medium w-3/4 text-zinc-700">
                {{ config('app.name') }}’s leadership team strengthens our global network by
                crafting responsive support and engagement programs that empower our
                partners to achieve the best outcomes every day. Our contacts are
                diverse in needs, expertise, and perspectives. People from all over
                the world reach out, bringing differences in how they think, work,
                and collaborate with us as one. We celebrate these differences and
                consider them one of our major strengths. This makes our
                communications vibrant, our discussions productive, and our
                partnerships long-lasting. Every inquiry is welcome at Creative X
                Wiz.
            </p>

            <div class="w-3/4">
                <a href="{{ route('contact') }}">
                    <button class="text-xs reveal rounded font-light bg-zinc-900 text-zinc-100 px-9 py-3 uppercase">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>

        <div class="w-full pl-10 md:pl-5">
            <div class="w-full aspect-[4/3] reveal overflow-hidden">
                <img src="/assets/img/page-images/why-us/why_us_quality_5_01.avif" alt="" />
            </div>
        </div>
    </div>

    <div
        class="w-full flex flex-col md:flex-row gap-10 relative items-center lg:items-start justify-center py-[80px] md:py-[120px]">
       
        <div
        class="absolute opacity-40 z-0 w-full inset-0 filter invert"
        style="background-image: url('/assets/img/pattern/pattern_3.png'); background-size: 150%; background-position: center; background-repeat: no-repeat;"

        >
    </div>

       
        <div class="w-full flex justify-between">
            <div class="w-[40%] flex flex-col h-fit">
                <div class="w-full reveal aspect-[2/3]">
                    <img src="/assets/img/page-images/why-us/quality_mixer.avif" alt="img" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="w-1/2 flex flex-col gap-7 h-fit">
                <div class="w-full reveal aspect-[3/2]">
                    <img src="/assets/img/page-images/why-us/quality_avid.avif" alt="img" class="w-full h-full object-cover" />
                </div>
                <div class="w-full reveal aspect-[2/3]">
                    <img src="/assets/img/page-images/why-us/quality_paris.avif" alt="img" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col gap-14">
            <div class="w-full container-fluid flex flex-col gap-4">
                <div class="w-full h-[1.5px] bg-zinc-700 rounded reveal"></div>
                <p class="text-xxs reveal lg:text-sm xl:text-base leading-[150%] text-zinc-700 font-medium">
                    Diversity and passion for music and media fuel our talented team’s
                    incredible work. Our culture is diverse, yet our understanding of
                    your content is unified across every style and genre.
                </p>
            </div>

            <div class="w-full pl-10 md:pl-4">
                <div class="w-full aspect-[4/3] reveal">
                    <img src="/assets/img/page-images/why-us/south_korea_dolby_atmos_02.avif" alt="img"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>

    <div
        class="w-full container-fluid flex flex-col lg:flex-row relative items-center gap-14 justify-center md:items-start py-[80px] md:py-[120px]">
        
         <div
        class="absolute opacity-40 z-0 w-full inset-0 filter invert"
        style="background-image: url('/assets/img/pattern/pattern_4.png'); background-size: 150%; background-position: center; background-repeat: no-repeat;"

        >
    </div>
        
        <div class="w-full flex flex-col md:flex-row lg:flex-col gap-5 md:gap-10">
            <div class="w-full md:w-1/2 reveal lg:w-full flex flex-col gap-1.5 md:gap-3 lg:gap-4 2xl:gap-5">
                <h4 class="text-2xl md:text-3xl 2xl:text-6xl font-extrabold text-zinc-900">
                    Complete Media & Music Solutions
                </h4>
                <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
            </div>

            <p class="px-4 md:w-1/2 reveal lg:w-full text-xs md:text-base font-medium text-zinc-700 2xl:px-12">
                Comprehensive post-production and music production suite delivering
                a full array of world-class services for streaming, episodic series,
                films, shorts, bonus clips, and trailers. Our end-to-end solutions
                are powered by a deep roster of top producers, engineers, and
                creatives, trusted by the world’s leading brands in media,
                entertainment, and music.
            </p>
        </div>

        <div class="w-full grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-1">
            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Sound-Editorial.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        SOUND EDITORIAL
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        2.0, 5.1, 7.1, and Atmos mixing suites feature Pro Tools HD
                        workstations and extensive sound libraries for professional
                        audio production.
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Sound-Mixing.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        SOUND MIXING
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Centralized production hubs in Kuala Lumpur, Los Angeles,
                        Manila, Seoul, and Warsaw provide state-of-the-art mixing,
                        theatrical audio, and QC rooms.
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Foley.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        FOLEY
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Our highly skilled creative teams continue to build a reputation
                        for excellence across global post-production and music
                        production projects.
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Visual-Services.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        VISUAL EFFECTS (SFX)
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        {{ config('app.name') }} visual effects bring your concepts to life,
                        crafting immersive experiences and dynamic virtual content.
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Color-Grading.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        COLOR GRADING
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Expert colorists and technicians use cutting-edge equipment and
                        software to deliver industry-standard color grading for film,
                        TV, and streaming.
                    </p>
                </div>
            </div>

            <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
                <div class="w-1/5 lg:w-1/6 xl:w-16">
                    <div class="w-full aspect-square rounded overflow-hidden">
                        <img src="/assets/img/page-images/why-us/Picture-Mastering.avif" alt="img"
                            class="w-full h-full object-cover filter invert" />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1.5">
                    <h4 class="text-sm md:text-base uppercase font-bold text-zinc-900">
                        PICTURE MASTERING
                    </h4>
                    <p class="text-xs lg:text-sm leading-[160%] text-zinc-700 font-medium">
                        Every project is meticulously synchronized and formatted,
                        ensuring that every frame and track is optimized with the
                        audience in mind.
                    </p>
                </div>
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