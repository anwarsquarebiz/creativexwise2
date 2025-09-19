@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div id="main" class="h-fit w-full relative overflow-x-hidden">
  <div class="container-fluid w-full h-screen text-center relative z-10">

   <div
        class="absolute opacity-40 z-0 w-full inset-0 filter invert"
        style="background-image: url('/assets/img/pattern/pattern_10.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"

        >
    </div>

    <div id="opacity-fixed" class="absolute h-screen w-full flex items-center">
      <h4 class="text-4xl md:text-6xl lg:text-7xl 2xl:text-9xl text-start text-zinc-900 font-extrabold">
        Location & Contact
      </h4>
    </div>
  </div>

  <div id="second-section"
    class="container-fluid w-full flex gap-20 flex-col relative justify-center py-[80px] md:py-[120px]">
    <div class="w-full reveal flex justify-center bg-zinc-300 rounded items-center h-[3px]">
      <div class="h-full w-1/3 bg-zinc-900 rounded"></div>
    </div>

    <div class="w-full flex flex-col gap-8">
      <h4 class="text-zinc-900 text-2xl font-bold reveal">
        Global Contacts
      </h4>

      <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
        <!-- Registered Address -->
        <div class="flex flex-col reveal w-full">
          <div class="w-full flex gap-3">
            <h4 class="text-zinc-900 text-xxs w-1/3 md:text-sm lg:md:text-base font-bold">
              Registered Address
            </h4>
            <div class="flex flex-col gap-1 text-xxs md:text-sm lg:md:text-base text-zinc-700 flex-1 font-medium">
              <p>1117/C-Wing, Oshiwara Adarsh Building No. 1, Near Oshiwara Metro Station, Jogeshwari (W), Mumbai - 400102.</p>
            </div>
          </div>
        </div>

        <!-- Registration details. -->
        <div class="flex flex-col reveal w-full">
          <div class="w-full flex gap-3">
            <h4 class="text-zinc-900 text-xxs md:text-sm lg:md:text-base w-1/3 font-bold">
              Registration details. :
            </h4>
            <div class="flex flex-col gap-1 text-xxs md:text-sm lg:md:text-base text-zinc-700 flex-1 font-medium">
              <p>GST No.</p>
              <a href="#" class="">27AAHCC8489M1ZR</a>
            </div>
            <div class="flex flex-col gap-1 text-xxs md:text-sm lg:md:text-base text-zinc-700 flex-1 font-medium">
              <p>CIN No.</p>
              <a href="#" class="">U93090MH2018PTC316815</a>
            </div>
          </div>
        </div>

        <!-- Email ID -->
        <div class="flex flex-col reveal w-full">
          <div class="w-full flex gap-3">
            <h4 class="text-zinc-900 text-xxs md:text-sm lg:md:text-base w-1/3 font-bold">
              Email ID :
            </h4>
            <div class="flex flex-col gap-1 text-xxs md:text-sm lg:md:text-base text-zinc-700 flex-1 font-medium">
              <a href="mailto:info@creativexwise.com" class="">info@creativexwise.com</a>
            </div>
          </div>
        </div>
        

        <!-- Phone Number -->
        <div class="flex flex-col reveal w-full">
          <div class="w-full flex gap-3">
            <h4 class="text-zinc-900 text-xxs md:text-sm lg:md:text-base w-1/3 font-bold">
              Phone Number :
            </h4>
            <div class="flex flex-col gap-1 text-xxs md:text-sm lg:md:text-base text-zinc-700 flex-1 font-medium">
              <a href="tel:+917503590327" class="">+917503590327</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="w-full flex flex-col gap-8">
      <h4 class="text-zinc-900 text-2xl font-bold reveal">Contact Form</h4>

      <section class="w-full rounded">
        <form id="contactForm" class="grid grid-cols-1 md:grid-cols-2 gap-6 text-zinc-900">
          <!-- First Name -->
          <div class="flex flex-col">
            <label for="firstName" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              First Name<span class="text-red-500">*</span>
            </label>
            <input id="firstName" type="text" name="firstName" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              First Name is required.
            </p>
          </div>

          <!-- Last Name -->
          <div class="flex flex-col">
            <label for="lastName" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Last Name<span class="text-red-500">*</span>
            </label>
            <input id="lastName" type="text" name="lastName" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Last Name is required.
            </p>
          </div>

          <!-- Email -->
          <div class="flex flex-col">
            <label for="email" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Email Address<span class="text-red-500">*</span>
            </label>
            <input id="email" type="email" name="email" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Valid email is required.
            </p>
          </div>

          <!-- Phone -->
          <div class="flex flex-col">
            <label for="phone" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Phone Number<span class="text-red-500">*</span>
            </label>
            <input id="phone" type="text" name="phone" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Phone Number is required.
            </p>
          </div>

          <!-- Company -->
          <div class="flex flex-col">
            <label for="company" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Company<span class="text-red-500">*</span>
            </label>
            <input id="company" type="text" name="company" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Company is required.
            </p>
          </div>

          <!-- Job Title -->
          <div class="flex flex-col">
            <label for="jobTitle" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Job Title<span class="text-red-500">*</span>
            </label>
            <input id="jobTitle" type="text" name="jobTitle" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Job Title is required.
            </p>
          </div>

          <!-- Country -->
          <div class="flex flex-col">
            <label for="country" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Country of Origin<span class="text-red-500">*</span>
            </label>
            <input id="country" type="text" name="country" required
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 text-zinc-900" />
            <p class="hidden text-red-600 text-sm mt-1">
              Country is required.
            </p>
          </div>

          <!-- Project Details (full width) -->
          <div class="flex flex-col md:col-span-2">
            <label for="project" class="text-sm lg:text-lg 2xl:text-base font-semibold mb-2">
              Tell Us About Your Project
            </label>
            <textarea id="project" name="project"
              class="border-b border-zinc-400 bg-transparent focus:outline-none focus:border-zinc-900 py-1 resize-none text-zinc-900"></textarea>
          </div>

          <!-- Checkboxes in same row -->
          <div class="flex flex-col md:flex-row md:col-span-2 gap-4 text-sm">
            <label class="flex items-start gap-2 flex lg:text-lg 2xl:text-base-1">
              <input type="checkbox" name="privacyPolicy" required class="mt-1" />
              <span>
                By clicking submit, you agree with the storing and handling
                of your data by this website in accordance with our
                <a href="{{ route('policies.privacy') }}" class="text-blue-600 underline">Privacy Policy</a>.
              </span>
            </label>

            <label class="flex items-start gap-2 flex lg:text-lg 2xl:text-base-1">
              <input type="checkbox" name="consent" class="mt-1" />
              <span>
                I consent to the given information being used and stored by
                {{ config('app.name') }} to contact me about future opportunities.
              </span>
            </label>
          </div>

          <!-- Submit Button -->
          <div class="md:col-span-2">
            <button type="submit"
              class="bg-zinc-900 text-zinc-100 px-4 md:px-6 py-1.5 md:py-2 text-sm font-medium rounded">
              Submit
            </button>
          </div>
        </form>
      </section>
    </div>
  </div>

</div>

<script>
  const navbar = document.getElementById("navbar");
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobileMenu");
  let lastScroll = 0;
  let sidebarOpen = false;

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

  let mm = gsap.matchMedia();

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

  const form = document.getElementById("contactForm");

  form.addEventListener("submit", function(e) {
    let valid = true;

    form
      .querySelectorAll("input[required], textarea[required]")
      .forEach((input) => {
        const error = input.nextElementSibling;
        if (input.value.trim() === "") {
          error.classList.remove("hidden");
          valid = false;
        } else {
          error.classList.add("hidden");
        }

        if (input.type === "email") {
          const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!regex.test(input.value)) {
            error.classList.remove("hidden");
            valid = false;
          }
        }
      });

    if (!valid) e.preventDefault();
  });

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