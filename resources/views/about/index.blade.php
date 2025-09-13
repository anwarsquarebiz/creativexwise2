@extends('layouts.app')

@section('title', 'About')

@section('content')

<main id="main_root" class="main-root">

<section class="relative w-screen h-screen" id="about-hero">
    <!-- Background Image -->
    <div id="animated-bg-wrapper" class="absolute -z-20 w-screen h-[130vh] overflow-hidden">
        <div id="animated-bg" class="w-full h-full relative bg-center bg-no-repeat bg-cover" style="
              background-image: url('/assets/img/page-images/about/about-hero.avif');
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
        class="absolute top-0 left-1/2 -translate-x-1/2 h-screen container-fluid z-10 flex items-center justify-end">
        <div class="w-[70%] md:w-[50%] flex flex-col gap-10">
            <p id="hero-branding" class="text-xs md:text-sm lg:text-base font-medium leading-none">
                {{ config('app.name') }}
            </p>
            <p id="hero-title" class="font-bold text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                The leader of global media localization
            </p>
            <div class="w-10 h-[2px] bg-white"></div>
        </div>
    </div>
</section>

<section id="second-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex flex-col md:flex-row pt-[120px] md:pt-[120px] gap-3 md:gap-0">
        <!-- Left Column -->
        <div class="w-full md:w-1/2 flex flex-col gap-4 justify-end">
            <div class="w-1/full md:w-3/5 h-[1.5px] rounded bg-black reveal"></div>
            <p class="w-full md:w-3/5 text-xxs md:text-xs lg:text-sm font-medium leading-[160%] reveal text-zinc-900">
                Our cutting-edge recording suites and editing rooms have earned
                recognition as Netflix Post Partner facilities worldwide.
            </p>
        </div>

        <!-- Right Column -->
        <div class="w-full md:w-1/2 flex flex-col gap-[25px]">
            <p
                class="text-xs md:text-sm lg:text-lg xl:text-base tracking-wide font-medium uppercase reveal text-white">
                Founded
            </p>
            <p class="reveal text-3xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-zinc-900">
                2018
            </p>
            <p class="text-xs md:text-sm lg:text-lg font-medium leading-[160%] reveal text-zinc-900">
                {{ config('app.name') }} is a global entertainment technology and
                localization company, serving leading studios worldwide with
                dubbing, subtitling, and media services through 48 offices across
                33 countries.
            </p>
            <p class="text-xs md:text-sm lg:text-lg font-medium leading-[160%] reveal text-zinc-900">
                {{ config('app.name') }} delivers end-to-end global media services that
                elevate storytelling through expert fluency, seamless and secure
                workflows, and a connected network. As a technology trailblazer
                with core values rooted in quality and simplicity, we leverage
                sophisticated in-house tools for all products and services. With
                over 35 million subtitled and 10 million dubbed minutes in 100+
                languages, {{ config('app.name') }} is dedicated to connecting people and
                content worldwide.
            </p>
        </div>
    </div>
</section>

<section id="third-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex flex-col gap-6 py-[120px]">
        <!-- Section Title -->
        <p class="text-xs md:text-base lg:text-xl font-medium text-zinc-900">
            Worldwide Affiliates
        </p>
        <h4 class="text-xl md:text-3xl md:text-4xl lg:w-3/5 text-zinc-900 font-extrabold">
            Through our affiliates, we deliver customized solutions to meet the
            needs of the global market.
        </h4>

        <div class="w-full flex flex-col gap-2">
            <!-- Accordion Item 1 -->
            <div class="w-full grid grid-cols-6 gap-4 border-t-2 border-black py-[35px] px-1">
                <div class="col-span-5 grid grid-cols-1 lg:grid-cols-5 gap-3">
                    <div class="col-span-1">
                        <img src="/assets/img/page-images/about/affiliate-1.avif" alt="XL8" class="h-[45px] object-contain" />
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-bold text-lg md:text-xl text-zinc-900">
                            XL8 Inc.
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <a href="https://www.xl8.ai" class="text-blue-600 md:text-lg hover:underline">Learn More</a>
                    </div>
                </div>

                <div class="col-span-1 flex items-center justify-center">
                    <button class="accordion-toggle text-zinc-900 text-3xl font-bold" data-target="#accordion-content-1">
                        +
                    </button>
                </div>
                <div id="accordion-content-1" class="col-span-6 hidden mt-2">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-1 hidden lg:block"></div>
                        <div class="col-span-6 lg:col-span-5">
                            <p class="text-base md:text-lg leading-[160%] text-zinc-700 w-[98%]">
                                XL8 Inc. (https://www.xl8.ai) is a leading global
                                translation company providing AI Machine translation
                                solutions through Deep Neural Network Technologies to top
                                localization companies. The AI-powered tech startup was
                                founded by Google, Apple and Qualcomm alumni and now
                                offers over 30 languages pairs. Its team of engineers,
                                designers and product managers is headquartered in Silicon
                                Valley with its research and development efforts based out
                                of Korea.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="w-full grid grid-cols-6 gap-4 border-t-2 border-black py-[35px] px-1">
                <div class="col-span-5 grid grid-cols-1 lg:grid-cols-5 gap-3">
                    <div class="col-span-1">
                        <img src="/assets/img/page-images/about/affiliate-1.avif" alt="XL8" class="h-[45px] object-contain" />
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-bold text-lg md:text-xl text-zinc-900">LYD</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <a href="https://lydnetworks.com/" class="text-blue-600 md:text-lg hover:underline">Learn More</a>
                    </div>
                </div>
                <div class="col-span-1 flex items-center justify-center">
                    <button class="accordion-toggle text-zinc-900 text-3xl font-bold" data-target="#accordion-content-2">
                        +
                    </button>
                </div>
                <div id="accordion-content-2" class="col-span-6 hidden mt-2">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-1 hidden lg:block"></div>
                        <div class="col-span-6 lg:col-span-5">
                            <p class="text-base md:text-lg leading-[160%] text-zinc-700 w-[98%]">
                                LYD (https://lydnetworks.com/) is the largest independent
                                content distribution company for international channels
                                and content in Korea. LYD is becoming an industry leader
                                that fosters the globalization of content from around the
                                world. As a subsidiary of Iyuno, LYD’s content
                                distribution expertise and Iyuno’s cutting-edge
                                technology, the company aims to revolutionize how content
                                is distributed on a global scale.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-full grid grid-cols-6 gap-4 border-t-2 border-b-2 border-black py-[35px] px-1">
                <div class="col-span-5 grid grid-cols-1 lg:grid-cols-5 gap-3">
                    <div class="col-span-1">
                        <img src="/assets/img/page-images/about/affiliate-1.avif" alt="XL8" class="h-[45px] object-contain" />
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-bold text-lg md:text-xl text-zinc-900">
                            BroadStream Solutions
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <a href="https://www.broadstream.com/" class="text-blue-600 md:text-lg hover:underline">Learn More</a>
                    </div>
                </div>

                <div class="col-span-1 flex items-center justify-center">
                    <button class="accordion-toggle text-zinc-900 text-3xl font-bold" data-target="#accordion-content-3">
                        +
                    </button>
                </div>
                <div id="accordion-content-3" class="col-span-6 hidden mt-2">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-1 hidden lg:block"></div>
                        <div class="col-span-6 lg:col-span-5">
                            <p class="text-base md:text-lg leading-[160%] text-zinc-700 w-[98%]">
                                BroadStream Solutions (www.broadstream.com) specializes in
                                the playout of linear television channels, live automated
                                captioning, automated file-based captioning and subtitling
                                tools for broadcasters, networks, cable, and satellite
                                operations, as well as non-broadcast applications, around
                                the globe. Our expertise is focused on developing
                                solutions that are software-based and consistently deliver
                                flexibility, dependability, improved workflows,
                                operational efficiency and reliability for our clients and
                                customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll(".accordion-toggle").forEach((button) => {
                button.addEventListener("click", () => {
                    const target = document.querySelector(
                        button.getAttribute("data-target")
                    );
                    target.classList.toggle("hidden");
                });
            });
        </script>
    </div>
</section>

<section id="third-section" class="container-fluid relative z-10 w-full flex flex-col items-center py-[80px] md:py-[120px]">
    <div class="container-fluid flex flex-col gap-6 p-0">
        <!-- Title -->
        <div class="flex flex-col gap-2">
            <h4 class="text-3xl lg:text-4xl xl:text-5xl font-extrabold text-zinc-900 reveal">
                {{ config('app.name') }} Partnership
            </h4>
            <p class="text-sm lg:text-base xl:text-sm font-semibold text-zinc-900 reveal">
                2019, APAC (High Volume)
            </p>
        </div>

        <!-- Partner Info -->
        <div class="w-full mt-10 pt-9 flex flex-col md:flex-row gap-10">
            <!-- Left Side -->
            <div class="w-full md:w-1/2 flex flex-col items-center gap-6">
                <img src="/assets/img/page-images/about/partners-1.avif" class="w-full aspect-video object-cover"
                    alt="Partner" />

                <div class="w-full flex flex-col items-center gap-5">
                    <div class="w-full lg:w-[90%] h-0.5 bg-black rounded"></div>
                    <p class="text-sm lg:w-[90%] font-semibold leading-[160%] text-zinc-900">
                        With advanced facilities in Shanghai, Hong Kong, Jakarta,
                        Bangalore, Tokyo, Seoul, Beirut, Kuala Lumpur, Manila, Taipei,
                        Bangkok, and Ho Chi Minh City, {{ config('app.name') }} is a trusted
                        fulfillment partner for content creators across the APAC
                        region.
                    </p>
                </div>
            </div>

            <!-- Right Side (Empty for now) -->
            <div class="w-full md:w-1/2"></div>
        </div>
    </div>
</section>

<section id="fourth-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex flex-col gap-6 py-[80px] md:py-[120px]">
        <div class="w-full flex flex-col gap-6 pb-6 text-zinc-900">
            <!-- Logo -->
            <img src="/assets/img/page-images/about/tpn.avif"
                class="reveal w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 2xl:1/6 filter invert" alt="TPN Logo" />

            <!-- Heading -->
            <h4 class="reveal text-2xl md:text-4xl lg:text-5xl font-extrabold text-zinc-900">
                TPN Certified
            </h4>

            <!-- Description -->
            <p
                class="reveal text-xxs md:text-base lg:text-lg w-full md:w-[60%] font-medium leading-[160%] text-zinc-900 md:text-left">
                {{ config('app.name') }} is a member of the Trusted Partner Network (TPN), a
                joint initiative by the Motion Picture Association (MPA) and the
                Content Delivery & Security Association (CDSA), global leaders in
                third-party entertainment assessments. This year, {{ config('app.name') }}
                is focused on TPN renewals for 20 of our owned-and-operated
                offices, as well as onboarding new facilities requiring TPN
                assessments.
            </p>
        </div>

        <!-- Divider -->
        <div class="w-full h-[2px] mt-6 flex justify-center items-center rounded bg-gray-400 reveal">
            <div class="w-1/3 h-full rounded bg-black"></div>
        </div>
    </div>
</section>

<section id="fifth-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex flex-col md:flex-row gap-10 pb-[80px] md:pb-[120px]">
        <!-- Completed Column -->
        <div class="md:w-1/2 flex gap-14">
            <!-- Label -->
            <div class="">
                <h4 class="reveal text-sm text-zinc-900 font-medium mt-2">
                    COMPLETED
                </h4>
            </div>

            <!-- Locations -->
            <div class="flex-1 flex flex-col gap-2">
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Bangkok
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Berlin
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Copenhagen
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Helsinki
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Hilversum
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Hong Kong
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Jakarta
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Kuala Lumpur
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    London
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Los Angeles
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Manila
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Oslo
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Paris
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Rome
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Seoul
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Shanghai
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Stockholm
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Taipei
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Tokyo
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Warsaw
                </h4>
            </div>
        </div>

        <!-- Scheduled Column -->
        <div class="md:w-1/2 flex gap-14">
            <!-- Label -->
            <div class="">
                <h4 class="reveal text-sm font-semibold mt-2 text-zinc-900">
                    SCHEDULED
                </h4>
            </div>

            <!-- Locations -->
            <div class="flex-1 flex flex-col gap-2">
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Aalst
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Budapest
                </h4>
                <h4 class="reveal text-xl md:text-2xl lg:text-4xl font-bold text-zinc-900">
                    Oradea
                </h4>
            </div>
        </div>
    </div>
</section>

<section id="sixth-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex justify-center py-[80px] md:py-[120px]">
        <div class="flex flex-col gap-11 w-full md:w-[75%] lg:w-[65%]">
            <h4
                class="reveal sixth-section-heading text-zinc-900 text-2xl md:text-4xl sm:text-2xl lg:text-5xl font-bold leading-[130%]">
                Trusted by leading studios, content creators, and streaming
                platforms worldwide.
            </h4>

            <p class="reveal text-xs font-medium md:text-lg sm:text-base lg:text-xl text-zinc-700 leading-[160%]">
                Localizing content for dozens of global markets is a complex task,
                and the best content deserves the widest audience to achieve its
                full potential.
            </p>
        </div>
    </div>
</section>

<section id="seventh-section" class="relative z-10 w-full flex justify-center">
    <div class="container-fluid flex flex-col md:items-center gap-8 pb-[80px] md:pb-[120px]">
        <!-- First Row -->
        <div class="w-full md:w-[80%] grid grid-cols-4 gap-3">
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-1.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-2.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-3.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-4.avif" class="w-full filter invert" />
            </div>
        </div>

        <!-- Second Row -->
        <div class="w-full md:w-[80%] grid grid-cols-4 gap-3">
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-5.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-6.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-7.avif" class="w-full filter invert" />
            </div>
            <div class="aspect-square rounded-lg overflow-hidden reveal">
                <img src="/assets/img/page-images/about/company-8.avif" class="w-full filter invert" />
            </div>
        </div>
    </div>
</section>

</main>

<!-- ========== Cursor ========== -->
<div id="dsn_cursor" class="ball"></div>
<div id="dsn_cursor_inner" class="ball"></div>
<!-- ========== End Cursor ========== -->

<script>
    gsap.registerPlugin(ScrollTrigger);

    // Animate background once on load
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
                    start: "top 98%",
                    end: "top 93%",
                    toggleActions: "play none none reverse",
                    markers: false,
                },
            }
        );
    });
</script>

@endsection