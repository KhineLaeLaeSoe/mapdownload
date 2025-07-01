@extends('layouts.app')
@section('title', 'Home Page')
  @push('meta')
    <meta name="keyword" content="Map download">
    <meta name="description" content="yangon map download">
@endpush
    
    
    <main class="main relative">
      <!-- Hero section -->
      <section
        id="home"
        class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]"
      >
        <div class="container">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                  class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight"
                >
                  Register to Download Maps and Buy Maps
                </h1>

                <p
                  class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal"
                >
                 Design Printing Service Co.,Ltd ကို ၁၉၉၅ ခုနှစ်မှာစတင်ဖွဲ့စည်းခဲ့ပြီး ၁၉၉၆ ခုနှစ်မှာတော့ ရန်ကုန်မြို့၏ အထင်ကရမြေပုံ ဖြစ်သည့် “ရန်ကုန်လမ်းညွန်မြေပုံ” ကို ထုတ်ဝေနိုင်ခဲ့ပါတယ်။ ဒီနေ့အချိန်အထိ Geographical Information System (GIS) နည်းပညာနှင့် Data warehouse များအသုံးပြုပြီး တိုင်းနှင့်ပြည်နယ်မြေပုံများ၊ ၂၀၂၂ ခရိုင်မြေပုံများ၊ မြို့နယ်အကွက်ချမြေပုံများကိုလည်း ဆက်လက်ရေးဆွဲထုတ်ဝေလျှက်ရှိပြီး UNESCO, American Embassy, India Embassy, ESRI, TomTom, HERE, GrabTaxi နှင့် အစိုးရဌာနများနှင့် လက်တွဲလုပ်ဆောင်ခဲ့ပြီး ယုံကြည်မှုရရှိထားသော မြန်မာနိုင်ငံ၏ မြေပုံနှင့် GIS ကုမ္ပဏီတစ်ခုလည်းဖြစ်ပါတယ်။
                </p>

                <ul
                  class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5"
                >
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                      role="button"
                      >Get Started</a
                    >
                  </li>

                  <li>
                    <a
                      href="javascript:boid(0)"
                      class="video-popup flex items-center gap-4 rounded-md bg-primary-color/[0.15] px-5 py-3 text-base font-medium text-primary-color hover:bg-primary-color hover:text-primary md:px-7 md:py-[14px]"
                      role="button"
                      ><i class="lni lni-play text-lg/none"></i> Watch Intro</a
                    >
                  </li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About section -->
      <section id="about" class="section-area">
        <div class="container">
          <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
            <div class="w-full">
              <figure class="scroll-revealed max-w-[480px] mx-auto">
                <img
                  src="./assets/img/Aboutimg.jpg"
                  alt="About image"
                  class="rounded-xl"
                />
              </figure>
            </div>

            <div class="w-full">
              <div class="scroll-revealed">
                <h6 class="mb-2 block text-lg font-semibold text-primary">
                  About Us
                </h6>
                <h2 class="mb-6">
                  Our team comes with the experience and knowledge
                </h2>
              </div>

              <div class="tabs scroll-revealed">
                <nav
                  class="tabs-nav flex flex-wrap gap-4 my-8"
                  role="tablist"
                  aria-label="About us tabs"
                >
                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-profile"
                    id="tabs-list-profile"
                    role="tab"
                    aria-controls="tabs-panel-profile"
                  >
                    Our Profile
                  </button>
                     
                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-vision"
                    id="tabs-list-vision"
                    role="tab"
                    aria-controls="tabs-panel-vision"
>
                    Our Vision
                  </button>

                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-history"
                    id="tabs-list-history"
                    role="tab"
                    aria-controls="tabs-panel-history"
                  >
                    Our History
                  </button>
                </nav>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-profile"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-profile"
                >
                  <p>
                    ၁၉၉၄ ခုနှစ် မတ်လတွင် Design Printing Service Co.,Ltd ကို စတင် တည်ထောင်ခဲ့သည်။မြန်မာနိုင်ငံသားပိုင်ကုမ္ပဏီတစ်ခုဖြစ်သည်။
                    အမြဲတမ်းဝန်ထမ်း အင်အားစုစုပေါင်း ၅၄ဦးဖြင့် လုပ်ငန်းလည်ပတ်လျက်ရှိပါသည်။ 
                  </p>
                  
                </div>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-vision"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-vision"
                >
                  <p>
                    DPS ၏ "Your Best Guide In Town" ဟူသော ဆောင်ပုဒ်နှင့်အညီ ပြည်သူလူထုအတွင်း လမ်းညွှန်မြေပုံများကို ကျယ်ကျယ်ပြန့်ပြန့် 
                    အသုံးပြုနိုင်ရန်နှင့် ကမ္ဘာလှည့်ခရီးသွားလုပ်ငန်းတိုးတက်မှုကို တစ်ဖက်တစ်လမ်းမှလည်း အထောက်အကူပြုနိုင်ရန် ရည်ရွယ်ပါသည်။အကျိုးအမြတ်
                    ကို အဓိကမထားဘဲ နိုင်ငံတော်အတွက် "လမ်းညွှန်မြေပုံ လိုအပ်ချက်" ဟူသော ကွက်လပ် တစ်နေရာကို DPS မှ အစွမ်းကုန်ဖြည့်ဆည်းပေးလျက်ရှိနေပါသည်။
                  </p>
                </div>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-history"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-history"
                >
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, look like
                    readable English.
                  </p>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have in some form, by injected
                    humour.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services section -->
      <section id="services" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Services
            </h6>
            <h2 class="mb-6">Our Services</h2>
            <p>
              DPS Company မှ ဝန်ဆောင်မှုပေးလျက်ရှိသော လုပ်ငန်းများ
            </p>
          </div>

          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-capsule"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    GIS Maps
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-tailwindcss"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Online GPS Tracking System
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-gift"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Tourist Maps
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-layout"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                   Map Plotting Services
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-layers"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Printing Services
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-grid-alt"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Yangon Map Book
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Pricing section -->
      <section id="pricing" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Pricing
            </h6>
            <h2 class="mb-6">Pricing & Plans</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title"
                  >
                    Starter
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >0<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    >Start Free Trial</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary-color bg-primary rounded-md py-2 px-8 pricing-title"
                  >
                    Exclusive
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >99<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 hover:text-primary-color focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 focus:text-primary-color"
                    >Purchase Now</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title"
                  >
                    Premium
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >150<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    >Purchase Now</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonials section -->
      <section id="testimonials" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Client Reviews
            </h6>
            <h2 class="mb-6">Our Testimonials</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div
            class="swiper testimonial-carousel common-carousel scroll-revealed"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-4.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Ralf Nacht
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Entrepreneur
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-5.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Sebastian Toft
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Developer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-6.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Bao Shen
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        UI/UX Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-7.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Emanuel Velzeboer
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Graphics Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>

            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <i class="lni lni-arrow-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="lni lni-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Clients section -->
      <section id="clients" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Clients
            </h6>
            <h2 class="mb-6">Our Awesome Clients</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="">
            <div class="row">
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/airbnb.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/coca-cola.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/facebook.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/mandiri.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/shopware.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/spotify.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/tunnel-id.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/walmart.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact section -->
      <section id="contact" class="section-area">
        <div class="container">
          <div class="row">
            <div class="col-12 xl:col-4">
              <div class="row">
                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-phone w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Contact</h4>
                      <p class="m-0">(+95-9) 774 204020,(+95-9) 775 204020</p>
                      <p class="m-0">dpsmap@gmail.com</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-map-marker w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Address</h4>
                      <p class="m-0">Office : Rm:307, Yae Kyaw Complex, Yae Kyaw Road, Pazundaung Township, Yangon</p>
                      <p class="m-0">Myanmar (Burma)</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-alarm-clock w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Schedule</h4>
                      <p class="m-0">24 Hours / 7 Days Open</p>
                      <p class="m-0">Office time: 9:00 AM - 5:00 PM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 xl:col-8">
              <div
                class="scroll-revealed bg-body-light-1 dark:bg-primary-dark-2 rounded-xl py-8 sm:py-12 px-6 sm:px-10 z-10 relative shadow-card-1 hover:shadow-lg"
              >
                <div class="text-center max-w-[550px] mx-auto mb-12">
                  <h6 class="mb-2 block text-lg font-semibold text-primary">
                    Get in Touch
                  </h6>
                  <h2 class="mb-3">Ready to Get Started</h2>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    quiblanditiis praesentium
                  </p>
                </div>

                <form action="#" method="POST" class="flex flex-col gap-6">
                  <div class="row">
                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="name"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Name"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="email"
                        name="email"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Email"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="phone"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Phone"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="subject"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Subject"
                        required
                      />
                    </div>

                    <div class="col-12">
                      <textarea
                        name="message"
                        rows="5"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Type your message"
                        required
                      ></textarea>
                    </div>

                    <div class="col-12">
                      <div class="w-full text-center">
                        <button
                          type="submit"
                          class="inline-block px-5 py-3 rounded-md text-base bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10"
                        >
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map section -->
      <section id="map" class="w-full h-[500px] overflow-hidden -mt-[12rem]">
        <object
          data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.0094028113572!2d98.67188956289421!3d3.583155328672593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1723787393945!5m2!1sid!2sid"
          class="border-0 w-full h-full"
        ></object>
      </section>
    </main>