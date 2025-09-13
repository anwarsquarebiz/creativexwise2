@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div
    class="w-full md:mt-10 h-[75vh] md:h-[80vh] lg:h-screen flex flex-col items-center justify-end md:justify-center text-center relative z-10">
    <!-- Title -->
    <h1
        style="line-height: 130%;"
        class="font-bold uppercase text-black text-3xl sm:text-4xl md:text-5xl lg:text-[5.69vw] w-[70%]">
        {{ __('messages.hero_title') }}
    </h1>

    <!-- Description -->
    <div class="mt-6 mb-6 w-[70%] px-4">
        <p
            style="line-height: 150%;"
            class="text-base sm:text-lg md:text-2xl lg:text-[36px] text-black">
            {{ __('messages.hero_description') }}
        </p>
    </div>
</div>

<div
    class="relative w-full flex flex-col items-center justify-center pb-[80px] md:pb-[120px]">
    <!-- Main Video -->
    <div
        class="container-fluid absolute left-1/2 -translate-x-1/2 flex items-center justify-center">
        <video
            id="resize-video"
            autoplay
            muted
            loop
            playsinline
            class="w-auto h-auto object-cover"
            src="/assets/video/recording-studio.mp4"></video>
    </div>

    <!-- Gallery Wrapper -->
    <div
        id="videoGallery"
        class="relative w-full space-y-4 overflow-hidden">
        <!-- Row 1 -->
        <div
            id="videoGallery_1"
            class="flex items-center w-full justify-center gap-3 overflow-hidden">
            <img
                src="/assets/video/06.avif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/France-3_Ben.gif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/IMG_0003-min.avif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/04.avif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/Connect.gif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/11.avif"
                class="h-24 md:h-36 object-cover" />
        </div>

        <!-- Row 2 -->
        <div
            id="videoGallery_2"
            class="flex items-center justify-center gap-3 overflow-hidden">
            <!-- Middle Left -->
            <div id="middle_left" class="flex items-center justify-end gap-3">
                <img
                    src="/assets/video/04.gif"
                    class="h-24 md:h-36 object-cover" />
                <img
                    src="/assets/video/07.avif"
                    class="h-24 md:h-36 object-cover" />
                <img
                    src="/assets/video/Translate_b.gif"
                    class="h-24 md:h-36 object-cover" />
            </div>

            <!-- Small Video -->
            <video
                id="small_video"
                autoplay
                muted
                loop
                playsinline
                class="h-24 md:h-36 object-cover"
                src="/assets/video/recording-studio.mp4"></video>

            <!-- Middle Right -->
            <div
                id="middle_right"
                class="flex items-center justify-start gap-3">
                <img
                    src="/assets/video/Translate_b.gif"
                    class="h-24 md:h-36 object-cover" />
                <img
                    src="/assets/video/06-Seoul-min.avif"
                    class="h-24 md:h-36 object-cover" />
                <img
                    src="/assets/video/04.gif"
                    class="h-24 md:h-36 object-cover" />
            </div>
        </div>

        <!-- Row 3 -->
        <div
            id="videoGallery_3"
            class="flex items-center justify-center gap-3 overflow-hidden">
            <img
                src="/assets/video/08.avif"
                class="h-24 md:h-36 object-cover" />
            <img src="/assets/video/07.gif" class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/09.avif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/IMG_0063__-min.avif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/Language_b.gif"
                class="h-24 md:h-36 object-cover" />
            <img
                src="/assets/video/08.avif"
                class="h-24 md:h-36 object-cover" />
        </div>
    </div>
</div>

<div
    class="container-fluid w-full reveal flex relative items-center justify-center py-[80px] md:py-[120px]">
    <div class="w-[80%] md:w-[65%] absolute z-30 aspect-video">
        <div class="w-full h-full">
            <video
                src="/assets/video/landing_page.mp4"
                autoplay
                loop
                class="h-full w-full"></video>
        </div>
    </div>

    <div
        class="w-full flex justify-between relative items-center gap-3 blur-sm">
        <div
            class="w-1/2 md:w-1/3 absolute z-10 aspect-square bg-red-500 left-1/2 top-1/2 -translate-x-1/2 rounded-full blur-3xl"></div>
        <div class="w-1/2 relative z-20 aspect-video">
            <video
                src="/assets/video/landing_page.mp4"
                autoplay
                loop
                class="h-full w-full"></video>
        </div>
        <div class="w-1/2 relative z-20 aspect-video">
            <video
                src="/assets/video/landing_page.mp4"
                autoplay
                loop
                class="h-full w-full"></video>
        </div>
    </div>
</div>

<div
    class="w-full flex flex-col md:flex-row-reverse relative items-center gap-10 justify-center md:items-start py-[80px] md:py-[120px]">
    <div class="w-full pl-8 md:pl-0">
        <div class="w-full aspect-square">
            <img
                src="/assets/img/page-images/home/state-of-the-art-module.avif"
                alt="img"
                class="h-full w-full object-cover" />
        </div>
    </div>

    <div
        class="w-full px-8 md:px-0 md:pl-14 2xl:pl-24 flex flex-col gap-5 md:gap-8 2xl:gap-12">
        <div class="w-full flex flex-col gap-1.5 md:gap-3 lg:gap-4 2xl:gap-5">
            <h4
                class="text-2xl md:text-4xl 2xl:text-6xl font-extrabold text-zinc-900">
                Advancing the art’s next state
            </h4>
            <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
        </div>

        <p class="px-4 font-medium text-zinc-700 text-lg 2xl:px-12">
            We aim to transcend language and cultural barriers with passion,
            creativity, and technology, never satisfied until we move above and
            beyond the ordinary, advancing the state of the art.
        </p>

        <ul class="list-disc pl-6 space-y-2 2xl:space-y-4 text-zinc-900">
            <li class="text-sm md:text-lg font-medium 2xl:text-xl">
                CREATIVE AUTOMATION
            </li>
            <li class="text-sm md:text-lg font-medium 2xl:text-xl">
                AUDIO INNOVATION
            </li>
            <li class="text-sm md:text-lg font-medium 2xl:text-xl">
                GLOBAL COLLABORATION
            </li>
            <li class="text-sm md:text-lg font-medium 2xl:text-xl">
                DIGITAL TRANSFORMATION
            </li>
            <li class="text-sm md:text-lg font-medium 2xl:text-xl">
                CONTENT OPTIMIZATION
            </li>
        </ul>
        <a
            class="uppercase text-zinc-900 font-medium 2xl:text-lg hover:text-blue-700 text-xs md:text-sm p-0.5 underline"
            href="/why-us/Technology.html">Learn about our innovations</a>
    </div>
</div>

<div
    class="w-full container-fluid flex flex-col lg:flex-row relative items-center gap-14 justify-center md:items-start py-[80px] md:py-[120px]">
    <div
        class="w-full flex flex-col md:flex-row lg:flex-col gap-5 md:gap-10">
        <div
            class="w-full md:w-1/2 reveal lg:w-full flex flex-col gap-1.5 md:gap-3 lg:gap-4 2xl:gap-5">
            <h4
                class="text-2xl md:text-3xl 2xl:text-6xl font-extrabold text-zinc-900">
                A complete range of capabilities delivering an end-to-end suite of
                services in media and localization.
            </h4>
            <div class="w-8 md:w-10 h-[3px] rounded bg-zinc-900"></div>
        </div>

        <p
            class="px-4 md:w-1/2 reveal lg:w-full md:text-base font-medium text-zinc-700 text-lg 2xl:px-12">
            Creative X Wiz stands as the global provider of technology-powered,
            end-to-end music production solutions for films, TV, games, digital
            media, and corporate requirements.
        </p>
    </div>

    <div
        class="w-full grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-1">
        <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
            <div class="w-1/5">
                <div class="w-full aspect-square rounded md:px-1 lg:px-2 xl:px-6">
                    <img
                        src="/assets/img/page-images/home/Subtitling.avif"
                        alt="img"
                        class="w-full filter invert" />
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-1.5">
                <h4 class="text-base uppercase font-bold text-zinc-900">
                    SUBTITLING
                </h4>
                <p class="text-sm leading-[160%] text-zinc-700 font-medium">
                    With expert creators worldwide, Creative X Wiz delivers
                    thousands of hours of original music in over 100 styles for
                    films, television, streaming, gaming, and digital platforms.
                </p>
            </div>
        </div>

        <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
            <div class="w-1/5">
                <div class="w-full aspect-square rounded md:px-1 lg:px-2 xl:px-6">
                    <img
                        src="/assets/img/page-images/home/Dubbing.avif"
                        alt="img"
                        class="w-full filter invert" />
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-1.5">
                <h4 class="text-base uppercase font-bold text-zinc-900">
                    DUBBING
                </h4>
                <p class="text-sm leading-[160%] text-zinc-700 font-medium">
                    From composition through arranging, recording, mixing, and
                    mastering, our wide-ranging expertise and skilled music creators
                    bring global sound to local audiences. Think theatrical, OTT,
                    episodic, and more.
                </p>
            </div>
        </div>

        <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
            <div class="w-1/5">
                <div class="w-full aspect-square rounded md:px-1 lg:px-2 xl:px-6">
                    <img
                        src="/assets/img/page-images/home/Accessibility.avif"
                        alt="img"
                        class="w-full filter invert" />
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-1.5">
                <h4 class="text-base uppercase font-bold text-zinc-900">
                    ACCESSIBILITY
                </h4>
                <p class="text-sm leading-[160%] text-zinc-700 font-medium">
                    Our captioning of music, adaptive soundscapes, and descriptive
                    audio ensure broadcasters deliver accessible technologies to all
                    listeners.
                </p>
            </div>
        </div>

        <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
            <div class="w-1/5">
                <div class="w-full aspect-square rounded md:px-1 lg:px-2 xl:px-6">
                    <img
                        src="/assets/img/page-images/home/Media.avif"
                        alt="img"
                        class="w-full filter invert" />
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-1.5">
                <h4 class="text-base uppercase font-bold text-zinc-900">
                    MEDIA SERVICES
                </h4>
                <p class="text-sm leading-[160%] text-zinc-700 font-medium">
                    From cinematic soundtracks to episodic themes, we deliver
                    everything needed to create, refine, quality-check, and package
                    your music – all through one point of distribution for our
                    complete services.
                </p>
            </div>
        </div>

        <div class="flex items-start reveal gap-5 lg:gap-8 w-full">
            <div class="w-1/5">
                <div class="w-full aspect-square rounded md:px-1 lg:px-2 xl:px-6">
                    <img
                        src="/assets/img/page-images/home/Post-Production.avif"
                        alt="img"
                        class="w-full filter invert" />
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-1.5">
                <h4 class="text-base uppercase font-bold text-zinc-900">
                    CREATIVE POST PRODUCTION
                </h4>
                <p class="text-sm leading-[160%] text-zinc-700 font-medium">
                    Our post-production services bring together a diverse roster of
                    trusted and creative talent, relied on by the world’s leading
                    music and entertainment companies. With cutting-edge studios,
                    personalized mixing rooms, and expert engineers, we drive a
                    seamless end-to-end process 24/7.
                </p>
            </div>
        </div>
    </div>
</div>

<div
    class="w-full container-fluid flex flex-col relative items-center gap-14 justify-center md:items-start py-[80px] md:py-[120px]">
    <div
        class="flex w-full flex-col gap-5 md:gap-8 md:flex items-center justify-center">
        <h4
            class="text-zinc-900 text-2xl font-bold md:text-4xl lg:text-6xl 2xl:text-7xl lg:w-[80%] md:w-[70%] 2xl:w-2/3 md:text-center">
            Trust a company that can be your creative partner to deliver.
        </h4>

        <p class="text-zinc-700 text-xs font-medium md:text-2xl lg:text-xl">
            Supply chain with speed and simplicity
        </p>

        <div class="w-full lg:px-32 2xl:px-36">
            <div class="w-full grid grid-cols-3">
                <div
                    class="col-span-1 aspect-square border border-r-0 border-zinc-700"></div>
                <div
                    class="col-span-1 aspect-square border border-r-0 border-zinc-700 flex justify-center items-center">
                    <div class="h-2/3 aspect-square rounded-full">
                        <img
                            src="/assets/img/page-images/home/prime.avif"
                            alt="img"
                            class="w-full" />
                    </div>
                </div>
                <div
                    class="col-span-1 aspect-square border border-zinc-900"></div>
            </div>
        </div>
    </div>

    <div
        class="w-full flex flex-col gap-5 md:gap-8 md:flex items-center justify-center">
        <h4
            class="text-zinc-900 text-2xl font-bold md:text-4xl lg:w-[80%] md:w-[70%] 2xl:w-2/3 md:text-center">
            Your trusted partner in global storytelling
        </h4>

        <div class="w-full lg:px-28 2xl:px-36">
            <div class="w-full grid grid-cols-3 md:grid-cols-4">
                <div
                    class="col-span-1 aspect-square border flex items-center justify-center border-r-0 border-b-0 border-zinc-700">
                    <img
                        src="/assets/img/page-images/home/WBC.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>

                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-r-0 border-b-0 border-zinc-700">
                    <img
                        src="/assets/img/page-images/home/Paramount_Pictures_Corporation_(White).avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>

                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-zinc-700 border-b-0 md:border-r-0">
                    <img
                        src="/assets/img/page-images/home/NBCU.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>

                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-r-0 border-b-0 border-zinc-700 md:border-r md:border-b">
                    <img
                        src="/assets/img/page-images/home/riot.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>

                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-r-0 border-zinc-700">
                    <img
                        src="/assets/img/page-images/home/MATTEL19_LOGO_WHITE.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>
                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-zinc-700 md:border-r-0">
                    <img
                        src="/assets/img/page-images/home/Amazon-Studios.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>
                <div
                    class="col-span-1 aspect-square flex items-center justify-center border border-zinc-700">
                    <img
                        src="/assets/img/page-images/home/BBC.avif"
                        alt="img"
                        class="w-[80%] filter invert" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection