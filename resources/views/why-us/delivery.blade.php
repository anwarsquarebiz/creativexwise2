@extends('layouts.app')

@section('title', 'Delivery')

@section('content')

<!-- Dummy content to scroll -->
<div id="main" class="h-fit w-full relative overflow-x-hidden">
    <section class="relative w-screen h-screen" id="about-hero">
        <!-- Background Image -->
        <div id="animated-bg-wrapper" class="absolute -z-20 w-screen h-[130vh] overflow-hidden">
            <div id="animated-bg" class="w-full h-full relative bg-center bg-no-repeat bg-cover" style="
              background-image: url('/assets/img/page-images/why-us/delivery-hero.avif');
            ">
                <div class="absolute bottom-0 left-0 w-full h-40 pointer-events-none -z-10" style="
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
                    The world, through {{ config('app.name') }}
                </p>
                <p id="hero-title" class="font-bold text-3xl tracking-wide md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    {{ config('app.name') }} Global Delivery
                </p>
            </div>
        </div>
    </section>

    <section id="second-section" class="relative z-10 w-full flex justify-center">
        <div class="container-fluid flex flex-col md:flex-row py-[120px] md:py-[120px] gap-3 md:gap-0">
            <div class="w-full md:w-1/2 flex flex-col gap-8 justify-end">
                <p class="w-full text-xs md:text-base lg:text-xl font-medium leading-[160%] reveal text-zinc-900">
                    The world of entertainment is accessible to every corner of the
                    planet. With a partner that can create, adapt, and deliver content
                    across 100+ languages—around the clock, every day—you have the
                    power to maximize your content’s global impact. We are not
                    satisfied until we go above and beyond the ordinary.
                </p>
            </div>

            <div class="w-full md:w-1/2 md:px-16 lg:px-28 flex flex-col gap-3 justify-end md:justify-start items-center">
                <div class="w-[95%] md:w-full h-[1.5px] rounded bg-zinc-900 reveal"></div>
                <p class="w-full text-xxs md:text-sm lg:text-base xl:text-sm text-zinc-700 font-medium leading-[160%] reveal">
                    {{ config('app.name') }} delivers high-quality language dubbing and
                    localization, bringing global content to audiences everywhere with
                    precision and authenticity.
                </p>
            </div>
        </div>
    </section>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/why-us/why_us_delivery_2_01.avif" alt="img"
                class="w-full h-full object-cover" />
        </div>

        <div class="w-full text-zinc-900 px-6 flex flex-col md:flex-row gap-1 md:gap-8">
            <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl flex-1 font-bold reveal">
                Scaling your content for the world
            </h4>
            <p
                class="text-xs md:text-base lg:text-xl xl:text-lg 2xl:text-xl text-zinc-700 font-medium flex-1 leading-[160%] reveal">
                Tap into a global team of expert producers, sound engineers, and
                creative talents across 35 countries, all dedicated to refining
                workflows and pushing creative boundaries. Backed by a
                technology-driven production suite, we deliver unmatched quality,
                efficiency, and security for every project.
            </p>
        </div>
    </div>

    <div
        class="w-full container-fluid flex flex-col md:flex-row gap-10 relative items-center lg:items-start justify-center">
        <div class="grid grid-cols-2 w-full px-10 grid-rows-2 md:grid-cols-4 md:grid-rows-1">
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    67
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Office
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    35
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    countries
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    3000
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Employees
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    20K
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    linguists
                </p>
            </div>
        </div>
    </div>

    <div
        class="container-fluid w-full h-fit gap-14 flex flex-col items-center md:items-start justify-end md:justify-center relative z-10 pb-[80px] md:pb-[120px]">
        <div class="w-full bg-red-500 aspect-[3/1] reveal overflow-hidden">
            <img src="/assets/img/page-images/why-us/why_us_delivery_3_01-v3.avif" alt="img"
                class="w-full h-full object-cover object-top" />
        </div>

        <div class="w-full text-zinc-900 px-6 flex flex-col md:flex-row gap-1 md:gap-8">
            <h4 class="text-xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl flex-1 font-bold reveal">
                More production facilities means more content
            </h4>
            <p
                class="text-xs md:text-base lg:text-xl xl:text-lg 2xl:text-xl text-zinc-700 font-medium flex-1 leading-[160%] reveal">
                With countless platforms and an ever-growing global audience, the
                demand for engaging entertainment continues to soar. As choices
                expand, audiences increasingly expect content to be delivered in
                ways that feel local, authentic, and tailored to their experience.
            </p>
        </div>
    </div>

    <div
        class="w-full container-fluid flex flex-col md:flex-row gap-10 relative items-center lg:items-start justify-center">
        <div class="grid grid-cols-2 w-full px-10 grid-rows-2 md:grid-cols-4 md:grid-rows-1">
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    301
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Recording Rooms
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    16
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Dolby Atmos® Rooms
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    155
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Mix Rooms
                </p>
            </div>
            <div class="aspect-square reveal flex flex-col items-center gap-1.5 md:gap-4 justify-center">
                <h4 class="text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-bold text-zinc-900 text-center">
                    115
                </h4>
                <p class="text-xxs md:text-xs lg:text-sm font-medium tracking-wider text-zinc-700 text-center uppercase">
                    Edit & QC Rooms
                </p>
            </div>
        </div>
    </div>

    <div
        class="w-full flex flex-col container-fluid md:flex-row gap-1 relative items-center md:items-start justify-center pb-[80px] md:pb-[120px]">
        <div class="w-full md:w-1/2 flex flex-col gap-3 lg:gap-5">
            <h4 class="text-zinc-900 reveal text-2xl md:text-4xl lg:text-5xl xl:text-7xl font-bold">
                We speak your audience’s language
            </h4>
            <p class="text-zinc-700 reveal text-xs md:text-base lg:text-xl xl:text-lg font-medium uppercase">
                Over 100 languages supported
            </p>
        </div>

        <p class="text-xxs md:text-base reveal lg:text-2xl xl:text-lg font-medium w-full md:w-1/2 text-zinc-700">
            As entertainment content grows worldwide, audiences everywhere are
            consuming more international productions than ever. Delivering content
            in a way that feels natural, local, and authentic has never been more
            important.
        </p>
    </div>

    <div id="languages-section"
        class="w-full flex flex-col container-fluid md:flex-row gap-1 relative items-center md:items-start justify-center pb-[80px] md:pb-[120px]">
        
        <div
        class="absolute scale-x-[-1] opacity-30 z-0 w-full inset-0"
        style="background-image: url('/assets/img/pattern/pattern_2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"

        >
    </div>
        
        <div id="languages-grid" class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 w-full md:px-10">
            <!-- Languages will be injected here -->
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

    const languages = [
        "English",
        "Hindi",
        "Spanish",
        "French",
        "German",
        "Mandarin",
        "Japanese",
        "Korean",
        "Russian",
        "Italian",
        "Portuguese",
        "Arabic",
        "Turkish",
        "Bengali",
        "Urdu",
        "Thai",
        "Vietnamese",
        "Polish",
        "Dutch",
        "Greek",
        "Hebrew",
        "Swedish",
        "Norwegian",
        "Danish",
        "Finnish",
        "Czech",
        "Hungarian",
        "Romanian",
        "Slovak",
        "Croatian",
        "Serbian",
        "Bulgarian",
        "Malay",
        "Indonesian",
        "Filipino",
        "Swahili",
        "Zulu",
        "Afrikaans",
        "Persian",
        "Pashto",
        "Nepali",
        "Sinhala",
        "Tamil",
        "Telugu",
        "Kannada",
        "Gujarati",
        "Marathi",
        "Punjabi",
        "Malayalam",
        "Khmer",
        "Lao",
        "Mongolian",
        "Burmese",
        "Georgian",
        "Armenian",
        "Albanian",
        "Bosnian",
        "Macedonian",
        "Estonian",
        "Latvian",
        "Lithuanian",
        "Icelandic",
        "Irish",
        "Welsh",
        "Scottish Gaelic",
        "Catalan",
        "Basque",
        "Galician",
        "Hausa",
        "Yoruba",
        "Igbo",
        "Amharic",
        "Somali",
        "Tigrinya",
        "Kurdish",
        "Azerbaijani",
        "Kazakh",
        "Uzbek",
        "Turkmen",
        "Tajik",
        "Kyrgyz",
        "Maltese",
        "Luxembourgish",
        "Slovenian",
        "Belarusian",
        "Esperanto",
        "Haitian Creole",
        "Fijian",
        "Samoan",
        "Tongan",
        "Maori",
        "Inuktitut",
        "Cherokee",
        "Quechua",
        "Guarani",
    ];

    // Get grid container
    const grid = document.getElementById("languages-grid");

    // Render languages
    languages.forEach((lang) => {
        const h4 = document.createElement("h4");
        h4.className =
            "text-zinc-900 reveal text-xs md:text-base lg:text-xl font-medium";
        h4.textContent = lang;
        grid.appendChild(h4);
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