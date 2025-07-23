
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <title>@yield('title', 'My Laravel App')</title>
    @stack('meta')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Copyright" content="Mapdownload" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="application-name" content="Mapdownload" />
   
    <meta name="keywords" content="company" />
    <meta
      name="twitter:title"
      content="Mapdownload | Tailwind CSS Company Landing Page"
    />
    <meta
      name="twitter:description"
      content="Tailwind CSS Company Landing Page Template by Ranyeh."
    />
    <meta name="twitter:image" content="./assets/images/mapdownload.png" />
    <meta
      content="Mapdownload | Tailwind CSS Company Landing Page"
      property="og:title"
    />
    <meta content="Inazuma" property="og:site_name" />
    <meta
      content="Tailwind CSS Company Landing Page Template by Ranyeh."
      property="og:description"
    />
    <meta content="./assets/img/mapdownload.png" property="og:image" />
    {{-- <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" /> --}}
    <meta content="website" property="og:type" />

    <meta name="msapplication-TileColor" content="#3d63dd" />
    <meta
      name="msapplication-TileImage"
      content="./assets/images/mapdowload.png"
    />
    <meta name="theme-color" content="#3d63dd" />

    <!-- Page title -->
    <title>Register  | Tailwind CSS Company Landing Page</title>

    <!-- Canonical -->
    <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

    
    <!-- CSS Plugins -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <link rel="stylesheet" href="./assets/css/main.css" />
    @stack('css')
  </head>
  <body>
   <!-- Page loading -->
<div
  class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
  role="status"
  aria-live="polite"
  aria-atomic="true"
  aria-label="Loading..."
>
  <div class="w-60 lg:w-56 max-w-full px-5 flex items-center justify-center">
    <img src="{{ asset('assets/images/MapownloadLogo.png') }}"
         alt="Loading Logo"
         class="h-24 w-24 rounded-full animate-spin">
  </div>
</div>
      

    <!-- Navbar -->
    <header
      class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-transparent"
      role="banner"
      aria-label="Navigation bar"
    >
      <div class="container">
        <div
          class="ic-navbar-container relative -mx-5 flex items-center justify-between"
        >
          <div class="w-60 lg:w-56 max-w-full px-5">
  <a href="/">
    <img src="{{ asset('assets/images/MD Logo.png') }}" alt="Map Download Logo"
         class="h-20 w-20 rounded-full object-cover shadow-lg border-2 border-white">
  </a>
</div>
          <div class="flex w-full items-center justify-between px-5">
            <div>
              <button
                type="button"
                class="ic-navbar-toggler absolute right-4 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
                data-web-toggle="navbar-collapse"
                data-web-target="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation menu"
              >
                <i class="lni lni-menu"></i>
              </button>

              <nav
                id="navbarMenu"
              NavbarBrandIcon  class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
              >
                <ul
                  class="block lg:flex"
                  role="menu"
                  aria-label="Navigation menu"
                >
                  <li class="group relative">
                    <a
                      href="#home"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 active"
                      role="menuitem"
                      >Home</a
                    >
                  </li>

                  <li class="group relative">
                    <a
                      href="#services"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Services</a
                    >
                  </li>

               

                  <li class="group relative">
                    <a
                      href="#pricing"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem" >Pricing
                    </a>
                  </li>


                  
                 <li class="group relative">
                    <a href="{{ route('maps.index') }}"
                       class="mx-8 flex py-2 text-base font-medium text-blue-600 group-hover:text-blue-700 dark:text-blue-400 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:group-hover:opacity-70"
                    role="menuitem">Maps
                    </a>
                  </li>

                  <li class="group relative">
                    <a
                      href="#contact"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem">Contact Us
                    </a>
                  </li>
                 

                </ul>
              </nav>
            </div>
            <div class="flex items-center justify-end pr-[52px] lg:pr-0">
              <button
                type="button"
                class="inline-flex items-center text-primary-color text-[24px]/none"
                aria-label="Switch theme"
                data-web-trigger="web-theme"
              ></button>
                <li class="group relative">
                   <a href="{{ route('login') }}"
                    class="mx-8 flex py-2 text-base font-medium text-blue-600 group-hover:text-blue-700 dark:text-blue-400 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:group-hover:opacity-70"
                    role="menuitem">Login
                    </a>
                  </li>

                   <li class="group relative">
                     <a href="{{ route('register') }}"
                    class="mx-8 flex py-2 text-base font-medium text-blue-600 group-hover:text-blue-700 dark:text-blue-400 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:group-hover:opacity-70"
                    role="menuitem">Register
                    </a>
                  </li>
       
            </div>
          </div>
        </div>
      </div>
    </header>
