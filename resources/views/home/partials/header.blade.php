{{-- header.blade.php --}}
{{-- Navbar Start Here --}}
<header class="navbarBlur-lg sticky top-0 z-50 shadow-xl">
    <nav class="navbarBlur-sm  mx-auto flex max-w-[1300px] p-1 lg:px-2 ">
        <div class="flex gap-14 items-center justify-between w-full">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">cryptoclub</span>
                    <img class="h-auto w-[180px]" src="{{asset('images/logo.png')}}" alt="logo">
                </a>
            </div>
            <div id="desktopMenu" class="hidden lg:flex lg:gap-x-1 ml-auto">
                <!-- Home Link -->
                <a href="#home" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">Home</a>
                <!-- about-us Link -->
                <a href="#about-us" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">AboutUs</a>
                <!-- features Link -->
                <a href="#features" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">Features</a>
                {{-- our vision link --}}
                <a href="#our-vision" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">OurVision</a>
                <!-- Testimonals Link -->
                <a href="#testimonials" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">Testimonials</a>
                {{-- FAQs Link --}}
                <a href="#faqs" class="px-2 py-1 text-[16px] font-semibold duration-300 text-white  navlink ">FAQs</a>
                {{-- Login btn --}}
            </div>
            <a href="" class="px-5 py-2 hidden lg:flex rounded-lg text-[18px] font-semibold duration-300 text-white bg-brightMagenta hover:bg-opacity-80 ">Get Started</a>
        </div>
        <div class="flex flex-col justify-center ml-3">
            <input type="checkbox" name="light-switch" class="sr-only" id="light-switch" />
            <label class="relative cursor-pointer p-2" for="light-switch">
                <svg class="dark:hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-white" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
                    <path class="fill-white" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
                </svg>
                <svg class="hidden dark:block" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-white" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
                    <path class="fill-white" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
                </svg>
                <span class="sr-only">Switch to light / dark version</span>
            </label>
        </div>
        <!-- Hamburger Menu (Mobile) -->
        <div class="flex lg:hidden">
            <button id="menuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                <span class="sr-only">open menu</span>
                <svg class="size-8" fill="#FFFFFF" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

    </nav>

    <!-- Mobile menu backdrop -->
    <div id="backdrop" class="hidden fixed inset-0 z-10 bg-black bg-opacity-30 transition-opacity duration-500 ease-in-out"></div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class=" fixed inset-0 z-20 transform -translate-x-full transition-all duration-500 ease-in-out" role="dialog" aria-modal="true">
        <div class="fixed inset-y-0  sidebar  left-0 z-20 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">cryptoclub</span>
                    <img class="h-auto w-[90px]" src="{{asset('images/logo.png')}}" alt="logo">
                </a>
                <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-white ">
                    <span class="sr-only">{{ __('header.close') }}</span>
                    <svg class="size-10 " fill="#FFFFFF" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="w-full border-b border-white mt-5"></div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <!-- Navigation Links -->
                    <div class="space-y-2 py-6">
                        <!-- Home Link -->
                        <a href="{{ route('home') }}#home" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">Home</a>
                        <!-- About Us Link -->
                        <a href="{{ route('home') }}#about-us" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">About Us</a>
                        <!-- Features Link -->
                        <a href="{{ route('home') }}#features" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">Features</a>
                        <!-- Our Vision Link -->
                        <a href="{{ route('home') }}#our-vision" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">Our Vision</a>
                        <!-- Testimonials Link -->
                        <a href="{{ route('home') }}#testimonials" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">Testimonials</a>
                        <!-- FAQs Link -->
                        <a href="{{ route('home') }}#faqs" onclick="closeMenu()" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white border border-transparent hover:border-white duration-500">FAQs</a>
                    </div>
            
                    <a href="" class="px-5 py-2 rounded-lg text-[18px] font-semibold duration-300 text-white bg-brightMagenta hover:bg-opacity-80">Get Started</a>
                </div>
            </div>
            
            
        </div>
    </div>

</header>

<script>
    const closeMenu = () => {
        mobileMenu.classList.add("-translate-x-full");
        backdrop.classList.add("hidden");
        setTimeout(() => {
            mobileMenu.classList.add("hidden");
        }, 500); // Match the duration of the animation
    };

</script>
