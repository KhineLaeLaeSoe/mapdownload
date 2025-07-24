@extends('layouts.temp')
@section('title', 'Home Page')
  {{-- @push('meta')
    <meta name="keyword" content="Map download">
    <meta name="description" content="yangon map download">
@endpush --}}

  
    
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
                {{-- <a href="{{ url('/districts') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
   Districts Maps
</a> --}}
        
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
                  src="{{ asset('./assets/images/mapplotting.jpg ')}}"
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
                     Design Printing Service Co.,Ltd ကို ၁၉၉၅ ခုနှစ်မှာစတင်ဖွဲ့စည်းခဲ့ပြီး ၁၉၉၆ ခုနှစ်မှာတော့ 
                     ရန်ကုန်မြို့၏ အထင်ကရမြေပုံ ဖြစ်သည့် “ရန်ကုန်လမ်းညွန်မြေပုံ” ကို ထုတ်ဝေနိုင်ခဲ့ပါတယ်။
                  </p>
                  <p>
                    ဒီနေ့အချိန်အထိ 
                     Geographical Information System (GIS) နည်းပညာနှင့် Data warehouse များအသုံးပြုပြီး 
                     တိုင်းနှင့်ပြည်နယ်မြေပုံများ၊ ၂၀၂၂ ခရိုင်မြေပုံများ၊ မြို့နယ်အကွက်ချမြေပုံများကိုလည်း ဆက်လက်ရေးဆွဲထုတ်ဝေလျှက်ရှိပြီး 
                     UNESCO, American Embassy, India Embassy, ESRI, TomTom, HERE, GrabTaxi နှင့် အစိုးရဌာနများနှင့်
                      လက်တွဲလုပ်ဆောင်ခဲ့ပြီး ယုံကြည်မှုရရှိထားသော မြန်မာနိုင်ငံ၏ မြေပုံနှင့် GIS ကုမ္ပဏီတစ်ခုလည်းဖြစ်ပါတယ်။
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services section -->
      <section id="services" class="section-area">
     <style>
body {
  font-family: 'Segoe UI', sans-serif;
  background: #f8fafc;
  margin: 0;
  color: #333;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  padding: 2rem 0;
}

.section-header {
  text-align: center;
  margin-bottom: 3rem;
}

.section-header h6 {
  color: #6b7280;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.section-header h2 {
  font-size: 2rem;
  margin-top: 0.5rem;
  color: #1f2937;
}

/* Grid */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

/* Card */
.service-card {
  background: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
}

.service-card:hover {
  transform: translateY(-5px);
}

.service-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 1rem;
}

.service-card h3 {
  margin: 0.5rem 0;
  font-size: 1.25rem;
  color: #111827;
}

.service-card p {
  font-size: 0.95rem;
  color: #4b5563;
  line-height: 1.5;
}

.service-card button {
  margin-top: 1rem;
  align-self: start;
  background-color: #2563eb;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  font-weight: 500;
  cursor: pointer;
  transition: background 0.3s;
}

.service-card button:hover {
  background-color: #1e40af;
}

/* Read more toggle */
.more {
  display: none;
}
</style>
</head>
<body>

<section id="services" class="services-section">
  <div class="container">
    <div class="section-header">
      <h5 class="mb-6">Our Services</h5>
      <h2>Explore Our Services</h2>
    </div>

    <div class="services-grid">

      <!-- GIS map-->
      <div class="service-card">
      
        <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
        <h3> GIS Maps</h3>
        <p>
         Google Map နှင့် Digital Map များ ခေတ်၌ လုပ်ငန်းများတွင် မြေပုံအသုံးပြုမှုများလည်း များစွာပြောင်းလဲသွားပြီဖြစ်သည်။
          <span class="dots">...</span>
          <span class="more">  ပစ္စည်းထုတ်လုပ်ဖြန့်ဖြူးသူများသည် ၎င်းတို့ရောင်းကုန်ပစ္စည်းများ တင်ရမည့်ဆိုင်များကို မြေပုံပေါ်သို့တင်ပြီး ၎င်းဆိုင်နေရာကို Click 
                    နှိပ်ရုံဖြင့် ဆိုင်အမည်၊ ဖုန်းနံပါတ် ၊ဆိုင်တွင်တင်သော ပစ္စည်းများ မိမိ ပစ္စည်းကို ဖြန့်ပေးသည့် နှုန်းများအပြင် ဆိုင် ဓာတ်ပုံကိုပါ တွဲ၍
                    ကြည့်နိုင်ပြီး ရောင်းအားအကောင်းဆုံးမှ အနည်းဆူံးကို Sorting စီပြီး အရောင်ခွဲကာ ခြုံငုံသုံးသပ်မှုများ ပြုလုပ်နိုင်ပြီဖြစ်သည်။
                    ၎င်း ဒေတာ များကိုပင် မိမိလုပ်ငန်းအတွင်း ဌာန အသီးသီး Website မှ တစ်ဆင့်ရှယ်သုံးရန်ဆောင်ရွက်နိုင်ပြီဖြစ်သည်။DPS သည်
                    လုပ်ငန်းအသီးသီး၏ Digital Map လိုအပ်ချက်များအတွက် GPS Camera များ၊ 360 Camera များ၊Done များ၊ဂြိုလ်တုပုံများအပြင်
                    OpenStreet Map၊  Google Map တို့နှင့် မိမိကိုယ်ပိုင် Data များကို တွဲဖက်အသုံးပြုနိုင်အောင်ဆောင်ရွက်ပေးလျက်ရှိပါသည်။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

      <!-- GPS tracking -->
      <div class="service-card">
        <img src="{{asset('assets/images/avatar/GPStracking.jpg')}}" alt="gps tracking">
        <h3>Online GPS Tracking System</h3>
        <p>
          ယာဉ်၏ တည်နေရာနှင့် သွားရာလမ်းကြောင်းကို အချိန်နှင့် တစ်ပြေးညီ ကြည့်ရှုနိုင်ခြင်း၊

GPS တွင် Relay စနစ်ပါခြင်းကြောင့် ကား၏ လျှပ်စစ် Power စနစ်၊ Fuel စနစ်တို့ကို ဖြတ်တောက်နိုင်ခြင်း။

Internet လိုင်း ပိချိန်၌ ပြတ်တောက်ထားမှုကို Internet ပြန် ရချိန်တွင် Data ကို Server ပေါ်သို့ပြန်တင်ပေးခြင်း။
          <span class="dots">...</span>
          <span class="more"> စက်ထဲမှ SIM Card ကို ဖုန်းခေါ်လိုက်ရုံဖြင့် ရောက်ရှိနေသာ Location SMS os Auto Reply

ວຽກ Total Mileage (km), Data p (Internet) Online osog Download လုပ်ယူနိုင်ခြင်း၊

Real Time on MPT, Telenor, SIM Card များကို အသုံးပြုရခြင်း။

ယာဉ်ပေါ်မှ အသံများကိုပြန်၍ကြားနိုင်သော Voice Service ပါဝင်ခြင်း။

 6 Volt Power Bank ဖြင့် ချိတ်ဆက် အသုံးပြုနိုင်ခြင်း။

Speed သတ်မှတ်ပေးနိုင်ခြင်း၊ Route သတ်မှတ်ပေးနိုင်ခြင်း။

 Online တွင် Playback ပြန်လည်ကြည့်ရှုနိုင်ခြင်း။

 ACC / SOS နစ်များ ရရှိနိုင်ခြင်း။

Interval Record သတ်မှတ်ပေးနိုင်ခြင်း။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

      <!-- Tourist -->
      <div class="service-card">
        <img src="{{asset('assets/images/avatar/tourismap.jpg')}}" alt="tourist map">
        <h3> Tourist Maps</h3>
        <p>
         အဓိကလုပ်ငန်းမှာ ဟိုတယ်နှင့် ခရီးသွားလာရေး ၀န်ကြီးဌာန၏ လမ်းညွှန်မှုဖြင့် Tourist Guide Map မြေပုံများကို မြန်မာနိုင်ငံသို့ နိုင်ငံခြားသားများ 
                   ၀င်ရောက်မှုပေါ်တွင် အခြေခံလျက် နှစ်စဉ်လေးသိန်းနှစ်သောင်းကျော် ပုံနှိပ်၍ Tourist Industry အတွင်းအခမဲ့ ဖြန့်ချိသော လုပ်ငန်းဖြစ်ပါသည်။ 
          <span class="dots">...</span>
          <span class="more">  Tourist Guide Map (၇) မျိုးပေါင်း- ၃သန်းကျော်ကို ဖြန့်ချိ ပေးနိုင်ခဲ့ပြီ ဖြစ်ပါသည်။ အဆိုပါ မြေပုံများကို ၀န်ကြီးဌာနများနှင့် အစိုးရရုံးများ၊ 
                   မြန်မာနိုင်ငံရှိနိုင်ငံတကာသံရုံးများ၊ နိုင်ငံခြားရှိ မြန်မာသံရုံးများ၊ အပြည်ပြည်ဆိုင်ရာ အဖွဲ့ အစည်းများ၊ လေကြောင်းလိုင်းများ နှင့် ညောင်ဦး) 
                   လေဆိပ်များ နှင့် နှစ်စဉ်ကျင်းပ နေသော နိုင်ငံခြားမှ Travel Showများသို့ ပေးပို့ ၀ငှပေးနေပါသည်။
၁၉၉၈ ခုနှစ်မှ စတင်၍ ရန်ကုန် မြေပုံစာအုပ် (The Map of Yangon-Street Directory)
ကို ရန်ကုန်မြို့တော်စည်ပင်သာယာရေး ကော်မတီနှင့်ပူးပေါင်း၍(၄)ကြိမ်တိုင်တိုင် ထုတ်ဝေဖြန့်ချိနိုင်ခဲ့ပြီးဖြစ်ပါသည်။
၂၀၀၂ခုနှစ်မှစတင်၍ရန်ကုန်မြို့တော်မြေပုံ ကို ပိုမို လွယ်ကူစွာအသုံးပြုနိုင်ရန်အတွက် မြို့နယ် တစ်မြို့ နယ် ချင်းစီအလိုက် သီးသန့်ပုံနှိပ်ထားသော(Township Maps of Yangon) ကို
 ရန်ကုန်မြို့တော် စည်ပင်နှင့် ပူးပေါင်း၍ ထုတ်ဝေဖြန့်ချိနိုင်ခဲ့ပါသည်။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

      <!-- Map Plotting -->
      <div class="service-card">
        <img src="{{asset('assets/images/avatar/printing.jpg')}}" alt="Map Plotting">
        <h3> Map Plotting Services</h3>
        <p>
         လူကြီးမင်းတို့၏ ရုံးခန်း Meeting Room များ တွင် မြေပုံများကို တပ်ဆင်နိုင်ရန် Frame များ နှင့်ပါ လှပသေသပ်စွာ ဆောင်ရွက်ပေးနိုင်ပါ သည်။

          <span class="dots">...</span>
          <span class="more"> အဆိုပါမြေပုံများကို မိမိနှစ်သက်သော မြေပုံ ၊ လိုအပ်သောအရွယ်အစား၊ ကြိုက်နှစ်သက်သည့် Paper အမျိုးမျိုးနှင့် (ဥပမာ - Photo Paper Inkjet Paper Vinyl)p ကြည်လင်ပြတ်သားစွာ Plotting ထုတ်ပေးနိုင်ပါ သည်။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

      <!-- Printing Services -->
      <div class="service-card">
        <img src="{{asset('assets/images/avatar/printing.jpg')}}" alt="Printing Services">
        <h3> Printing Services</h3>
        <p>
          မြေပုံနှင့် တပါတည်း ကြော်ငြာ နိုင်သည့် ကိုယ်ပိုင်Guide Map များ

လက်ကမ်းစာစောင်များကို ပြီးစီးသည် အထိတာပန်ယူဆောင်ရွက်ပေးလျက် ရှိပါသည်။
          <span class="dots">...</span>
          <span class="more"> မြေပုံ ပုံကြမ်းပေးပါက ပုံချောဖြစ်အောင် ရေးဆွဲပေးသည့် ၀န်ဆောင်မှု ကိုလည်း အထူး ပြုလုပ်ပေးလျက်ရှိပါသည်။ လက်ကမ်းစာတေင်များ

(Flyer, Brochures) G (စားပွဲတင်၊ နံရံချိတ်၊ အိတ်ဆောင်)၊

Post Card, New Year Card, Christmas Card Letter Head, Envelope Sticker Silk-Screen Printing-Cotton Banner, Board

အမျိုးမျိုး၊ Sticker အမျိုးမျိုး၊ တီရှပ်များ၊ စပို့ရှပ်များ ပေါ်တွင် ကုမ္ပဏီ Logo ကြော်ငြာတံဆိပ် ရိုက်ခြင်း၊ ကုမ္ပဏီ Logo အမှတ်တံဆိပ်

တီထွင်ရေးဆွဲပေးခြင်း တို့ကိုလည်း ပြုလုပ်ပေးလျက် ရှိပါသည်။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

<!-- Yangon Map Book -->
      <div class="service-card">
        <img src="{{asset('assets/images/avatar/ygnmapbook.jpg')}}" alt="ybnmapbook">
        <h3> Yangon Map Book</h3>
        <p>
          မြေပုံနှင့် တပါတည်း ကြော်ငြာ နိုင်သည့် ကိုယ်ပိုင်Guide Map များ

လက်ကမ်းစာစောင်များကို ပြီးစီးသည် အထိတာပန်ယူဆောင်ရွက်ပေးလျက် ရှိပါသည်။
          <span class="dots">...</span>
          <span class="more"> မြေပုံ ပုံကြမ်းပေးပါက ပုံချောဖြစ်အောင် ရေးဆွဲပေးသည့် ၀န်ဆောင်မှု ကိုလည်း အထူး ပြုလုပ်ပေးလျက်ရှိပါသည်။ လက်ကမ်းစာတေင်များ

(Flyer, Brochures) G (စားပွဲတင်၊ နံရံချိတ်၊ အိတ်ဆောင်)၊

Post Card, New Year Card, Christmas Card Letter Head, Envelope Sticker Silk-Screen Printing-Cotton Banner, Board

အမျိုးမျိုး၊ Sticker အမျိုးမျိုး၊ တီရှပ်များ၊ စပို့ရှပ်များ ပေါ်တွင် ကုမ္ပဏီ Logo ကြော်ငြာတံဆိပ် ရိုက်ခြင်း၊ ကုမ္ပဏီ Logo အမှတ်တံဆိပ်

တီထွင်ရေးဆွဲပေးခြင်း တို့ကိုလည်း ပြုလုပ်ပေးလျက် ရှိပါသည်။</span>
        </p>
        <button onclick="toggleReadMore(this)">Read more</button>
      </div>

    </div>
  </div>
</section>

<script>
function toggleReadMore(btn) {
  const card = btn.closest('.service-card');
  const dots = card.querySelector('.dots');
  const more = card.querySelector('.more');
  
  if (more.style.display === 'inline') {
    more.style.display = 'none';
    dots.style.display = 'inline';
    btn.textContent = 'Read more';
  } else {
    more.style.display = 'inline';
    dots.style.display = 'none';
    btn.textContent = 'Read less';
  }
}
</script>

</body>



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
                    href="{{ url('/maps') }}"
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
            <h2 class="mb-6">Myanmar Region and State Maps</h2>
          </div>
           <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h3 class="mb-2 block text-lg font-semibold text-primary">
            Myanmar Regioin Maps
            </h3>
          </div>
         
          <div class="services-grid">
            
           <div class="service-card">
           
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="Ayeyarwaddy Region">
           <h3> Ayeyarwaddy Region</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="GIS Maps">
           <h3> Bago Region</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3> Yangon  Region</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3> Tanithary Region </h3>
        </div>
      </div><br><br>
       
          <div class="services-grid">
           <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="Ayeyarwaddy Region">
           <h3> Mandalay Region</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="GIS Maps">
           <h3> Sagaing Region</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3>Magway Region</h3>
        </div>
        <br>
      </section>
  <section id="testimonials" class="section-area">
         <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h3 class="mb-2 block text-lg font-semibold text-primary">
            Myanmar State Maps
            </h3>
          </div>
         
          <div class="services-grid">
           <div class="service-card">
           
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="Ayeyarwaddy Region">
           <h3>Chin State</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="GIS Maps">
           <h3> Kachin State</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3> Kayah State</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3> Kayin State </h3>
        </div>
      </div><br><br>
       
          <div class="services-grid">
           <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="Ayeyarwaddy Region">
           <h3> Mon State</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/maps/myanmarrsmap/ayeyarwaddy_m.jpg')}}" alt="GIS Maps">
           <h3>Rakhine State</h3>
        </div>
         <div class="service-card">
             <img src="{{asset('assets/images/avatar/GIS map.jpg')}}" alt="GIS Maps">
           <h3>Shan State </h3>
        </div>
        <br>

 <script>
  function openModal(src) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    modal.style.display = "flex";
    modalImg.src = src;
  }

  function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = "none";
  }
</script>
      
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
                  <h2 class="mb-3">Ready to Get Started</h2>
      
                </div>

                <form action="#" method="POST" class="flex flex-col gap-6">
                 
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
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map section -->
      <section id="map" class="w-full h-[500px] overflow-hidden -mt-[12rem]">
        {{-- <object
          data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.0094028113572!2d98.67188956289421!3d3.583155328672593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1723787393945!5m2!1sid!2sid"
          class="border-0 w-full h-full"
        ></object> --}}

     {{-- myanmar map --}}  
      <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6343723.066219126!2d92.17285189840595!3d21.1997382912887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cbeb3f37b0f0ab%3A0xc168dc5ee2f77217!2sMyanmar%20(Burma)!5e0!3m2!1sen!2smm!4v1721802343000!5m2!1sen!2smm"
  width="100%"
  height="500"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
 </section>
</main>